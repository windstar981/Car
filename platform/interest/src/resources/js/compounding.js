$(document).ready(function () {
    let showTb = 0;
    let lable_X = [];
    let value_future = [];
    let value_root = [];
    let quarter = 1;
    let minY = 0;
    let maxY = 0;
    //js cho giao diện
    $('.btn-show-table').click(function () {
        if (showTb == 0) {
            $('#result-table-content').removeClass('d-none');
            showTb = 1;
            $('.btn-show-table').text('Ẩn chi tiết');
        } else {
            $('#result-table-content').addClass('d-none');
            showTb = 0;
            $('.btn-show-table').text('Hiện chi tiết');
        }
    });

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

    $('.root-money').keyup(function () {
        let money = $('.root-money').val();
        money = money.split(',').join('');
        if (hasAlpha(money)) {
            $('.root-money').val(0);
        } else {
            if(Number(money)>10000000000000)
            {
                $('.root-money').val('10,000,000,000,000');
            }
            else{
                $('.root-money').val(formatMoney(money));
            }
        }
        $('.val-root').addClass('d-none');
    })

    $('.add-money').keyup(function () {
        let money = $('.add-money').val();
        money = money.split(',').join('');
        if (hasAlpha(money)) {
            $('.add-money').val(0);
        } else {
            if(Number(money)>10000000000000)
            {
                $('.add-money').val('1,000,000,000,000');
            }
            else{
                $('.add-money').val(formatMoney(money));
            }
        }
    })

    $('.time').keyup(function () {
        $('.val-time').addClass('d-none');
        let time = $('.time').val();
        if (hasAlpha(time)) {
            $('.time').val(0);
        } else if (Number(time) > 60) {
            $('.time').val(60);
        } else {
            $('.time').val(time);
        }
    })

    $('.interest').keyup(function () {
        $('.val-interest').addClass('d-none');
        let interest = $('.interest').val();
        if (hasAlpha(interest)) {
            $('.interest').val(0);
        } else if (Number(interest) > 30) {
            $('.interest').val(30);

        } else {
            $('.interest').val(interest);
        }
    })

    //js cho logic

    function checkCorrect(money, time, interest, quater) {
        if(money =='')
        {
            $('.val-root').removeClass('d-none');
        }
        else{
            $('.val-root').addClass('d-none');
        }
        if(time =='')
        {
            $('.val-time').removeClass('d-none');
        }
        else{
            $('.val-time').addClass('d-none');
        }
        if(interest =='')
        {
            $('.val-interest').removeClass('d-none');
        }
        else{
            $('.val-interest').addClass('d-none');
        }

        if (money == '' || time == '' || interest == '' || quater == '') return true;
        return false;
    }

    $('.quarter').change(function () {
        quarter = $('.quarter').val();
        if (quarter == 1) {
            quarter = 1;
        } else if (quarter == 2) {
            quarter = 4;
        } else if (quarter == 3) {
            quarter = 12;
        } else {
            quarter = 365;
        }
    });

    $('.btn-submit').click(function () {
        $('#rate_view').text(Number($('.interest').val()));
        $('#years').text($('.time').val());
        let money = $('.root-money').val().split(',').join('');
        let moneyAdd = $('.add-money').val().split(',').join('');
        let time = $('.time').val();
        let interest = Number($('.interest').val()) / 100;
        if (checkCorrect(money, time, interest, quarter)) {
            return;
        }
        let html = '';
        let future = 0;
        lable_X = [];
        value_future = [];
        value_root = [];
        if (quarter == 1) {
            interstYear(money, moneyAdd * 12, interest, time);
        } else if (quarter == 4) {
            interstQuater(Number(money), Number(moneyAdd), Number(interest / quarter), Number(time));
        } else if (quarter == 12) {
            interstMonth(Number(money), Number(moneyAdd), Number(interest / quarter), Number(time))
        } else if (quarter == 365) {
            //@todo trường hợp này cần xem xét lại
            interstDay(Number(money), Number(moneyAdd), Number(interest / quarter), Number(time));
        }
        let pMoney = Number($('.root-money').val().split(',').join(''));
        for (let i = 0; i <= time; i++) {
            lable_X.push('Năm ' + i);
            value_root.push(pMoney);
            html += '<tr>' + '<td>Năm ' + i + '</td>' +
                '<td class="text-right">' + formatMoney(value_root[i].toString()) + '</td>' +
                '<td class="text-right">' + formatMoney(value_future[i].toString()) + '</td>' + '</tr>';
            pMoney += Number($('.add-money').val().split(',').join('')) * 12;
        }
        let showMoney = value_future[value_future.length - 1];
        minY = value_future[0];
        maxY = value_future[value_future.length - 1];
        $('.res').removeClass('d-none');
        $('#table-result').html(html);
        $('#year-result').html(time);
        $('#money-result').html(formatMoney((showMoney)));
        creatChart(lable_X, value_root, value_future);
    })

    function interstYear(money, moneyAdd, r, year) {
        let future = 0;
        for (let i = 0; i <= Number(year); i++) {
            if (i == 0) {
                future = Number(totalMoney(Number(future), Number(r), quarter)) + Number(money);
            } else {
                future = Number(totalMoney(Number(future), Number(r), quarter)) + Number(moneyAdd);
                money = Number(money) + Number(moneyAdd);
            }
            future = future.toFixed(0);
            value_future.push(future);
        }
    }

    function interstQuater(future, moneyAdd, r, year) {
        let old_future = future;
        value_future.push(future);
        for (let j = 1; j <= year; j++) {
            for (let i = 1; i <= 4; i++) {
                future = old_future * (1 + r);
                future += Number(moneyAdd) * 3;
                old_future = future;
            }
            value_future.push(future.toFixed(0));
        }
    }

    function interstMonth(future, moneyAdd, r, year) {
        let old_future = future;
        value_future.push(future);
        for (let j = 1; j <= year; j++) {
            for (let i = 1; i <= 12; i++) {
                future = old_future * (1 + r) + moneyAdd;
                old_future = future;
            }
            value_future.push(future.toFixed(0));
        }
    }

    function interstDay(future, moneyAdd, r, year) {
        let old_future = future;
        for (let j = 1; j <= year; j++) {
            for (let i = 1; i <= 365; i++) {
                if (Number(i) % Number(30) == 0) {
                    old_future += Number(moneyAdd);
                    console.log('old = ' + old_future);
                    console.log('tháng mới');
                }
                future = old_future * (1 + r);
                old_future = future;
                console.log(old_future);
            }
            console.log('năm ' + j + ' =' + old_future);
        }
    }

    function totalMoney(P, i, m) {
        return P * Math.pow((1 + i / m), m);
    }

    let myChart;

    function creatChart(lable_X, value_root, value_future) {
        const ctx = document.getElementById('myChart');
        if (myChart != null) {
            myChart.destroy();
        }
        myChart = new Chart(ctx, {
            type: 'line', data: {
                labels: lable_X, datasets: [{
                    label: 'Tiền gốc (VNĐ)',
                    data: value_root,
                    backgroundColor: ['#00b14f',],
                    borderColor: ['#00b14f',],
                    borderWidth: 2
                }, {
                    label: 'Giá trị tương lai (VNĐ)',
                    data: value_future,
                    backgroundColor: ['blue'],
                    borderColor: ['blue'],
                    borderWidth: 2
                }]
            }, options: {
                scales: {
                    y: {
                        min: Number(minY),
                    }
                }
            }
        });
    }
});
