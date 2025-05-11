@extends('layouts.index')

@php
    $product = $product ?? null;
@endphp

@section('content')
    @if (session('success'))
        <div class="alert alert-success m-3 me-md-0 text-center">
            {{ session('success') }}
        </div>
    @endif
    <section class="w-100 justify-content-center pt-5 pb-3">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="card bg-dark border-warning text-dark w-100">
                    <div class="card-header text-center text_color">Admin - Úprava produktu</div>
                    <div class="card-body">
                        <form id="searchProductForm" method="GET" action="{{ route('product.edit') }}">
                            <div class="row mb-3">
                                <div class="col-md-8">
                                    <label class="form-label fw-bold text_color">Zadajte názov</label>
                                    <input type="text" class="form-control text-black placeholder-black" maxlength="100"
                                           name="s" placeholder="Názov produktu" value="{{ request('s') }}">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold text_color">Z kategórie</label>
                                    <select class="form-select" name="subcategory" required>
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
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-outline-primary w-100">Hľadať</button>
                                </div>
                            </div>
                        </form>

                        @if ($product)
                            <form id="editProductForm" method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label class="form-label fw-bold text_color">Názov produktu</label>
                                        <input type="text" name="name" class="form-control text-black placeholder-black" maxlength="100"
                                               placeholder="Názov produktu" value="{{ $product->name }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label class="form-label fw-bold text_color">Popis produktu</label>
                                        <textarea name="description" class="form-control placeholder-black" rows="4" minlength="50"
                                                  maxlength="500">{{ $product->description }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text_color">Cena (€)</label>
                                        <input type="number" name="price" step="0.01" class="form-control placeholder-black"
                                               placeholder="Cena €" value="{{ $product->price }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text_color">Podkategória</label>
                                        <select name="subcategory_id" class="form-select" required>
                                            @foreach ($categories as $category)
                                                @foreach ($category->subcategories as $subcategory)
                                                    <option value="{{ $subcategory->id }}"
                                                        {{ $product->subcategory_id == $subcategory->id ? 'selected' : '' }}>
                                                        {{
                                                            Str::lower($subcategory->name) . ($category->name !== 'Iné struny' ? ' ' . Str::lower($category->name) : '')
                                                        }}
                                                    </option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text_color">Zľava (%)</label>
                                        <input type="number" name="discount" class="form-control placeholder-black"
                                               value="{{ $product->discount }}" min="0" max="90">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text_color">Značka</label>
                                        <input type="text" name="brand" class="form-control placeholder-black"
                                               value="{{ $product->brand }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text_color">Počet kusov na sklade</label>
                                        <input type="number" name="stock" class="form-control placeholder-black"
                                               value="{{ $product->stock }}" min="0">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold text_color">Hodnotenie</label>
                                        <input type="number" name="stars" class="form-control placeholder-black"
                                               value="{{ $product->stars}}" min="0" max="5">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 d-inline-block">
                                        <label class="form-label fw-bold text_color mt-2">Hlavný obrázok produktu</label>
                                        <input type="file" name="image" class="form-control bg-dark text_color mb-2 mt-2">
                                        @if ($product->image)
                                            <div class="d-flex w-100 justify-content-center">
                                                <img src="{{ asset('storage/images/' . $product->image) }}"
                                                     style="width:70%; height:auto" class="mt-3 img-fluid" alt="Produkt">
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6 d-inline-block">
                                        <label class="form-label fw-bold text_color mt-2">Ďalšie obrázky</label>
                                        <input type="file" name="images[]" class="form-control bg-dark text_color form-control  mb-2 mt-2" multiple>
                                        <div class="justify-content-center row">
                                            @foreach($product->photos as $image)
                                                <div class="card bg-transparent col-6 align-items-center justify-content-between">
                                                    <img src="{{ asset('storage/images/' . $image->url) }}"
                                                         style="width:70%; height:auto" class="mt-3 img-fluid" alt="Produkt">
                                                    <button type="button" class="btn btn-outline-danger mb-3 mt-3 btn-delete-image" data-photo-id="{{ $image->id }}">Vymazať</button>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('admin_edit') }}" class="btn btn-secondary">Zrušiť</a>
                                    <button type="submit" class="btn btn-warning">Upraviť produkt</button>
                                </div>
                            </form>
                        @else
                            <div class="alert alert-warning text-center">
                                Produkt nebol nájdený. Skúste iný názov alebo podkategóriu.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <hr class="text_color">

        <div class="d-flex w-100 justify-content-center align-items-center p-3 pb-4">
            <a href="{{ route('admin') }}" class="btn btn-success w-75 p-1 fs-5">Dokončiť</a>
        </div>
    </section>


@endsection
