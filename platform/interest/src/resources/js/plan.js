$(document).ready(function () {
    let showTb = 0;
    let quarter = 1;
    let minY = 0;
    let lableX = [];
    let initialCapital = [];
    let totalSave = [];
    let totalAdd = [];
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
        money = money.toString();
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

    $('.expected-money').keyup(function () {
        let money = $('.expected-money').val();
        money = money.split(',').join('');
        if (hasAlpha(money)) {
            $('.expected-money').val(0);
        } else {
            if (Number(money) > 10000000000000) {
                $('.expected-money').val('10,000,000,000,000');
            } else {
                $('.expected-money').val(formatMoney(money));
            }
        }
        $('.val-expected').addClass('d-none');
    })

    $('.investment-money').keyup(function () {
        let money = $('.investment-money').val();
        money = money.split(',').join('');
        if (hasAlpha(money)) {
            $('.investment-money').val(0);
        } else {
            if (Number(money) > 10000000000000) {
                $('.investment-money').val('1,000,000,000,000');
            } else {
                $('.investment-money').val(formatMoney(money));
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

    function checkCorrect(money, time, interest, quater, investmentMoney) {
        if (money == '') {
            $('.val-expected').removeClass('d-none');
        } else {
            $('.val-expected').addClass('d-none');
        }
        if (time == '') {
            $('.val-time').removeClass('d-none');
        } else {
            $('.val-time').addClass('d-none');
        }
        if (interest == '') {
            $('.val-interest').removeClass('d-none');
        } else {
            $('.val-interest').addClass('d-none');
        }

        if (investmentMoney == '') {
            $('.val-investment').removeClass('d-none');
        } else {
            $('.val-investment').addClass('d-none');
        }

        if (money == '' || time == '' || interest == '' || quater == '' || investmentMoney == '') return true;
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
        let expectedMoney = $('.expected-money').val().split(',').join('');
        let investmentMoney = $('.investment-money').val().split(',').join('');
        let time = $('.time').val();
        let interest = Number($('.interest').val()) / 100;
        let quarter = $('.quarter').val();
        totalSave = [];
        totalAdd = [];
        lableX = [];
        initialCapital = [];
        let moneyAdd = 0;
        setLabel(time);
        $('.res').removeClass('d-none');
        if (quarter == 1) {
            moneyAdd = formulaSave(expectedMoney, investmentMoney, time, interest / 1, 1) * 12;
            saveYear(investmentMoney, moneyAdd, time, interest);
            setTotalAdd(time, moneyAdd / 12);
            setInitialCapital(investmentMoney, time, interest, 1);
        } else if (quarter == 2) {
            moneyAdd = formulaSave(expectedMoney, investmentMoney, time, interest, 4) * 3;
            saveQuarter(investmentMoney, moneyAdd, time, interest / 4);
            setTotalAdd(time, formulaCompounding(investmentMoney, interest, 1, 4))
            setTotalAdd(time, moneyAdd / 3);
            setInitialCapital(investmentMoney, time, interest, 4);

        } else if (quarter == 3) {
            moneyAdd = formulaSave(expectedMoney, investmentMoney, time, interest, 12);
            saveMonth(investmentMoney, moneyAdd, time, interest / 12);
            setTotalAdd(time, formulaCompounding(investmentMoney, interest, 1, 12))
            setTotalAdd(time, moneyAdd);
            setInitialCapital(investmentMoney, time, interest, 12);


        } else {
            moneyAdd = formulaSave(expectedMoney, investmentMoney, time, interest, 365) * 12 / 365;
            saveDaily(investmentMoney, moneyAdd, time, interest / 365);
            setTotalAdd(time, formulaCompounding(investmentMoney, interest, 1, 365))
            setTotalAdd(time, moneyAdd / 12 * 365);
            setInitialCapital(investmentMoney, time, interest, 365);
        }
        initialCapital = roundArr(initialCapital);
        totalSave = roundArr(totalSave);
        totalAdd = roundArr(totalAdd);
        creatChart(lableX, initialCapital, totalSave, totalAdd);

        let html = '';
        for(let i=0 ; i<lableX.length ; i++){
            html += `
                <tr>
                    <td>Năm `+i+`</td>
                    <td class="text-right">
                        `+ formatMoney(initialCapital[i]) + `
                    </td>
                    <td class="text-right">
                        ` + formatMoney(totalSave[i]) +  `
                    </td>
                    <td class="text-right">
                         ` + formatMoney(totalAdd[i]) + `
                    </td>
                </tr>
            `
        }
        $('.table-result').html(html);
        $('#years-table').html(time);
        $('#rate_view').html(interest*100);
        $('#future_value-result').html(formatMoney(expectedMoney));
        $('#year-result').html(time);
        $('#principal-value').html(formatMoney(investmentMoney));
        $('#interest-rate').html(interest*100);
        $('#addition-result').html(formatMoney((totalAdd[1]/12).toFixed(0)));

    })

    function setLabel(year) {
        for (let i = 0; i <= year; i++) {
            lableX.push('Năm ' + i);
        }
    }

    function roundArr(arr) {
        for (let i = 0; i < arr.length; i++) {
            arr[i] = Number(arr[i]).toFixed(0);
        }
        return arr;
    }

    function setInitialCapital(investmentMoney, time, interest, quarter) {
        for (let i = 0; i <= time; i++) {
            initialCapital.push(formulaCompounding(investmentMoney, interest, i, quarter));
        }
    }

    function setTotalAdd(time, money) {
        totalAdd = [];
        for (let i = 0; i <= time; i++) {
            totalAdd.push(money * i * 12);
        }
    }

    function saveYear(startMoney, moneyAdd, time, interest) {
        totalSave = [];
        for (let i = 0; i <= time; i++) {
            if (i == 0) {
                totalSave.push(startMoney);
            } else {
                totalSave.push(moneyAdd + totalSave[i - 1] * (1 + interest));
            }
        }
    }

    function saveQuarter(startMoney, moneyAdd, time, interest) {
        totalSave = [];
        let arrTemp = [];
        totalSave = [];
        arrTemp.push(startMoney);
        totalSave.push(startMoney);
        for (let i = 1; i <= time; i++) {
            for (let j = 0; j < 4; j++) {
                arrTemp.push(moneyAdd + arrTemp[arrTemp.length - 1] * (1 + interest));
            }
            totalSave.push(arrTemp[arrTemp.length - 1]);
        }
    }

    function saveMonth(startMoney, moneyAdd, time, interest) {
        let arrTemp = [];
        totalSave = [];
        arrTemp.push(startMoney);
        totalSave.push(startMoney);
        for (let i = 1; i <= time; i++) {
            for (let j = 0; j < 12; j++) {
                arrTemp.push(moneyAdd + arrTemp[arrTemp.length - 1] * (1 + interest));
            }
            totalSave.push(arrTemp[arrTemp.length - 1]);
        }
    }

    function saveDaily(startMoney, moneyAdd, time, interest) {
        let arrTemp = [];
        totalSave = [];
        arrTemp.push(startMoney);
        totalSave.push(startMoney);
        for (let i = 1; i <= time; i++) {
            for (let j = 0; j < 365; j++) {
                arrTemp.push(moneyAdd + arrTemp[arrTemp.length - 1] * (1 + interest));
            }
            totalSave.push(arrTemp[arrTemp.length - 1]);
        }
    }

    function formulaSave(A, P, t, r, n) {
        return ((A - (P * Math.pow(1 + r / n, n * t))) / (Math.pow(1 + r / n, n * t) - 1)) * (r / 12);
    }

    function formulaCompounding(P, i, n, m) {
        return P * Math.pow(1 + i / m, n * m);
    }

    let myChart;

    function creatChart(lable_X, initial, save, add) {
        const ctx = document.getElementById('myChart');
        if (myChart != null) {
            myChart.destroy();
        }
        myChart = new Chart(ctx, {
            type: 'line', data: {
                labels: lable_X,
                datasets: [
                    {
                        label: 'Tổng vốn đầu tư ban đầu (VNĐ)',
                        data: initial,
                        backgroundColor: ['#00b14f',],
                        borderColor: ['#00b14f',],
                        borderWidth: 2
                    },
                    {
                        label: 'Tổng tiết kiệm cộng lại (VNĐ)',
                        data: save,
                        backgroundColor: ['blue'],
                        borderColor: ['blue'],
                        borderWidth: 2
                    },
                    {
                        label: 'Tổng tiền bổ xung (VNĐ)',
                        data: add,
                        backgroundColor: ['black'],
                        borderColor: ['black'],
                        borderWidth: 2
                    },

                ]
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
