@extends('layouts.account_panel')
@section('content')

    <div class="container-fluid bg-white">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
                <div class="text-center mt-5">
                    <img src="{{ asset('/storage/images/default/pixeltrue-error-1.png') }}">
                </div>
                <div class="text-warning text-center h3 mt-5 mb-3" role="alert">
                    {{ $message }}
                </div>
                <div class="text-center text_color_default mb-5">
                    Let's go <a href="{{ url('/') }}">home</a> and try from there.
                </div>
            </div>
        </div>
    </div>


@endsection
