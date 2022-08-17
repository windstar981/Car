<div class="header mb-4" style="z-index: 1">
    <h1>{{$car->sub_content}}</h1>
    <p>{{__('car.posted_on')}}: {{ Carbon\Carbon::parse($car->created_at)->format('d-m-Y')}}</p>
    <p>{{__('car.product')}}: <span>{{$car->name}}</span></p>
    <div class="d-flex justify-content-end social social-pc">
        <a href="#" class="btn-primary"><i class="fa-solid fa-thumbs-up"></i> Like 0</a>
        <a href="#" class="btn-primary"><i class="fa-solid fa-share"></i> Share</a>
        <a href="#" class="btn-info" style="margin-right: 0px;"><i class="fa-brands fa-twitter"></i></i> Twitter</a>
    </div>
</div>
<div class="box-photo-parameter">
    <div class="row">
{{--        thêm slide zoom--}}
        <div id="lightgallery">
            @foreach($images as $image)
            <a
                href="{{asset($image->url)}}">
                <img class="img-thumbnail"
                     src="{{asset($image->url)}}">
            </a>
            @endforeach
        </div>
{{--        end thêm slide zoom--}}
        <div class="col-lg-8 box-left">
            <section>
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        @foreach($images as $image)
                        <li>
                            <img src="{{asset($image->url)}}" class="myImgSlide" style="height: 380px;" class="active-slide" />
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div id="carousel" class="flexslider">
                    <ul class="slides">
                        @foreach($images as $image)
                            <li>
                                <img src="{{asset($image->url)}}" />
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </div>
        <div id="myModalImg" class="modalImg d-none">
            <img class="modal-content-img" id="img01">
            <div id="captionImg"></div>
        </div>
        <div class="col-lg-4 box-right">
            <div class="header header-mb">
                <h1>{{$car->name}}</h1>
                <span class="date-time"><i class="fa-solid fa-clock"></i>
                    {{Carbon\Carbon::parse($car->created_at)->format('d-m-Y')}}</span>
                <span class="location"><i class="fa-solid fa-location-dot"></i> $car->address</span>
                <p class="pt-2">{{__('car.product')}}: <span>{{$car->sub_content}}</span></p>
            </div>
            <p class="price">
                {{($car->price_min)}}
            </p>
            <p class="price-drop-alert">{{__('car.price_drop_alert')}} </p>
            <p class="check-new-car">{{__('car.check_new_price')}}</p>
            <ul class="mb-list-info">
                @if($car->brand_id>1)
                    <li><span><i class="fa-solid fa-car"></i></span>
                        <span>
                        {{-- {{$car['brand_name']}}--}}
                    </span>
                    </li>
                @endif
                @if($car->model_id>1)
                    <li><span><i class="fa-solid fa-car"></i></span>
                        <span>
                        {{-- {{$car['model_name']}}--}}
                    </span>
                    </li>
                @endif
                <li><span><i class="fa-solid fa-calendar-days"></i></span><span>{{$attribute->vehicle_year}}</span>
                </li>
                <li><span><i class="icon car"></i></span><span>
                        {{__('attributes.'.$attribute->vehicle_status)}}
                    </span></li>
                <li><span><i class="icon transmission"></i></span>
                    <span>{{__('attributes.'.$attribute->vehicle_gear)}}</span>
                </li>
                <li><span><i class="fa-solid fa-gas-pump"></i></span><span>{{__('attributes.'.$attribute->vehicle_fuel)}}</span>
                <li><span><i class="icon car"></i></span><span>{{__('attributes.'.$attribute->vehicle_style)}}</span>
                <li><span><i class="fa-solid fa-flag-checkered"></i></span><span>{{__('attributes.'.$attribute->vehicle_origin)}}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
