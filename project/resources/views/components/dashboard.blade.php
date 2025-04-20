{{-- resources/views/your-view-file.blade.php --}}
@extends('layouts.index')

@section('content')
    <section class="row justify-content-center align-items-center pt-4 mt-4">
        <div class="col-12 d-none d-sm-flex flex-row justify-content-center align-items-center">
            <div class="d-flex align-items-center flex-column circle-box-custom">
                <button class="btn btn-dark circle-custom-big rounded-pill" aria-label="Profil">
                    <i class="fa-solid fa-user-tie" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </section>

    <section class="row justify-content-center text-center p-5">
        <div class="col-12 col-md-8 p-2">
            <h2 class="text-light mb-4">Vitaj, {{ $user->name }}!</h2>
            <form action="{{ route('profile.update') }}" method="POST" class="text_color p-4">
                @csrf
                @method('PUT')

                <x-input label="Meno" name="name" :value="$user->name" required />
                <x-input label="Priezvisko" name="surname" :value="$user->surname" required />
                <x-input label="Email" name="email" type="email" :value="$user->email" required />
                <x-input label="Telefón" name="telefon" :value="$user->phone" />

                <fieldset class="mt-4 mb-3">
                    <legend class="h5 text-light">Adresa</legend>
                    <x-input label="Ulica a číslo" name="ulica_cislo" :value="$user->street_number" />
                    <x-input label="Mesto" name="mesto" :value="$user->city" />
                    <x-input label="PSČ" name="psc" type="number" :value="$user->psc" />
                    <x-input label="Krajina" name="krajina" :value="$user->country" />
                </fieldset>

                <button type="submit" class="btn btn-light mt-3 w-100">Uložiť zmeny</button>
            </form>

            <h3 class="text-light mb-4 mt-5 opacity-75" style="font-family: 'Times New Roman', serif">
                Si prihlásený do služby <b>String Oasis</b>
            </h3>
        </div>
    </section>
@endsection
