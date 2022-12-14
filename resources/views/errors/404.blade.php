@extends('frontend.layouts.base')

@section('frontend-header-title')404 @endsection

@section('frontend-page-content')
    <section class="page-section-ptb text-center clearfix error-page position-relative">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-7 col-md-12">
                <div class="big-title">404</div>
                <h3 class="title mb-4 sm-mb-3"><b>This is Awkward</b></h3>
                <p class="lead">Think back over your life. Think about the people that had a positive influence on you. If your past was like mine, many of them didn’t realize the impact they made. The influence was usually due to them caring about you and doing some little thing. What little things have been done for you that changed your life? What little things have you done for someone else that might have changed theirs?</p>
                <a href="{{route('index') }}" class="button btn-lg btn-theme full-rounded animated right-icn mt-4"><span>Go to Home page<i class="glyph-icon flaticon-hearts" aria-hidden="true"></i></span></a> </div>
            </div>
        </div>
    </section>
@endsection

@push('page-specific-js')
@endpush
