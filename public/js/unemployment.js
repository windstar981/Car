$(document).ready(function () {
    $('#no-change-salary').change(function () {
        $('.wrap-no-change').show();
        $('.wrap-change').addClass('d-none');
    })
    $('#change-salary').change(function () {
        $('.wrap-no-change').hide();
        $('.wrap-change').removeClass('d-none');
    })
    $('#private').change(function () {
        $('.select-region').attr('disabled', 'disabled');
        $('.select-region').css('cursor', 'no-drop');
        $('.select-region').css('background-color', '#eee');
    })
    $('#government').change(function () {
        $('.select-region').removeAttr('disabled');
        $('.select-region').css('cursor', 'pointer');
        $('.select-region').css('background-color', 'white');
    })
});
