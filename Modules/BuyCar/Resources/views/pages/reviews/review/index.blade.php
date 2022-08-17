@extends('buycar::layouts.app')
@section('content')
<link href="{{ asset('css/rvdetail.css') }}" rel="stylesheet">
<link href="{{ asset('css/listcar.css') }}" rel="stylesheet">
<link href="{{ asset('css/review.css') }}" rel="stylesheet">
<link href="{{ asset('css/newcar.css') }}" rel="stylesheet">
<main>
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-9">
                    <div class="box-detail-article ">
                        @include('buycar::pages.reviews.review.components.header-content')
                        <div class="article-detail mt-3">
                            <span class="describe">Can the Emgrand sustain Geely’s momentum in the local
                                market?</span>
                            <img src="{{asset('images/rvdetail/im1.jpg')}}" alt="" class="w-100 mt-3 img-thumbnail">
                            <div class="in-this-rv border rounded mt-3">
                                <h2>IN THIS REVIEW...</h2>
                                <div class="full-width">
                                    <ol class="list">
                                        <li class="li-action" rel="block1">
                                            <span>Introduction</span>
                                        </li>
                                        <li class="li-action" rel="block2">
                                            <span>Exterior</span>
                                        </li>
                                        <li class="li-action" rel="block3">
                                            <span>Interior</span>
                                        </li>
                                        <li class="li-action" rel="block4">
                                            <span>Tech &amp; Safety</span>
                                        </li>
                                        <li class="li-action" rel="block5">
                                            <span>Driving &amp; Performance</span>
                                        </li>
                                        <li class="li-action" rel="block6">
                                            <span>Fuel Efficiency</span>
                                        </li>
                                        <li class="li-action" rel="block7">
                                            <span>Verdict</span>
                                        </li>
                                        <li class="li-action" rel="block8">
                                            <span>Variants and Price</span>
                                        </li>
                                        <li class="li-action" rel="block9">
                                            <span>Color Options</span>
                                        </li>
                                        <li class="li-action" rel="block10">
                                            <span>Specs</span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="review-detail-container mt-4">
                                <h2 class="mb-3">
                                    2022 Geely Emgrand Review: Suited up for the PH sedan segment
                                </h2>
                                <p>Without a doubt, there’s still a significant demand for sedans in the Philippines
                                    despite the sudden popularity of crossover vehicles. A testament to this is the
                                    <a href="#">reigning best-selling car in the market</a> for the last two years,
                                    which is a Japanese sedan that I’m sure you’re all familiar with. Yes, the one
                                    that Britney once promoted.
                                </p>
                                <p><a href="#">Geely Philippines</a> understands that Filipinos still have a soft
                                    spot for sedans, a segment that the Chinese car brand wants to capitalize on.
                                    Say hello to the <a href="#">2022 Geely Emgrand</a>, the newest sedan in the
                                    local market that’s set to go up against the likes of the Toyota Vios, Honda
                                    City, Nissan Almera, among others. </p>
                                <p>With Geely now among the top car brands in the country based on sales, can the
                                    Emgrand fuel the company’s momentum? Let’s find out in this 2022 Geely Emgrand
                                    full review. </p>
                                @include('buycar::pages.reviews.review.components.review_result')
                                <div class="article-content-detail mt-3">
                                    <h2>2022 Geely Emgrand Exterior Review: Prim and proper</h2>
                                    <p>In a road full of Japanese sedans, one can quickly agree that the Geely
                                        Emgrand is a refreshing sight. It looks different than its segment rivals,
                                        and its size dwarfs other subcompact sedans in the market today.</p>
                                    <img src="{{asset('images/rvdetail/im2.jpg')}}" class="w-100" alt="">
                                    <p class="text-center fst-italic mt-3">Prim and proper – the 2022 Geely Emgrand
                                    </p>
                                    <p>The Emgrand has a Euro-car appeal, which is highlighted by the straight
                                        character design elements throughout its exterior. It’s like a foreign
                                        exchange student that has spent most of his life in Europe, which eventually
                                        adopts the way western people dress, look, and walk.</p>
                                    <p>Geely’s sedan is not as flashy or as athletic-looking when compared to its
                                        Japanese rivals such as the Honda City RS Sedan and the Nissan Almera. The
                                        Emgrand veers away from that notion by giving you an exterior design that
                                        looks prim and proper.</p>
                                    <p>The front end has a confident look that’s highlighted by the grille with
                                        vertical slats. The LED headlights with LED daytime running lights as well
                                        as the angular bumper add to the Emgrand’s confident aura. </p>
                                    <img src="{{asset('images/rvdetail/im3.jpg')}}" class="w-100" alt="">
                                    <p class="text-center fst-italic mt-3">It comes with a prominent straight
                                        character line</p>
                                    <p>You can further see the Emgrand’s Euro-car-inspired design when you look at
                                        its side. The prominent straight character line gives texture to its side
                                        profile, resulting in having a simple yet surefooted demeanor. It is then
                                        complemented by a set of 17-inch alloy wheels. </p>
                                    <img src="{{asset('images/rvdetail/im4.jpg')}}" class="w-100" alt="">
                                    <p class="text-center fst-italic mt-3">The Emgrand arguably has the best-looking
                                        rear end in its segment</p>
                                    <p>While the front has a straight and uptight look, the rear gives a different
                                        tone, which I find to be the best-looking in the segment. It’s sleek and
                                        bears a smoother design, which I find good as it complements the Emgrand’s
                                        prim and proper design package. The LED taillights (and its light show)
                                        instantly made me like this sedan. </p>

                                </div>
                                @include('buycar::pages.reviews.review.components.promo_new')
                                @include('buycar::pages.reviews.review.components.want_to_read')
                                <div class="article-content-detail mt-3">
                                    <h2>2022 Geely Emgrand Exterior Review: Prim and proper</h2>
                                    <p>In a road full of Japanese sedans, one can quickly agree that the Geely
                                        Emgrand is a refreshing sight. It looks different than its segment rivals,
                                        and its size dwarfs other subcompact sedans in the market today.</p>
                                    <img src="{{asset('images/rvdetail/im5.jpg')}}" class="w-100" alt="">
                                    <p class="text-center fst-italic mt-3">Prim and proper – the 2022 Geely Emgrand
                                    </p>
                                    <p>The Emgrand has a Euro-car appeal, which is highlighted by the straight
                                        character design elements throughout its exterior. It’s like a foreign
                                        exchange student that has spent most of his life in Europe, which eventually
                                        adopts the way western people dress, look, and walk.</p>
                                    <p>Geely’s sedan is not as flashy or as athletic-looking when compared to its
                                        Japanese rivals such as the Honda City RS Sedan and the Nissan Almera. The
                                        Emgrand veers away from that notion by giving you an exterior design that
                                        looks prim and proper.</p>
                                    <p>The front end has a confident look that’s highlighted by the grille with
                                        vertical slats. The LED headlights with LED daytime running lights as well
                                        as the angular bumper add to the Emgrand’s confident aura. </p>
                                    <img src="{{asset('images/rvdetail/im6.jpg')}}" class="w-100" alt="">
                                    <p class="text-center fst-italic mt-3">It comes with a prominent straight
                                        character line</p>
                                    <p>You can further see the Emgrand’s Euro-car-inspired design when you look at
                                        its side. The prominent straight character line gives texture to its side
                                        profile, resulting in having a simple yet surefooted demeanor. It is then
                                        complemented by a set of 17-inch alloy wheels. </p>
                                    <img src="{{asset('images/rvdetail/im7.jpg')}}" class="w-100" alt="">
                                    <p class="text-center fst-italic mt-3">The Emgrand arguably has the best-looking
                                        rear end in its segment</p>
                                    <p>While the front has a straight and uptight look, the rear gives a different
                                        tone, which I find to be the best-looking in the segment. It’s sleek and
                                        bears a smoother design, which I find good as it complements the Emgrand’s
                                        prim and proper design package. The LED taillights (and its light show)
                                        instantly made me like this sedan. </p>

                                    <h2 class="mt-2">2022 Geely Emgrand Exterior Review: Prim and proper</h2>
                                    <div class="d-flex justify-content-center mt-3">
                                        <table class="tb-content">
                                            <tbody>
                                                <tr>
                                                    <td colspan="6" style="background-color: rgb(255, 204, 51);">
                                                        <b> Geely Emgrand Variants & Price in the Philippines</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="border"><b>Geely Emgrand Comfort</b></td>
                                                    <td colSpan="2" class="border"><b>Php 798,000</b></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="border"><b>Geely Emgrand Premium</b></td>
                                                    <td colSpan="2" class="border"><b>Php 798,000</b></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                    <h2 class="mt-2">2022 Geely Emgrand Review: Color Options
                                    </h2>
                                    <div class="d-flex justify-content-center mt-3">
                                        <table class="tb-content">
                                            <tbody>
                                                <tr>
                                                    <td colspan="6" style="background-color: rgb(255, 204, 51);">
                                                        <b> Geely Emgrand Color Options</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" class="border">
                                                        <b>Red, Proud Teal, Dark Blue, Gold, Gray, White</b>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                    <h2 class="mt-2">2022 Geely Emgrand Review: Specs</h2>
                                    <div class="d-flex justify-content-center mt-3">
                                        <table class="tb-content" style="width:600px;">
                                            <tbody>
                                                <tr>
                                                    <td colspan="8" style="background-color: rgb(255, 204, 51);">
                                                        <b> Overall </b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="border">
                                                        <b>Make</b>
                                                    </td>
                                                    <td colspan="4" class="border">
                                                        <b>Geely</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="border">
                                                        <b>Make</b>
                                                    </td>
                                                    <td colspan="4" class="border">
                                                        <b>Geely</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="border">
                                                        <b>Make</b>
                                                    </td>
                                                    <td colspan="4" class="border">
                                                        <b>Geely</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="8" style="background-color: rgb(255, 204, 51);">
                                                        <b> Dimensions & Weight </b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="border">
                                                        <b>Lenght</b>
                                                    </td>
                                                    <td colspan="4" class="border">
                                                        <b>4,638 mm</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="border">
                                                        <b>Width</b>
                                                    </td>
                                                    <td colspan="4" class="border">
                                                        <b>1,822 mm</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="border">
                                                        <b>Height</b>
                                                    </td>
                                                    <td colspan="4" class="border">
                                                        <b>1,460 mm</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="border">
                                                        <b>Wheelbase</b>
                                                    </td>
                                                    <td colspan="4" class="border">
                                                        <b>2,650 mm</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="border">
                                                        <b>Ground Clearance</b>
                                                    </td>
                                                    <td colspan="4" class="border">
                                                        <b>122 mm</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="border">
                                                        <b>Seating Capacity</b>
                                                    </td>
                                                    <td colspan="4" class="border">
                                                        <b>5</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="8" style="background-color: rgb(255, 204, 51);">
                                                        <b>Exterior </b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="8" class="border">
                                                        <b>LED Headlights, LED daytime running lights, LED
                                                            taillights</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="8" class="border">
                                                        <b>Power folding side mirrors </b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="8" class="border">
                                                        <b>17-inch aluminum alloy wheels </b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="8" class="border">
                                                        <b>Hands-free trunk release </b>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="border-bottom mt-5"></div>
                                <div class="net-work mt-3">
                                    <span class="nk-share"><i class="fa-solid fa-share"></i> Share</span>
                                    <span class="nk-tw"><i class="fa-brands fa-twitter"></i> Twitter</span>
                                </div>
                                @include('buycar::pages.reviews.review.components.tags')
                                @include('buycar::pages.reviews.review.components.author')
                                @include('buycar::pages.reviews.review.components.cmt')
                                <div class="box-adviceforsale mt-4 messenger-mb">
                                    <div class="top-heading">
                                        <span class="cicon_agent"></span>
                                        <h2 class="heading">
                                            Need advice on buying A car?
                                        </h2>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">
                                            Let us help you find the dream car. We will contact you as soon as possible
                                            to assist you!
                                        </h3>
                                        <form action="#">
                                            <div class="form-input">
                                                <input type="text" class="form-control" placeholder="Your name *">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <div class="form-input">
                                                <input type="text" class="form-control"
                                                    placeholder="Your phone number *">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <div class="form-input clearfix">
                                                <div class="box-radio-typeOfLead">
                                                    <div class="radio">
                                                        <input type="radio" checked="">
                                                        <label for="#" class="radio-label">Both</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio">
                                                        <label for="#" class="radio-label">New Car</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio">
                                                        <label for="#" class="radio-label">Used car</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-input">
                                                <textarea autocomplete="off" class="form-control txtform" cols="20"
                                                    data-val="true" data-val-length="Maximum 100 characters"
                                                    data-val-length-max="100" data-val-required="This field is requried"
                                                    id="Message" maxlength="100" name="Message" placeholder="Message *"
                                                    rows="2"></textarea>
                                                <i class="fa-solid fa-message"></i>
                                            </div>
                                            <button class="btn" type="button">
                                                Message us
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="line-gray"></div>
                                @include('buycar::pages.reviews.review.components.recommend_article')
                                <div class="line-gray mt-3"></div>
                                <div class="mt-3">
                                    <h2 class="header">
                                        ALTERNATIVE REVIEWS TO THE 2022 GEELY EMGRAND
                                    </h2>
                                    <ul class="list-car-review mt-3">
                                        <li> <a class="photo"
                                                title="2022 Honda Civic Quick Drive Review: Readier than ever"
                                                href="/car-review/honda-civic-2022-philippines-rv366"> <img
                                                    alt="2022 Honda Civic Quick Drive Review: Readier than ever"
                                                    class="lazy-hidden lazy-load-success img-fluid"
                                                    src="https://img.philkotse.com/crop/270x152/2022/03/04/KjJYY7r3/img-7477-aa4d_wm.jpg"
                                                    data-loaded="true"> </a>
                                            <div class="small">
                                                <h3 class="title"> <a
                                                        title="2022 Honda Civic Quick Drive Review: Readier than ever"
                                                        href="/car-review/honda-civic-2022-philippines-rv366">2022 Honda
                                                        Civic Quick Drive Review: Readier
                                                        than ever</a> </h3>
                                                <div class="info">
                                                    <p class="car-price">Car price: <span
                                                            class="price">₱1,290,000</span></p>
                                                    <p class="parameter"> <span class="Transmission">CVT</span> <span
                                                            class="vehicles "> Sedan
                                                        </span> </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li> <a class="photo"
                                                title="2021 Honda City Sedan V Review | Philkotse Philippines"
                                                href="/car-review/honda-city-2021-philippines-rv362"> <img
                                                    data-src="https://img.philkotse.com/crop/270x152/2022/03/02/O3IWXvly/img-0259-8901_wm.jpg"
                                                    alt="2021 Honda City Sedan V Review | Philkotse Philippines"
                                                    class="lazy-hidden lazy-load-success"
                                                    src="https://img.philkotse.com/crop/270x152/2022/03/02/O3IWXvly/img-0259-8901_wm.jpg"
                                                    data-loaded="true"> </a>
                                            <div class="small">
                                                <h3 class="title"> <a
                                                        title="2021 Honda City Sedan V Review | Philkotse Philippines"
                                                        href="/car-review/honda-city-2021-philippines-rv362">2021 Honda
                                                        City Sedan V Review | Philkotse
                                                        Philippines</a> </h3>
                                                <div class="info">
                                                    <p class="car-price">Car price: <span class="price">₱989,000</span>
                                                    </p>
                                                    <p class="parameter"> <span class="Transmission">Automatic</span>
                                                        <span class="vehicles "> Sedan
                                                        </span> </p>
                                                    <p class="btn-editor"> Editor's: <span class="number">3.8/5</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li> <a class="photo"
                                                title="2022 Honda Civic First Impressions Review | Philkotse Philippines"
                                                href="/car-review/honda-civic-2022-philippines-rv353"> <img
                                                    data-src="https://img.philkotse.com/crop/270x152/2021/11/23/WFFKkBCT/img-5155-a0a7_wm.jpg}"
                                                    alt="2022 Honda Civic First Impressions Review | Philkotse Philippines"
                                                    class="lazy-hidden lazy-load-success"
                                                    src="https://img.philkotse.com/crop/270x152/2021/11/23/WFFKkBCT/img-5155-a0a7_wm.jpg"
                                                    data-loaded="true"> </a>
                                            <div class="small">
                                                <h3 class="title"> <a
                                                        title="2022 Honda Civic First Impressions Review | Philkotse Philippines"
                                                        href="/car-review/honda-civic-2022-philippines-rv353">2022 Honda
                                                        Civic First Impressions Review |
                                                        Philkotse Philippines</a> </h3>
                                                <div class="info">
                                                    <p class="car-price">Car price: <span
                                                            class="price">₱1,690,000</span></p>
                                                    <p class="parameter"> <span class="Transmission">CVT</span> <span
                                                            class="vehicles "> Sedan
                                                        </span> </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-3 content-right-pc">
                    <div class="car-gui-search">
                        <h3 class="header-title">
                            {{__('components.car_guide_search')}}
                        </h3>
                        <div class="box-search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search by keywords">
                                <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="box-get-qt mt-4">
                        <h3 class="name">Geely Emgrand 2022</h3> <a href="javascript:void(0);" rel="nofollow"
                            id="dlGetQuote" class="cg-btn-get-quote btn-button leadform-getquot" data-model-id="3046"
                            data-variant="" data-page="8" data-page-link="/car-review/geely-emgrand-philippines-rv361"
                            data-link-page-query="" data-referurl="https://www.google.com/">{{__('components.get_quote')}}</a>
                    </div>
                    <h3 class="header-title mt-0 mb-3">
                        {{__('components.rv_by_brand')}}

                    </h3>
                    <div class="d-flex flex-wrap list-brand w-100">
                        <div class="item text-center border">
                            <img src="{{asset('images/review/toyota.png')}}" alt="">
                            <p>Toyota</p>
                        </div>
                        <div class="item text-center border">
                            <img src="{{asset('images/review/mitsubishi.png')}}" alt="">
                            <p>Mitsubishi</p>
                        </div>
                        <div class="item text-center border">
                            <img src="{{asset('images/review/ford.png')}}" alt="">
                            <p>Ford</p>
                        </div>
                        <div class="item text-center border">
                            <img src="{{asset('images/review/honda.png')}}" alt="">
                            <p>Honda</p>
                        </div>
                        <div class="item text-center border">
                            <img src="{{asset('images/review/isuzu.png')}}" alt="">
                            <p>Isuzu</p>
                        </div>
                        <div class="item text-center border">
                            <img src="{{asset('images/review/chevrolet.png')}}" alt="">
                            <p>Chevrolet</p>
                        </div>
                        <div class="item text-center border">
                            <img src="{{asset('images/review/mazda.png')}}" alt="">
                            <p>Mazda</p>
                        </div>
                        <div class="item text-center border">
                            <img src="{{asset('images/review/hyundai.png')}}" alt="">
                            <p>Hyundai</p>
                        </div>
                        <div class="item text-center border">
                            <img src="{{asset('images/review/kia.png')}}" alt="">
                            <p>Kia</p>
                        </div>
                    </div>
                    <div class="box-adviceforsale mt-4">
                        <div class="top-heading">
                            <span class="cicon_agent"></span>
                            <h2 class="heading">
                                {{__('components.need_advice')}}

                            </h2>
                        </div>
                        <div class="content">
                            <h3 class="title">
                                {{__('components.need_advice_content')}}

                            </h3>
                            <form action="#">
                                <div class="form-input">
                                    <input type="text" class="form-control" placeholder="Your name *">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                <div class="form-input">
                                    <input type="text" class="form-control" placeholder="Your phone number *">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                <div class="form-input clearfix">
                                    <div class="box-radio-typeOfLead">
                                        <div class="radio">
                                            <input type="radio" checked="">
                                            <label for="#" class="radio-label">Both</label>
                                        </div>
                                        <div class="radio">
                                            <input type="radio">
                                            <label for="#" class="radio-label">New Car</label>
                                        </div>
                                        <div class="radio">
                                            <input type="radio">
                                            <label for="#" class="radio-label">Used car</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <textarea autocomplete="off" class="form-control txtform" cols="20" data-val="true"
                                        data-val-length="Maximum 100 characters" data-val-length-max="100"
                                        data-val-required="This field is requried" id="Message" maxlength="100"
                                        name="Message" placeholder="Message *" rows="2"></textarea>
                                    <i class="fa-solid fa-message"></i>
                                </div>
                                <button class="btn" type="button">
                                    {{__('components.mess_us')}}
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="new-car-for-sale mt-4">
                        <h3 class="header-title mb-3">
                            {{__('components.new_cars_for_sale')}}
                        </h3>
                        <div class="box-new-car">
                            <ul>
                                <li class="pt-0">
                                    <div class="content">
                                        <div class="wrap-img">
                                            <img src="{{asset('images/newcar/fr1.jpg')}}" class="w-100" alt="">
                                        </div>
                                        <div class="wrap-content p-0 pt-2">
                                            <h4 class="title">
                                                <a href="#">2022 Toyota Raize First Impressions Review | Philkotse
                                                    Philippines</a>

                                            </h4>
                                            <span class="price mb-2">
                                                <span class="price-title">Car price:</span> ₱1,198,000
                                            </span>
                                            <p class="text-s">
                                                <span>SUV / Crossover </span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <div class="wrap-img">
                                            <img src="{{asset('images/newcar/fr2.jpg')}}" class="w-100" alt="">
                                        </div>
                                        <div class="wrap-content p-0 pt-2">
                                            <h4 class="title">
                                                <a href="#">2022 Geely Emgrand Review | Philkotse Philippines</a>

                                            </h4>
                                            <span class="price mb-2">
                                                <span class="price-title">Car price:</span> ₱1,198,000
                                            </span>
                                            <p class="text-s">
                                                <span>Sedan</span>
                                                <span class="number">4.1/5</span>
                                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="border-0">
                                    <div class="content">
                                        <div class="wrap-img">
                                            <img src="{{asset('images/newcar/fr3.jpg')}}" class="w-100" alt="">
                                        </div>
                                        <div class="wrap-content p-0 pt-2">
                                            <h4 class="title mb-2">
                                                <a href="#">2022 Nissan Almera Review | Philkotse Philippines</a>

                                            </h4>

                                            <span class="price mb-2">
                                                <span class="price-title">Car price:</span> ₱1,198,000
                                            </span>
                                            <p class="text-s">
                                                <span>Sedan</span>
                                                <span class="number">4.1/5</span>
                                                <span class="star"><i class="fa-solid fa-star"></i></span>
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <p class="text-center text-primary fw-bold mb-0">{{__('components.view_all')}}</p>
                            </ul>

                        </div>
                    </div>
                    <h2 class="heading">{{__('components.related_news')}} </h2>
                    <div class="box-gray-a">
                        <ul class="list-new-a">
                            <li> <a href="#" title="Geely PH wants Emgrand for taxi, ride-sharing services"
                                    class="photo">
                                    <!-- <span class="video"></span> -->
                                    <img data-src="https://img.philkotse.com/crop/94x52/2022/02/28/O3IWXvly/img-7320-e177_wm.jpg"
                                        alt="Geely PH wants Emgrand for taxi, ride-sharing services"
                                        class="lazy-hidden lazy-load-success"
                                        src="https://img.philkotse.com/crop/94x52/2022/02/28/O3IWXvly/img-7320-e177_wm.jpg"
                                        data-loaded="true">
                                </a>
                                <h3 class="title"> <a
                                        href="/market-news/geely-philippines-wants-emgrand-taxi-tnvs-12241"
                                        title="Geely PH wants Emgrand for taxi, ride-sharing services">Geely PH wants
                                        Emgrand for taxi,
                                        ride-sharing services</a> </h3>
                            </li>
                            <li> <a href="#" title="Which 2022 Geely Emgrand variant should you buy? [Comparison Guide]"
                                    class="photo">
                                    <!-- <span    class="video"></span>  -->
                                    <img class="lazy-hidden lazy-load-success"
                                        src="https://img.philkotse.com/crop/94x52/2022/02/24/O3IWXvly/geely-emgrand-variant-guide-2ea1_wm.png">
                                </a>
                                <h3 class="title"> <a href="#"
                                        title="Which 2022 Geely Emgrand variant should you buy? [Comparison Guide]">Which
                                        2022 Geely Emgrand
                                        variant should you buy? [Comparison Guide]</a> </h3>
                            </li>
                            <li class="border-0 pb-0"> <a href="#"
                                    title="2022 Geely Emgrand joins PH sedan market with P798K starting price&nbsp;"
                                    class="photo">
                                    <!-- <spanclass="video"></span>  -->
                                    <img class="lazy-hidden lazy-load-success"
                                        src="https://img.philkotse.com/crop/94x52/2022/02/23/WFFKkBCT/img-7310-5-11zon-9534_wm.jpg">
                                </a>
                                <h3 class="title"> <a href="#"
                                        title="2022 Geely Emgrand joins PH sedan market with P798K starting price&nbsp;">2022
                                        Geely Emgrand
                                        joins PH sedan market with P798K starting price&nbsp;</a> </h3>
                            </li>
                        </ul>
                    </div>
                    <h2 class="heading">{{__('components.related_review')}}</h2>
                    <div class="box-gray-a">
                        <ul class="list-from-price">
                            <li class="big"> <a href="#" class="photo"> <img class="lazy-hidden lazy-load-success w-100"
                                        src="https://img.philkotse.com/crop/248x140/2020/11/06/WFFKkBCT/maxus-g50-1-7a45.png">
                                </a>
                                <h3 class="title"> <a href="#">2021 Maxus G50 Premium Review | Philkotse Philippines</a>
                                </h3>
                            </li>
                            <li> <a href="#" title="2022 MG ZS Trophy Review | Philkotse Philippines" class="photo">
                                    <img data-src="https://img.philkotse.com/crop/94x52/2022/02/08/WFFKkBCT/img-6351-2-11zon-10d3_wm.jpg"
                                        alt="2022 MG ZS Trophy Review | Philkotse Philippines"
                                        class="lazy-hidden lazy-load-success"
                                        src="https://img.philkotse.com/crop/94x52/2022/02/08/WFFKkBCT/img-6351-2-11zon-10d3_wm.jpg"
                                        data-loaded="true"> </a>
                                <h3 class="title"> <a href="#"
                                        title="2022 MG ZS Trophy Review | Philkotse Philippines">2022 MG ZS Trophy
                                        Review | Philkotse
                                        Philippines</a> </h3>
                            </li>
                            <li> <a href="#"
                                    title="2021 Toyota Vios GR-S Quick Drive Review: For those who hate mundane"
                                    class="photo"> <img
                                        data-src="https://img.philkotse.com/crop/94x52/2021/03/10/O3IWXvly/img-9583-7bdd.jpg"
                                        alt="2021 Toyota Vios GR-S Quick Drive Review: For those who hate mundane"
                                        class="lazy-hidden lazy-load-success"
                                        src="https://img.philkotse.com/crop/94x52/2021/03/10/O3IWXvly/img-9583-7bdd.jpg"
                                        data-loaded="true">
                                </a>
                                <h3 class="title"> <a href="#"
                                        title="2021 Toyota Vios GR-S Quick Drive Review: For those who hate mundane">2021
                                        Toyota Vios GR-S
                                        Quick Drive Review: For those who hate mundane</a> </h3>
                            </li>
                            <li> <a href="#" title="2022 Toyota Raize First Impressions Review | Philkotse Philippines"
                                    class="photo"> <img
                                        data-src="https://img.philkotse.com/crop/94x52/2022/02/04/WFFKkBCT/img-6601-e104_wm.jpg"
                                        alt="2022 Toyota Raize First Impressions Review | Philkotse Philippines"
                                        class="lazy-hidden lazy-load-success"
                                        src="https://img.philkotse.com/crop/94x52/2022/02/04/WFFKkBCT/img-6601-e104_wm.jpg"
                                        data-loaded="true"> </a>
                                <h3 class="title"> <a href="/car-review/toyota-raize-philippines-rv359"
                                        title="2022 Toyota Raize First Impressions Review | Philkotse Philippines">2022
                                        Toyota Raize First
                                        Impressions Review | Philkotse Philippines</a> </h3>
                            </li>
                            <li class="border-0 pb-0"> <a href="#"
                                    title="2021 Changan Alsvin Review | Philkotse Philippines" class="photo"> <img
                                        data-src="https://img.philkotse.com/crop/94x52/2021/06/29/WFFKkBCT/img-1689-101b.jpg"
                                        alt="2021 Changan Alsvin Review | Philkotse Philippines"
                                        class="lazy-hidden lazy-load-success"
                                        src="https://img.philkotse.com/crop/94x52/2021/06/29/WFFKkBCT/img-1689-101b.jpg"
                                        data-loaded="true">
                                </a>
                                <h3 class="title"> <a href="#"
                                        title="2021 Changan Alsvin Review | Philkotse Philippines">2021 Changan Alsvin
                                        Review | Philkotse
                                        Philippines</a> </h3>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
