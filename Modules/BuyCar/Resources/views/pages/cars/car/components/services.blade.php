<div class="car-services mt-4">
    <h2 class="heading">
        {{__('car.car_services')}}
    </h2>
    <div class="car-tab">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                        aria-selected="true">{{__('car.calculator')}}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="#profile" type="button" role="tab"
                        aria-controls="profile" aria-selected="false">
                    {{__('car.insurance')}}
                </button>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel"
                 aria-labelledby="home-tab">

                <div class="wrap-content-service border">
                    <div class="header-content">
                        <p>According to the Philkotse auto loan calculator, the Kia Rio
                            installment price for a 20% deposit of 20% will have an estimated
                            monthly payment of ₱ 11,747 for 36 months.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="content-left">
                                <ul class="car-service-caculator">
                                    <li>
                                        <div class="d-flex bd-highlight mb-3 flex-wrap wrap-main-content">
                                            <div class="me-auto p-2 bd-highlight">{{__('car.total_price')}} (PHP)</div>
                                            <div class="p-2 bd-highlight">
                                                <input type="text" placeholder="420,000"
                                                       aria-label="Last name"
                                                       class="form-control"
                                                       style="width:300px">
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight mb-3 flex-wrap wrap-main-content">
                                            <div class="me-auto p-2 bd-highlight">{{__('car.down_payment')}} (%) </div>
                                            <div class="p-2 bd-highlight">
                                                <select class="form-select"
                                                        aria-label="Default select example"
                                                        style="width:300px;">
                                                    <option selected>20%</option>
                                                    <option value="1">30%</option>
                                                    <option value="2">40%</option>
                                                    <option value="3">50%</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="d-flex bd-highlight mb-3 flex-wrap wrap-main-content">
                                            <div class="me-auto p-2 bd-highlight w-100">{{__('car.terms')}}
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <select class="form-select"
                                                        aria-label="Default select example"
                                                        style="width:300px;">
                                                    <option selected>12 Months</option>
                                                    <option value="1">24 Months</option>
                                                    <option value="2">36 Months</option>
                                                    <option value="3">48 Months</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight mb-3 flex-wrap wrap-main-content">
                                            <div class="me-auto p-2 bd-highlight">{{__('car.interest_rate')}} (%)</div>
                                            <div class="p-2 bd-highlight">
                                                <input type="text" placeholder="1.3"
                                                       aria-label="Last name"
                                                       class="form-control float-start"
                                                       style="width:160px; margin-right:10px;">
                                                <select class="form-select float-start"
                                                        aria-label="Default select example"
                                                        style="width:130px;">
                                                    <option selected>Monthly</option>
                                                    <option value="1">Total</option>
                                                    <option value="2">Muanal</option>

                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex flex-row bd-highlight mb-3 flex-wrap">
                                            <div class="p-2 bd-highlight price-title"
                                                 style="width:230px;  color: black; font-weight: bold; ">
                                                {{__('car.down_payment_amount')}}</div>
                                            <div class="p-2 bd-highlight price-number"
                                                 style="color:blue; font-weight: bold; ">

                                                ₱ 84,000
                                            </div>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex flex-row bd-highlight mb-3">
                                            <div class="p-2 bd-highlight price-title"
                                                 style="width:230px;  color: black; font-weight: bold; ">
                                                {{__('car.amount_finaced')}}</div>
                                            <div class="p-2 bd-highlight price-number"
                                                 style="color:blue; font-weight: bold; ">

                                                ₱ 336,000
                                            </div>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex flex-row bd-highlight mb-3">
                                            <div class="p-2 bd-highlight price-title-cl"
                                                 style="width:230px;  color: rgb(251, 93, 30); font-weight: bold; ">
                                                {{__('car.monthly_payment')}}</div>
                                            <div class="p-2 bd-highlight price-title-cl"
                                                 style="color:rgb(251, 93, 30); font-weight: bold; ">
                                                ₱ 11,747
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <p class="btn btn-primary">{{__('car.apply_for')}}</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-5 service-content-pc">
                            <div class="content-right">
                                <h4>
                                    How to use Loan Calculator?
                                </h4>
                                <ul>
                                    <li>1. Enter the total price of the car you like.</li>
                                    <li>2. Choose your preferred downpayment percentage.
                                    </li>
                                    <li>3. Choose your preferred financing term (12 to 60
                                        months).</li>
                                    <li>4. You can use the default interest rate or choose
                                        to adjust as needed.</li>
                                    <li>5. View results and choose a monthly payment term
                                        that is convenient for you.</li>
                                </ul>

                            </div>
                        </div>
                        <p class="note">
                            Check out <a class="cl">Kia Rio Price List</a> to know more
                            about the price of
                            other variants Mang Pandesal along tropical ave. Bf homes Las
                            Pinas and in-depth
                            Car Reviews & Ratings by Philkotse Auto Experts
                        </p>
                    </div>
                </div>


            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel"
                 aria-labelledby="profile-tab">
                INSURANCE
            </div>
        </div>
    </div>
</div>
