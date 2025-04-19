@extends('layouts.index')

@section('content')
    <div class="d-flex flex-row mt-5">
        <button
            class="btn btn-danger rounded-pill d-block d-md-none position-fixed end-0 mt-4 ms-2 me-1 float-filter-custom"
            type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <img src="{{ asset('images/filter.svg') }}" alt="" width="25">
        </button>
        ;

        <div class="d-none d-md-flex line-custom">
            @include('components.main_filter', ['isOffcanvas' => false])
        </div>

        <div class="offcanvas offcanvas-start off-custom overflow-auto p-2 pt-5 pb-5 bg-dark" tabindex="-1"
             id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            @include('components.main_filter', ['isOffcanvas' => true])
        </div>

        @include('components.main_filter_r')
    </div>
@endsection
