@extends('buycar::layouts.app')
@section('content')
    <link href="{{ asset('css/listcar.css') }}" rel="stylesheet">
    @include('buycar::pages.cars.components.breadcrumb')
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 main-content-left">

                        <div>
                            <h2 class="heading">{{__('components.car_search')}}</h2>
                            <div class="car-search">
                                <div class="box-car-search  mb-4">
                                    <ul class="form-car-search">
                                        <li>
                                            <div class="radio">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                                    value="option1" checked="">
                                                <label class="radio-label" for="inlineRadio1">Both</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                                    value="option1">
                                                <label class="radio-label" for="inlineRadio1">New</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                                    value="option1">
                                                <label class="radio-label" for="inlineRadio1">Used</label>
                                            </div>
                                        </li>
                                        <li>
                                            <select name="" id="" class="chosen-container chosen-container-single">
                                                <option value="">Brand</option>
                                                <option value="">Abrth</option>
                                                <option value="">Acura</option>

                                            </select>
                                        </li>
                                        <li>
                                            <select name="" id="" class="chosen-container chosen-container-single">
                                                <option value="">Model</option>
                                                <option value="">140</option>
                                                <option value="">145</option>
                                                <option value="">158</option>
                                                <option value="">200</option>
                                                <option value="">305</option>
                                            </select>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-6">
                                                    <select name="" id=""
                                                        class="chosen-container chosen-container-single">
                                                        <option value="">From price</option>
                                                        <option value=""> ₱ 0</option>
                                                        <option value="">₱ 200,000</option>
                                                        <option value="">₱ 300,000</option>
                                                        <option value="">₱ 400,000</option>
                                                        <option value="">₱ 500,000</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <select name="" id=""
                                                        class="chosen-container chosen-container-single">
                                                        <option value="">To price</option>
                                                        <option value=""> ₱ 0</option>
                                                        <option value="">₱ 200,000</option>
                                                        <option value="">₱ 300,000</option>
                                                        <option value="">₱ 400,000</option>
                                                        <option value="">₱ 500,000</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-6">
                                                    <select name="" id=""
                                                        class="chosen-container chosen-container-single">
                                                        <option value="">From year</option>
                                                        <option value="">2010</option>
                                                        <option value="">2015</option>
                                                        <option value="">2018</option>
                                                        <option value="">2020</option>
                                                        <option value="">2021</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <select name="" id=""
                                                        class="chosen-container chosen-container-single">
                                                        <option value="">To year</option>
                                                        <option value="">2010</option>
                                                        <option value="">2015</option>
                                                        <option value="">2018</option>
                                                        <option value="">2020</option>
                                                        <option value="">2021</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <select name="" id="" class="chosen-container chosen-container-single">
                                                <option value="">Region</option>
                                                <option value="">b</option>
                                                <option value="">c</option>
                                                <option value="">d</option>
                                                <option value="">e</option>
                                                <option value="">f</option>
                                            </select>
                                        </li>
                                        <li>
                                            <select name="" id="" class="chosen-container chosen-container-single">
                                                <option value="">From km</option>
                                                <option value="">b</option>
                                                <option value="">c</option>
                                                <option value="">d</option>
                                                <option value="">e</option>
                                                <option value="">f</option>
                                            </select>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-6">
                                                    <select name="" id=""
                                                        class="chosen-container chosen-container-single">
                                                        <option value="">To Km</option>
                                                        <option value="">b</option>
                                                        <option value="">c</option>
                                                        <option value="">d</option>
                                                        <option value="">e</option>
                                                        <option value="">f</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <select name="" id=""
                                                        class="chosen-container chosen-container-single">
                                                        <option value="">Transmissioin</option>
                                                        <option value="">b</option>
                                                        <option value="">c</option>
                                                        <option value="">d</option>
                                                        <option value="">e</option>
                                                        <option value="">f</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <select name="" id="" class="chosen-container chosen-container-single">
                                                <option value="">Color</option>
                                                <option value="">b</option>
                                                <option value="">c</option>
                                                <option value="">d</option>
                                                <option value="">e</option>
                                                <option value="">f</option>
                                            </select>
                                        </li>
                                        <li>
                                            <select name="" id="" class="chosen-container chosen-container-single">
                                                <option value="">Body type</option>
                                                <option value="">b</option>
                                                <option value="">c</option>
                                                <option value="">d</option>
                                                <option value="">e</option>
                                                <option value="">f</option>
                                            </select>
                                        </li>
                                        <li>
                                            <button class="btn-button">Search</button>
                                        </li>
                                        <li style="margin-bottom: 0px;">
                                            <div class="row">
                                                <div class="col-6">
                                                    <span class="alink">Save this search</span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="alink">Use saved search</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>



                                </div>
                            </div>
                            <h2 class="heading">{{__('components.car_for_sale')}}</h2>
                            <div class="box-gray-a">
                                <h3 class="alink">
                                    <a href="#">Toyota</a>
                                    <span class="number"> (1069)</span>
                                </h3>
                                <h3 class="alink">
                                    <a href="#">Toyota</a>
                                    <span class="number"> (1069)</span>
                                </h3>
                                <h3 class="alink">
                                    <a href="#">Toyota</a>
                                    <span class="number"> (1069)</span>
                                </h3>
                                <h3 class="alink">
                                    <a href="#">Toyota</a>
                                    <span class="number"> (1069)</span>
                                </h3>
                                <h3 class="alink">
                                    <a href="#">Toyota</a>
                                    <span class="number"> (1069)</span>
                                </h3>
                                <h3 class="alink">
                                    <a href="#">Toyota</a>
                                    <span class="number"> (1069)</span>
                                </h3>
                                <h3 class="alink">
                                    <a href="#">Toyota</a>
                                    <span class="number"> (1069)</span>
                                </h3>
                                <div class="more-link pull-right bd-f">
                                    <a href="#" class="show-all-keyword">{{__('components.show_more')}}</a>
                                </div>
                            </div>
                            <div class="box-adviceforsale">
                                <div class="top-heading">
                                    <span class="cicon_agent"></span>
                                    <h2 class="heading">
                                        {{__('components.need_advice')}}
                                    </h2>
                                </div>
                                <div class="content">
                                    <h3 class="title">
                                        {{__('components.need_advice_content')}}
                                    </h3>
                                    <form action="#">
                                        <div class="form-input">
                                            <input type="text" class="form-control" placeholder="Your name *">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                        <div class="form-input">
                                            <input type="text" class="form-control" placeholder="Your phone number *">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                        <div class="form-input clearfix">
                                            <div class="box-radio-typeOfLead">
                                                <div class="radio">
                                                    <input type="radio" checked="">
                                                    <label for="#" class="radio-label">Both</label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio">
                                                    <label for="#" class="radio-label">New Car</label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio">
                                                    <label for="#" class="radio-label">Used car</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-input">
                                            <textarea autocomplete="off" class="form-control txtform" cols="20"
                                                data-val="true" data-val-length="Maximum 100 characters"
                                                data-val-length-max="100" data-val-required="This field is requried"
                                                id="Message" maxlength="100" name="Message" placeholder="Message *"
                                                rows="2"></textarea>
                                            <i class="fa-solid fa-message"></i>
                                        </div>
                                        <button class="btn" type="button">
                                            {{__('components.mess_us')}}
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <h2 class="heading">{{__('components.latest_new_cars')}}</h2>
                            <div class="box-gray-a">
                                <ul class="list-from-price">
                                    @foreach($lates_new_cars as $key => $lates_new_car)
                                        @if($key==0)
                                            <li class="big">
                                        @else
                                            <li>
                                        @endif

                                        <a href="#" class="photo">
                                            <img class="lazy-hidden lazy-load-success w-100" height="153px"
                                                src="{{$lates_new_car->image_thumbnail}}"
                                                alt="">
                                        </a>
                                        <h3 class="title">
                                            <a href="#">{{$lates_new_car->sub_content}}</a>
                                        </h3>
                                        <span class="price">
                                            {{$lates_new_car->price_min}}
                                        </span>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                            <h2 class="heading">{{__('components.best_advice')}}</h2>
                            <div class="box-gray-a">
                                <ul class="list-new-a">
                                    <li class="big">
                                        <a href="#" class="photo">
                                            <img class="lazy-hidden lazy-load-success w-100"
                                                src="/images/listcar/untitled-design-2021-12-09t113254-198-d9ed-wm-1246_wm.jpg"
                                                alt="">
                                        </a>
                                        <h3 class="title">
                                            <a href="#">Toyota Innova Color: Which hue is best for you? </a>
                                        </h3>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="photo lazy-hidden lazy-load-success"
                                                src="/images/listcar/img-7310-5-11zon-61e5_wm.jpg" alt="">
                                        </a>
                                        <h3 class="title">
                                            <a href="#">Ford Mustang Color: Which hue is best for you?</a>
                                        </h3>

                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="photo lazy-hidden lazy-load-success"
                                                src="/images/listcar/img-6552-1-11zon-5278_wm.jpg" alt="">
                                        </a>
                                        <h3 class="title">
                                            <a href="#">Nissan Navara Color: Which hue is best for you? </a>
                                        </h3>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="heading">{{__('components.car_for_sale')}}</h2>
                            <div class="box-gray-a">
                                <h3 class="alink">
                                    <a href="#">Reliable Ford Everest 2011 for sale</a>
                                </h3>
                                <h3 class="alink">
                                    <a href="#">Well kept Honda Cr-V for sale</a>
                                </h3>
                                <h3 class="alink">
                                    <a href="#">Well kept Honda Cr-V for sale</a>
                                </h3>
                                <h3 class="alink">
                                    <a href="#">Well kept Honda Cr-V for sale</a>
                                </h3>
                                <h3 class="alink">
                                    <a href="#">Well kept Honda Cr-V for sale</a>
                                </h3>
                                <h3 class="alink">
                                    <a href="#">Well kept Honda Cr-V for sale</a>
                                </h3>
                            </div>
                            <div class="box-gray-a box-Subscribe">
                                <p>{{__('components.listing_mail')}}</p>
                                <span class="btn-mail pointer">
                                    <i class="fa-solid fa-envelope"></i>
                                    {{__('components.subcribe')}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 ">
                        <div class="result-search">
                            <div class="heading">
                                <h2>CARS FOR SALE IN THE PHILIPPINES</h2>
                                <span class="location-show"> <i class="fa-solid fa-location-dot"></i> Show cars in my
                                    city</span>
                            </div>
                            <div class="clearfix"></div>
                            @include('buycar::pages.cars.components.filter_mb')
                            <div class="box-list-product">
                                @include('buycar::pages.cars.components.content')
                                @include('buycar::pages.cars.components.products')
                            </div>
                            @include('buycar::pages.cars.components.mb_recommend')
                            @include('buycar::pages.cars.components.mb_advice_for_sale')
                            @include('buycar::pages.cars.components.feature_link')
                            @include('buycar::pages.cars.components.subcribe')
                            @include('buycar::pages.cars.components.intro')

                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
