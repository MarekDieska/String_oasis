@extends('layouts.index')

@php
    $product = $product ?? null;
@endphp

@section('content')
    <section class="row w-100 justify-content-center">
        <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center p-5">
            <div class="card bg-dark border-danger text-dark w-100">
                <div class="card-header text-center text_color">Admin - Odstránenie produktu</div>
                <div class="card-body">
                    <form id="productForm" method="GET" action="{{ route('product.delete') }}">
                        <div class="mb-3">
                            <input type="text" class="form-control text-black placeholder-black" maxlength="100"
                                   name="s" placeholder="Názov produktu" value="{{ request('s') }}">
                        </div>
                        <div class="mb-2">
                            <label class="form-label fw-bold text_color">Kategória</label>
                            <select class="form-select mb-2" name="subcategory" required>
                                @foreach ($categories as $category)
                                    @foreach ($category->subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}"
                                            {{ request('subcategory') == $subcategory->id ? 'selected' : '' }}>
                                            {{
                                                Str::lower($subcategory->name) . ($category->name !== 'Iné struny' ? ' ' . Str::lower($category->name) : '')
                                            }}
                                        </option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>

                        <div class="card bg-dark text_color align-items-center">
                            <button class="btn btn-outline-primary w-100 mb-3" type="submit">Hľadať</button>

                            @if ($product)
                                <img src="{{ asset('storage/images/' . $product->image) }}" style="width:75%; height:auto"
                                     class="card-img-top img-fluid" alt="{{ $product->name }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title fs-2">{{ $product->name }}</h5>
                                    <hr class="text_color">
                                    <p class="card-text fs-4">Značka: {{$product->brand}}<br>Cena: {{$product->price}}€<br>Hodnotenie: {{$product->stars}}
                                        <i class="fa-regular fa-star text_color fa-sm"></i><br>Na sklade: {{$product->stock}}</p>
                                </div>
                            @else
                                <div class="card-body text-center">
                                    <p class="text-warning">Produkt nebol nájdený. Skúste iný názov alebo kategóriu.</p>
                                </div>
                            @endif
                        </div>

                        @if ($product)
                            <div class="d-flex justify-content-end gap-2 mt-3">
                                <a href="{{ route('admin') }}" class="btn btn-secondary">Zrušiť</a>
                                <button type="submit" formaction="{{ route('product.destroy', $product->id) }}"
                                        formmethod="POST" class="btn btn-danger"
                                        onclick="return confirm('Naozaj chcete odstrániť tento produkt?')">
                                    Odstrániť produkt
                                </button>
                                @csrf
                                @method('DELETE')
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>

        <hr class="text_color">

        <div class="d-flex w-100 justify-content-center align-items-center p-3 pb-4">
            <a href="{{ route('admin') }}" class="btn btn-success w-75 p-1 fs-5">Dokončiť</a>
        </div>
    </section>
@endsection
