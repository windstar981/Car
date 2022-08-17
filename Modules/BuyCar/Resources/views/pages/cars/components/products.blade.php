<div class="tab-content" style="clear:right;" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <!-- car -->
        <div class="result-search content-small content-list">

            <div class="box-list-product mt-5">

                <div class="list-product-row grid-list">
                    <div class="box-text-carforsale">
                        <!-- show more js-->
                    </div>
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-4 mb-3">
                                <div class="item">
                                    <div class="photo">
                                        <span class="used">{{__('cars.used')}}</span>
                                        <i class="fa-solid fa-heart auto_saved"></i>
                                        <a href="/car/{{$product->id}}" class="img">
                                            <img class="lazy-hidden lazy-load-success w-100" height=""
                                                 src="{{asset($product->image_thumbnail)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="small">
                                        <div class="infor">
                                            <h2 class="title diamond">
                                                <a href="/car/{{$product->id}}">{{$product->sub_content}}</a>
                                            </h2>
                                            <p class="location">
                                                <i class="fa-solid fa-location-dot"></i>
                                                {{$product->location}}
                                            </p>
                                            <p class="price height28">
                                                <span>{{$product->price_min}}</span>
                                            </p>
                    <p class="list-parameter height16">
                      <span class="Transmission">
                        <i class="icon"></i>
                        {{json_decode($product->attribute)->vehicle_gear}}
                      </span>
                            <span class="mileage ">
                                <i class="icon-gauge"></i>
                                @if($product->gauge!=1)
                                    {{$product->gauge}}
                                @endif
                            </span>
                    </p>
                    <p class="verify-registration height16"></p>
                        <div class="box-r">
                            <button class="btn-make"> {{__('cars.make_an_offer')}}</button>
                            <button class="btn-call">{{__('cars.call_now')}}</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
                        @endforeach
                        <div class="page">
                            <ul class="paging">
                                <?php
                                if (isset($_GET['page'])) {
                                    $page_current = $_GET['page'];
                                    $active_page = $_GET['page'];
                                    if ($page_current == $number_paginate) {
                                        $page_current = $number_paginate - 3;
                                    }
                                } else {
                                    $page_current = 1;
                                    $active_page = 1;

                                }
                                if ($active_page == 1) {
                                    $page_end = 5;
                                } elseif ($active_page == 2) {
                                    $page_end = $page_current + 2;
                                    $page_current -= 1;
                                } elseif ($active_page > $number_paginate - 2) {
                                    $page_end = $number_paginate;
                                    $page_current -= 2;
                                } else {
                                    $page_end = $page_current + 2;
                                    $page_current -= 2;
                                }
                                ?>
                                @if($active_page > 1)
                                    <li>
                                        <a href="/cars?page={{1}}">
                                            <i class="fa-solid fa-angles-left"></i>
                                        </a>
                                    </li>
                                    @if($active_page>2)
                                        <li>
                                            <a href="/cars?page={{$active_page-1}}">
                                                <i class="fa-solid fa-chevron-left"></i>
                                            </a>
                                        </li>
                                    @endif
                                @endif

                                @for($i = $page_current ; $i<=$page_end ; $i++) @if($i==$active_page) <li>
                                    <a href="/cars?page={{$i}}" class="active">{{$i}}</a>
                                </li>
                                @else
                                    <li>
                                        <a href="/cars?page={{$i}}" class="">{{$i}}</a>
                                    </li>
                                @endif
                                @endfor
                                @if($active_page<= $number_paginate-2) <li>
                                    <a href="/cars?page={{$active_page+1}}">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                </li>
                                @endif

                                @if($active_page <= $number_paginate-1) <li>
                                    <a href="/cars?page={{$number_paginate}}">
                                        <i class="fa-solid fa-angles-right"></i>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end car -->
    </div>
    <div class="tab-pane fade mt-5" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="d-flex flex-column bd-highlight">
            @foreach($products as $product)
                <div class="p-2 bd-highlight  border rounded box-car-tab" style="height: 190px;">
                    <div class="d-flex flex-row bd-highlight mb-3">
                        <div class="p-2 bd-highlight " style="with:30% !important;">
                            <div class="position-absolute top-favorite">
                                <i class="fa-solid fa-heart auto_saved"></i>
                                <span class="used">{{__('cars.used')}}</span>
                            </div>
                            <a href="/car/{{$product->id}}"><img src="{{asset($product->image_thumbnail)}}" width="270px" height="152px"
                                                                 alt=""></a>
                        </div>
                        <div class=" p-2 bd-highlight box-car-main-content-tab2 " style=" ">
                            <h2>
                                <a href="/car/{{$product->id}}">
                                    {{$product->sub_content}}
                                </a>
                            </h2>
                            <p class="pos"><i class="fa-solid fa-location-dot"></i>{{$product->location}}</p>
                            <p class="price">{{$product->price_min}}</p>
                            <p class="info-car">
              <span class="gas">
                {{json_decode($product->attribute)->vehicle_gear}}
              </span>
                <span class="km">
                    @if($product->gauge!=1)
                        {{$product->gauge}}
                    @endif
              </span>
            </p>

        </div>
        <div class="p-2 bd-highlight ms-auto  border-start mt-4" style="margin-left: 30px;">
            <button class="bt-make mb-2 ">{{__('cars.make_an_offer')}}</button>
            <button class="bt-call ">{{__('cars.call_now')}}</button>
        </div>
    </div>
</div>
            @endforeach
                <div class="page">
                    <ul class="paging">
                        <?php
                        if (isset($_GET['page'])) {
                            $page_current = $_GET['page'];
                            $active_page = $_GET['page'];
                            if ($page_current == $number_paginate) {
                                $page_current = $number_paginate - 3;
                            }
                        } else {
                            $page_current = 1;
                            $active_page = 1;

                        }
                        if ($active_page == 1) {
                            $page_end = 5;
                        } elseif ($active_page == 2) {
                            $page_end = $page_current + 2;
                            $page_current -= 1;
                        } elseif ($active_page > $number_paginate - 2) {
                            $page_end = $number_paginate;
                            $page_current -= 2;
                        } else {
                            $page_end = $page_current + 2;
                            $page_current -= 2;
                        }
                        ?>
                        @if($active_page > 1)
                            <li>
                                <a href="/cars?page={{1}}">
                                    <i class="fa-solid fa-angles-left"></i>
                                </a>
                            </li>
                            @if($active_page>2)
                                <li>
                                    <a href="/cars?page={{$active_page-1}}">
                                        <i class="fa-solid fa-chevron-left"></i>
                                    </a>
                                </li>
                            @endif
                        @endif

                        @for($i = $page_current ; $i<=$page_end ; $i++)

                            @if($i==$active_page)
                                <li>
                                    <a href="/cars?page={{$i}}" class="active">{{$i}}</a>
                                </li>
                            @else
                                <li>
                                    <a href="/cars?page={{$i}}" class="">{{$i}}</a>
                                </li>
                            @endif
                        @endfor
                        @if($active_page<= $number_paginate-2)
                            <li>
                                <a href="/cars?page={{$active_page+1}}">
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                        @endif

                        @if($active_page <= $number_paginate-1)
                            <li>
                                <a href="/cars?page={{$number_paginate}}">
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
        </div>
    </div>
</div>
