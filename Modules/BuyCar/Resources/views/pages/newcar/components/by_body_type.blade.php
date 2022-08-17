<div class="feautured-car  mb-4">
    <p class="top-content mb-3">
        {{__('newcars.body_type_content')}}
    </p>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"
        style="border-bottom: 1px solid #ccc;">
        <li class="nav-item nav-tab-item nav-tab-active" role="presentation">
                                        <span class="btn-nav-tab active" id="pills-home-tab" data-bs-toggle="pill"
                                              data-bs-target="#pills-home" type="button" role="tab"
                                              aria-controls="pills-home" aria-selected="true">SUV / Crossover</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
                                        <span class="btn-nav-tab" id="pills-profile-tab" data-bs-toggle="pill"
                                              data-bs-target="#pills-profile" type="button" role="tab"
                                              aria-controls="pills-profile" aria-selected="false">MPV</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
                                        <span class="btn-nav-tab" id="pills-contact-tab" data-bs-toggle="pill"
                                              data-bs-target="#pills-contact" type="button" role="tab"
                                              aria-controls="pills-contact" aria-selected="false">Sedan</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
                                        <span class="btn-nav-tab" id="pills-profile-tab" data-bs-toggle="pill"
                                              data-bs-target="#pills-profile" type="button" role="tab"
                                              aria-controls="pills-profile" aria-selected="false">Hatchback</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
                                        <span class="btn-nav-tab" id="pills-contact-tab" data-bs-toggle="pill"
                                              data-bs-target="#pills-contact" type="button" role="tab"
                                              aria-controls="pills-contact" aria-selected="false">Wagon</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
                                        <span class="btn-nav-tab" id="pills-profile-tab" data-bs-toggle="pill"
                                              data-bs-target="#pills-profile" type="button" role="tab"
                                              aria-controls="pills-profile" aria-selected="false">Minivan</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
                                        <span class="btn-nav-tab" id="pills-contact-tab" data-bs-toggle="pill"
                                              data-bs-target="#pills-contact" type="button" role="tab"
                                              aria-controls="pills-contact" aria-selected="false">Van</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
                                        <span class="btn-nav-tab" id="pills-profile-tab" data-bs-toggle="pill"
                                              data-bs-target="#pills-profile" type="button" role="tab"
                                              aria-controls="pills-profile" aria-selected="false">Pickup</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
                                        <span class="btn-nav-tab" id="pills-contact-tab" data-bs-toggle="pill"
                                              data-bs-target="#pills-contact" type="button" role="tab"
                                              aria-controls="pills-contact" aria-selected="false">Commerical</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
                                        <span class="btn-nav-tab" id="pills-contact-tab" data-bs-toggle="pill"
                                              data-bs-target="#pills-contact" type="button" role="tab"
                                              aria-controls="pills-contact" aria-selected="false">Coupe /
                                            Convertible</span>
        </li>

    </ul>
    <div class="tab-content" id="pills-tabContent">

        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
             aria-labelledby="pills-home-tab">
            <div class="row">
                @foreach($products_body_type[0] as $product)
                <div class="col-lg-4 col-sm-6 col-6 mb-2">
                    <div class="wrap-car-nab-tab">
                        <a href="car/{{$product['id']}}"><div class="wrap-img">
                            <img src="{{asset($product['image_thumbnail'])}}" class="w-100" style="height: 172px;" alt="">
                        </div>
                        </a>
                        <div class="wrap-content">
                            <h3><a><a href="car/{{$product['id']}}">{{$product['sub_content']}}</a></a></h3>
                            <span>{{$product['price_min']}} - {{$product['price_real']}}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>


        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
             aria-labelledby="pills-profile-tab">
            <div class="row">
                @foreach($products_body_type[1] as $product)
                    <div class="col-lg-4 col-sm-6 col-6 mb-2">
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
        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
             aria-labelledby="pills-contact-tab">
            <div class="row">
                @foreach($products_body_type[1] as $product)
                    <div class="col-lg-4 col-sm-6 col-6 mb-2">
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
</div>
