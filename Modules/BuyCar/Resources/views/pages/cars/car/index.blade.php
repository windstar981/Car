<?php
$attribute = json_decode($car->attribute);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@1.8.3/dist/css/lightgallery.min.css">
<link href="{{asset('flexslider/css/shCore.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('flexslider/css/shThemeDefault.css')}}" rel="stylesheet" type="text/css" />
<!-- Demo CSS -->
<link rel="stylesheet" href="{{asset('flexslider/css/demo.css')}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{asset('flexslider/flexslider.css')}}" type="text/css" media="screen" />
@extends('buycar::layouts.app')
@section('content')
    <link href="{{asset('css/cardetail.css') }}" rel="stylesheet">
    <link href=" {{asset('css/listcar.css') }}" rel="stylesheet">
    @include('buycar::pages.cars.car.components.breadcrumb')
    {{--    @include('buycar::pages.cars.car.components.banner')--}}
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 pc-left">

                    <div>
                        <h2 class="heading">{{__('components.car_search')}}</h2>
                        {{--                        <div class="car-search">--}}
                        {{--                            <div class="box-car-search  mb-4">--}}
                        {{--                                <ul class="form-car-search">--}}
                        {{--                                    <li>--}}
                        {{--                                        <div class="radio">--}}
                        {{--                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1"--}}
                        {{--                                                   value="option1" checked="">--}}
                        {{--                                            <label class="radio-label" for="inlineRadio1">Both</label>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="radio">--}}
                        {{--                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1"--}}
                        {{--                                                   value="option1">--}}
                        {{--                                            <label class="radio-label" for="inlineRadio1">New</label>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="radio">--}}
                        {{--                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1"--}}
                        {{--                                                   value="option1">--}}
                        {{--                                            <label class="radio-label" for="inlineRadio1">Used</label>--}}
                        {{--                                        </div>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <select name="" id="select-brand" class="chosen-container chosen-container-single">--}}
                        {{--                                            <option value="0">Brand</option>--}}

                        {{--                                            @foreach($dataFilter['brands'] as $brand)--}}

                        {{--                                                @if($brand->id==$car['base']->brand_id)--}}
                        {{--                                                    <option selected="selected" value="{{$brand->id}}">{{$brand->name}}</option>--}}
                        {{--                                                @else--}}
                        {{--                                                    <option value="{{$brand->id}}">{{$brand->name}}</option>--}}
                        {{--                                                @endif--}}
                        {{--                                            @endforeach--}}

                        {{--                                        </select>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <select name="model_filer"  class="chosen-container chosen-container-single model_filer" >--}}
                        {{--                                            <option value="0">Model</option>--}}
                        {{--                                            @foreach($car['models'] as $model)--}}


                        {{--                                                @if($model->id==$car['base']->model_id)--}}
                        {{--                                                    <option selected="selected" value="{{$model->id}}">{{$model->name}}</option>--}}
                        {{--                                                @else--}}
                        {{--                                                    <option value={{$model->id}}>{{$model->name}}</option>--}}
                        {{--                                                @endif--}}
                        {{--                                            @endforeach--}}
                        {{--                                        </select>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <div class="row">--}}
                        {{--                                            <div class="col-6">--}}
                        {{--                                                <select name="" id=""--}}
                        {{--                                                        class="chosen-container chosen-container-single">--}}
                        {{--                                                    <option value="">From price</option>--}}
                        {{--                                                    <option value=""> ₱ 0</option>--}}
                        {{--                                                    <option value="">₱ 200,000</option>--}}
                        {{--                                                    <option value="">₱ 300,000</option>--}}
                        {{--                                                    <option value="">₱ 400,000</option>--}}
                        {{--                                                    <option value="">₱ 500,000</option>--}}
                        {{--                                                </select>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="col-6">--}}
                        {{--                                                <select name="" id=""--}}
                        {{--                                                        class="chosen-container chosen-container-single">--}}
                        {{--                                                    <option value="">To price</option>--}}
                        {{--                                                    <option value=""> ₱ 0</option>--}}
                        {{--                                                    <option value="">₱ 200,000</option>--}}
                        {{--                                                    <option value="">₱ 300,000</option>--}}
                        {{--                                                    <option value="">₱ 400,000</option>--}}
                        {{--                                                    <option value="">₱ 500,000</option>--}}
                        {{--                                                </select>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <div class="row">--}}
                        {{--                                            <div class="col-6">--}}
                        {{--                                                <select name="" id=""--}}
                        {{--                                                        class="chosen-container chosen-container-single">--}}
                        {{--                                                    <option value="">From year</option>--}}
                        {{--                                                    <option value="">2010</option>--}}
                        {{--                                                    <option value="">2015</option>--}}
                        {{--                                                    <option value="">2018</option>--}}
                        {{--                                                    <option value="">2020</option>--}}
                        {{--                                                    <option value="">2021</option>--}}
                        {{--                                                </select>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="col-6">--}}
                        {{--                                                <select name="" id=""--}}
                        {{--                                                        class="chosen-container chosen-container-single">--}}
                        {{--                                                    <option value="">To year</option>--}}
                        {{--                                                    <option value="">2010</option>--}}
                        {{--                                                    <option value="">2015</option>--}}
                        {{--                                                    <option value="">2018</option>--}}
                        {{--                                                    <option value="">2020</option>--}}
                        {{--                                                    <option value="">2021</option>--}}
                        {{--                                                </select>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <select name="" id="" class="chosen-container chosen-container-single">--}}
                        {{--                                            <option value="">Region</option>--}}
                        {{--                                            <option value="">b</option>--}}
                        {{--                                            <option value="">c</option>--}}
                        {{--                                            <option value="">d</option>--}}
                        {{--                                            <option value="">e</option>--}}
                        {{--                                            <option value="">f</option>--}}
                        {{--                                        </select>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <select name="" id="" class="chosen-container chosen-container-single">--}}
                        {{--                                            <option value="">City</option>--}}
                        {{--                                            <option value="">b</option>--}}
                        {{--                                            <option value="">c</option>--}}
                        {{--                                            <option value="">d</option>--}}
                        {{--                                            <option value="">e</option>--}}
                        {{--                                            <option value="">f</option>--}}
                        {{--                                        </select>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <div class="row">--}}
                        {{--                                            <div class="col-6">--}}
                        {{--                                                <select name="" id=""--}}
                        {{--                                                        class="chosen-container chosen-container-single">--}}
                        {{--                                                    <option value="">From km</option>--}}
                        {{--                                                    <option value="">b</option>--}}
                        {{--                                                    <option value="">c</option>--}}
                        {{--                                                    <option value="">d</option>--}}
                        {{--                                                    <option value="">e</option>--}}
                        {{--                                                    <option value="">f</option>--}}
                        {{--                                                </select>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="col-6">--}}
                        {{--                                                <select name="" id=""--}}
                        {{--                                                        class="chosen-container chosen-container-single">--}}
                        {{--                                                    <option value="">To km</option>--}}
                        {{--                                                    <option value="">b</option>--}}
                        {{--                                                    <option value="">c</option>--}}
                        {{--                                                    <option value="">d</option>--}}
                        {{--                                                    <option value="">e</option>--}}
                        {{--                                                    <option value="">f</option>--}}
                        {{--                                                </select>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <select name="" id="" class="chosen-container chosen-container-single">--}}
                        {{--                                            <option value="">Transmission</option>--}}

                        {{--                                            @foreach($dataFilter['transmission'] as $trans)--}}
                        {{--                                                @if($trans->key==json_decode($car['base']->attribute)->transmission)--}}
                        {{--                                                    <option selected="selected" value="{{$trans->key}}">{{$trans->value}}</option>--}}
                        {{--                                                @else--}}
                        {{--                                                    <option value="{{$trans->key}}">{{$trans->value}}</option>--}}
                        {{--                                                @endif--}}
                        {{--                                            @endforeach--}}

                        {{--                                        </select>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <select name="" id="" class="chosen-container chosen-container-single">--}}
                        {{--                                            <option value="">Color</option>--}}
                        {{--                                            @foreach($dataFilter['colors'] as $color)--}}

                        {{--                                                @if($color->key==json_decode($car['base']->attribute)->color)--}}
                        {{--                                                    <option selected="selected" value="{{$color->key}}">{{$color->value}}</option>--}}
                        {{--                                                @else--}}
                        {{--                                                    <option value="{{$color->key}}">{{$color->value}}</option>--}}
                        {{--                                                @endif--}}
                        {{--                                            @endforeach--}}
                        {{--                                        </select>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <select name="" id="" class="chosen-container chosen-container-single">--}}
                        {{--                                            <option value="">Body type</option>--}}
                        {{--                                            @foreach($dataFilter['body_type'] as $body_type)--}}

                        {{--                                                @if($body_type->key==json_decode($car['base']->attribute)->body_type)--}}
                        {{--                                                    <option selected="selected" value="{{$body_type->key}}">{{$body_type->value}}</option>--}}
                        {{--                                                @else--}}
                        {{--                                                    <option value="{{$body_type->key}}">{{$body_type->value}}</option>--}}
                        {{--                                                @endif--}}
                        {{--                                            @endforeach--}}
                        {{--                                        </select>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <button class="btn-button">Search</button>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li style="margin-bottom: 0px;">--}}
                        {{--                                        <div class="row">--}}
                        {{--                                            <div class="col-6">--}}
                        {{--                                                <span class="alink">Save this search</span>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="col-6">--}}
                        {{--                                                <span class="alink">Use saved search</span>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </li>--}}
                        {{--                                </ul>--}}



                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <h2 class="heading"><span
                                style="color: #2070d2 !important">KIA RIO</span> {{__('components.for_sale')}}</h2>
                        <div class="box-gray-a">
                            <h3 class="alink">
                                <a href="/cars">2016</a>
                                <span class="number"> (3)</span>
                            </h3>
                            <h3 class="alink">
                                <a href="/cars">2015</a>
                                <span class="number"> (1)</span>
                            </h3>
                            <h3 class="alink">
                                <a href="/cars">2013</a>
                                <span class="number"> (2)</span>
                            </h3>

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
                                                      data-val-length-max="100"
                                                      data-val-required="This field is requried"
                                                      id="Message" maxlength="100" name="Message"
                                                      placeholder="Message *"
                                                      rows="2"></textarea>
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                    <button class="btn" type="button">
                                        {{__('components.mess_us')}}
                                    </button>
                                </form>
                            </div>
                        </div>
                        <h2 class="heading">{{__('components.technical')}}</h2>
                        <div class="box-gray-a">
                            <ul class="list-from-price">
                                <li class="big">
                                    <a href="#" class="photo">
                                        <img class="lazy-hidden lazy-load-success w-100"
                                             src="{{asset('images/cardetail/tech.jpg')}}" style="height:153px;"
                                             alt="">
                                    </a>
                                    <h3 class="title">
                                        <a href="#" style="padding-top:10px;">6 things to expect in Philkotse’s Hot
                                            Deals for Every Juan</a>
                                    </h3>

                                </li>
                                <li>
                                    <a href="#">
                                        <img class="photo lazy-hidden lazy-load-success "
                                             src="{{asset('images/cardetail/tech1.jpg')}}" alt="">
                                    </a>
                                    <h3 class="title">
                                        <a href="#">No contact apprehension: Everything you need to know </a>
                                    </h3>

                                </li>
                                <li>
                                    <a href="#">
                                        <img class="photo lazy-hidden lazy-load-success"
                                             src="{{asset('images/cardetail/tech2.jpg')}}" alt="">
                                    </a>
                                    <h3 class="title">
                                        <a href="#">‘Should I wash my car after it rains?’ [Newbie Guide]</a>
                                    </h3>

                                </li>
                            </ul>
                        </div>
                        <h2 class="heading">{{__('components.car_comparison')}}</h2>
                        <div class="box-gray-a">
                            <ul class="list-from-price">
                                <li class="big">
                                    <a href="#" class="photo">
                                        <img class="lazy-hidden lazy-load-success w-100"
                                             src="{{asset('images/cardetail/carcom.jpg')}}" style="height:153px;"
                                             alt="">
                                    </a>
                                    <h3 class="title">
                                        <a href="#" style="padding-top:10px;">2022 Geely Emgrand vs Toyota Vios
                                            Comparison: Spec Sheet Battle</a>
                                    </h3>

                                </li>
                                <li>
                                    <a href="#">
                                        <img class="photo lazy-hidden lazy-load-success "
                                             src="{{asset('images/cardetail/carcom1.jpg')}}" alt="">
                                    </a>
                                    <h3 class="title">
                                        <a href="#">2022 Toyota Raize vs Geely Coolray Premium Comparo: Spec Sheet
                                            Battle </a>
                                    </h3>

                                </li>
                                <li>
                                    <a href="#">
                                        <img class="photo lazy-hidden lazy-load-success"
                                             src="{{asset('images/cardetail/carcom2.jpg')}}" alt="">
                                    </a>
                                    <h3 class="title">
                                        <a href="#">2022 Toyota Raize vs Kia Stonic Comparison: Spec Sheet Battle</a>
                                    </h3>

                                </li>
                            </ul>
                        </div>

                        <h2 class="heading">{{__('components.featured_links')}}</h2>
                        <div class="box-gray-a">
                            <h3 class="alink">
                                <a href="#">Kia, Isabela dealership</a>
                            </h3>
                            <h3 class="alink">
                                <a href="#">Kia Sorento Expectations</a>
                            </h3>
                            <h3 class="alink">
                                <a href="#">High quality Kia Sportage 2015</a>
                            </h3>
                            <h3 class="alink">
                                <a href="#">Kia Picanto 2016 best price</a>
                            </h3>
                            <h3 class="alink">
                                <a href="#">Selling Kia Carnival 2013</a>
                            </h3>
                            <h3 class="alink">
                                <a href="#">Kia K2500 2017 for sale</a>
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
                <div class="col-lg-9">
                    <div class="box-car-detail">
                    <!-- <img src="{{asset('images/cardetail/sl1.jpg')}}" alt=""> -->
                        @include('buycar::pages.cars.car.components.infomation')
                        @include('buycar::pages.cars.car.components.payment')
                        @include('buycar::pages.cars.car.components.seller_infomation')
                        @include('buycar::pages.cars.car.components.description')
                        @include('buycar::pages.cars.car.components.social')
                        @include('buycar::pages.cars.car.components.specifications')
                        @include('buycar::pages.cars.car.components.services')
                        @include('buycar::pages.cars.car.components.tags')
                        <div style="clear:both;"></div>
                        <div class="line-gray"></div>
                        @include('buycar::pages.cars.car.components.recommend')
                        @include('buycar::pages.cars.car.components.safetips')
                        @include('buycar::pages.cars.car.components.same_model')
                        @include('buycar::pages.cars.car.components.same_price')
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- jQuery -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

    <!-- FlexSlider -->
    <script defer src="{{asset('flexslider/jquery.flexslider.js')}}"></script>

    <script type="text/javascript">
        $(function(){
            SyntaxHighlighter.all();
        });
        $(window).load(function(){
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 96,
                itemMargin: 5,
                asNavFor: '#slider'
            });

            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>


    <!-- Syntax Highlighter -->
    <script type="text/javascript" src="{{asset('flexslider/js/shCore.js')}}"></script>
    <script type="text/javascript" src="{{asset('flexslider/js/shBrushXml.js')}}"></script>
    <script type="text/javascript" src="{{asset('flexslider/js/shBrushJScript.js')}}"></script>

    <!-- Optional FlexSlider Additions -->
    <script src="{{asset('flexslider/js/jquery.easing.js')}}"></script>
    <script src="{{asset('flexslider/js/jquery.mousewheel.js')}}"></script>
    <script defer src="{{asset('flexslider/js/demo.js')}}"></script>
    <script src="{{asset('js/car.js')}}"></script>

    <!-- lightgallery.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@1.8.3/dist/js/lightgallery-all.min.js"></script>
    <script>
       $("#lightgallery").lightGallery();

    </script>

@endsection
