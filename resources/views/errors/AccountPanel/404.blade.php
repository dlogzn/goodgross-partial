@extends('layouts.account_panel', ['title' => '404 - Not Found'])
@section('content')

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">
            <div class="text-center mt-5">
                <img src="{{ asset('/storage/images/default/pixeltrue-error-1.png') }}">
            </div>
            <div class="text-warning text-center h3 mt-5 mb-3" role="alert">
                Oops! Page Not Found.
            </div>
            <div class="text-center text_color_default mb-5">
                Instead go to <a href="{{ url('/account/panel/overview') }}">overview</a> and try from there.
            </div>
        </div>
    </div>


@endsection
