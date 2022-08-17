$(document).ready(function () {
    const coefInterets = {
        'Tuỳ-chọn': '',
        'ABBANK': 9.5,
        'ABC': 8.7,
        'AGRIBANK': 7.5,
        'Bac-A-Bank': 8.99,
        'BAOVIETBank': 8.5,
        'BIDV': 6.6,
        'DAIABANK': 9,
        'DONGABANK': 8.5,
        'Eximbank': 7.49,
        'GP.Bank': 9.5,
        'HDBANK': 9.5,

    }

    function printOptionBank() {
        for (let i = 0; i < Object.keys(coefInterets).length; i++) {
            $('#select-bank').append('<option value="' + Object.keys(coefInterets)[i] + '">'
                + Object.keys(coefInterets)[i].replaceAll('-', ' ') + '</option>')
        }
    }

    printOptionBank();
    let moneyLoan = 0;

    function setMoneyLoan() {
        moneyLoan = Number($('.number-loan').val().split(',').join(''));
    }

    setMoneyLoan()

    let timeLoan = 0;

    function setTimeLoan() {
        timeLoan = Number($('.time-borrow').val());
    }

    setTimeLoan()

    let interest = 0;

    function setInterest() {
        interest = Number($('.number-interest').val())
    }

    setInterest()

    let optionInterest = '1';

    function setOptionInterest() {
        optionInterest = Number($('#select-type-interest').val());
    }

    setOptionInterest()

    //lua chon cach tinh lai
    processInterest();

    function validateInputMoney(money) {
        money = money.toString();
        for (let i = 0; i < money.length; i++) {
            if (!(money[i] >= '0' && money[i] <= '9')) {
                money = money.substring(0, i) + money.substring(i + 1);
                i--;
            }
        }
        if (Number(money) <= 0) {
            return 1;
        }
        return money;
    }

    $('.root-money').keyup(function () {
        let rate = Number($('.rate-loan').val()) / 100;
        let money = (($('.root-money').val().split(',').join('')));
        money = Number(validateInputMoney(money));
        moneyLoan = money * rate;
        $('.number-loan').val(formatMoney(Math.floor(money * rate)));
        money = formatMoney(money);
        $('.root-money').val(money);
        processInterest();
    })

    $('.rate-loan').keyup(function () {
        let rate = ($('.rate-loan').val());
        rate = Number(validateInputMoney(rate)) / 100;
        $(this).val(rate * 100);
        let money = ($('.root-money').val().split(',').join(''));
        money = Number(validateInputMoney(money));
        moneyLoan = money * rate;
        $('.number-loan').val(formatMoney(Math.floor(money * rate)));
        processInterest();
    })

    $('.number-loan').keyup(function () {
        let moneyRoot = Number($('.root-money').val().split(',').join(''));
        let money = ($(this).val().split(',').join(''));
        money = Number(validateInputMoney(money));
        moneyLoan = money;
        let rate = money / moneyRoot * 100;
        $('.rate-loan').val(rate);
        money = formatMoney(money);
        $(this).val(money);
        processInterest();
    })

    $('.time-borrow').keyup(function () {
        timeLoan = ($(this).val());
        timeLoan = Number(validateInputMoney(timeLoan));
        $(this).val(timeLoan);
        processInterest();
    })

    $('#select-bank').change(function () {
        $('.number-interest').val(coefInterets[$(this).val()]);
        interest = Number($('.number-interest').val());
        processInterest();

    })

    $('.number-interest').keyup(function () {
        interest = ($(this).val());
        interest = Number(validateInputMoney(interest));
        $(this).val(interest);
        processInterest();
    })

    $('#select-type-interest').change(function () {
        optionInterest = $(this).val();
        processInterest();
    })

    function processInterest() {
        if (optionInterest == 1) {
            payingInterestGraduallyMonth(moneyLoan, timeLoan * 12, interest / 100);
        } else {
            payEqually(moneyLoan, timeLoan * 12, interest / 100);
        }
    }

    function insertCharacter(str, index, value) {
        return str.substring(0, index) + value + str.substring(index);
    }

    function formatMoney(money) {
        money = money.toString();

        for (let i = 0; i < money.length; i++) {
            if ((money[i] < '0' || money[i] > '9')) {
                money[i] = '';
            }
        }
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
            if (!(str[i] >= '0' && str[i] <= '9'))
                return true;
        }
        return false;
    }

    function payEqually(money, month, interest) {
        interest = interest / 12;
        let totalSum = 0;
        let totalInterest = 0;
        let html = '';
        let stt = 0;
        let payableCapital = money / month;
        let moneyFirstMonth;
        let sum = 0;
        let moneyInterest = money * interest;
        for (let i = month; i > 0; i--) {
            totalInterest += moneyInterest;
            sum = payableCapital + moneyInterest;
            if (i == month) {
                moneyFirstMonth = sum;
            }
            totalSum += sum;
            stt = Number(month) + Number(1) - Number(i);
            html += ' <tr>' +
                '                    <td scope="row" class="text-center">' + stt + '</td>' +
                '                    <td>' + formatMoney(Number(money).toFixed()) + '</td>' +
                '                    <td>' + formatMoney(Number(payableCapital).toFixed()) + '</td>' +
                '                    <td>' + formatMoney(Number(moneyInterest).toFixed()) + '</td>' +
                '                    <td>' + formatMoney(Number(sum).toFixed()) + '</td>' +
                '                </tr>';
            money -= payableCapital;
        }
        html +=
            '<tr style="">\n' +
            '<td colspan="3" style="font-weight: bold">Tổng</td>\n' +
            '<td style="color:#e03c31; font-weight: bold !important;" class="total-interest">' + formatMoney(Number(totalInterest).toFixed()) + '</td>\n' +
            '<td style="color:#e03c31; font-weight: bold !important;">' + formatMoney(Number(totalSum).toFixed()) + '</td>\n' +
            ' </tr>'
        $('#result').html(html);
        setValueViewResult(totalInterest, moneyFirstMonth);
    }

    function payingInterestGraduallyMonth(money, month, interest) {
        interest = interest / 12;
        let totalSum = 0;
        let totalInterest = 0;
        let html = '';
        let stt = 0;
        let payableCapital = money / month;
        let moneyFirstMonth = 0;
        let sum = 0;
        for (let i = month; i > 0; i--) {
            let moneyInterest = money * interest;
            totalInterest += moneyInterest;
            sum = payableCapital + moneyInterest;
            if (i == month) {
                moneyFirstMonth = sum;
            }
            totalSum += sum;
            stt = Number(month) + Number(1) - Number(i);
            html += ' <tr>' +
                '                    <td scope="row" class="text-center">' + stt + '</td>' +
                '                    <td>' + formatMoney(Number(money).toFixed()) + '</td>' +
                '                    <td>' + formatMoney(Number(payableCapital).toFixed()) + '</td>' +
                '                    <td>' + formatMoney(Number(moneyInterest).toFixed()) + '</td>' +
                '                    <td>' + formatMoney(Number(sum).toFixed()) + '</td>' +
                '                </tr>';
            money -= payableCapital;

        }
        html +=
            '<tr>\n' +
            '<td colspan="3" style="font-weight: bold">Tổng</td>\n' +
            '<td style="color:#e03c31; font-weight: bold !important; class="total-interest">' + formatMoney(Number(totalInterest).toFixed()) + '</td>\n' +
            '<td style="color:#e03c31; font-weight: bold !important;">' + formatMoney(Number(totalSum).toFixed()) + '</td>\n' +
            ' </tr>'
        $('#result').html(html);
        setValueViewResult(totalInterest, moneyFirstMonth);
    }

    function setValueViewResult(money, payFirstMonth) {
        let rootMoney = Number($('.root-money').val().split(',').join(''));
        let moneyCurrent = rootMoney - moneyLoan;
        let moneyMust = moneyLoan;
        $('.js-equity-capital').html(formatMoney(moneyCurrent.toFixed(0)));
        $('.js-root-money-must-pay').html(formatMoney(moneyMust.toFixed(0)));
        $('.js-money-interest-must-pay').html(formatMoney(money.toFixed(0)));
        $('.js-pay-first-month').html(formatMoney(payFirstMonth.toFixed(0)));
        $('.total-money-must-pay').html(formatMoney((moneyCurrent + moneyMust + money).toFixed(0)));
        let total = moneyCurrent + moneyMust + money;
        let rate = $('.rate-loan').val();
        $('.re__cyan').css('width', (moneyCurrent / total * 100).toFixed(1) + '%');
        $('.number-re__cyan').html((moneyCurrent / total * 100).toFixed(1) + '%')
        $('.re__purple').css('width', (moneyMust / total * 100).toFixed(1) + '%');
        $('.number-re__purple').html((moneyMust / total * 100).toFixed(1) + '%')
        $('.re__yellow').css('width', (money / total * 100).toFixed(1) + '%');
        $('.number-re__yellow').html((money / total * 100).toFixed(1) + '%')
    }


})
