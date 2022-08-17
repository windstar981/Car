<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"
            type="text/javascript"></script>
    <link href="{{ asset('platform/interest/css/interestperson.css') }}" rel="stylesheet">
    <title>Calculate</title>

</head>
<body>
@include('interest::component.header')
<div class="container mt-5">
    <div class="main-content">
        <h1 class="title-main" style="border-bottom:none;margin:40px 0 0 0;padding-bottom:0" >Công cụ tính lãi tiết kiệm cá nhân</h1>
        <p class="" style="border-bottom:1px solid #e1e2e3;padding-bottom:10px; margin-top: 10px;">Tính ngay được số tiền lãi nhận được khi gửi tiết kiệm có kỳ hạn tại ngân hàng với số tiền gốc, kỳ hạn gửi và lãi suất tại thời điểm gửi.</p>
        <div class="main-calculate">
            <div class="row">
                <div class="col-3">
                    <lable class="lable-ranger mb-2">
                        Số tiền gốc
                    </lable>
                    <input type="text" value="" class="money value-money" placeholder="0 VND">
                </div>
                <div class="col-8">
                    <input type="range" min="0" max="10000000000" value="0" class="range-money money-range">
                    <div class="value-money d-flex justify-content-between">
                        <span class="min-money">
                            0 <VND></VND>
                        </span>
                        <span class="max-money">
                            10.000.000.000 VND
                        </span>
                    </div>
                </div>
           </div>
            <div class="row" style="margin-top:50px">
                <div class="col-3">
                    <lable class="lable-ranger mb-2">
                        Kỳ hạn gửi
                    </lable>
                    <input type="text" value="" class="money value-month" placeholder="">
                </div>
                <div class="col-8">
                    <input type="range" min="1" max="60" value="0" class="range-money month-range">
                    <div class="value-money d-flex justify-content-between">
                        <span class="">
                            1 tháng
                        </span>
                        <span class="">
                            60 tháng
                        </span>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:50px">
                <div class="col-3">
                    <lable class="lable-ranger mb-2">
                        Lãi suất
                    </lable>
                    <input type="text" value="" class="money value-interest" placeholder="Giá trị lớn nhất là 20">
                </div>
                <div class="col-8">
                    <div class="wrap-total">
                        <span class="total-content">Tổng số tiền cuối kỳ:</span>
                        <span class="total-money"> VND</span>
                        <span class="interest-content">Số tiền lãi:</span>
                        <span class="total-interest"> VND</span>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="{{asset('platform/interest/js/interestperson.js ')}}"></script>
</html>
