<div class="line-gray container"></div>
<div class="box-brand-home">
    <div class="container">
        <div class="heading-brand-home">
            <h1>{{__('home.price_by_brand')}}</h1>
        </div>
        <div class="row mb-4">
            @foreach($brands as $brand)
            <div class="col-2 mb-4">
                <div class="brand-main-content">
                    <div class="brand-img ">
                        <a href="#"><p><img src="{{$brand->images}}" class="img-fluid" alt=""></p></a>
                    </div>
                    <div class="brand-name">
                        <p>{{$brand->name}}</p>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <p class="text-center view-all-price-list"><a href="#">View all price lists</a></p>
    </div>
</div>
