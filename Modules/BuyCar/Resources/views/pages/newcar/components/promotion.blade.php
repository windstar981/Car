<div class="feautured-car feautured-car-pc mb-4 mt-3">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="border-bottom: 1px solid #ccc;">
        <li class="nav-item nav-tab-item nav-tab-active" role="presentation">
      <span class="btn-nav-tab active" id="pills-home-tab-3" data-bs-toggle="pill" data-bs-target="#pills-home-2"
            type="button" role="tab" aria-controls="pills-home-2" aria-selected="true">All brands</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
      <span class="btn-nav-tab" id="pills-profile-tab-3" data-bs-toggle="pill" data-bs-target="#pills-profile-2"
            type="button" role="tab" aria-controls="pills-profile-2" aria-selected="false">Toyota</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
      <span class="btn-nav-tab" id="pills-contact-tab-3" data-bs-toggle="pill" data-bs-target="#pills-contact-2"
            type="button" role="tab" aria-controls="pills-contact-2" aria-selected="false">Suzuki</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
      <span class="btn-nav-tab" id="pills-profile-tab-3" data-bs-toggle="pill" data-bs-target="#pills-profile-2"
            type="button" role="tab" aria-controls="pills-profile-2" aria-selected="false">Mitsubishi</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
      <span class="btn-nav-tab" id="pills-contact-tab-3" data-bs-toggle="pill" data-bs-target="#pills-contact-2"
            type="button" role="tab" aria-controls="pills-contact-2" aria-selected="false">Honda</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
      <span class="btn-nav-tab" id="pills-contact-tab-3" data-bs-toggle="pill" data-bs-target="#pills-contact-2"
            type="button" role="tab" aria-controls="pills-contact-2" aria-selected="false">Ford</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
      <span class="btn-nav-tab" id="pills-contact-tab-3" data-bs-toggle="pill" data-bs-target="#pills-contact-2"
            type="button" role="tab" aria-controls="pills-contact-2" aria-selected="false">Nissan</span>
        </li>
        <li class="nav-item nav-tab-item" role="presentation">
      <span class="btn-nav-tab" id="pills-contact-tab-3" data-bs-toggle="pill" data-bs-target="#pills-contact-2"
            type="button" role="tab" aria-controls="pills-contact-2" aria-selected="false">Isuzi</span>
        </li>

        <li class="nav-item nav-tab-item-select" role="presentation">
      <span class="btn-nav-tab" id="pills-contact-tab-3" data-bs-toggle="pill" data-bs-target="#pills-contact-2"
            type="button" role="tab" aria-controls="pills-contact-2" aria-selected="false">
        <select name="cars" id="cars">
          <option value="volvo">Promotion type</option>
          <option value="saab">All Promotion Type</option>
          <option value="opel">Downpayment</option>
          <option value="audi">Monthly payment</option>
        </select>
      </span>
        </li>
        <li class="nav-item nav-tab-item-select" role="presentation">
      <span class="btn-nav-tab" id="pills-contact-tab-3" data-bs-toggle="pill" data-bs-target="#pills-contact-2"
            type="button" role="tab" aria-controls="pills-contact-2" aria-selected="false">
        <select name="cars" id="cars">
          <option value="volvo">Price range</option>
          <option value="saab">₱500,000</option>
          <option value="opel">₱500,000 - ₱1,000,000</option>
          <option value="audi">₱2,000,000 - ₱5,000,000</option>
        </select>
      </span>
        </li>


    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home-2" role="tabpanel" aria-labelledby="pills-home-tab-2">
            <div class="row">
                @foreach($promotions_partners[0] as $product)
                <div class="col-lg-4 col-sm-6 col-6 mb-3">
                    <a href="car/{{$product['id']}}">
                        <div class="pf-wrap-img">
                        <span class="icon-special position-absolute"> <i class="fa-solid fa-star"></i> Special Promo</span>
                        <img src="{{asset($product['image_thumbnail'])}}" class="w-100" alt="">
                        </div>
                    </a>
                    <div class="pf-wrap-content">

                        <h3 class="title"><a href="car/{{$product['id']}}"
                                href="/toyota-hilux-promotions-in-the-philippines/24-g-dsl-4x2-at-monthly-payment-dpid31844"
                                title="Toyota Hilux  2.4 G DSL 4x2 A/T With ₱22,322 Low monthly">
                                {{$product['sub_content']}}
                            </a></h3>
                        <div class="price">{{$product['price_min']}} Low monthly</div>
                        <div class="list">
                            <p class="text text-loc" title="Nationwide">
                                <i class="fa-solid fa-location-dot"></i> {{$product['location']}}
                            </p>
                            <p class="text"><i class="fa-solid fa-calendar-days"></i> 24 days left</p>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>


        </div>
        <div class="tab-pane fade" id="pills-profile-2" role="tabpanel" aria-labelledby="pills-profile-tab-3">
            <div class="row">
                @foreach($promotions_partners[1] as $product)
                    <div class="col-lg-4 col-sm-6 col-6 mb-3">
                        <a href="car/{{$product['id']}}">
                            <div class="pf-wrap-img">
                            <span class="icon-special position-absolute"> <i class="fa-solid fa-star"></i> Special Promo</span>
                            <img src="{{asset($product['image_thumbnail'])}}" class="w-100" alt="">
                            </div>
                        </a>
                        <div class="pf-wrap-content">

                            <h3 class="title"><a href="car/{{$product['id']}}"
                                    href="/toyota-hilux-promotions-in-the-philippines/24-g-dsl-4x2-at-monthly-payment-dpid31844"
                                    title="Toyota Hilux  2.4 G DSL 4x2 A/T With ₱22,322 Low monthly">
                                    {{$product['sub_content']}}
                                </a></h3>
                            <div class="price">{{$product['price_min']}} Low monthly</div>
                            <div class="list">
                                <p class="text text-loc" title="Nationwide">
                                    <i class="fa-solid fa-location-dot"></i> {{$product['location']}}
                                </p>
                                <p class="text"><i class="fa-solid fa-calendar-days"></i> 24 days left</p>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact-2" role="tabpanel" aria-labelledby="pills-contact-tab-3">
            <div class="row">
                @foreach($promotions_partners[2] as $product)
                    <div class="col-lg-4 col-sm-6 col-6 mb-3">
                        <a href="car/{{$product['id']}}">
                            <div class="pf-wrap-img">
                            <span class="icon-special position-absolute"> <i class="fa-solid fa-star"></i> Special Promo</span>
                            <img src="{{asset($product['image_thumbnail'])}}" class="w-100" alt="">
                            </div>
                        </a>
                        <div class="pf-wrap-content">

                            <h3 class="title"><a href="car/{{$product['id']}}"
                                    href="/toyota-hilux-promotions-in-the-philippines/24-g-dsl-4x2-at-monthly-payment-dpid31844"
                                    title="Toyota Hilux  2.4 G DSL 4x2 A/T With ₱22,322 Low monthly">
                                    {{$product['sub_content']}}
                                </a></h3>
                            <div class="price">{{$product['price_min']}} Low monthly</div>
                            <div class="list">
                                <p class="text text-loc" title="Nationwide">
                                    <i class="fa-solid fa-location-dot"></i> {{$product['location']}}
                                </p>
                                <p class="text"><i class="fa-solid fa-calendar-days"></i> 24 days left</p>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <div class="text-center">
        <a class="view-all rounded-pill border">{{__('newcars.view_all')}}</a>
    </div>
