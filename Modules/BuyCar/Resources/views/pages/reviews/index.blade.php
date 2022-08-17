@extends('buycar::layouts.app')
@section('content')
<link href="{{ asset('css/review.css') }}" rel="stylesheet">
<link href="{{ asset('css/listcar.css') }}" rel="stylesheet">
<main>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="search-mb">
                            <h3 class="title mb-0">
                                {{__('components.search_car_review')}}
                            </h3>
                            <div class="box-search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search by keywords">
                                    <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                                <select class="form-select mt-2" aria-label="Default select example">
                                    <option selected>Brand</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <select class="form-select mt-2" aria-label="Default select example">
                                    <option selected>Model</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                  <select class="form-select mt-2" aria-label="Default select example">
                                    <option selected>Body type</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <p class="btn text-center w-100 text-white mt-2 mb-0" style="background-color: #2070D2;">Search</p>
                            </div>
                        </div>
                        <div class="box-top-car-review car-review-pc">
                            <div class="item-big d-flex">
                                <a href="/review/1">
                                    <div class="wrap-img">
                                        <img src="images/review/item-big.jpg" alt="">
                                    </div>
                                    <div class="main-content">
                                        <h3 class="title">2022 Toyota Raize First Impressions Review | Philkotse Philippines</h3>
                                        <div class="car-price">
                                            <span class="car-title">Car price</span>
                                            <span class="number-price">₱1,031,000</span>
                                        </div>
                                        <p class="editor-rate">Editor's rating:</p>
                                        <p class="parameter">CVT | SUV/Crossover</p>
                                        <a href="#" class="float-end">{{__('reviews.full_review')}}</a>
                                    </div>
                                </a>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <a href="/review/1">
                                        <div class=" item-small rounded-bottom" >
                                            <img src="images/review/tc1.jpg" class="w-100"  alt="">
                                            <div class="info">
                                                <h3 class="title">2022 Geely Emgrand Review | Philkotse Philippines</h3>
                                                <p><span class="icon-car"><i class="fa-solid fa-car"></i> Sedan</span> <span class="rate-number">4.1/5</span></p>
                                            </div>

                                        </div>
                                    </a>

                                </div>
                                <div class="col-4">
                                    <a href="/review/1">
                                        <div class=" item-small rounded-bottom" >
                                            <img src="images/review/tc2.jpg" class="w-100"  alt="">
                                            <div class="info">
                                                <h3 class="title">2022 Geely Emgrand Review | Philkotse Philippines</h3>
                                                <p><span class="icon-car"><i class="fa-solid fa-car"></i> Sedan</span> <span class="rate-number">4.1/5</span></p>
                                            </div>

                                        </div>
                                    </a>

                                </div>
                                <div class="col-4">
                                    <a href="/review/1">
                                        <div class=" item-small rounded-bottom" >
                                            <img src="images/review/tc3.jpg" class="w-100"  alt="">
                                            <div class="info">
                                                <h3 class="title">2022 Nissan Almera Review | Philkotse Philippines</h3>
                                                <p><span class="icon-car"><i class="fa-solid fa-car"></i> Sedan</span> <span class="rate-number">4.0/5</span></p>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="car-review-mb mt-3">
                            <div class="swiper mySwiper-1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <a href="/review/1" class="photo">
                                                <img class="lazy-hidden lazy-load-success img-fluid"
                                                    src="images/review/sp0.jpg">
                                            </a>
                                            <h3 class="title">
                                                <a href="/review/1">2022 Geely Emgrand Review | Philkotse Philippines</a>

                                            </h3>
                                            <div class="car-price"> <span class="text">Car Price</span> <span class="price">₱908,000</span> </div>
                                            <p class="parameter"> <span class="Transmission">CVT</span> <span class="vehicles  ">Sedan</span> </p>
                                            <div class="box-Editor-rating">
                                                <span class="pull-left">Editor's:</span>
                                                <span class="number">4.1/5</span>
                                                <span class="star"> <i class="fa-solid fa-star"></i> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <a href="/review/1" class="photo">
                                                <img class="lazy-hidden lazy-load-success img-fluid"
                                                    src="images/review/sp1.jpg">
                                            </a>
                                            <h3 class="title">
                                                <a href="/review/1">2023 Mitsubishi Xpander First Impressions Review | Philkotse Philippines</a>

                                            </h3>
                                            <div class="car-price"> <span class="text">Car Price</span> <span class="price">₱908,000</span> </div>
                                            <p class="parameter">
                                                <span class="Transmission">CVT</span>
                                                <span class="vehicles  ">Sedan</span>
                                            </p>
                                            <div class="box-Editor-rating">
                                                <span class="pull-left">Editor's:</span>
                                                <span class="number">4.1/5</span>
                                                <span class="star"> <i class="fa-solid fa-star"></i> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <a href="/review/1" class="photo">
                                                <img class="lazy-hidden lazy-load-success img-fluid"
                                                    src="images/review/sp2.jpg">
                                            </a>
                                            <h3 class="title">
                                                <a href="/review/1">2023 Mitsubishi Xpander First Impressions Review | Philkotse Philippines</a>

                                            </h3>
                                            <div class="car-price"> <span class="text">Car Price</span> <span class="price">₱908,000</span> </div>
                                            <p class="parameter"> <span class="Transmission">CVT</span> <span class="vehicles  ">Sedan</span> </p>
                                            <div class="box-Editor-rating">
                                                <span class="pull-left">Editor's:</span>
                                                <span class="number">4.1/5</span>
                                                <span class="star"> <i class="fa-solid fa-star"></i> </span>
                                            </div>
                                        </div>
                                    </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <a href="#" class="photo">
                                            <img class="lazy-hidden lazy-load-success img-fluid"
                                                src="images/review/sp3.jpg">
                                        </a>
                                        <h3 class="title">
                                            <a href="#">2021 Honda City Sedan V Review | Philkotse Philippines</a>

                                        </h3>
                                        <div class="car-price"> <span class="text">Car Price</span> <span class="price">₱908,000</span> </div>
                                        <p class="parameter"> <span class="Transmission">CVT</span> <span class="vehicles  ">Sedan</span> </p>
                                        <div class="box-Editor-rating">
                                            <span class="pull-left">Editor's:</span>
                                            <span class="number">3.3/5</span>
                                            <span class="star"> <i class="fa-solid fa-star"></i> </span>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>

                              </div>
                        </div>
                        <div class="post-review mt-3">
                            <h3 class="heading">{{__('reviews.recent_review')}}</h3>
                            <div class="post w-100 d-flex mt-4">
                                <div class="wrap-img">
                                    <img src="images/review/p1.jpg" alt="">
                                </div>
                                <div class="main-content">
                                    <h3 class="title">
                                        <a href="/review/1">
                                            2023 Mitsubishi Xpander First Impressions Review | Philkotse Philippines
                                        </a>
                                    </h3>
                                    <p>Car price: <span class="number-price">₱1,160,000</span></p>
                                    <p class="parameter"><span>Automatic</span> <span><i class="fa-solid fa-car"></i>MPV</span> </p>
                                </div>
                            </div>
                            <div class="post w-100 d-flex mt-4">
                                <div class="wrap-img">
                                    <img src="images/review/p1.jpg" alt="">
                                </div>
                                <div class="main-content">
                                    <h3 class="title">
                                        <a href="/review/1">
                                            2023 Mitsubishi Xpander First Impressions Review | Philkotse Philippines
                                        </a>
                                    </h3>
                                    <p class="price-mb">Car price: <span class="number-price">₱1,160,000</span></p>
                                    <p class="parameter"><span>Automatic</span> <span><i class="fa-solid fa-car"></i>MPV</span> </p>
                                </div>
                            </div>
                            <div class="post w-100 d-flex mt-4">
                                <div class="wrap-img">
                                    <img src="images/review/p1.jpg" alt="">
                                </div>
                                <div class="main-content">
                                    <h3 class="title">
                                        <a href="/review/1">
                                            2023 Mitsubishi Xpander First Impressions Review | Philkotse Philippines
                                        </a>
                                    </h3>
                                    <p>Car price: <span class="number-price">₱1,160,000</span></p>
                                    <p class="parameter"><span>Automatic</span> <span><i class="fa-solid fa-car"></i>MPV</span> </p>
                                </div>
                            </div>
                            <div class="post w-100 d-flex mt-4">
                                <div class="wrap-img">
                                    <img src="images/review/p1.jpg" alt="">
                                </div>
                                <div class="main-content">
                                    <h3 class="title">
                                        <a href="/review/1">
                                            2023 Mitsubishi Xpander First Impressions Review | Philkotse Philippines
                                        </a>
                                    </h3>
                                    <p>Car price: <span class="number-price">₱1,160,000</span></p>
                                    <p class="parameter"><span>Automatic</span> <span><i class="fa-solid fa-car"></i>MPV</span> </p>
                                </div>
                            </div>
                            <div class="post w-100 d-flex mt-4">
                                <div class="wrap-img">
                                    <img src="images/review/p1.jpg" alt="">
                                </div>
                                <div class="main-content">
                                    <h3 class="title">
                                        <a href="/review/1">
                                            2023 Mitsubishi Xpander First Impressions Review | Philkotse Philippines
                                        </a>
                                    </h3>
                                    <p>Car price: <span class="number-price">₱1,160,000</span></p>
                                    <p class="parameter"><span>Automatic</span> <span><i class="fa-solid fa-car"></i>MPV</span> </p>
                                </div>
                            </div>
                            <div class="post w-100 d-flex mt-4">
                                <div class="wrap-img">
                                    <img src="images/review/p2.jpg" alt="">
                                </div>
                                <div class="main-content">
                                    <h3 class="title">
                                        <a href="/review/1">
                                            2023 Mitsubishi Xpander First Impressions Review | Philkotse Philippines
                                        </a>
                                    </h3>
                                    <p>Car price: <span class="number-price">₱1,160,000</span></p>
                                    <p class="parameter"><span>Automatic</span> <span><i class="fa-solid fa-car"></i>MPV</span> </p>
                                    <p class="float-end editor-text"><span>Editor's: <span class="rate-number">3.8/5</span></p>
                                </div>
                            </div>
                            <div class="post w-100 d-flex mt-4">
                                <div class="wrap-img">
                                    <img src="images/review/p2.jpg" alt="">
                                </div>
                                <div class="main-content">
                                    <h3 class="title">
                                        <a href="/review/1">
                                            2023 Mitsubishi Xpander First Impressions Review | Philkotse Philippines
                                        </a>
                                    </h3>
                                    <p>Car price: <span class="number-price">₱1,160,000</span></p>
                                    <p class="parameter"><span>Automatic</span> <span><i class="fa-solid fa-car"></i>MPV</span> </p>
                                    <p class="float-end editor-text"><span>Editor's: <span class="rate-number">3.8/5</span></p>
                                </div>
                            </div>
                            <div class="post w-100 d-flex mt-4">
                                <div class="wrap-img">
                                    <img src="images/review/p3.jpg" alt="">
                                </div>
                                <div class="main-content">
                                    <h3 class="title">
                                        <a href="/review/1">
                                            2023 Mitsubishi Xpander First Impressions Review | Philkotse Philippines
                                        </a>
                                    </h3>
                                    <p>Car price: <span class="number-price">₱1,160,000</span></p>
                                    <p class="parameter"><span>Automatic</span> <span><i class="fa-solid fa-car"></i>MPV</span> </p>
                                    <p class="float-end editor-text"><span>Editor's: <span class="rate-number">4.3/5</span></p>
                                </div>
                            </div>
                            <div class="post w-100 d-flex mt-4">
                                <div class="wrap-img">
                                    <img src="images/review/p4.jpg" alt="">
                                </div>
                                <div class="main-content">
                                    <h3 class="title">
                                        <a href="/review/1">
                                            2023 Mitsubishi Xpander First Impressions Review | Philkotse Philippines
                                        </a>
                                    </h3>
                                    <p>Car price: <span class="number-price">₱1,160,000</span></p>
                                    <p class="parameter"><span>Automatic</span> <span><i class="fa-solid fa-car"></i>MPV</span> </p>
                                    <p class="float-end editor-text"><span>Editor's: <span class="rate-number">3.8/5</span></p>
                                </div>
                            </div>
                            <div class="post w-100 d-flex mt-4">
                                <div class="wrap-img">
                                    <img src="images/review/p1.jpg" alt="">
                                </div>
                                <div class="main-content">
                                    <h3 class="title">
                                        <a href="/review/1">
                                            2023 Mitsubishi Xpander First Impressions Review | Philkotse Philippines
                                        </a>
                                    </h3>
                                    <p>Car price: <span class="number-price">₱1,160,000</span></p>
                                    <p class="parameter"><span>Automatic</span> <span><i class="fa-solid fa-car"></i>MPV</span> </p>
                                </div>
                            </div>
                            <div class="post w-100 d-flex mt-4">
                                <div class="wrap-img">
                                    <img src="images/review/p1.jpg" alt="">
                                </div>
                                <div class="main-content">
                                    <h3 class="title">
                                        <a href="/review/1">
                                            2023 Mitsubishi Xpander First Impressions Review | Philkotse Philippines
                                        </a>
                                    </h3>
                                    <p>Car price: <span class="number-price">₱1,160,000</span></p>
                                    <p class="parameter"><span>Automatic</span> <span><i class="fa-solid fa-car"></i>MPV</span> </p>
                                    <p class="float-end editor-text"><span>Editor's: <span class="rate-number">3.8/5</span></p>
                                </div>
                            </div>
                            <div class="post w-100 d-flex mt-4">
                                <div class="wrap-img">
                                    <img src="images/review/p1.jpg" alt="">
                                </div>
                                <div class="main-content">
                                    <h3 class="title">
                                        <a href="/review/1">
                                            2023 Mitsubishi Xpander First Impressions Review | Philkotse Philippines
                                        </a>
                                    </h3>
                                    <p>Car price: <span class="number-price">₱1,160,000</span></p>
                                    <p class="parameter"><span>Automatic</span> <span><i class="fa-solid fa-car"></i>MPV</span> </p>
                                </div>
                            </div>
                            <div class="d-flex mt-4 justify-content-center mb-3">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                      <li class="page-item">
                                        <a class="page-link" href="/review/1" aria-label="Previous">
                                          <span aria-hidden="true">&laquo;</span>
                                        </a>
                                      </li>
                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                          <span aria-hidden="true">&raquo;</span>
                                        </a>
                                      </li>
                                    </ul>
                                  </nav>
                            </div>
                        </div>
                        <div class="swiper mySwiper-2">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide text-center"><img src="images/review/sl1.png" class="img-fluid" alt=""></div>
                              <div class="swiper-slide text-center"><img src="images/review/sl2.jpg" class="img-fluid" alt=""></div>

                            </div>
                          </div>
                        <div class="latest-mb">
                            <h3 class="heading mt-4">LATEST NEW CARS</h3>
                        <div class="box-gray-a pb-0">
                            <ul class="list-from-price">
                                <li class="big">
                                    <a href="#" class="photo">
                                        <img class="lazy-hidden lazy-load-success w-100" src="/images/listcar/untitled-design-2021-12-09t113254-198-d9ed-wm-1246_wm.jpg" alt="" height="153px">
                                    </a>
                                    <h3 class="title mt-2 mb-0">
                                        <a href="#">Chevrolet Tracker</a>
                                    </h3>
                                    <span class="model">Model Price Philippines</span>
                                    <span class="price">
                                        ₱ 3,595,000 - ₱ 3,640,000
                                    </span>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="photo lazy-hidden lazy-load-success img-small " src="/images/listcar/img-7310-5-11zon-61e5_wm.jpg" alt="">
                                    </a>
                                    <h3 class="title" style="height:20px">
                                        <a href="#">Geely Emgrand</a>
                                    </h3>
                                    <span class="model">Model Price Philippines</span>
                                    <span class="price"> 798,000 - ₱ 908,000</span>
                                </li>
                                <li class="border-0">
                                    <a href="#">
                                        <img class="photo lazy-hidden lazy-load-success img-small" src="/images/listcar/img-6552-1-11zon-5278_wm.jpg" alt="">
                                    </a>
                                    <h3 class="title" style="height:20px">
                                        <a href="#">Toyota Raize</a>
                                    </h3>
                                    <span class="model">
                                        Model Price Philippines
                                    </span>
                                    <span class="price"> ₱ 746,000 - ₱ 1,036,000</span>
                                </li>
                            </ul>
                        </div>
                        </div>

                    </div>
                    <div class="col-lg-3 right-content">
                        <h3 class="title mb-0">
                            {{__('components.search_car_review')}}
                        </h3>
                        <div class="box-search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search by keywords">
                                <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                            </div>
                            <select class="form-select mt-2" aria-label="Default select example">
                                <option selected>Brand</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="form-select mt-2" aria-label="Default select example">
                                <option selected>Model</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                              <select class="form-select mt-2" aria-label="Default select example">
                                <option selected>Body type</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <p class="btn text-center w-100 text-white mt-2 mb-0" style="background-color: #39b54a;">Search</p>
                        </div>



                        <h3 class="title mt-4 mb-0">
                            {{__('components.rv_by_brand')}}
                        </h3>
                        <div class="d-flex flex-wrap list-brand w-100">
                            <div class="item text-center border">
                                <img src="images/review/toyota.png" alt="">
                                <p>Toyota</p>
                            </div>
                            <div class="item text-center border">
                                <img src="images/review/mitsubishi.png" alt="">
                                <p>Mitsubishi</p>
                            </div>
                            <div class="item text-center border">
                                <img src="images/review/ford.png" alt="">
                                <p>Ford</p>
                            </div>
                            <div class="item text-center border">
                                <img src="images/review/honda.png" alt="">
                                <p>Honda</p>
                            </div>
                            <div class="item text-center border">
                                <img src="images/review/isuzu.png" alt="">
                                <p>Isuzu</p>
                            </div>
                            <div class="item text-center border">
                                <img src="images/review/chevrolet.png" alt="">
                                <p>Chevrolet</p>
                            </div>
                            <div class="item text-center border">
                                <img src="images/review/mazda.png" alt="">
                                <p>Mazda</p>
                            </div>
                            <div class="item text-center border">
                                <img src="images/review/hyundai.png" alt="">
                                <p>Hyundai</p>
                            </div>
                            <div class="item text-center border">
                                <img src="images/review/kia.png" alt="">
                                <p>Kia</p>
                            </div>
                        </div>
                        <h3 class="title mt-4 mb-0">
                            {{__('components.rv_by_body_type')}}
                        </h3>
                        <div class="review-by-body-type">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <div class="border text-center pt-3">
                                        <img src="images/review/commercial.png" alt="">
                                        <p>Commercial</p>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="border text-center pt-3">
                                        <img src="images/review/commercial.png" alt="">
                                        <p>Commercial</p>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="border text-center pt-3">
                                        <img src="images/review/commercial.png" alt="">
                                        <p>Commercial</p>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="border text-center pt-3">
                                        <img src="images/review/commercial.png" alt="">
                                        <p>Commercial</p>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="border text-center pt-3">
                                        <img src="images/review/commercial.png" alt="">
                                        <p>Commercial</p>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="border text-center pt-3">
                                        <img src="images/review/commercial.png" alt="">
                                        <p>Commercial</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="border text-center pt-3">
                                        <img src="images/review/commercial.png" alt="">
                                        <p>Commercial</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="border text-center pt-3">
                                        <img src="images/review/commercial.png" alt="">
                                        <p>Commercial</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <h3 class="title mt-4 mb-0">
                            {{__('components.recent_listing')}}
                        </h3>
                        @foreach($recent_listing as $car)
                            <div class="w-100 recent-list mb-4">
                                <div class="wrap-img">
                                    <span><i class="fa-solid fa-heart"></i><span class="text">Used</span></span>
                                    <img src="{{$car->image_thumbnail}}"  class="w-100"alt="">
                                </div>
                                <div class="main-content rounded-bottom">
                                    <h4>
                                        {{$car->sub_content}}
                                    </h4>
                                    <p class="location">
                                        <span><i class="fa-solid fa-location-dot"></i></span>{{$car->location}}
                                    </p>
                                    <p class="price">{{$car->price_min}}</p>
                                    <p class="parameter"><span>{{json_decode($car->attribute)->vehicle_gear}}</span>
{{--                                        <span><i class="fa-solid fa-gauge-high"></i>47,000KM</span>--}}
                                    </p>
                                </div>
                            </div>
                        @endforeach

                        <h3 class="heading mt-4">{{__('components.latest_new_cars')}}</h3>

                            <div class="box-gray-a pb-0">
                                <ul class="list-from-price">
                                    @foreach($lates_new_car as $key => $car)
                                        @if($key==0)
                                            <li class="big">
                                        @else
                                                <li>
                                        @endif
                                            <a href="#" class="photo">
                                                <img class="lazy-hidden lazy-load-success w-100" height="153px" src="{{$car->image_thumbnail}}" alt="">
                                            </a>
                                            <h3 class="title
                                            @if($key==0)
                                                mt-2
                                            @endif
                                            mb-0">
                                                <a href="#">{{$car->sub_content}}</a>
                                            </h3>
                                            <span class="price">
                                                ₱ 3,595,000 - ₱ 3,640,000
                                            </span>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
