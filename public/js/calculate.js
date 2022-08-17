$(document).ready(function () {

    let moneyLoan = 0;
    let timeLoan = 0;
    let optionTime = 1;
    let interest = 0;
    let optionInterest = 1;
    let type = 1;
    let checkValidateMoney = 0;
    let checkValidateTime = 0;
    let checkValidateInterest = 0;
    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        minimumFractionDigits: 0
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
            if (!(str[i] >= '0' && str[i] <= '9'))
                return true;
        }
        return false;
    }

    $('.number-loan').keyup(function () {
        let money = $('.number-loan').val();
        money = money.split(',').join('');
        if (Number(money) % 1 != 0) {
            $('.error-money').text('Giá trị bạn nhập vào chưa đúng');
            $('.error-money').removeClass('d-none');
            checkValidateMoney = 0;
        } else if (Number(money) <= 0) {

            $('.error-money').text('Số tiền của bạn nhập quá nhỏ');
            $('.error-money').removeClass('d-none');
            checkValidateMoney = 0;
        } else if (!(Number(money) <= 100000000000000000)) {
            $('.error-money').text('Số tiền của bạn nhập quá lớn');
            $('.error-money').removeClass('d-none');
            checkValidateMoney = 0;
        } else {
            $('.error-money').addClass('d-none');
            checkValidateMoney = 1;
        }

        $('.number-loan').val(formatMoney(money));
    })

    $('.time-borrow').keyup(function () {
        let numberTime = $('.time-borrow').val();
        if (numberTime == '') {
            $('.error-time').text('Mời bạn nhập thời gian');
            $('.error-time').removeClass('d-none');
            checkValidateTime = 0;
        } else if (hasAlpha(numberTime)) {
            $('.error-time').text('Thời gian không hợp lệ');
            $('.error-time').removeClass('d-none');
            checkValidateTime = 0;

        } else if (Number(numberTime) <= 0) {
            $('.error-time').text('Thời gian vay mượn quá nhỏ');
            $('.error-time').removeClass('d-none');
            checkValidateTime = 0;
        } else {
            $('.error-time').addClass('d-none');
            checkValidateTime = 1;
        }
    })
    $('.number-interest').keyup(function () {
        let numberInterest = $('.number-interest').val();
        if (numberInterest == '') {
            $('.error-interest').text('Mời bạn nhập lãi suất');
            $('.error-interest').removeClass('d-none');
            checkValidateInterest = 0;

        } else if (hasAlpha(numberInterest)) {
            $('.error-interest').text('Lãi suất không hợp lệ');
            $('.error-interest').removeClass('d-none');
            checkValidateInterest = 0;

        } else if (Number(numberInterest) <= 0) {
            $('.error-interest').text('Lãi suất quá nhỏ');
            $('.error-interest').removeClass('d-none');
            checkValidateInterest = 0;

        } else {
            $('.error-interest').addClass('d-none');
            checkValidateInterest = 1;
        }
    })


    $('.time-select').change(function () {
        optionTime = $('.time-select').val();
    })

    $('.interest-select').change(function () {
        optionInterest = $('.interest-select').val();

    })

    $('.select-interest').change(function () {
        type = $('.select-interest').val();
    })

    $('.btn-result').click(function () {
        console.log('money = ' + checkValidateMoney);
        console.log('time = ' + checkValidateTime);
        console.log('interest = ' + checkValidateInterest);
        if (checkValidateMoney == 0) {
            return;
        }
        if (checkValidateTime == 0) {
            return;
        }
        if (checkValidateInterest == 0) {
            return;
        }
        $('.table-res').removeClass('d-none');
        moneyLoan = Number($('.number-loan').val().split(',').join(''));
        timeLoan = $('.time-borrow').val();
        interest = $('.number-interest').val();
        let months = optionTime == 1 ? timeLoan : timeLoan * 12;
        if (type == 1)
            debtBalanceDecreasesGradually(moneyLoan, months, interest);
        else if (type == 2)
            payEqually(moneyLoan, months, interest / 100);
        else if (type == 3)
            payingInterestGraduallyMonth(moneyLoan, months, interest / 100);
        else
            payingInterestGraduallyQuarter(moneyLoan, months, interest / 100);
    })

    function debtBalanceDecreasesGradually(money, month, interest) {
        let totalSum = 0;
        let totalInterest = 0;
        let html = '';
        let stt = 0;
        for (let i = month; i > 0; i--) {
            let payableCapital = money / (((Math.pow((1 + interest / 100), i) - 1) / (interest / 100)));
            let moneyInterest = money * (interest / 100);
            totalInterest += moneyInterest;
            sum = payableCapital + moneyInterest;
            totalSum += sum;
            stt = Number(month) + Number(1) - Number(i);
            html += ' <tr>' +
                '                    <td scope="row" class="text-center">' + stt + '</td>' +
                '                    <td>' + formatter.format(Number(money).toFixed()).slice(1) + '</td>' +
                '                    <td>' + formatter.format(Number(payableCapital).toFixed()).slice(1) + '</td>' +
                '                    <td>' + formatter.format(Number(moneyInterest).toFixed()).slice(1) + '</td>' +
                '                    <td>' + formatter.format(Number(sum).toFixed()).slice(1) + '</td>' +
                '                </tr>';
            money -= payableCapital;

        }
        html +=
            '<tr style="--bs-table-accent-bg: var(--bs-table-hover-bg); color: var(--bs-table-hover-color);">\n' +
            '<td colspan="3" style="font-weight: bold">Tổng</td>\n' +
            '<td style="color:#e03c31; font-weight: bold !important;">' + formatter.format(Number(totalInterest).toFixed()).slice(1) + '</td>\n' +
            '<td style="color:#e03c31; font-weight: bold !important;">' + formatter.format(Number(totalSum).toFixed()).slice(1) + '</td>\n' +
            ' </tr>'
        $('#result').html(html);
    }


    function payEqually(money, month, interest) {
        let totalSum = 0;
        let totalInterest = 0;
        let html = '';
        let stt = 0;
        let payableCapital = money / month;
        let moneyInterest = money * interest;
        for (let i = month; i > 0; i--) {
            totalInterest += moneyInterest;
            sum = payableCapital + moneyInterest;
            totalSum += sum;
            stt = Number(month) + Number(1) - Number(i);
            html += ' <tr>' +
                '                    <td scope="row" class="text-center">' + stt + '</td>' +
                '                    <td>' + formatter.format(Number(money).toFixed()).slice(1) + '</td>' +
                '                    <td>' + formatter.format(Number(payableCapital).toFixed()).slice(1) + '</td>' +
                '                    <td>' + formatter.format(Number(moneyInterest).toFixed()).slice(1) + '</td>' +
                '                    <td>' + formatter.format(Number(sum).toFixed()).slice(1) + '</td>' +
                '                </tr>';
            money -= payableCapital;
        }
        html +=
            '<tr style="--bs-table-accent-bg: var(--bs-table-hover-bg); color: var(--bs-table-hover-color);">\n' +
            '<td colspan="3" style="font-weight: bold">Tổng</td>\n' +
            '<td style="color:#e03c31; font-weight: bold !important;">' + formatter.format(Number(totalInterest).toFixed()).slice(1) + '</td>\n' +
            '<td style="color:#e03c31; font-weight: bold !important;">' + formatter.format(Number(totalSum).toFixed()).slice(1) + '</td>\n' +
            ' </tr>'
        $('#result').html(html);
    }

    function payingInterestGraduallyMonth(money, month, interest) {
        let totalSum = 0;
        let totalInterest = 0;
        let html = '';
        let stt = 0;
        let payableCapital = money / month;
        for (let i = month; i > 0; i--) {
            let moneyInterest = money * interest;
            totalInterest += moneyInterest;
            sum = payableCapital + moneyInterest;
            totalSum += sum;
            stt = Number(month) + Number(1) - Number(i);
            html += ' <tr>' +
                '                    <td scope="row" class="text-center">' + stt + '</td>' +
                '                    <td>' + formatter.format(Number(money).toFixed()).slice(1) + '</td>' +
                '                    <td>' + formatter.format(Number(payableCapital).toFixed()).slice(1) + '</td>' +
                '                    <td>' + formatter.format(Number(moneyInterest).toFixed()).slice(1) + '</td>' +
                '                    <td>' + formatter.format(Number(sum).toFixed()).slice(1) + '</td>' +
                '                </tr>';
            money -= payableCapital;

        }
        html +=
            '<tr style="--bs-table-accent-bg: var(--bs-table-hover-bg); color: var(--bs-table-hover-color);">\n' +
            '<td colspan="3" style="font-weight: bold">Tổng</td>\n' +
            '<td style="color:#e03c31; font-weight: bold !important;">' + formatter.format(Number(totalInterest).toFixed()).slice(1) + '</td>\n' +
            '<td style="color:#e03c31; font-weight: bold !important;">' + formatter.format(Number(totalSum).toFixed()).slice(1) + '</td>\n' +
            ' </tr>'
        $('#result').html(html);
    }

    function payingInterestGraduallyQuarter(money, month, interest) {
        let totalSum = 0;
        let totalInterest = 0;
        let html = '';
        let stt = 0;
        let payableCapital = money / (month / 3);
        for (let i = month; i > 0; i--) {
            let showPayableCapital = 0;
            let moneyInterest = money * interest;
            totalInterest += moneyInterest;
            if ((month + 1 - i) % 3 == 0) {
                showPayableCapital = payableCapital;
            }
            sum = showPayableCapital + moneyInterest;
            totalSum += sum;
            stt = Number(month) + Number(1) - Number(i);

            html += ' <tr>' +
                '                    <td scope="row" class="text-center">' + stt + '</td>' +
                '                    <td>' + formatter.format(Number(money).toFixed()).slice(1) + '</td>' +
                '                    <td>' + formatter.format(Number(showPayableCapital).toFixed()).slice(1) + '</td>' +
                '                    <td>' + formatter.format(Number(moneyInterest).toFixed()).slice(1) + '</td>' +
                '                    <td>' + formatter.format(Number(sum).toFixed()).slice(1) + '</td>' +
                '                </tr>';
            if ((month + 1 - i) % 3 == 0) {
                money -= payableCapital;
            }

        }
        html +=
            '<tr style="--bs-table-accent-bg: var(--bs-table-hover-bg); color: var(--bs-table-hover-color);">\n' +
            '<td colspan="3" style="font-weight: bold">Tổng</td>\n' +
            '<td style="color:#e03c31; font-weight: bold !important;">' + formatter.format(Number(totalInterest).toFixed()).slice(1) + '</td>\n' +
            '<td style="color:#e03c31; font-weight: bold !important;" >' + formatter.format(Number(totalSum).toFixed()).slice(1) + '</td>\n' +
            ' </tr>'
        $('#result').html(html);
    }


});
