<div class="car-gui-home-tab">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-gui-car active-car-gui btn-fix" id="nav-home-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                    aria-selected="true">{{__('newcars.car_brand')}}</button>
            <button class="nav-gui-car btn-fix" id="nav-profile-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-profile" type="button" role="tab"
                    aria-controls="nav-profile" aria-selected="false">{{__('newcars.body_type')}}</button>
            <button class="nav-gui-car btn-fix" id="nav-contact-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-contact" type="button" role="tab"
                    aria-controls="nav-contact" aria-selected="false">{{__('newcars.price_range')}}</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
             aria-labelledby="nav-home-tab">
            <div class="row mb-3 mt-3">
                @foreach($brands as $brand)

                <div class="col-custom">
                    <div class="border item">
                        <img src="{{asset($brand->images)}}"  height="83px" width="152px" alt="">
                        <p>{{$brand->name}}</p>
                    </div>
                </div>
                @endforeach
{{--                <div class="col-custom">--}}
{{--                    <div class="border item">--}}
{{--                        <img src="{{asset('images/newcar/mg.png')}}" alt="">--}}
{{--                        <p>MG</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-custom">--}}
{{--                    <div class="border item">--}}
{{--                        <img src="{{asset('images/newcar/chery.png')}}" alt="">--}}
{{--                        <p>Chery</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-custom">--}}
{{--                    <div class="border item">--}}
{{--                        <img src="{{asset('images/newcar/mitsubishi.png')}}" alt="">--}}
{{--                        <p>Mitsubishi</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-custom">--}}
{{--                    <div class="border item">--}}
{{--                        <img src="{{asset('images/newcar/isuzu.png')}}" alt="">--}}
{{--                        <p>Isuzu</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-custom">--}}
{{--                    <div class="border item">--}}
{{--                        <img src="{{asset('images/newcar/ford.png')}}" alt="">--}}
{{--                        <p>Ford</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-custom">--}}
{{--                    <div class="border item">--}}
{{--                        <img src="{{asset('images/review/toyota.png')}}" alt="">--}}
{{--                        <p>Toyota</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-custom">--}}
{{--                    <div class="border item">--}}
{{--                        <img src="{{asset('images/newcar/honda.png')}}" alt="">--}}
{{--                        <p>Honda</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-custom">--}}
{{--                    <div class="border item">--}}
{{--                        <img src="{{asset('images/newcar/mazda.png')}}" alt="">--}}
{{--                        <p>Mazda</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-custom">--}}
{{--                    <div class="border item">--}}
{{--                        <img src="{{asset('images/newcar/kia.png')}}" alt="">--}}
{{--                        <p>Kiz</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>




        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel"
             aria-labelledby="nav-profile-tab">
            <div class="row mb-3 mt-3">
                <div class="col-custom-1">
                    <div class="border item">
                        <img src="{{asset('images/review/commercial.png')}}" alt="">
                        <p>Commercial</p>
                    </div>
                </div>
                <div class="col-custom-1">
                    <div class="border item">
                        <img src="{{asset('images/review/commercial.png')}}" alt="">
                        <p>Commercial</p>
                    </div>
                </div>
                <div class="col-custom-1">
                    <div class="border item">
                        <img src="{{asset('images/review/commercial.png')}}" alt="">
                        <p>Commercial</p>
                    </div>
                </div>
                <div class="col-custom-1">
                    <div class="border item">
                        <img src="{{asset('images/review/commercial.png')}}" alt="">
                        <p>Commercial</p>
                    </div>
                </div>
                <div class="col-custom-1">
                    <div class="border item">
                        <img src="{{asset('images/review/commercial.png')}}" alt="">
                        <p>Commercial</p>
                    </div>
                </div>

                <div class="col-custom-1">
                    <div class="border item">
                        <img src="{{asset('images/review/commercial.png')}}" alt="">
                        <p>Commercial</p>
                    </div>
                </div>
                <div class="col-custom-1">
                    <div class="border item">
                        <img src="{{asset('images/review/commercial.png')}}" alt="">
                        <p>Commercial</p>
                    </div>
                </div>
                <div class="col-custom-1">
                    <div class="border item">
                        <img src="{{asset('images/review/commercial.png')}}" alt="">
                        <p>Commercial</p>
                    </div>
                </div>
                <div class="col-custom-1">
                    <div class="border item">
                        <img src="{{asset('images/review/commercial.png')}}" alt="">
                        <p>Commercial</p>
                    </div>
                </div>
                <div class="col-custom-1">
                    <div class="border item">
                        <img src="{{asset('images/review/commercial.png')}}" alt="">
                        <p>Commercial</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel"
             aria-labelledby="nav-contact-tab">
            <div class="row mt-3">
                <div class="col-price-custom price-range">
                    <a href="#" class="border rounded">Below ₱ 500K</a>
                </div>
                <div class="col-price-custom price-range">
                    <a href="#">₱ 500K - 1M</a>
                </div>
                <div class="col-price-custom price-range">
                    <a href="#">₱ 1M - 2M</a>
                </div>
                <div class="col-price-custom price-range">
                    <a href="#">₱ 2M - 5M</a>
                </div>
                <div class="col-price-custom price-range">
                    <a href="#">Above ₱ 5M</a>
                </div>
            </div>
        </div>
    </div>
</div>
