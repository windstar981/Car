<div class="same-price mt-5 mb-5">
    <div class="heading clearfix">
        <h3 class="float-start">{{__('car.car_guide_same_price')}}</h3>
        <a href="#" class="float-end">{{__('car.view_more')}}</a>
    </div>
    <div class="row">
        @foreach($same_price_rang as $key => $product)
            @if($key<3)
        <div class="col-lg-4 col-md-6 col-xs-6 mb-2">
            <a href="/car/{{$product->id}}">
                <img src="{{asset($product->image_thumbnail)}}" class="w-100" style="height: 172px" alt="">
                <div class="info border rounded-bottom border-2">

                    <div class="info">
                        <h4>{{$product->sub_content}}</h4>
                        <p>Price available upon <br>request</p>
                    </div>
                </div>
            </a>
        </div>
            @endif
        @endforeach

    </div>
</div>
