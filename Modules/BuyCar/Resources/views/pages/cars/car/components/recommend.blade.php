<div class="mb-recommend">
    <h2>{{__('car.recommended_for_you')}}</h2>
    <div class="box-list-Recommended">
        <div class="item">
            <a class="float-start" href="/car">
                <img src="https://img.philkotse.com/crop/284x160/2022/02/21/20220221012939-3b59_wm.jpeg" class="photo">
            </a>
            <div class="info">
                <h3 class="title diamond">
                    <a href="#" class="float-start">Avaiable! 2013 Honda CR-V
                        Automatic - call 09171935289</a>
                </h3>

                <p class="price">₱588,000</p>
                <p class="location"><i class="fa-solid fa-location-dot"></i> Metro Manila, Makati</p>
            </div>
        </div>
        <div class="item">
            <a href="#" class="float-start">
                <img src="https://img.philkotse.com/crop/284x160/2022/01/28/a03d7a57-4cfe.jpg')}}" class="photo">
            </a>
            <div class="info">
                <h3 class="title">
                    <a href="/car" class="float-start">Selling Grey Toyota Fortuner 2017 in
                        Manila</a>
                </h3>

                <p class="price">₱1,150,000</p>
                <p class="location"> <i class="fa-solid fa-location-dot"></i> Metro Manila, Manila</p>
            </div>
        </div>
        <div class="item">
            <a href="#" class="float-start">
                <img src="https://img.philkotse.com/crop/284x160/2022/01/27/20220127172132-d3a8_wm.jpeg" class="photo">
            </a>
            <div class="info">
                <h3 class="title diamond">
                    <a href="#" class="float-start">RUSH
                        sale! Red 2019 Suzuki APV Minivan cheap price ga manual gasoline
                        2018 2017</a>
                </h3>

                <p class="price">₱448,000</p>
                <p class="location"><i class="fa-solid fa-location-dot"></i> Cavite, Bacoor</p>
            </div>
        </div>
    </div>
</div>
<div class="box-recommend-product mt-4">
    <h3>{{__('car.recommended_for_you')}}</h3>
    <div class="row">
        @foreach($recommend_for_you as $recommed_car)
            <div class="col-6 d-flex border-end">
                <a href="/car/{{$recommed_car->id}}">
                    <div class="wrap-img">
                        <img src="{{asset($recommed_car->image_thumbnail)}}" alt="">
                    </div>
                </a>
                <div class="wrap-content">
                    <a href="/car/{{$recommed_car->id}}">{{$recommed_car->sub_content}}</a>
                    <p class="price">{{$recommed_car->price_min}}</p>
                    <p class="location">
                        <i class="fa-solid fa-location-dot"></i>{{$recommed_car->location}}
                    </p>
                </div>
            </div>
        @endforeach

    </div>
</div>
