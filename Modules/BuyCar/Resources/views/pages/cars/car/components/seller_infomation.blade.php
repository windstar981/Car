<div class="box-pric-seller  mt-4 border">
    <h4>{{__('car.seller_information')}}</h4>
    <div class="seller-info">
        <div class="row">
            <div class="col-lg-8">
                <ul class="ul-sell">
                    <li class="head-acc mb-3">
                        @if($seller->avatar=='default')
                            <img src="{{asset('images/cardetail/avt-default.png')}}" alt="">
                        @else
                            <img src="{{asset($seller->avatar)}}" alt="">
                        @endif
                        <div class="small">
                            <h4 class="title">
                                <span class="name">
                                    {{$seller->name}}
                                </span>
                                <span class="loca">
                                    | {{$seller->address}}
                                </span>
                            </h4>
                            <div class="wrap-icon">
                                <span class="icon-check"><i class="fa-solid fa-circle-check"></i>Certified
                                    Seller</span>
                                <span class="icon-check"><i class="fa-solid fa-circle-check"></i>Verified
                                    Number</span>
                            </div>
                        </div>
                    </li>
                    <li><span class="color-icon">
                            <i class="fa-solid fa-envelope"></i>amcarsph@gmail.com
                        </span></li>
                    <li><span class="color-icon">
                            <i class="fa-solid fa-location-dot"></i></i>
                            {{$seller->address}}
                            <a href="#">Directions</a>
                        </span></li>
                    <li><span class="color-icon">
                            <i class="fa-brands fa-facebook"></i><a href="#">Seller's FB
                                page</a>
                        </span></li>
                    <li><span class="color-icon">
                            <i class="fa-solid fa-clock"></i>{{__('car.last_login')}}: 15 hours ago days
                            ago
                        </span></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="seller-inf-btn mt-3">
                    <p class="make-an-offer"><i class="fa-solid fa-dollar-sign"></i>{{__('car.make_an_offer')}}</p>
                    <p class="tel-number sel-pc"><i class="fa-solid fa-phone"></i>{{$seller->phone}}</p>
                    <p class="tel-number sel-mb"><i class="fa-solid fa-phone"></i>Call Seller</p>
                    <p class="chat-with-seller sel-pc"><i
                            class="fa-solid fa-comment-dots"></i></i>{{__('car.chat_with_seller')}}</p>
                    <p class="chat-with-seller sel-mb"><i class="fa-solid fa-comment-dots"></i>SMS</p>
                    <p class="listing-seller sel-pc"><i class="fa-solid fa-list"></i>{{__('car.list_from_seller')}}</p>
                    <p class="listing-seller sel-mb"><i class="fa-solid fa-comments"></i>
                        {{__('car.chat')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
