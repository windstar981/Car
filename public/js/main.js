$(document).ready(function() {
    //slide img
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
//    end slide
    $('.select-option-car').click(function(){
        $('.select-option-car').removeClass('add-color-select-option');
        $(this).addClass('add-color-select-option');
        if($(this).hasClass('selected-option-body-type'))
        {
            $(this).removeClass('select-option-body-type')
            $('.select-option-country').addClass("d-none");
            $('.select-option-body-type').show();

        }
        else{
            $('.select-option-body-type').hide();
            $('.select-option-country').removeClass("d-none");
        }

    })
    $('.get-text-recommend').mouseover(function() {

        $('#txtKeywordSearchHome').attr('placeholder', $(this).text());
    })
    $('.nav-tab-item').click(function(){

        $('.nav-tab-item').removeClass("nav-tab-active");
        $(this).addClass("nav-tab-active");
    })
    $('.active-car').click(function(){

        $('.active-car').removeClass("tab-btn-active");
        $(this).addClass("tab-btn-active");
    })
    $('.tab-active-car-1').click(function(){

        $('.tab-active-car-1').removeClass("tab-btn-active");
        $(this).addClass("tab-btn-active");
    })

    // swiper


    $('.nav-change-select').click(function(){

       $('.nav-change-select').removeClass("active-change-select");
       $(this).addClass("active-change-select");
       if($(this).children().hasClass("swap-img-col")){
            $(this).children(".swap-img-col").attr("src","images/listcar/ico-col-active.png");
            $('.nav-change-select').children(".swap-img-list").attr("src","images/listcar/ico-list-none.png") ;
       }
       else{
            $(this).children(".swap-img-list").attr("src","images/listcar/ico-list-active.png") ;
            $('.nav-change-select').children(".swap-img-col").attr("src","images/listcar/ico-col-none.png")
       }
   })
      //var swiper = new Swiper(".mySwiper-top", {});
    let mn2 = 0;
    $('.drop-menu-lv-2').click(function(){
        if(mn2 ==0 )
        {
            $(this).parent().children('.sub-menu-lv-2').removeClass("d-none");
            $(this).children('.fa-solid').removeClass("fa-chevron-down");
            $(this).children('.fa-solid').addClass("fa-angle-up");
            mn2 = 1;
        }
        else{
            $(this).parent().children('.sub-menu-lv-2').addClass("d-none");
            $(this).children('.fa-solid').removeClass("fa-angle-up");
            $(this).children('.fa-solid').addClass("fa-chevron-down");
            mn2 = 0;
        }
    })
    $('.drop-menu-lv-3').click(function(){
        if(mn2 ==0 )
        {
            $(this).parent().children('.sub-menu-lv-3').removeClass("d-none");
            $(this).children('.fa-solid').removeClass("fa-chevron-down");
            $(this).children('.fa-solid').addClass("fa-angle-up");
            mn2 = 1;
        }
        else{
            $(this).parent().children('.sub-menu-lv-3').addClass("d-none");
            $(this).children('.fa-solid').removeClass("fa-angle-up");
            $(this).children('.fa-solid').addClass("fa-chevron-down");
            mn2 = 0;
        }
    })
    $('.nav-link-ntc').click(function(){

        $('.nav-link-ntc').removeClass("active-ntc");
        $(this).addClass("active-ntc");
    })
    let checkShowMoreCol = 0;
    $('.show-more-btn').click(function(){
        if(checkShowMoreCol ==0)
        {
            $('.col-show-more').css('display','block');
            $(this).children('.fa-solid').removeClass('fa-angle-down');
            $(this).children('.fa-solid').addClass('fa-angle-up');
            checkShowMoreCol = 1;
        }
        else{
            $('.col-show-more').css('display','none');
            $(this).children('.fa-solid').removeClass('fa-angle-up');
            $(this).children('.fa-solid').addClass('fa-angle-down');
            checkShowMoreCol = 0;
        }
    })
    // swiper
    // var swiper = new Swiper(".SwiperOurPartNers", {
    //     slidesPerView: 1,
    //     spaceBetween: 10,
    //     pagination: {
    //       el: ".swiper-pagination",
    //       clickable: true,
    //     },
    //     breakpoints: {
    //       640: {
    //         slidesPerView: 2,
    //         spaceBetween: 20,
    //       },
    //       768: {
    //         slidesPerView: 3,
    //         spaceBetween: 40,
    //       },
    //       1024: {
    //         slidesPerView: 5,
    //         spaceBetween: 50,
    //       },
    //     },
    //   });
    $('.hide-show').hide();
    $('.btn-show-more-content').click(function(){
        $('.hide-show').show();
        $('.idot').hide();
        $('.btn-show-more-content').hide();
        $('.tab-item-mb').removeClass("ac-tab-filter");
        $(this).addClass("ac-tab-filter");
    });
    $('.btn-show-less-content').click(function(){
        $('.hide-show').hide();
        $('.btn-show-more-content').show();
        $('.idot').hide();

    });
    $('.tab-item-mb').click(function(){
        console.log(1);
        if($(this).hasClass('tab0'))
        {
            $('.tab-main-content').hide();
            $('.tab0').show();
            $('.tab-item-mb').removeClass("ac-tab-filter");
            $(this).addClass("ac-tab-filter");

        }
        if($(this).hasClass('tab1'))
        {
            $('.tab-main-content').hide();
            $('.tab1').show();
            $('.tab-item-mb').removeClass("ac-tab-filter");
            $(this).addClass("ac-tab-filter");
        }
        if($(this).hasClass('tab2'))
        {
            $('.tab-main-content').hide();
            $('.tab2').show();
            $('.tab-item-mb').removeClass("ac-tab-filter");
            $(this).addClass("ac-tab-filter");

        }
        if($(this).hasClass('tab3'))
        {
            $('.tab-main-content').hide();
            $('.tab3').show();
            $('.tab-item-mb').removeClass("ac-tab-filter");
            $(this).addClass("ac-tab-filter");

        }
        if($(this).hasClass('tab4'))
        {
            $('.tab-main-content').hide();
            $('.tab4').show();
            console.log(1);
        }
        if($(this).hasClass('tab5'))
        {
            $('.tab-main-content').hide();
            $('.tab5').show();
            $('.tab-item-mb').removeClass("ac-tab-filter");
            $(this).addClass("ac-tab-filter");
        }
    });
    $('.nav-gui-car').click(function(){
        $('.nav-gui-car').removeClass('active-car-gui');
        $(this).addClass('active-car-gui');
    })
    var swiper = new Swiper(".mySwiper-1", {
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        breakpoints: {
          374: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          739: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
        },
      });
    var swiper = new Swiper(".mySwiper-2", {
        loop: true,
    });
    var swiper = new Swiper(".mySwiper-3", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
            374: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          739: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
        },
    });

    var swiper = new Swiper(".mySwiper-top-mb", {});
    $('.btn-search').click(function() {
        if (i % 2 == 0) {
            $('#show-tab-search-text').html('<i class="fa-solid fa-x"></i>');
            $('.box-search-head').css("display", "block");
        } else {
            $('#show-tab-search-text').html('<i class="fa-solid fa-magnifying-glass"></i>');
            $('.box-search-head').css("display", "none");
        }
        i++;

    })
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: "auto",
        spaceBetween:30,
        freeMode: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
    })
//    cardetail
    $('#select-brand').on('change', function() {
        let id_brand = this.value;
        console.log(this.value);

        $.ajax({

            url: "http://127.0.0.1:8000/getmodel/"+id_brand,
            type: "get",
            data: {

            },
            success: function(data) {
                let html="<option value=\"0\">Model</option>";
                for(let i =0 ; i<data.length; i++)
                {
                    html += "<option value="+data[i].id+">"+data[i].name+"</option>"
                }
                $('.model_filer').html(html);

            },
        });
    });


});
