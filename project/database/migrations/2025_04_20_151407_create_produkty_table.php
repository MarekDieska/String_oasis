<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kategorie', function (Blueprint $table) {
            $table->id('kat_id');
            $table->string('nazov');
        });

        Schema::create('podkategorie', function (Blueprint $table) {
            $table->id('podkat_id');
            $table->foreignId('kat_id')->references('kat_id')->on('kategorie');
            $table->string('nazov');
        });

        Schema::create('produkty', function (Blueprint $table) {
            $table->id('produkt_id');
            $table->foreignId('podkat_id')->references('podkat_id')->on('podkategorie');
            $table->string('nazov');
            $table->string('znacka');
            $table->float('cena');
            $table->float('zlava');
            $table->integer('naSklade');
            $table->integer('hviezdy');
        });

        Schema::create('parametre', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produkt_id')->references('produkt_id')->on('produkty');
            $table->string('nazov');
            $table->string('hodnota');
        });

        Schema::create('obrazky', function (Blueprint $table) {
            $table->id('foto_id');
            $table->foreignId('produkt_id')->references('produkt_id')->on('produkty');
            $table->string('link');
        });

        Schema::create('profily', function (Blueprint $table) {
            $table->id('profil_id');
            $table->foreignId('user_id')->constrained('users');
            $table->string('meno');
            $table->string('priezvisko');
            $table->string('email');
            $table->string('telefon');
            $table->string('ulica_cislo');
            $table->string('mesto');
            $table->string('psc');
            $table->string('krajina');
        });

        Schema::create('kosiky', function (Blueprint $table) {
            $table->id('polozka_id');
            $table->foreignId('produkt_id')->references('produkt_id')->on('produkty');
            $table->foreignId('user_id')->constrained('users');
            $table->integer('kusy');
        });

        Schema::create('dopravy', function (Blueprint $table) {
            $table->id('doprava_id');
            $table->string('nazov');
            $table->string('popis');
            $table->integer('cena');
        });

        Schema::create('platby', function (Blueprint $table) {
            $table->id('platba_id');
            $table->string('nazov');
            $table->string('popis');
            $table->integer('cena');
        });

        Schema::create('detaily', function (Blueprint $table) {
            $table->id('detail_id');
            $table->foreignId('doprava_id')->references('doprava_id')->on('dopravy');
            $table->foreignId('platba_id')->references('platba_id')->on('platby');
            $table->dateTime('cas');
            $table->enum('stav', ['caka_platbu', 'vybavuje_sa', 'na_ceste', 'dorucena', 'storno']);
            $table->float('suma');
            $table->string('poznamka');
        });

        Schema::create('objednavky', function (Blueprint $table) {
            $table->id('obj_id');
            $table->foreignId('detail_id')->references('detail_id')->on('detaily');
            $table->foreignId('profil_id')->references('profil_id')->on('profily');
        });

        Schema::create('polozky', function (Blueprint $table) {
            $table->id('polozka_id');
            $table->foreignId('produkt_id')->references('produkt_id')->on('produkty');
            $table->foreignId('obj_id')->references('obj_id')->on('objednavky');
            $table->integer('kusy');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
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
    }
};
