{{-- Replace this just to test --}}
@extends('layouts.index')

@section('content')
    <section class="row justify-content-center align-items-center pt-4 mt-4">
        <div class="col-12 d-none d-sm-flex flex-row justify-content-center align-items-center">
            <div class="d-flex align-items-center flex-column  circle-box-custom">
                <button class="btn btn-secondary circle-custom-big rounded-pill"><i
                        class="fa-regular fa-circle-check"></i></button>
                <h6>hotovo</h6>
            </div>
        </div>
    </section>

    <section class="row justify-content-center text-center p-5">
        <div class="col-12 col-md-8 p-2">
            <h2 class="text-light mb-4">Vitaj, {{$user->name}}</h2>
            <h3 class="text-light mb-4 mt-5  opacity-75" style="font-family: 'Times New Roman',serif">Si prihlásený do služby <b>String Oasis</b></h3>

        </div>
    </section>
@endsection
