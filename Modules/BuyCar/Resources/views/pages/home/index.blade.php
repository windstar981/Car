@extends('buycar::layouts.app')
@section('content')
<div class="fix_height">
        @include('buycar::pages.home.components.banner')
        @include('buycar::pages.home.components.box_gui_sale')
        @include('buycar::pages.home.components.trendding')
        @include('buycar::pages.home.components.price_for_brand')
        <div class="slider-find-car">
        </div>
        @include('buycar::pages.home.components.feature_video')
        <div class="slide-car-review">
        </div>
        @include('buycar::pages.home.components.article')
        @include('buycar::pages.home.components.tips')
        @include('buycar::pages.home.components.partner')

    </div>
@endsection
