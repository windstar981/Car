// zoom img
$(document).ready(function () {
    $('.myImgSlide').click(function(){
       $('.modalImg').removeClass('d-none');
       $('#img01').attr('src', $(this).attr('src'));
       $('body').css('overflow','hidden');
    });
    $('#myModalImg').on('click',function (){
        $('#img01').addClass('out');
        $('body').css('overflow','auto');
        setTimeout(function () {
            $('.modalImg').addClass('d-none');
            $('#img01').removeClass('out');
        }, 400);
    })
});
