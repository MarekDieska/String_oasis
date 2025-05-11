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
            <h2 class="text-light mb-4">Vitaj, {{ $user->profile->name }}!</h2>
            <form action="{{ route('profile.update') }}" method="POST" class="text_color p-4">
                @csrf
                @method('PUT')

                <x-input label="Meno" name="name" :value="$user->profile->name" required />
                <x-input label="Priezvisko" name="surname" :value="$user->profile->surname" required />
                <x-input label="Email" name="email" type="email" :value="$user->email" required />
                <x-input label="Telefón" name="phone" :value="$user->profile->phone" />

                <fieldset class="mt-4 mb-3">
                    <legend class="h5 text-light">Adresa</legend>
                    <x-input label="Ulica a číslo" name="street" :value="$user->profile->street" />
                    <x-input label="Mesto" name="city" :value="$user->profile->city" />
                    <x-input label="PSČ" name="zip" type="number" :value="$user->profile->zip" />
                    <x-input label="Krajina" name="country" :value="$user->profile->country" />
                </fieldset>

                <button type="submit" class="btn btn-primary mt-3 w-100">Uložiť zmeny</button>
            </form>


            <h3 class="text-light mb-4 mt-5 opacity-75" style="font-family: 'Times New Roman', serif">
                Si prihlásený do služby <b>String Oasis</b>
            </h3>
        </div>
    </section>
@endsection
