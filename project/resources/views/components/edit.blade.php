@extends('layouts.app')

@section('content')
    <section class="w-100 justify-content-center pt-5 pb-3">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="card bg-dark border-warning text-dark w-100">
                    <div class="card-header text-center text_color">Admin - Úprava produktu</div>
                    <div class="card-body">
                        <form id="editProductForm">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label class="form-label fw-bold text_color">Názov produktu</label>
                                    <input type="text" class="form-control text-black placeholder-black" maxlength="100" placeholder="Názov produktu" value="HarmonyTone Sunset D-50">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <button type="button" class="btn btn-outline-primary w-100">Hľadať</button>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label class="form-label fw-bold text_color">Popis produktu</label>
                                    <textarea class="form-control placeholder-black" rows="3" minlength="50" maxlength="500">HarmonyTone Sunset D-50 je perfektná pre začínajúcich aj pokročilých hudobníkov...</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text_color">Kategória</label>
                                    <select class="form-select">
                                        <option value="1" selected>Gitara</option>
                                        <option value="2">Basgitara</option>
                                        <option value="3">Iné struny</option>
                                        <option value="4">Kombá</option>
                                        <option value="5">Príslušenstvo</option>
                                        <option value="6">Platne</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text_color">Podkategória</label>
                                    <select class="form-select">
                                        <option value="1">Elektrické</option>
                                        <option value="2">Elektro-akustické</option>
                                        <option value="3" selected>Akustické</option>
                                        <option value="4">Klasické</option>
                                        <option value="5">Detské</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text_color">Cena (€)</label>
                                    <input type="number" class="form-control placeholder-black" placeholder="Cena €" value="250.23">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text_color">Zľava (%)</label>
                                    <input type="number" class="form-control placeholder-black" placeholder="Zľava %" value="0">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 d-inline-block">
                                    <label class="form-label fw-bold text_color">Obrázok produktu</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control bg-dark text_color" multiple>
                                    </div>
                                    <div class="d-flex w-100 justify-content-center">
                                        <img src="{{asset("/public/images/product_guitar.jpg")}}" style="width:70%; height:auto" class="mt-3 img-fluid" alt="Produkt">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold text_color">Parametre</label>
                                    <div class="parameter-fields">
                                        <div class="row mb-3">
                                            <div class="row mb-1">
                                                <label class="form-label fw-bold text_color">Telo</label>
                                                <input type="text" class="form-control placeholder-black" value="Mahagón so smrekovou vrchnou doskou">
                                            </div>
                                            <div class="row mb-1">
                                                <label class="form-label fw-bold text_color">Krk</label>
                                                <input type="text" class="form-control placeholder-black" value="Mahagón s palisandrovým hmatníkom">
                                            </div>
                                            <div class="row mb-1">
                                                <label class="form-label fw-bold text_color">Počet pražcov</label>
                                                <input type="text" class="form-control placeholder-black" value="20">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-primary mb-0">+ Pridať Parameter</button>
                                    <button type="button" class="ms-3 btn btn-outline-danger mb-0">Odstrániť Parameter</button>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <a type="button" href="{{route("admin")}}" class="btn btn-secondary">Zrušiť</a>
                                <button type="submit" class="btn btn-warning">Upraviť produkt</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <hr class="text_color">

        <div class="d-flex w-100 justify-content-center align-items-center p-3 pb-4">
            <a type="button" href="{{route('admin')}}" class="btn btn-success w-75 p-1 fs-5">Dokončiť</a>
        </div>
    </section>
@endsection