</div>
<div class="feautured-car-mb">
    <div class="row">
        <div class="col-6 mb-2">
            <select class="form-select" aria-label="Default select example">
                <option selected>All brand</option>
                <option value="1">Toyota</option>
                <option value="2">Suzuki</option>
                <option value="3">Honda</option>
            </select>
        </div>
        <div class="col-6 mb-2">
            <a href="#" class="location"><i class="fa-solid fa-location-dot"></i> Current position</a>
        </div>
        <div class="col-6">
            <select class="form-select" aria-label="Default select example">
                <option selected>Promotion type</option>
                <option value="1">All Promotion Type</option>
                <option value="2">Downpayment</option>
                <option value="3">Monthly payment</option>
            </select>
        </div>
        <div class="col-6">
            <select class="form-select" aria-label="Default select example">
                <option selected>Price range</option>
                <option value="1">₱500,000 - ₱1,000,000</option>
                <option value="2">₱1,000,000 - ₱2,000,000</option>
                <option value="3">₱2,000,000 - ₱5,000,000</option>
            </select>
        </div>
    </div>

    <div class="slide-mb mt-2">
        <div
            class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-backface-hidden">
            <div class="swiper-wrapper" id="swiper-wrapper-471392fff2f257d8" aria-live="polite"
                 style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                <div class="swiper-slide res-feature swiper-slide-active" style="margin-right: 30px;">
                    <div class="photo-mb">
                        <a href="#">
                            <img src="{{asset('images/newcar/mb1.jpg')}}" class="w-100" data-loaded="true"> </a>
                    </div>
                    <div class="info-mb">
                        <h3 class="title">
  href=car/{{$product['id']}}                           <a href="#">Toyota Rush G AT
                                With ₱89,000 All-in Down payment</a>
                        </h3>
                        <div class="price">₱89,000 Down payment</div>
                        <div class="list d-flex">
                            <p class="text text-loc"><i class="fa-solid fa-location-dot"></i> Nueva Ecija</p>
                            <p class="text"><i class="fa-solid fa-calendar-days"></i> 13 days left</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide res-feature swiper-slide-next" style="margin-right: 30px;">
                    <div class="photo-mb">
                        <a href="#">
                            <img src="{{asset('images/newcar/mb3.jpg')}}" class="w-100" data-loaded="true"> </a>
                    </div>
                    <div class="info-mb">
                        <h3 class="title">
  href=car/{{$product['id']}}                           <a href="#">Toyota Rush G AT
                                With ₱89,000 All-in Down payment</a>
                        </h3>
                        <div class="price">₱89,000 Down payment</div>
                        <div class="list d-flex">
                            <p class="text text-loc"><i class="fa-solid fa-location-dot"></i> Nueva Ecija</p>
                            <p class="text"><i class="fa-solid fa-calendar-days"></i> 13 days left</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide res-feature" style="margin-right: 30px;">
                    <div class="photo-mb">
                        <a href="#">
                            <img src="{{asset('images/newcar/mb2.jpg')}}" class="w-100" data-loaded="true"> </a>
                    </div>
                    <div class="info-mb">
                        <h3 class="title">
  href=car/{{$product['id']}}                           <a href="#">Toyota Rush G AT
                                With ₱89,000 All-in Down payment</a>
                        </h3>
                        <div class="price">₱89,000 Down payment</div>
                        <div class="list d-flex">
                            <p class="text text-loc"><i class="fa-solid fa-location-dot"></i> Nueva Ecija</p>
                            <p class="text"><i class="fa-solid fa-calendar-days"></i> 13 days left</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide res-feature" style="margin-right: 30px;">
                    <div class="photo-mb">
                        <a href="#">
                            <img src="{{asset('images/newcar/mb3.jpg')}}" class="w-100" data-loaded="true"> </a>
                    </div>
                    <div class="info-mb">
                        <h3 class="title">
  href=car/{{$product['id']}}                           <a href="#">Toyota Rush G AT
                                With ₱89,000 All-in Down payment</a>
                        </h3>
                        <div class="price">₱89,000 Down payment</div>
                        <div class="list d-flex">
                            <p class="text text-loc"><i class="fa-solid fa-location-dot"></i> Nueva Ecija</p>
                            <p class="text"><i class="fa-solid fa-calendar-days"></i> 13 days left</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide res-feature" style="margin-right: 30px;">
                    <div class="photo-mb">
                        <a href="#">
                            <img src="{{asset('images/newcar/mb4.png')}}" class="w-100" data-loaded="true"> </a>
                    </div>
                    <div class="info-mb">
                        <h3 class="title">
  href=car/{{$product['id']}}                           <a href="#">Toyota Rush G AT
                                With ₱89,000 All-in Down payment</a>
                        </h3>
                        <div class="price">₱89,000 Down payment</div>
                        <div class="list d-flex">
                            <p class="text text-loc"><i class="fa-solid fa-location-dot"></i> Nueva Ecija</p>
                            <p class="text"><i class="fa-solid fa-calendar-days"></i> 13 days left</p>
                        </div>
                    </div>
                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>

</div>
