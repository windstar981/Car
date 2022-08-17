<div class="box-comment mt-3">
    <h2 class="header">
        {{__('review.your_opinion')}}
    </h2>
    <ul class="list">
        <li class="rating">
            <span class="pull-left">{{__('review.your_rating')}}:</span>
            <span class="star-vote"><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                    class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                            </span>
            <span class="number-vote"> <span id="ratepoint">5.0</span>/ 5.0
                                            </span>
        </li>
        <li> {{__('review.your_comment')}}:
            <textarea class="form-control mt-2" id="exampleFormControlTextarea1"
                      rows="3" placeholder="Please share your opinion with others"></textarea>
        </li>
        <li class="text-center">
            <a href="#" class="btn-sub-cmt">{{__('review.submit_comment')}}</a>
        </li>
    </ul>
</div>
