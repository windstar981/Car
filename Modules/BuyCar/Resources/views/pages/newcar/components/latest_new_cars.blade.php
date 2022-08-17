<div class="feautured-car mb-4">
    <p class="top-content mb-3">
        {{__('newcars.promotions_content')}}

    </p>
    <div class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="border-bottom: 1px solid #ccc;">
        <div class="nav-item nav-tab-item nav-tab-active" role="presentation">
            <span class="btn-nav-tab active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home-4" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All brands</span>
        </div>
        <div class="nav-item nav-tab-item" role="presentation">
            <span class="btn-nav-tab" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile-4" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Toyota</span>
        </div>
        <div class="nav-item nav-tab-item" role="presentation">
            <span class="btn-nav-tab" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-4" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">MG</span>
        </div>
        <div class="nav-item nav-tab-item" role="presentation">
            <span class="btn-nav-tab" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile-4" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Chery</span>
        </div>
        <div class="nav-item nav-tab-item" role="presentation">
            <span class="btn-nav-tab" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-4" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Mitsubishi</span>
        </div>
        <div class="nav-item nav-tab-item" role="presentation">
            <span class="btn-nav-tab" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile-4" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Isuzu</span>
        </div>
        <div class="nav-item nav-tab-item" role="presentation">
            <span class="btn-nav-tab" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-4" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Ford</span>
        </div>
        <div class="nav-item nav-tab-item" role="presentation">
            <span class="btn-nav-tab" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile-4" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Honda</span>
        </div>
        <div class="nav-item nav-tab-item" role="presentation">
            <span class="btn-nav-tab" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-4" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Mazda</span>
        </div>
        <div class="nav-item nav-tab-item" role="presentation">
            <span class="btn-nav-tab" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-4" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Kia</span>
        </div>
        <div class="nav-item nav-tab-item" role="presentation">
            <span class="btn-nav-tab" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile-4" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Hyundai</span>
        </div>
        <div class="nav-item nav-tab-item" role="presentation">
            <span class="btn-nav-tab" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-4" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Hyundai</span>
        </div>
        <div class="nav-item nav-tab-item" role="presentation">
            <span class="btn-nav-tab" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-4" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Suzuki</span>
        </div>

    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home-4" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">
                @foreach($latest_new_car[0] as $product)
                    <div class="col-lg-4 col-sm-6 col-6 mb-3">
                        <div class="wrap-car-nab-tab">
                            <a href="car/{{$product['id']}}"><div class="wrap-img">
                                    <img src="{{asset($product['image_thumbnail'])}}" class="w-100" style="height: 172px;" alt="">
                                </div>
                            </a>
                            <div class="wrap-content">
                                <h3><a href="car/{{$product['id']}}">{{$product['sub_content']}}</a></h3>
                                <span>{{$product['price_min']}} - {{$product['price_real']}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
        <div class="tab-pane fade" id="pills-profile-4" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row">
                @foreach($latest_new_car[1] as $product)
                    <div class="col-lg-4 col-sm-6 col-6 mb-3">
                        <div class="wrap-car-nab-tab">
                            <a href="car/{{$product['id']}}"><div class="wrap-img">
                                    <img src="{{asset($product['image_thumbnail'])}}" class="w-100" style="height: 172px;" alt="">
                                </div>
                            </a>
                            <div class="wrap-content">
                                <h3><a href="car/{{$product['id']}}">{{$product['sub_content']}}</a></h3>
                                <span>{{$product['price_min']}} - {{$product['price_real']}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact-4" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row">
                @foreach($latest_new_car[2] as $product)
                    <div class="col-lg-4 col-sm-6 col-6 mb-3">
                        <div class="wrap-car-nab-tab">
                            <a href="car/{{$product['id']}}"><div class="wrap-img">
                                    <img src="{{asset($product['image_thumbnail'])}}" class="w-100" style="height: 172px;" alt="">
                                </div>
                            </a>
                            <div class="wrap-content">
                                <h3><a href="car/{{$product['id']}}">{{$product['sub_content']}}</a></h3>
                                <span>{{$product['price_min']}} - {{$product['price_real']}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="text-center mt-2">
        <a class="view-all rounded-pill border">{{__('newcars.view_all')}}</a>
    </div>
</div>
