<div class="feautured-car mb-4">
    <p class="top-content mb-3">
        {{__('newcars.price_range_content')}}
    </p>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="border-bottom: 1px solid #ccc;">
        <li class="nav-item nav-tab-item nav-tab-active" role="presentation">
      <span class="btn-nav-tab active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home-1"
            type="button" role="tab" aria-controls="pills-home-1" aria-selected="true">Below ₱ 500K</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
      <span class="btn-nav-tab" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile-1"
            type="button" role="tab" aria-controls="pills-profile-1" aria-selected="false">₱ 500K - 1M</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
      <span class="btn-nav-tab" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-1"
            type="button" role="tab" aria-controls="pills-contact-1" aria-selected="false">₱ 1M - 2M</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
      <span class="btn-nav-tab" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile-1"
            type="button" role="tab" aria-controls="pills-profile-1" aria-selected="false">₱ 2M - 5M</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
      <span class="btn-nav-tab" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-1"
            type="button" role="tab" aria-controls="pills-contact-1" aria-selected="false">Above ₱ 5M</span>
        </li>

    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home-1" role="tabpanel" aria-labelledby="pills-home-tab-1">
            <div class="row">
                @foreach($products_price_range[0] as $product)
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
        <div class="tab-pane fade" id="pills-profile-1" role="tabpanel" aria-labelledby="pills-profile-tab-1">
            <div class="row">
                @foreach($products_price_range[1] as $product)
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
        <div class="tab-pane fade" id="pills-contact-1" role="tabpanel" aria-labelledby="pills-contact-tab-1">

            <div class="row">
                @foreach($products_price_range[2] as $product)
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
