
<div class="mb-content">
    <div class="d-flex justify-content-between" id="nav-top-mb">
        <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
           aria-controls="offcanvasExample">
            <i class="fa-solid fa-bars btn-menu"></i>
        </a>
        <img src="{{asset('images/home/logo-philkotse (1).png')}}" alt="" class="pt-3">
        <div class="chat-search">
            <span class="chat"><span class="number">0</span><i class="fa-solid fa-comment-dots"></i></span>
            <span class="search" data-bs-toggle="offcanvas" href="#offcanvasFilter"
                  role="button" aria-controls="offcanvasExample2"><i class="fa-solid fa-magnifying-glass"></i></span>
            <div class="col-6">

                <!-- header -->

                <!-- end -->
                <div class="offcanvas offcanvas-start border-0 w-100" tabindex="-2  "
                     id="offcanvasFilter" aria-labelledby="offcanvasExampleLabel2">
                    <div class="offcanvas-header">
                        <div class="head-popup-filter">Filters
                            <span type="button" class="close text-reset"
                                  data-bs-dismiss="offcanvas" aria-label="Close"><i
                                    class="fa-solid fa-xmark"></i></span>
                        </div>
                    </div>
                    <div class="offcanvas-body">
                        <div class="tab-search-mb pt-2">
                            <div class="tab-menu-search-mb">
                                <div class="tab-item-mb tab0 ac-tab-filter" id="home-tab"
                                     data-bs-toggle="tab" data-bs-target="#home" type="button"
                                     role="tab" aria-controls="home" aria-selected="true">
                                    <a href="#">Search All</a>
                                </div>
                                <div class="tab-item-mb tab1">
                                    <a href="#">Car for sale</a>
                                </div>
                                <div class="tab-item-mb tab2">
                                    <a href="#">Car Guide</a>
                                </div>
                                <div class="tab-item-mb tab3">
                                    <a href="#">Car Dealer</a>
                                </div>
                                <div class="tab-item-mb tab4">
                                    <a href="#">Car Reviews</a>
                                </div>
                                <div class="tab-item-mb tab5">
                                    <a href="#">Car Promo</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-main-content tab0">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" placeholder="Search for keywrods">
                            <span class="icon-search"><i
                                    class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                        <div class="tab-main-content tab1">
                            <div class="f-flex p-2">
                                <div class="radio">
                                    <input class="form-check-input" type="radio"
                                           name="exampleRadios" id="exampleRadios1" value="option1"
                                           checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Both
                                    </label>
                                </div>
                                <div class="radio">
                                    <input class="form-check-input" type="radio"
                                           name="exampleRadios" id="exampleRadios2"
                                           value="option1">
                                    <label class="form-check-label" for="exampleRadios2">
                                        New
                                    </label>
                                </div>
                                <div class="radio">
                                    <input class="form-check-input" type="radio"
                                           name="exampleRadios" id="exampleRadios3"
                                           value="option1">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Used
                                    </label>
                                </div>
                            </div>
                            <div class="container-brand mt-3">
                                <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="p-2 bd-highlight content-left">Brand</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb">
                                        <i>Select a brand </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3 ">
                                    <div class="p-2 bd-highlight content-left">Model</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb">
                                        <i>Select a model </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="pt-2 bd-highlight content-left">City/Region
                                    </div>
                                    <div class="p-2 bd-highlight tab-content-select-mb">
                                        <i>Select a city/region </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="p-2 bd-highlight content-left">Color</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb">
                                        <i>Select a color </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-row bd-highlight mb-3 border-bottom pb-3">
                                    <div class="pt-2 bd-highlight content-left">Body type</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb ">
                                        <i>Select a body type </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <!-- <div class="range-year">
                                    <span class="content-1">Year range</span>
                                    <span class="content-2">No limit</span>
                                    <input type="range" class="form-range" id="customRange1">
                                </div> -->
                            </div>
                            <div class="footer-filter">
                                <button class="btn-res">Reset</button>
                                <div class="wrap-btn">
                                    <button class="btn-apply" type="button">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="offcanvas offcanvas-end border-0"
                             id="offcanvasRightSubContent" aria-labelledby="offcanvasRightLabel">
                            <div class="">
                                <!-- header -->
                                <div class="custom-dropdown-head">
                                    Select a brand
                                    <span type="" class="text-reset custom-dropdown-close"
                                          data-bs-dismiss="offcanvas" aria-label="Close"><i
                                            class="fa-solid fa-left-long"></i></span>
                                </div>
                                <!-- end -->
                            </div>
                            <div class="offcanvas-body pb-0">
                                <div class="form-search-mb">
                                    <input type="text" class="form-control"
                                           placeholder="Search by keyword">
                                </div>
                                <div class="select-option-search">
                                    <ul>
                                        <li><span class="lv1">City/Region</span></li>
                                        <li><span class="lv2">Abra</span></li>
                                        <li><span class="lv3">Bangued</span></li>
                                        <li><span class="lv3">Boliney</span></li>
                                        <li><span class="lv3">Bucay</span></li>
                                        <li><span class="lv3">Bucloc</span></li>
                                        <li><span class="lv3">Daguioman</span></li>
                                        <li><span class="lv3">Danglas</span></li>
                                        <li><span class="lv3">Dolores</span></li>
                                        <li><span class="lv3">Lacub</span></li>
                                        <li><span class="lv2">Agusan del Norte</span></li>
                                        <li><span class="lv3">Buenavista</span></li>
                                        <li><span class="lv3">Butuan</span></li>
                                        <li><span class="lv3">Cabadbaran</span></li>
                                        <li><span class="lv3">Carmen</span></li>
                                        <li><span class="lv3">Carmen</span></li>
                                        <li class="border-0"><span class="lv3">Jabonga</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-main-content tab2">
                            <div class="container-brand mt-3">
                                <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="p-2 bd-highlight content-left">Brand</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb">
                                        <i>Select a brand </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3 ">
                                    <div class="p-2 bd-highlight content-left">Model</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb">
                                        <i>Select a model </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>

                                <div
                                    class="d-flex flex-row bd-highlight mb-3 border-bottom pb-3">
                                    <div class="pt-2 bd-highlight content-left">Body type</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb ">
                                        <i>Select a body type </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <!-- <div class="range-year">
                                    <span class="content-1">Year range</span>
                                    <span class="content-2">No limit</span>
                                    <input type="range" class="form-range" id="customRange1">
                                </div> -->
                            </div>
                            <div class="footer-filter">
                                <button class="btn-res">Reset</button>
                                <div class="wrap-btn">
                                    <button class="btn-apply" type="button">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-main-content tab3">
                            <div class="f-flex p-2">
                                <div class="radio">
                                    <input class="form-check-input" type="radio"
                                           name="exampleRadios" id="exampleRadios1" value="option1"
                                           checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        All car
                                    </label>
                                </div>
                                <div class="radio">
                                    <input class="form-check-input" type="radio"
                                           name="exampleRadios" id="exampleRadios2"
                                           value="option1">
                                    <label class="form-check-label" for="exampleRadios2">
                                        New car
                                    </label>
                                </div>
                                <div class="radio">
                                    <input class="form-check-input" type="radio"
                                           name="exampleRadios" id="exampleRadios3"
                                           value="option1">
                                    <label class="form-check-label" for="exampleRadios3">
                                        Used car
                                    </label>
                                </div>
                            </div>
                            <div class="container-brand mt-3">
                                <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="p-2 bd-highlight content-left">Brand</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb">
                                        <i>Select a brand </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>

                                <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="pt-2 bd-highlight content-left">City/Region
                                    </div>
                                    <div class="p-2 bd-highlight tab-content-select-mb">
                                        <i>Select a city/region </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp"
                                       placeholder="Search for dealerships">
                                <!-- <div class="range-year">
                                    <span class="content-1">Year range</span>
                                    <span class="content-2">No limit</span>
                                    <input type="range" class="form-range" id="customRange1">
                                </div> -->
                            </div>
                            <div class="footer-filter">
                                <button class="btn-res">Reset</button>
                                <div class="wrap-btn">
                                    <button class="btn-apply" type="button">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-main-content tab4">
                            <div class="container-brand mt-3">
                                <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="p-2 bd-highlight content-left">Brand</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb">
                                        <i>Select a brand </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3 ">
                                    <div class="p-2 bd-highlight content-left">Model</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb">
                                        <i>Select a model </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <div
                                    class="d-flex flex-row bd-highlight mb-3 border-bottom pb-3">
                                    <div class="pt-2 bd-highlight content-left">Body type</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb ">
                                        <i>Select a body type </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <!-- <div class="range-year">
                                    <span class="content-1">Year range</span>
                                    <span class="content-2">No limit</span>
                                    <input type="range" class="form-range" id="customRange1">
                                </div> -->
                            </div>
                            <div class="footer-filter">
                                <button class="btn-res">Reset</button>
                                <div class="wrap-btn">
                                    <button class="btn-apply" type="button">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-main-content tab5">
                            <div class="container-brand mt-3">
                                <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="p-2 bd-highlight content-left">Region</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb">
                                        <i>Select a region </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3">
                                    <div class="p-2 bd-highlight content-left">Brand</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb">
                                        <i>Select a brand </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3 ">
                                    <div class="p-2 bd-highlight content-left">Model</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb">
                                        <i>Select a model </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3 ">
                                    <div class="p-2 bd-highlight content-left">Promo type</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb">
                                        <i>Select a promo type </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <div class="d-flex flex-row bd-highlight mb-3 ">
                                    <div class="p-2 bd-highlight content-left">Dealership</div>
                                    <div class="p-2 bd-highlight tab-content-select-mb">
                                        <i>Select a Dealership </i>
                                        <i class="fa-solid fa-caret-right float-end"></i>
                                    </div>
                                </div>
                                <!-- <div class="range-year">
                                    <span class="content-1">Year range</span>
                                    <span class="content-2">No limit</span>
                                    <input type="range" class="form-range" id="customRange1">
                                </div> -->
                            </div>
                            <div class="footer-filter">
                                <button class="btn-res">Reset</button>
                                <div class="wrap-btn">
                                    <button class="btn-apply" type="button">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box-spotlight-new-mb">

        <div class="list-tag">
            <div class="list"> <a class="tag" title="ToyotaRaizeReview" href="#">ToyotaRaizeReview</a> <a
                    class="tag" title="RaizeVsStonic" href="#">RaizeVsStonic</a>
                <a class="tag" title="GeelySedanLaunch" href="#">GeelySedanLaunch</a>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-start w-80" tabindex="-1" id="offcanvasExample"
         aria-labelledby="offcanvasExampleLabel" style="width:80%;">
        <div class="offcanvas-body p-0 mb-4">

                <span class="text-reset  float-end btn-closes" data-bs-dismiss="offcanvas" aria-label="Close"><i
                        class="fa-solid fa-xmark"></i></span>
            <div class="login">
                <a href="#" class="">
                    <i class="fa-solid fa-user"></i> Login
                </a> |
                <a href="#">
                    <i class="fa-solid fa-lock"></i> Sign up
                </a>

            </div>
            <div class="box-sell-my-car">
                <a href="#" class="link-btn" title="Sell my car">Sell my car</a>
            </div>
            <ul class="sub-menu-lv-1">
                <li>
                    <a href="#">Cars for sale</a>
                    <span class="float-end drop-menu-lv-2">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    <div class="sub-menu-lv-2 d-none">
                        <ul>
                            <li><a href="#">Toyota</a></li>
                            <li><a href="#">MG</a></li>
                            <li><a href="#">Chery</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">New Cars</a>
                    <span class="float-end drop-menu-lv-2">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    <div class="sub-menu-lv-2 d-none">
                        <ul>
                            <li><a href="#">Toyota</a></li>
                            <li><a href="#">MG</a></li>
                            <li><a href="#">Chery</a></li>
                        </ul>
                    </div>
                </li>

                <li><a href="#">Used Cars</a>
                    <span class="float-end drop-menu-lv-2">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    <div class="sub-menu-lv-2 d-none">
                        <ul>
                            <li><a href="#">Toyota</a></li>
                            <li><a href="#">MG</a></li>
                            <li><a href="#">Chery</a></li>
                        </ul>
                    </div>
                </li>

                <li><a href="#">News & reviews</a>

                    <span class="float-end drop-menu-lv-2">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    <div class="sub-menu-lv-2 d-none">
                        <ul>
                            <li>
                                <a href="{{route('reviews')}}">Car Review</a>
                                <span class="float-end drop-menu-lv-3">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </span>
                                <div class="sub-menu-lv-3 d-none">
                                    <ul>
                                        <li><a href="#">Toyota</a></li>
                                        <li class="pt-0 pb-0"><a href="#">Honda</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="pt-0 pb-0">
                                <a href="#">Car New</a>
                                <span class="float-end drop-menu-lv-3">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </span>
                                <div class="sub-menu-lv-3 d-none">
                                    <ul>
                                        <li>
                                            <a href="#"> Market News</a>
                                        </li>
                                        <li class="pt-0 pb-0"> <a href="#">New Releases</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li><a href="#">Car comparisons</a>

                    <span class="float-end drop-menu-lv-2">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    <div class="sub-menu-lv-2 d-none">
                        <ul>
                            <li><a href="#">Toyota</a></li>
                            <li><a href="#">MG</a></li>
                            <li><a href="#">Chery</a></li>
                        </ul>
                    </div>
                </li>

                <li class="text-more">
                    <a href="#">Explore more</a>
                    <div class="sub-menu-lv-2">
                        <ul>
                            <li><a href="#">Hottest New Cars</a>
                                <span class="float-end drop-menu-lv-2">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </span>
                            </li>
                            <li><a href="#">Toyota</a>
                                <span class="float-end drop-menu-lv-2">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </span>
                            </li>
                            <li><a href="#">Mitsubishi</a>
                                <span class="float-end drop-menu-lv-2">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </span>
                            </li>
                            <li><a href="#">Honda</a>
                                <span class="float-end drop-menu-lv-2">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </span>
                            </li>
                            <li><a href="#">Hyundai</a>
                                <span class="float-end drop-menu-lv-2">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </span>
                            </li>
                            <li><a href="#">Isuzu</a>
                                <span class="float-end drop-menu-lv-2">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </span>
                            </li>
                            <li><a href="#">Ford</a>
                                <span class="float-end drop-menu-lv-2">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </span>
                            </li>
                            <li><a href="#">Nissan</a>
                                <span class="float-end drop-menu-lv-2">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </span>
                            </li>
                            <li><a href="#">Suzuki</a>
                                <span class="float-end drop-menu-lv-2">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </span>
                            </li>
                            <li><a href="#">Nissan</a>
                                <span class="float-end drop-menu-lv-2">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </span>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <div>
        <!-- mobille -->
        <div class="box-menu-neo"> <span class="find_cars item active" title="Find cars"> <i
                    class="fa-solid fa-magnifying-glass-plus" style="color: #f60;"></i>
                    <h2 class="title" style="color: #f60;">Find cars</h2>
                </span> <a href="#" title="Car price" class="item"> <span class="icon-price">₱</span>
                <h2 class="title">Car price</h2>
            </a> <a href="/sell-car" class="item" title="Sell car"><i class="fa-solid fa-car"></i>
                <h2 class="title">Sell</h2>
            </a> <a href="/news" title="News" class="item"> <i class="fa-solid fa-newspaper"></i>
                <h2 class="title">News</h2>
            </a> <a href="/tips-advice" title="Tips" class="item"> <i class="fa-solid fa-rectangle-list"></i>
                <h2 class="title">Tips</h2>
            </a>
        </div>
    </div>
