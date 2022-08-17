<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <link href="{{ asset('platform/interest/css/calculate.css') }}" rel="stylesheet">
    <title>Calculate</title>

</head>
<body>

    @include('interest::component.header')

    <div class="container mt-5 d-flex justify-content-center">
        <form id="demoForm">
            <div class="calculate border ">
                <p class="top-content">Bảng này giúp bạn tính toán số tiền cần trả khi vay ngân hàng để mua nhà trả góp</p>
                <div class="loan d-flex">
                    <label>Số tiền vay</label>
                    <input  class="number-loan"  maxlength="20" type="text" placeholder="0">
                </div>
                <span class="error-vali error-money d-none"></span>
                <div class="time  d-flex mt-3">
                    <label>Thời gian vay</label>
                    <input class="time-borrow" type="text" maxlength="3" placeholder="0">

                    <select class="select-date time-select" aria-label="Default select example">
                        <option class="op-time" selected value="1">Tháng</option>
                        <option class="op-time" value="2">Năm</option>
                    </select>
                </div>
                <span class="error-vali error-time d-none "></span>
                <div class="interest  d-flex mt-3">
                    <label>Lãi suất</label>
                    <input class="number-interest" maxlength="3" type="text" placeholder="0">
                    <span style="padding-top:3px; padding-left: 5px;"> %</span>
                    <select class="select-date interest-select" aria-label="Default select example">
                        <option selected value="1">Tháng</option>
                        <option value="2">Năm</option>
                    </select>
                </div>
                <span class="error-vali error-interest d-none"></span>
                <div class="type  d-flex mt-3">
                    <label>Loại hình</label>
                    <select class="select-interest" aria-label="Default select example">
                        <option value="1" selected>Dư nợ giảm dần</option>
                        <option value="2">Trả lãi chia đều</option>
                        <option value="3">Trả lãi giảm dần (vốn hàng tháng)</option>
                        <option value="4">Trả lãi giảm dần (vốn hàng quý)</option>

                    </select>
                </div>
                <span class="error-vali error-type d-none"></span>
                <p class="text-center mt-4"><span class="btn-result">Xem kết quả</span></p>
            </div>
        </form>
    </div>
    <div class="container mt-5 d-flex justify-content-center mb-5">
        <div class="table-res d-none">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Số kỳ trả</th>
                    <th scope="col">Dư nợ đầu kỳ (VND)</th>
                    <th scope="col">Vốn phải trả (VND)</th>
                    <th scope="col">Lãi phải trả (VND)</th>
                    <th scope="col">Vốn + Lãi (VND)</th>
                </tr>
                </thead>
                <tbody id="result">
                <tr>
                    <td scope="row" class="text-center">1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>

                <tr style="--bs-table-accent-bg: var(--bs-table-hover-bg); color: var(--bs-table-hover-color);">
                    <td colspan="3" style="font-weight: bold">Larry the Bird</td>
                    <td style="color:#e03c31;">@twitter</td>
                    <td style="color:#e03c31;">@twitter</td>
                </tr>
                </tbody>

            </table>
        </div>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="{{asset('platform/interest/js/calculate.js ')}}"></script>
</html>
