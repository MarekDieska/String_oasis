@extends('layouts.index')

@section('content')
    <section class="card mt-5 mb-3 bg-dark border-success-subtle text_color">
        <form method="POST" action="{{ route('add') }}" enctype="multipart/form-data">
            @csrf
            <div class="text-center m-3">
                <div class="card-header text_colors">Admin - Pridanie produktu</div>
                <div class="row g-4">
                    <div class="col-md-8">
                        <div class="mb-2">
                            <label class="form-label fw-bold">Produkt</label>
                            <input type="text" class="form-control text-black placeholder-black" maxlength="100"
                                   placeholder="Názov produktu" required name="name">
                        </div>
                        <div class="mb-2">
                            <label class="form-label fw-bold">Popis produktu</label>
                            <textarea class="form-control placeholder-black" rows="3" minlength="50" maxlength="500"
                                      placeholder="Detailný popis produktu" required name="description"></textarea>
                        </div>
                        <div class="mb-2 parameters-section">
                            <label class="form-label fw-bold">Parametre</label>
                            <div class="parameter-fields">
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="text" class="form-control placeholder-black" placeholder="Značka" required name="brand">
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control placeholder-black" placeholder="Hodnotenie" min="1" max="5" required name="rating">
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-primary mb-0">+ Pridať Parameter</button>
                            <button type="button" class="ms-3 btn btn-outline-danger mb-0">Odstrániť Parameter</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-2">
                            <label class="form-label fw-bold">Cenové detaily</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control placeholder-black" placeholder="Cena €"  min="1" max="5000" required name="price">
                            </div>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control placeholder-black" placeholder="Zľava %" min="0" max="100" required name="discount">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label fw-bold text_color">Kategória</label>
                            <select class="form-select mb-2" name="subcategory" required>
                                @foreach ($categories as $category)
                                    @foreach ($category->subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}">
                                            {{
                                                Str::lower($subcategory->name) .  ($category->name !== 'Iné struny' ? ' ' . Str::lower($category->name) : '')
                                            }}
                                        </option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label fw-bold">Kusy na sklade</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control placeholder-black" placeholder="Počet ks"  min="1" required name="stock">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-0 row">
                            <div class="col-md-6 col-12">
                                <label class="form-label fw-bold mt-0">Hlavný obrázok</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control form-control-lg bg-dark text_color"
                                           id="addProductImage" name="image">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label class="form-label fw-bold mt-0">Ďalšie obrázky</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control form-control-lg bg-dark text_color"
                                           id="addProductImage" multiple name="images[]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-2 mt-2 mb-3">
                    <a type="button" href="{{route('admin_add')}}" class="btn btn-outline-secondary">Zrušiť</a>
                    <button type="reset" class="btn btn-outline-danger">Vyčistiť</button>
                    <button type="submit" class="btn btn-primary">Pridať produkt</button>
                </div>
            </div>
        </form>
    </section>

    <hr class="text_color">

    <div class="d-flex w-100 justify-content-center align-items-center p-3 pb-4">
        <a type="button" href="{{route('admin')}}" class="btn btn-success w-75 p-1 fs-5">Dokončiť</a>
    </div>
@endsection
