<div class="line-gray container"></div>
<div class="box-home-car">
    <div class="container gui-pc">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="tab-btn-no-active tab-btn-active active-car" id="pills-home-tab"
                        data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                        aria-controls="pills-home" aria-selected="true">{{__('home.new_cars_guid')}}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="tab-btn-no-active active-car" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">{{__('home.used_for_sale')}}</button>
            </li>

        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                 aria-labelledby="pills-home-tab">
                <a href="#" class="view-all-new-cars">{{__('home.view_all_guide')}}</a>
                <div class="row mt-4">
                    @foreach($products_new as $product_new)
                        <div class="col-3 mb-3">
                            <a href="/car/{{$product_new->id}}">
                                <div class="box-car border">
                                    <div class="box-car-img">
{{--                                        <img src="{{asset('images/home/img_tesst.png')}}" class="img-fluid" style="width:100%; height:152px; object-fit: cover;" alt="">--}}
                                        <img src="{{asset($product_new->image_thumbnail)}}" class="img-fluid" style="width:100%; height:152px; object-fit: cover;" alt="">
                                    </div>
                                    <div class="box-car-content">
                                        <p class="box-car-content-main">{{$product_new->sub_content}}</p>
                                        <p class="box-car-content-price">{{$product_new->price_min}}
                                            - {{$product_new->price_real}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <a href="#" class="view-all-new-cars">{{__('home.view_all_sale')}}</a>
                <div class="row mt-4">
                    @foreach($products_used as $product_used)
                        <div class="col-3 mb-3">
                            <a href="/car/{{$product_used->id}}">
                                <div class="box-car border">
                                    <div class="box-car-img">
                                        <img src="{{asset($product_used->image_thumbnail)}}" class="img-fluid"
                                             width="270px" height="152px" alt="">
                                    </div>
                                    <div class="box-car-content">
                                        <p class="box-car-content-main">{{$product_used->sub_content}}</p>
                                        <p class="box-car-content-price">{{$product_used->price_min}}
                                            - {{$product_used->price_real}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach


                </div>
            </div>

        </div>
    </div>
    <div class="container gui-mb ">
        <h3>Car News Guide</h3>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach($products_new as $product)
                    <div class="swiper-slide res-feature">
                        <div class="box-car ">

                            <div class="box-car-img">
                                <img src="{{asset($product->image_thumbnail)}}" style="height: 131px" class="img-fluid"
                                     alt="">
                            </div>
                            <div class="box-car-content">
                                <p class="box-car-content-main">{{$product->sub_content}}</p>
                                <p class="box-car-content-price">{{$product->price_min}} - {{$product->price_real}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="swiper-slide res-feature">
                    <div class="box-car">
                        <div class="box-car-img text-center"
                             style="height: 212px; padding-top: 85px; background-color: #f5f5f5;">
                            <a href="#" class="text" title="New cars for sale">
                                <i class="fa-solid fa-plus"></i>
                                View more <br> new cars guide
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->
    </div>
    <div class="container gui-mb mt-1">
        <h3>Used cars for sale</h3>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach($products_used as $product)
                    <div class="swiper-slide res-feature">
                        <div class="box-car">
                            <div class="box-car-img">
                                <img src="{{asset($product->image_thumbnail)}}" style="height: 131px" class="img-fluid"
                                     alt="">
                            </div>
                            <div class="box-car-content">
                                <p class="box-car-content-main">{{$product->sub_content}}</p>
                                <p class="box-car-content-price">{{$product->price_min}} - {{$product->price_real}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="swiper-slide res-feature">
                    <div class="box-car">
                        <div class="box-car-img">
                            <img src="images/home/c3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="box-car-content">
                            <p class="box-car-content-main">Toyota Hiace</p>
                            <p class="box-car-content-price">₱ 1,679,000 - ₱ 2,364,000</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide res-feature">
                    <div class="box-car">
                        <div class="box-car-img">
                            <img src="images/home/c5.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="box-car-content">
                            <p class="box-car-content-main">Mitsubishi Strada</p>
                            <p class="box-car-content-price">₱ 1,250,000 - ₱ 1,764,000</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide res-feature">
                    <div class="box-car">
                        <div class="box-car-img">
                            <img src="images/home/c6.png" class="img-fluid" alt="">
                        </div>
                        <div class="box-car-content">
                            <p class="box-car-content-main">Honda Brio</p>
                            <p class="box-car-content-price">₱ 601,000 - ₱ 735,000</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide res-feature">
                    <div class="box-car">
                        <div class="box-car-img">
                            <img src="images/home/c6.png" class="img-fluid" alt="">
                        </div>
                        <div class="box-car-content">
                            <p class="box-car-content-main">Honda Brio</p>
                            <p class="box-car-content-price">₱ 601,000 - ₱ 735,000</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-slide text-center">
                    <div class="view-more-s mt-5">
                        <a href="#" class="text" title="New cars for sale">
                            <i class="fa-solid fa-plus"></i>
                            View more <br> used car for sale
                        </a>
                    </div>
                </div>   -->
                <div class="swiper-slide res-feature">
                    <div class="box-car">
                        <div class="box-car-img text-center"
                             style="height: 212px; padding-top: 85px; background-color: #f5f5f5;">
                            <a href="#" class="text" title="New cars for sale">
                                <i class="fa-solid fa-plus"></i>
                                View more <br> used car for sale
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
