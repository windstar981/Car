$(document).ready(function () {
    $('#no-change-salary').change(function () {
        $('.wrap-no-change').removeClass('d-none');
        $('.wrap-change').addClass('d-none');
    })
    $('#change-salary').change(function () {
        $('.wrap-no-change').addClass('d-none');
        $('.wrap-change').removeClass('d-none');
    })
    $('#private').change(function () {
        $('.select-region').removeAttr('disabled');
        $('.select-region').css('cursor', 'pointer');
        $('.select-region').css('background-color', 'white');
        $('.th-vung').css('display', 'table-cell');
        $('.detail-vung').css('display', 'table-cell');

    })
    $('#government').change(function () {
        $('.select-region').attr('disabled', 'disabled');
        $('.select-region').css('cursor', 'no-drop');
        $('.select-region').css('background-color', '#eee');
        $('.th-vung').css('display', 'none');
        $('.detail-vung').css('display', 'none');
    })

    $('input').keyup(function () {
        $('#result_wrap').addClass('d-none');
        $('.table-detail-explanation').addClass('d-none');
    })

    function insertCharacter(str, index, value) {
        return str.substring(0, index) + value + str.substring(index);
    }

    function formatMoney(money) {
        let count = 0;
        for (let i = money.length - 1; i >= 0; i--) {
            count++;
            if (count == 3) {
                money = insertCharacter(money, i, ',');
                count = 0;
            }
        }
        if (money[0] == ',') {
            money = money.slice(1)
        }
        return money;
    }

    function hasAlpha(str) {
        for (let i = 0; i < str.length; i++) {
            if (!(str[i] >= '0' && str[i] <= '9')) return true;
        }
        return false;
    }

    $('.money').keyup(function () {
        let money = $(this).val();
        money = money.split(',').join('');
        if (hasAlpha(money)) {
            $(this).val(0);
        } else {
            if (Number(money) > 10000000000000) {
                $(this).val('10,000,000,000,000');
            } else {
                $(this).val(formatMoney(money));
            }
        }
    })


    //logic lấy dữ liệu

    let avgSalary = 0;
    let time = 0;
    let baseSalary = 1490000;
    let region = 1;
    let salaryService = 'Doanh nghiệp nhà nước';

    function getAvgSalaryNoChange() {
        return Number(getMoney($('#avgSalaryNoChange').val()));
    }

    function getMoney(money) {
        return Number(money.split(',').join(''));
    }

    function getAvgSalaryChange() {
        return Number(
            Number(getMoney($('#month1').val()))
            + Number(getMoney($('#month2').val()))
            + Number(getMoney($('#month3').val()))
            + Number(getMoney($('#month4').val()))
            + Number(getMoney($('#month5').val()))
            + Number(getMoney($('#month6').val())) / 6);
    }

    $('#government').change(function () {
        baseSalary = 1490000;
        salaryService = 'Doanh nghiệp nhà nước';
    })
    $('#private').change(function () {
        baseSalary = 4420000;
        salaryService = 'Doanh nghiệp tư nhân';
    })

    $('#salary_area').change(function () {
        region = ($('#salary_area').val())
        if (region == 1) {
            baseSalary = 4420000;
        } else if (region == 2) {
            baseSalary = 3920000;
        } else if (region == 3) {
            baseSalary = 3430000;
        } else if (region == 4) {
            baseSalary = 3070000;
        }
        console.log(baseSalary);
    })

    function getData() {
        if (!$('.wrap-no-change').hasClass('d-none')) {
            avgSalary = getAvgSalaryNoChange();
        } else {
            avgSalary = getAvgSalaryChange();
        }
        time = Number($('#time').val());
    }


    //@todo vaidation
    function validate(){
        console.log($('.avgSalaryNoChange').val());
        if($('.avgSalaryNoChange').val()==null)
        {
            $(this).parent('step-input').children('vali-money').css('display','block');
        }
        if($('#month1').val()==null)
        {
            $('.vali-money').css('display','block');
        }
        if($('#month2').val()==null)
        {
            $('.vali-money').css('display','block');
        }
        if($('#month3').val()==null)
        {
            $('.vali-money').css('display','block');
        }
        if($('#month4').val()==null)
        {
            $('.vali-money').css('display','block');
        }
        if($('#month5').val()==null)
        {
            $('.vali-money').css('display','block');
        }
        if($('#month6').val()==null)
        {
            $('.vali-money').css('display','block');
        }

    }


    $('.btn-submit').click(function () {
        getData();
        validate();
        if (Number(Math.ceil(avgSalary)) <= 0 || (Number(time) == 0)) {
            return;
        }

        $('#result_wrap').removeClass('d-none');
        $('.table-detail-explanation').removeClass('d-none');
        let insuranceSalary = Math.ceil(avgSalary);
        let maxSalary = 20 * baseSalary;
        let salaryApply = insuranceSalary;
        if (salaryApply > maxSalary) {
            salaryApply = maxSalary;
        }
        let maxSupportSalary = 5 * baseSalary;
        let supportMonth = Math.floor(0.6 * salaryApply);
        let realSupportMonth = supportMonth;
        if (supportMonth > maxSupportSalary) {
            realSupportMonth = maxSupportSalary;
        }
        let numberMonth = 0;
        if (time < 12) {
            numberMonth = 0;
        } else if (time <= 36) {
            numberMonth = 3;
        } else {
            numberMonth = Math.floor(Number(time) / 12);
        }
        $('.detail-vung').text(region);
        $('#tinh_bao_hiem_result').text(formatMoney(realSupportMonth.toString()));
        $('#so_thang_huong_bhxh_result').text(numberMonth);
        $('.detail-luong-dong-bhtn').text(formatMoney(insuranceSalary.toString()));
        $('.detail-che-do-luong').text(salaryService);
        $('.detail-muc-huong-thuc-nhan').text(formatMoney(realSupportMonth.toString()));
        $('.detail-so-thang-thuc-nhan').text(numberMonth);
        $('.luong-co-so').text(formatMoney(baseSalary.toString()));
        $('.luong-tinh-bhtn-toi-da').text(formatMoney(maxSalary.toString()));
        $('.luong-ap-dung-tinh-bhtn').text(formatMoney(salaryApply.toString()));
        $('.luong-huong-hang-thang-toi-da').text(formatMoney(maxSupportSalary.toString()));
        $('.detail-tg-dong-bhtn').text(time);
        $('.tro-cap-theo-luong-ap-dung').text(formatMoney(supportMonth.toString()));
        $('.tro-cap-thuc-linh').text(formatMoney(realSupportMonth.toString()));
        $('.so-thang-huong-bhtn').text(numberMonth);
    });
});