</div>
<div id="wr_wrapper">
    <div id="header" class="header">
        <div class="header-top">
            <div class="container">
                <a href="{{route('home')}}" class="logo"></a>
                <div class="box-spotlight-new">
                    <div class="item-spotlight-new">
                        <span class="title" title="Spotlight"> Spotlight: </span>
                        <a title="ToyotaRaizeReview" href="#">ToyotaRaizeReview </a>
                        <a title="RaizeVsStonic" href="#">RaizeVsStonic </a>
                        <a title="GeelySedanLaunch" href="#">GeelySedanLaunch</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navi">
            <div class="container">
                <ul class="menu-top">
                    <li class="car-for-sale"> <a id="nav_car" href="{{route('cars')}}" class="">Cars for sale</a>
                        <div class="sub-menu-car-for-sale" id="menu_brand">
                            <div class="container">
                                <ul class="list-brand brandall-car">
                                    <li class="i-toyota">
                                        <div class="text-center">
                                            <img src="{{asset('images/home/toyota.png')}}" width="50px" height="40px" alt="">
                                            <span class="text-ellipsis"> Toyota </span>
                                        </div>
                                    </li>
                                    <li class="i-mg">
                                        <div class="text-center"> <img src="{{asset('images/home/mg.png')}}" width="50px"
                                                                       height="40px" alt=""> <span class="text-ellipsis"> MG </span> </div>
                                    </li>
                                    <li class="i-chery">
                                        <div class="text-center"><img src="{{asset('images/home/chery.png')}}" width="50px"
                                                                      height="40px" alt=""><span class="text-ellipsis"> Chery </span>
                                        </div>
                                    </li>
                                    <li class="i-honda">
                                        <div class="text-center"><img src="{{asset('images/home/honda.png')}}" width="50px"
                                                                      height="40px" alt=""><span class="text-ellipsis"> Honda </span>
                                        </div>
                                    </li>
                                    <li class="i-mitsubishi">
                                        <div class="text-center"><img src="{{asset('images/home/mitsubishi.png')}}" width="50px"
                                                                      height="40px" alt=""><span class="text-ellipsis"> Mitsubishi </span>
                                        </div>
                                    </li>
                                    <li class="i-hyundai">
                                        <div class="text-center"> <img src="{{asset('images/home/hyundai.png')}}" width="50px"
                                                                       height="40px" alt=""> <span class="text-ellipsis"> Hyundai </span>
                                        </div>
                                    </li>
                                    <li class="i-ford">
                                        <div class="text-center"> <img src="{{asset('images/home/ford.png')}}" width="50px"
                                                                       height="40px" alt=""> <span class="text-ellipsis"> Ford </span>
                                        </div>
                                    </li>
                                    <li class="i-nissan">
                                        <div class="text-center"><img src="{{asset('images/home/nissan.png')}}" width="50px"
                                                                      height="40px" alt=""><span class="text-ellipsis"> Nissan </span>
                                        </div>
                                    </li>
                                    <li class="i-kia">
                                        <div class="text-center"> <img src="{{asset('images/home/kia.png')}}" width="50px"
                                                                       height="40px" alt=""><span class="text-ellipsis"> Kia </span> </div>
                                    </li>
                                    <li class="i-isuzu">
                                        <div class="text-center"> <img src="{{asset('images/home/isuzu.png')}}" width="50px"
                                                                       height="40px" alt=""> <span class="text-ellipsis"> Isuzu </span>
                                        </div>
                                    </li>
                                    <li class="i-suzuki">
                                        <div class="text-center"> <img src="{{asset('images/home/suzuki.png')}}" width="50px"
                                                                       height="40px" alt=""> <span class="text-ellipsis"> Suzuki </span>
                                        </div>
                                    </li>
                                    <li class="i-mazda">
                                        <div class="text-center"> <img src="{{asset('images/home/mazda.png')}}" width="50px"
                                                                       height="40px" alt=""> <span class="text-ellipsis"> Mazda </span>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#" class="more"> View all car brands <i
                                        class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="menu-new-car"> <a href="{{route('newcars')}}" class="">New cars</a>
                        <div class="sub-menu-new-car">
                            <div class="container">
                                <div class="b-left"> <a href="#" class="">Search for new
                                        car</a> <a href="#" class="">Car promos</a>
                                    <a href="#" class="">Car dealerships</a> <a
                                        href="#" class="">Compare new car</a>
                                </div>
                                <div class="b-right d-flex  flex-wrap border-start">
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/toyota.png')}}" alt="">

                                        </div>

                                        <div class="content w-100">
                                            <p>Toyota</p>
                                        </div>
                                    </div>
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/mitsubishi.png')}}" alt="">
                                        </div>
                                        <div class="content w-100">
                                            <p>Mitsubishi</p>
                                        </div>
                                    </div>
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/honda.png')}}" alt="">
                                        </div>
                                        <div class="content w-100">
                                            <p>Honda</p>
                                        </div>
                                    </div>
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/hyundai.png')}}" alt="">
                                        </div>
                                        <div class="content w-100">
                                            <p>Hyundai</p>
                                        </div>
                                    </div>
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/isuzu.png')}}" width="80px" alt="">
                                        </div>
                                        <div class="content w-100">
                                            <p>Isuzu</p>
                                        </div>
                                    </div>
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/mg.png')}}" alt="">
                                        </div>
                                        <div class="content w-100">
                                            <p>MG</p>
                                        </div>
                                    </div>
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/chery.png')}}" alt="">
                                        </div>
                                        <div class="content w-100">
                                            <p>Chery</p>
                                        </div>
                                    </div>
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/kia.png')}}" alt="">
                                        </div>
                                        <div class="content w-100">
                                            <p>Kia</p>
                                        </div>
                                    </div>
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/toyota.png')}}" alt="">
                                        </div>
                                        <div class="content w-100">
                                            <p>Toyota</p>
                                        </div>
                                    </div>
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/ford.png')}}" alt="">
                                        </div>
                                        <div class="content w-100">
                                            <p>Ford</p>
                                        </div>
                                    </div>
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/nissan.png')}}" alt="">
                                        </div>
                                        <div class="content w-100">
                                            <p>Nissan</p>
                                        </div>
                                    </div>
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/mazda.png')}}" alt="">
                                        </div>
                                        <div class="content w-100">
                                            <p>Mazda</p>
                                        </div>
                                    </div>
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/suzuki.png')}}" alt="">
                                        </div>
                                        <div class="content w-100">
                                            <p>Suzuki</p>
                                        </div>
                                    </div>
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/bmw.png')}}" alt="">
                                        </div>
                                        <div class="content w-100">
                                            <p>BMW</p>
                                        </div>
                                    </div>
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/subaru.png')}}" alt="">
                                        </div>
                                        <div class="content w-100">
                                            <p>Subaru</p>
                                        </div>
                                    </div>
                                    <div class="text-center wrap-menu-header">
                                        <div class="img w-100 border">
                                            <img src="{{asset('images/home/icon-allbrand.png')}}" alt="">
                                        </div>
                                        <div class="content w-100">
                                            <p class="text-primary">Allbrand</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('cars')}}" class="">Used cars</a>
                        <ul class="sub-menu-new">
                            <li class="hidden"> <a href="#" class="">Search for used car</a> </li>
                            <li> <a class="" href="">By body type</a>
                                <div class="sub-menu-new-level-2">
                                    <ul class="list">
                                        <li>
                                            <a class="" href="#" title="Used suv for sale philippines">SUV</a>
                                            <a class="" href="#" title="Second hand sedan for sale">Sedan</a>
                                            <a class="" href="#" title="Used hatchback cars for sale">Hatchback</a>
                                            <a class="" href="#=">Van</a>
                                            <a class=" " href="# "
                                               title="Second hand mini van for sale ">Minivan</a>
                                            <a class=" " href="# " title="Second hand pickup for sale ">Truck</a>
                                            <a class=" " href="# ">MPV</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li> <a class=" " href="#"> By price range</a>
                                <div class="sub-menu-new-level-2 ">
                                    <ul class="list ">
                                        <li>
                                            <a class=" " href="#" title="Cars for sale under 1000k ">Under
                                                ₱1.000.000</a>
                                            <a class=" " href="#"
                                               title="Cheapest car in the philippines under 750k ">Under
                                                ₱750.000</a>
                                            <a class=" " href="#"
                                               title="Cheapest car in the philippines under 500k">Under
                                                ₱500.000</a>
                                            <a class=" " href="#"
                                               title="Cheapest car in the philippines under 300k ">Under
                                                ₱300.000</a>
                                            <a class=" " href="#"
                                               title="Cheapest car in the philippines under 200k ">Under
                                                ₱200.000</a>
                                            <a class=" " href="#"
                                               title="Cheapest car in the philippines under 150k ">Under
                                                ₱150.000</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li> <a class=" " href="#">By location</a>
                                <div class="sub-menu-new-level-2 ">
                                    <ul class="list ">
                                        <li>
                                            <a class=" " href="#" title="Used car for sale in Cagayan ">Cagayan</a>
                                            <a class=" " href="#"
                                               title="Used car for sale in Pampanga ">Pampanga</a>
                                            <a class=" " href="#" title="Used car for sale in Cebu ">Cebu</a>
                                            <a class=" " href="#" title="Used car for sale in Iloilo">Iloilo</a>
                                            <a class=" " href="#" title="Used car for sale in Metro Manila ">Metro
                                                Manila</a>
                                            <a class=" " href="#"
                                               title="Used car for sale in Baguio Benguet ">Baguio Benguet</a>
                                            <a class="" href="#"
                                               title="Used car for sale in Pangasinan ">Pangasinan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="hidden "> <a href="#" rel="nofollow " class=" ">Sell my car</a> </li>
                            <li class="hidden "> <a href="#" rel="nofollow " class=" ">Compare used cars</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="">News and Review</a>
                        <ul class="sub-menu-new">
                            <li class="hidden"> <a href="#" class="">Search for used car</a> </li>
                            <li> <a class="" href="{{route('reviews')}}">Car review</a>
                                <div class="sub-menu-new-level-2">
                                    <ul class="list">
                                        <li>
                                            <a class="" href="#" title="Used suv for sale philippines">SUV</a>
                                            <a class="" href="#" title="Second hand sedan for sale">Sedan</a>
                                            <a class="" href="#" title="Used hatchback cars for sale">Hatchback</a>
                                            <a class="" href="#=">Van</a>
                                            <a class=" " href="# "
                                               title="Second hand mini van for sale ">Minivan</a>
                                            <a class=" " href="# " title="Second hand pickup for sale ">Truck</a>
                                            <a class=" " href="# ">MPV</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li> <a class=" " href="#"> By price range</a>
                                <div class="sub-menu-new-level-2 ">
                                    <ul class="list ">
                                        <li>
                                            <a class=" " href="#" title="Cars for sale under 1000k ">Under
                                                ₱1.000.000</a>
                                            <a class=" " href="#"
                                               title="Cheapest car in the philippines under 750k ">Under
                                                ₱750.000</a>
                                            <a class=" " href="#"
                                               title="Cheapest car in the philippines under 500k">Under
                                                ₱500.000</a>
                                            <a class=" " href="#"
                                               title="Cheapest car in the philippines under 300k ">Under
                                                ₱300.000</a>
                                            <a class=" " href="#"
                                               title="Cheapest car in the philippines under 200k ">Under
                                                ₱200.000</a>
                                            <a class=" " href="#"
                                               title="Cheapest car in the philippines under 150k ">Under
                                                ₱150.000</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li> <a class=" " href="#">By location</a>
                                <div class="sub-menu-new-level-2 ">
                                    <ul class="list ">
                                        <li>
                                            <a class=" " href="#" title="Used car for sale in Cagayan ">Cagayan</a>
                                            <a class=" " href="#"
                                               title="Used car for sale in Pampanga ">Pampanga</a>
                                            <a class=" " href="#" title="Used car for sale in Cebu ">Cebu</a>
                                            <a class=" " href="#" title="Used car for sale in Iloilo">Iloilo</a>
                                            <a class=" " href="#" title="Used car for sale in Metro Manila ">Metro
                                                Manila</a>
                                            <a class=" " href="#"
                                               title="Used car for sale in Baguio Benguet ">Baguio Benguet</a>
                                            <a class="" href="#"
                                               title="Used car for sale in Pangasinan ">Pangasinan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="hidden "> <a href="#" rel="nofollow " class=" ">Sell my car</a> </li>
                            <li class="hidden "> <a href="#" rel="nofollow " class=" ">Compare used cars</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="">Car comparisons</a>
                    </li>
                    <li class="more-menu">

                        <ul class="sub-menu-new">
                            <li> <a href="#" class="">Become out partner</a> </li>
                            <li> <a href="#" class="">Loan calculator</a> </li>
                            <li> <a href="#" class="">Car insurance</a> </li>
                        </ul>
                    </li>
                </ul>
                <div class="right-menu">
                    <div class="box-acc" id="box-user"> <span class="btn-acc"><i class="icon-user"></i></span>
                        <div class="acc-head">

                            <div class="login-signgup">
                                <div class="dropdown d-inline">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-language"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="min-width: 10px;">
                                        <li><a  style="margin-left:0px !important" class="dropdown-item" href="{{ route('app.setLocale', ['locale' => 'vi']) }}" ><img src="{{asset('images/home/flag-vn.png')}}"height=20px ></img></a></li>
                                        <li><a style="margin-left:0px !important" class="dropdown-item" href="{{ route('app.setLocale', ['locale' => 'en']) }}" ><img src="{{asset('images/home/flag-uk.png')}}" height=20px ></img></a></li>

                                    </ul>
                                </div>
                                <a href="#" class="btn-login " rel="nofollow">
                                    <i class="fa-solid fa-user"></i> {{__('header.login')}}
                                </a>
                                <a class="btn-regis" href="#" rel="nofollow">
                                    <i class="fa-solid fa-lock"></i> {{__('header.signup')}}
                                </a>


                            </div>
                        </div>
                    </div>
                    <div class="box-search-h">
                            <span class="btn-search" id="show-tab-search-text"><i
                                    class="fa-solid fa-magnifying-glass"></i></span>
                        <div class="box-search-head">
                            <input class="input-text input-search-suggestion ui-autocomplete-input"
                                   id="txtKeywordSearchHome" placeholder="search by keywords" type="text"
                                   autocomplete="off">
                            <div class="btn-search-text" id="searchAutoText"><span><i
                                        class="fa-solid fa-magnifying-glass"></i></span></div>
                            <div class="search-recommend">
                                <ul>
                                    <li>
                                        <a class="get-text-recommend" href="#">Recommend 1</a>
                                    </li>
                                    <li>
                                        <a class="get-text-recommend" href="#">Recommend 2</a>
                                    </li>
                                    <li>
                                        <a class="get-text-recommend" href="#">Recommend 3</a>
                                    </li>
                                    <li>
                                        <a class="get-text-recommend" href="#">Recommend 4</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn-sell-mycar ss-slab"> {{__('header.sell_my_car')}}
                        <span class="tootip"> Tip: Creating a listing on
                                <strong>Philkotse.com</strong> will help your
                                car reach nearly <strong> 300 potential
                                    buyers within the first week!
                                </strong> </span> </a>
                </div>
            </div>
        </div>
    </div>
</div>

