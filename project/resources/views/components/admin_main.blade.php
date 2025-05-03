@extends('layouts.index')

@section('content')

    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger mt-3">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-12 txt-custom3 d-flex justify-content-center">
        <h2 class="text-light">Stránka správcu e-shopu String Oasis</h2>
    </div>

    <section class="row d-flex align-items-center justify-content-center admin-main">
        <div class="col-12 col-md-4">
            <a href="{{ route('admin_add') }}" class="link-custom">
                <div class="card bg-dark border-success text-light m-3 pick-custom text-center">
                    <h3 class="pt-5 pb-2">Pridať produkt</h3>
                    <i class="fa fa-plus fs-3"></i>
                </div>
            </a>
        </div>

        <div class="col-12 col-md-4">
            <a href="{{ route('admin_delete') }}" class="link-custom">
                <div class="card bg-dark border-danger text-light m-3 pick-custom text-center">
                    <h3 class="pt-5 pb-2">Odobrať produkt</h3>
                    <i class="fa fa-minus fs-3"></i>
                </div>
            </a>
        </div>

        <div class="col-12 col-md-4">
            <a href="{{ route('admin_edit') }}" class="link-custom">
                <div class="card bg-dark border-warning text-light m-3 pick-custom text-center">
                    <h3 class="pt-5 pb-2">Upraviť produkt</h3>
                    <i class="fa fa-repeat fs-3"></i>
                </div>
            </a>
        </div>

        <hr class="text_color">

        <div class="mt-4 text_color p-5">
            <h2>Pridanie Admina</h2>
            <form method="POST" action="{{ route('users.addRole') }}">
                @csrf
                <div class="form-group">
                    <label for="adminEmail">Email admina</label>
                    <input type="email" name="email" class="form-control placeholder-black" id="adminEmail"
                           placeholder="Zadajte email admina" required>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Pridať Admina</button>
            </form>
        </div>

        <hr class="text_color mt-4">

        <div class="mt-4 text_color p-5">
            <h2>Odstránenie Admina</h2>
            <form method="POST" action="{{ route('users.deleteRole') }}">
                @csrf
                <div class="form-group text_color">
                    <label for="adminToRemove">Email Admina</label>
                    <input type="text" name="email" class="form-control placeholder-black" id="adminToRemove"
                           placeholder="Zadajte email admina" required>
                </div>
                <button type="submit" class="btn btn-danger mt-2">Odstrániť Admina</button>
            </form>
        </div>

        <hr class="text_color mt-4">

        <div class="d-flex w-100 justify-content-center p-4">
            <a href="{{ route('index') }}" class="btn text_color btn-primary w-50 mt-0 logout-action"
               id="logoutButtonAdminPage">Odhlásiť sa</a>
        </div>
    </section>
@endsection
