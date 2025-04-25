<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('polozky');
        Schema::dropIfExists('objednavky');
        Schema::dropIfExists('detaily');
        Schema::dropIfExists('platby');
        Schema::dropIfExists('dopravy');
        Schema::dropIfExists('kosiky');
        Schema::dropIfExists('profily');
        Schema::dropIfExists('obrazky');
        Schema::dropIfExists('parametre');
        Schema::dropIfExists('produkty');
        Schema::dropIfExists('podkategorie');
        Schema::dropIfExists('kategorie');

        Schema::dropIfExists('Item');
        Schema::dropIfExists('Order');
        Schema::dropIfExists('Detail');
        Schema::dropIfExists('Payment');
        Schema::dropIfExists('Delivery');
        Schema::dropIfExists('Cart');
        Schema::dropIfExists('Profile');
        Schema::dropIfExists('Photo');
        Schema::dropIfExists('Parameter');
        Schema::dropIfExists('Product');
        Schema::dropIfExists('Subcategory');
        Schema::dropIfExists('Category');

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
        });

        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('name')->nullable();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subcategory_id')->constrained('subcategories')->onDelete('cascade');
            $table->string('name');
            $table->string('brand');
            $table->decimal('price');
            $table->decimal('discount');
            $table->integer('stock');
            $table->decimal('stars');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
        });

        Schema::create('parameters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('name');
            $table->string('value');
        });

        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->string('url');
        });

        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->string('surname');
            $table->string('phone')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
        });

        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->decimal('price');
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->decimal('price');
        });

        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('delivery_id')->constrained('deliveries')->onDelete('cascade');
            $table->foreignId('payment_id')->constrained('payments')->onDelete('cascade');
            $table->timestamp('time');
            $table->string('status');
            $table->decimal('total');
            $table->text('note')->nullable();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->constrained('profiles')->onDelete('cascade');
            $table->foreignId('detail_id')->constrained('details')->onDelete('cascade');
        });

        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->integer('quantity');
        });

        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->integer('quantity');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carts');
        Schema::dropIfExists('items');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('details');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('deliveries');
        Schema::dropIfExists('profiles');
        Schema::dropIfExists('images');
        Schema::dropIfExists('parameters');
        Schema::dropIfExists('products');
        Schema::dropIfExists('subcategories');
        Schema::dropIfExists('categories');
    }
};
