@extends('buycar::layouts.app')
@section('content')
    <link href="{{ asset('css/newcar.css') }}" rel="stylesheet">
<main>
            @include('buycar::pages.newcar.components.banner')
            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-12 col-lg-9">
                        <div class="new-car-left">
                            <h3 class="header-title mb-4">UPCOMING AND LATEST CARS IN THE PHILIPPINES IN MARCH 2022</h3>
                            <p>Philkotse has the most comprehensive guide for your car buying needs in the Philippines.
                                We aim to provide you with the most complete set of vehicle specifications, unbiased car
                                reviews, and up-to-date vehicle comparisons so you’re well informed even before going to
                                dealerships for a test drive. Even better, get the latest offers and affordable promos,
                                know the updated prices, and request for a free quotation on any brand new car for sale
                                in the Philippine market today</p>
                            @include('buycar::pages.newcar.components.by_all')
                            <h3 class="header-title mt-4">
                                {{__('newcars.by_body_type')}}
                            </h3>
                            @include('buycar::pages.newcar.components.by_body_type')
                            <div class="line-gray"></div>
                            <h3 class="header-title mt-4">
                                {{__('newcars.by_price_range')}}
                            </h3>
                            @include('buycar::pages.newcar.components.by_price')
                            <div class="line-gray"></div>
                            <div class="pro-form-header">
                                <h3 class="header-title mt-4 float-start">
                                    {{__('newcars.promotions')}}
                                </h3>
                                <span class="location float-end feautured-car-pc"><i class="fa-solid fa-location-dot"></i>{{__('newcars.detect_location')}}</span>
                            </div>
                            <div class="clearfix"></div>
                            @include('buycar::pages.newcar.components.promotion')
                            <div class="line-gray"></div>
                            <h3 class="header-title mt-4">
                                {{__('newcars.new_car')}}
                            </h3>
                            @include('buycar::pages.newcar.components.latest_new_cars')
                            <div class="line-gray"></div>
                            <h3 class="header-title mt-4 mb-4">
                                {{__('newcars.upcomming_car')}}
                            </h3>
                            @include('buycar::pages.newcar.components.upcoming')
                            <div class="line-gray"></div>
                            <!-- mb -->

                            <div class="new-car-for-sale-mb mb-3">
                                <h3 class="header-title mt-4 mb-4">
                                    New cars for sale
                                </h3>
                                <div
                                    class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-backface-hidden swiper-ios">
                                    <div class="swiper-wrapper" id="swiper-wrapper-471392fff2f257d8" aria-live="polite"
                                        style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="swiper-slide res-feature swiper-slide-active" style="margin-right: 30px;" role="group"
                                            aria-label="1 / 5">
                                            <div class="photo-mb">
                                                <span class="heart"><i class="fa-solid fa-heart"></i></span>
                                                <a href="#">
                                                    <img src="{{asset('images/newcar/nc1.jpg')}}" class="w-100" data-loaded="true"> </a>
                                            </div>
                                            <div class="info-mb">
                                                <h3 class="title">
                                                    <a href="#">Get Your Brand New 2022 Honda City in Iloilo!</a>
                                                </h3>
                                                <p class="location"><i class="fa-solid fa-location-dot"></i>Iloilo, Iloilo City</p>
                                                <div class="price">₱89,000</div>
                                                <div class="list d-flex">
                                                    <p class="text text-loc"> Automatic</p>
                                                    <p class="text"> 2,000 km</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide res-feature swiper-slide-next" style="margin-right: 30px;" role="group"
                                            aria-label="2 / 5">
                                            <div class="photo-mb">
                                                <span class="heart"><i class="fa-solid fa-heart"></i></span>

                                                <a href="#">
                                                    <img src="{{asset('images/newcar/nc2.jpg')}}" class="w-100" data-loaded="true"> </a>
                                            </div>
                                            <div class="info-mb">
                                                <h3 class="title">
                                                    <a href="#">Get Your Brand New 2022 Honda City in Iloilo!</a>
                                                </h3>
                                                <p class="location"><i class="fa-solid fa-location-dot"></i>Iloilo, Iloilo City</p>
                                                <div class="price">₱89,000</div>
                                                <div class="list d-flex">
                                                    <p class="text text-loc"> Automatic</p>
                                                    <p class="text"> 2,000 km</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide res-feature" style="margin-right: 30px;" role="group" aria-label="3 / 5">
                                            <div class="photo-mb">
                                                <span class="heart"><i class="fa-solid fa-heart"></i></span>

                                                <a href="#">
                                                    <img src="{{asset('images/newcar/nc3.jpg')}}" class="w-100" data-loaded="true"> </a>
                                            </div>
                                            <div class="info-mb">
                                                <h3 class="title">
                                                    <a href="#">Get Your Brand New 2022 Honda City in Iloilo!</a>
                                                </h3>
                                                <p class="location"><i class="fa-solid fa-location-dot"></i>Iloilo, Iloilo City</p>
                                                <div class="price">₱89,000</div>
                                                <div class="list d-flex">
                                                    <p class="text text-loc"> Automatic</p>
                                                    <p class="text"> 2,000 km</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span
                                        class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                                <a href="#" class="btn-view">{{__('components.view_all')}}</a>
                            </div>
                            <!-- end mb -->
                            <div class="line-gray"></div>
                            <!-- mb -->
                            <div class="featured-review-mb mb-3">
                                <h3 class="header-title mt-4 mb-4">
                                    Featured reviews
                                </h3>
                                <div
                                    class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-backface-hidden swiper-ios">
                                    <div class="swiper-wrapper" id="swiper-wrapper-471392fff2f257d8" aria-live="polite"
                                        style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="swiper-slide res-feature swiper-slide-active" style="margin-right: 30px;" role="group"
                                            aria-label="1 / 5">
                                            <div class="photo-mb">
                                                <a href="#">
                                                    <img src="{{asset('images/newcar/frr2.jpg')}}" class="w-100" data-loaded="true"> </a>
                                            </div>
                                            <div class="info-mb">
                                                <h3 class="title">
                                                    <a href="#">2022 Toyota Avanza First Impressions Review | Philkotse Philippines</a>
                                                </h3>
                                                <p class="text-new">New car price:<span>₱1,039,000</span></p>
                                                <div class="list d-flex">
                                                    <p class="text text-loc"> MPV</p>
                                                    <p class="text"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide res-feature swiper-slide-next" style="margin-right: 30px;" role="group"
                                            aria-label="2 / 5">
                                            <div class="photo-mb">
                                                <a href="#">
                                                    <img src="{{asset('images/newcar/prr3.jpg')}}" class="w-100" data-loaded="true"> </a>
                                            </div>
                                            <div class="info-mb">
                                                <h3 class="title">
                                                    <a href="#">2022 Toyota Avanza First Impressions Review | Philkotse Philippines</a>
                                                </h3>
                                                <p class="text-new">New car price:<span>₱1,039,000</span></p>
                                                <div class="list d-flex">
                                                    <p class="text text-loc">SEDAN</p>
                                                    <p class="text border-start border-2" style="padding-left: 5px;">4.1/5<i class="fa-solid fa-star" style="padding-left:5px;color: #ffd200; font-size: 16px;"></i></p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="swiper-slide res-feature" style="margin-right: 30px;" role="group" aria-label="3 / 5">
                                            <div class="photo-mb">
                                                <a href="#">
                                                    <img src="{{asset('images/newcar/prr4.jpg')}}" class="w-100" data-loaded="true"> </a>
                                            </div>
                                            <div class="info-mb">
                                                <h3 class="title">
                                                    <a href="#">2022 Toyota Avanza First Impressions Review | Philkotse Philippines</a>
                                                </h3>
                                                <p class="text-new">New car price:<span>₱1,039,000</span></p>
                                                <div class="list d-flex">
                                                    <p class="text text-loc"> MPV</p>
                                                    <p class="text"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span
                                        class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                                <a href="#" class="btn-view mt-2">{{__('components.view_all')}}</a>

                            </div>
                            <!-- end mb -->
                            <div class="line-gray"></div>
                            <div class="all-phi-mb">
                                <h3 class="header-title mt-4 mb-4">
                                    All Philippines dealerships
                                </h3>
                                <div class="row">
                                    <div class="col-6 mb-2">
                                        <div class="photo-mb">
                                            <a href="#">
                                                <img src="{{asset('images/newcar/ap-1.jpg')}}" class="w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="info-mb">
                                            <h3 class="title">
                                                <a href="#">Honda Cars, Quezon City</a>
                                            </h3>
                                            <span class="location">
                                                <i class="fa-solid fa-location-dot"></i> 141 Quezon Ave., Quezon City
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-2" style="padding-left: 0px;">
                                        <div class="photo-mb">
                                            <a href="#">
                                                <img src="{{asset('images/newcar/ap-2.jpg')}}" class="w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="info-mb">
                                            <h3 class="title">
                                                <a href="#">Honda Cars, Quezon City</a>
                                            </h3>
                                            <span class="location">
                                                <i class="fa-solid fa-location-dot"></i> 141 Quezon Ave., Quezon City
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <div class="photo-mb">
                                            <a href="#">
                                                <img src="{{asset('images/newcar/ap-3.png')}}" class="w-100"  style="background-color: #eaeaea;" alt="">
                                            </a>
                                        </div>
                                        <div class="info-mb">
                                            <h3 class="title">
                                                <a href="#">Honda Cars, Quezon City</a>
                                            </h3>
                                            <span class="location">
                                                <i class="fa-solid fa-location-dot"></i> 141 Quezon Ave., Quezon City
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-2" style="padding-left: 0px;">
                                        <div class="photo-mb">
                                            <a href="#">
                                                <img src="{{asset('images/newcar/ap-3.png')}}" class="w-100" style="background-color: #eaeaea;" alt="">
                                            </a>
                                        </div>
                                        <div class="info-mb">
                                            <h3 class="title">
                                                <a href="#">Honda Cars, Quezon City</a>
                                            </h3>
                                            <span class="location">
                                                <i class="fa-solid fa-location-dot"></i> 141 Quezon Ave., Quezon City
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="btn-view mt-0 mb-3">{{__('components.view_all')}} dealerships</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 col-md-12 right-content-pc">
                        <div class="car-gui-search">
                            <h3 class="header-title">
                                {{__('components.car_guide_search')}}
                            </h3>
                            <div class="box-search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search by keywords">
                                    <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                                <select class="form-select mt-2" aria-label="Default select example">
                                    <option selected="">Brand</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <select class="form-select mt-2" aria-label="Default select example">
                                    <option selected="">Model</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                  <select class="form-select mt-2" aria-label="Default select example">
                                    <option selected="">Body type</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <p class="btn text-center w-100 text-white mt-2 mb-0 bt-search" style="">Search</p>
                            </div>
                        </div>
                        <div class="new-car-for-sale mt-5">
                            <h3 class="header-title">
                                {{__('components.new_cars_for_sale')}}
                            </h3>
                            <div class="box-new-car">
                                <ul>
                                    @foreach($new_cars_for_sale as $key => $car)
                                        @if($key==0)
                                            <li class="pt-0">
                                        @else
                                            <li class="pt-0 mt-3">
                                        @endif

                                            <div class="content d-flex">
                                                <div class="wrap-img">
                                                    <img src="{{asset($car->image_thumbnail)}}" height="52px" width="94px" alt="">
                                                </div>
                                                <div class="wrap-content">
                                                    <h4 class="title">
                                                        <a href="/car/{{$car->id}}">{{$car->sub_content}}</a>

                                                    </h4>
                                                    <span class="price">
                                                        {{$car->price_min}}
                                                    </span>
                                                    <p class="location">
                                                        <i class="fa-solid fa-location-dot"></i> {{$car->location}}
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                    <a href="/cars"><p class="text-center text-primary fw-bold mb-0">{{__('components.view_all')}}</p></a>
                                </ul>

                            </div>
                        </div>
                        <div class="new-car-for-sale">
                            <h3 class="header-title mb-3">
                                {{__('components.featured_review')}}
                            </h3>
                            <div class="box-new-car">
                                <ul>
                                    <li class="pt-0">
                                        <div class="content">
                                            <div class="wrap-img">
                                                <img src="{{asset('images/newcar/fr1.jpg')}}" class="w-100" alt="">
                                            </div>
                                            <div class="wrap-content p-0 pt-2">
                                                <h4 class="title">
                                                    <a href="review/1">2022 Toyota Raize First Impressions Review | Philkotse Philippines</a>

                                                </h4>
                                                <span class="price mb-2">
                                                    <span class="price-title">Car price:</span> ₱1,198,000
                                                </span>
                                                <p class="text-s">
                                                    <span>SUV / Crossover </span>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <div class="wrap-img">
                                                <img src="{{asset('images/newcar/fr2.jpg')}}" class="w-100" alt="">
                                            </div>
                                            <div class="wrap-content p-0 pt-2">
                                                <h4 class="title">
                                                    <a href="review/1">2022 Geely Emgrand Review | Philkotse Philippines</a>

                                                </h4>
                                                <span class="price mb-2">
                                                    <span class="price-title">Car price:</span> ₱1,198,000
                                                </span>
                                                <p class="text-s">
                                                    <span>Sedan</span>
                                                    <span class="number">4.1/5</span>
                                                    <span class="star"><i class="fa-solid fa-star"></i></span>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="border-0">
                                        <div class="content">
                                            <div class="wrap-img">
                                                <img src="{{asset('images/newcar/fr3.jpg')}}" class="w-100" alt="">
                                            </div>
                                            <div class="wrap-content p-0 pt-2">
                                                <h4 class="title mb-2">
                                                    <a href="review/1">2022 Nissan Almera Review | Philkotse Philippines</a>

                                                </h4>

                                                <span class="price mb-2">
                                                    <span class="price-title">Car price:</span> ₱1,198,000
                                                </span>
                                                <p class="text-s">
                                                    <span>Sedan</span>
                                                    <span class="number">4.1/5</span>
                                                    <span class="star"><i class="fa-solid fa-star"></i></span>
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <p class="text-center text-primary fw-bold mb-0">{{__('components.view_all')}}</p>
                                </ul>

                            </div>
                        </div>
                        <div class="new-car-for-sale">
                            <h3 class="header-title">
                                {{__('components.all_philippines_dealerships')}}
                            </h3>
                            <div class="box-new-car">
                                <ul>
                                    <li class="pt-0">
                                        <div class="content d-flex">
                                            <div class="wrap-img">
                                                <img src="{{asset('images/newcar/ap1.jpg')}}" alt="">
                                            </div>
                                            <div class="wrap-content">
                                                <h4 class="title">
                                                    <a href="#">Ford, General Santos City</a>

                                                </h4>
                                                <p class="location">
                                                    <i class="fa-solid fa-location-dot"></i> ord Building, Dadiangas North, National Highway, General Santos City
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content d-flex">
                                            <div class="wrap-img">
                                                <img src="{{asset('images/newcar/ap2.jpg')}}" alt="">
                                            </div>
                                            <div class="wrap-content">
                                                <h4 class="title">
                                                    <a href="#">Mitsubishi Motors, Valenzuela</a>

                                                </h4>
                                                <p class="location">
                                                    <i class="fa-solid fa-location-dot"></i> 260B MacArthur Highway, Valenzuela, 1443
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content d-flex">
                                            <div class="wrap-img">
                                                <img src="{{asset('images/newcar/ap3.jpg')}}" alt="">
                                            </div>
                                            <div class="wrap-content">
                                                <h4 class="title">
                                                    <a href="#">Isuzu Cebu South</a>

                                                </h4>
                                                <p class="location">
                                                    <i class="fa-solid fa-location-dot"></i> N. Bacalso, Highway, Linao, Talisay City, Cebu 6045
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li style="border:none;">
                                        <div class="content d-flex">
                                            <div class="wrap-img">
                                                <img src="{{asset('images/newcar/ap4.jpg')}}" alt="">
                                            </div>
                                            <div class="wrap-content">
                                                <h4 class="title">
                                                    <a href="#">Isuzu Batangas (Sto. Tomas)</a>

                                                </h4>
                                                <p class="location">
                                                    <i class="fa-solid fa-location-dot"></i> Crossing Barrio San Roque, Sto. Tomas Batangas
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <p class="text-center text-primary fw-bold mb-0">{{__('components.view_all')}}</p>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
@endsection
