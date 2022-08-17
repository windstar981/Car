<div class="same-model mt-4">
    <div class="heading clearfix">
        <h3 class="float-start">{{__('car.same_model')}}</h3>
        <a href="#" class="float-end">View other Kia Rio listings</a>
    </div>
    <div class="row">
        @foreach($same_models as $same_model)
        <div class="col-lg-4 col-md-6 col-xs-6 mb-2">
            <a href="/car/{{$same_model->id}}">
                <div>
                    <img class="w-100" src="{{asset($same_model->image_thumbnail)}}" style="height: 152px" alt="">
                    <div class="info border rounded-bottom">
                        <h4>{{$same_model->sub_content}}</h4>
                        <p class="location">
                            <i class="fa-solid fa-location-dot"></i>{{$same_model->location}}
                        </p>
                        <p class="price">
                            {{$same_model->price_min}}
                        </p>
                        <p claas="location">{{json_decode($same_model->attribute)->vehicle_gear}} | 65,000km</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
