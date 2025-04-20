{{-- Replace this just to test --}}
@extends('layouts.index')

@section('content')
    <section class="row justify-content-center align-items-center pt-4 mt-4">
        <div class="col-12 d-none d-sm-flex flex-row justify-content-center align-items-center">
            <div class="d-flex align-items-center flex-column  circle-box-custom">
                <button class="btn btn-dark circle-custom-big rounded-pill"><i
                        class="fa-solid fa-user-tie"></i></button>
            </div>
        </div>
    </section>

    <section class="row justify-content-center text-center p-5">
        <div class="col-12 col-md-8 p-2">
            <h2 class="text-light mb-4">Vitaj, {{$user->name}}!</h2>
            <form action="{{ route('profile.update') }}" method="POST" class="text_color p-4">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Meno</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="surname" class="form-label">Priezvisko</label>
                    <input type="text" class="form-control" name="surname" value="{{ old('surname', $user->surname) }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="mb-3">
                    <label for="telefon" class="form-label">Telefón</label>
                    <input type="text" class="form-control" name="telefon" value="{{ old('phone', $user->phone ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="ulica_cislo" class="form-label">Ulica a číslo</label>
                    <input type="text" class="form-control" name="ulica_cislo" value="{{ old('street_number', $user->street_number ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="mesto" class="form-label">Mesto</label>
                    <input type="text" class="form-control" name="mesto" value="{{ old('city', $user->city ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="psc" class="form-label">PSČ</label>
                    <input type="number" class="form-control" name="psc" value="{{ old('psc', $user->psc ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="krajina" class="form-label">Krajina</label>
                    <input type="text" class="form-control" name="krajina" value="{{ old('country', $user->country ?? '') }}">
                </div>

                <button type="submit" class="btn btn-light mt-3 w-100">Uložiť zmeny</button>
            </form>
            <h3 class="text-light mb-4 mt-5  opacity-75" style="font-family: 'Times New Roman',serif">Si prihlásený do služby <b>String Oasis</b></h3>

        </div>
    </section>
@endsection
