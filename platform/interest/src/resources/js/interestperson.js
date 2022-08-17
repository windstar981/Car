$(document).ready(function () {

    function sumInterest(money, interest, month) {
        return money * interest / 12 * month;
    }

    function total(money, interest, month) {
        return Number(money) + Number(sumInterest(money, interest, month));
    }

    function insertCharacter(str, index, value) {
        return str.substring(0, index) + value + str.substring(index);
    }

    function hasAlpha(str) {
        for (let i = 0; i < str.length; i++) {
            if (!(str[i] >= '0' && str[i] <= '9'))
                return true;
        }
        return false;
    }

    function formatMoney(money) {
        let count = 0;
        for (let i = money.length - 1; i >= 0; i--) {
            count++;
            if (count == 3) {
                money = insertCharacter(money, i, '.');
                count = 0;
            }
        }
        if (money[0] == '.') {
            money = money.slice(1)
        }
        return money;
    }

    function showMoney() {
        let money = $('.value-money').val();
        money = money.substring(0, money.length - 4);
        money = money.split('.').join('');
        let month = $('.value-month').val();
        month = month.split(' ')[0];
        console.log(month);
        let interest = $('.value-interest').val().split('%')[0];
        $('.total-money').text(Number(total(money, interest / 100, month)).toLocaleString('it-IT', {
            style: 'currency',
            currency: 'VND'
        }));
        $('.total-interest').text(Number(sumInterest(money, interest / 100, month)).toLocaleString('it-IT', {
            style: 'currency',
            currency: 'VND'
        }));
    }

    $('.money-range').change(function () {
        let money = Number($('.money-range').val()).toLocaleString('it-IT', {style: 'currency', currency: 'VND'});
        $('.value-money').val(money);
        showMoney();
    })

    $('.value-money').keyup(function () {
        let money = $('.value-money').val().split('.').join('');
        if (hasAlpha(money)) {
            $('.value-money').val(0);
        } else if (Number(money) < 0) {
            $('.value-money').val(0);
        } else if (Number(money) > 10000000000) {
            $('.value-money').val(formatMoney(10000000000));
        } else {
            $('.value-money').val(formatMoney(money));
            showMoney();
        }
    })

    $('.value-month').keyup(function () {
        let month = $('.value-month').val();
        if (hasAlpha(month)) {
            $('.value-month').val(1);
        } else if (Number(month) < 0) {
            $('.value-month').val(1);
        } else if (Number(month) > 60) {
            $('.value-month').val(60);
        } else {
            $('.value-month').val(month);
            showMoney();
        }
    })

    $('.value-interest').keyup(function () {
        let interest = $('.value-interest').val();
        if (hasAlpha(interest)) {
            $('.value-interest').val(0);
        } else if (Number(interest) < 0) {
            $('.value-interest').val(0);
        } else if (Number(interest) > 20) {
            $('.value-interest').val('');
        } else {
            $('.value-interest').val(interest);
            showMoney();
        }
    })

    $('.month-range').change(function () {
        let month = $('.month-range').val() + ' tháng';
        $('.value-month').val(month);
        showMoney();
    })

    $('.value-money').focusin(function () {
        let money = $('.value-money').val();
        money = money.substring(0, money.length - 4);
        money = money.split('.').join('');
        $('.value-money').val(formatMoney(money));
    })

    $('.value-money').blur(function () {
        let money = Number($('.value-money').val().split('.').join('')).toLocaleString('it-IT', {
            style: 'currency',
            currency: 'VND'
        });
        $('.value-money').val(money);
        money = $('.value-money').val();
        money = money.substring(0, money.length - 4);
        money = money.split('.').join('');
        $('.money-range').val(money);
    })

    $('.value-month').focusin(function () {
        let month = $('.value-month').val().split(' ')[0];
        $('.value-month').val(month);
    })

    $('.value-month').blur(function () {
        $('.month-range').val($('.value-month').val());
        let month = $('.value-month').val() + ' tháng';
        $('.value-month').val(month);
    })

    $('.value-interest').focusin(function () {
        let interest = $('.value-interest').val().split('%')[0];
        $('.value-interest').val(interest);
    })

    $('.value-interest').blur(function () {
        $('.interest-range').val($('.value-interest').val());
        let interest = $('.value-interest').val() + '%/năm';
        $('.value-interest').val(interest);
    })
});
