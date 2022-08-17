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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="{{ asset('platform/interest/css/compounding.css') }}" rel="stylesheet">

    <title>Calculate</title>

</head>
<body style="background: #E5E5E5">
@include('interest::component.header')
<div class="container mt-5">
    <div class="col-8 main-content">
        <h1 class="title">Công cụ tính Lãi Kép, Giá trị tiền gửi, Lợi nhuận đầu tư Miễn Phí</h1>
        <p class="text-muted-content mb-5">
            Công cụ ứng dụng lãi suất kép để tính toán tiền gửi, lợi nhuận đầu tư thu được trong tương lai dựa trên kế
            hoạch tiết kiệm, đầu tư hàng tháng và lãi suất kỳ vọng hoàn toàn miễn phí trên TopCV.
        </p>
        <div class="compounding">
            <div class="step-1">
                <h3 class="title">Bước 1: Đầu tư ban đầu</h3>
                <div class="d-flex justify-content-between mt-3" style="padding-left: 15px; padding-right: 15px;">
                    <div class="step-content">
                        <label style="font-weight: bold;">Số tiền gốc ban đầu (VNĐ)</label>
                        <p class="caption text-muted-content">Số tiền bạn có sẵn để đầu tư ban đầu.</p>
                    </div>
                    <div class="step-input position-relative">
                        <i class="fa-solid fa-money-bill icon-money"></i>
                        <input placeholder="VD: 10,000,000" class="input money root-money" maxlength="18">
                        <span class="currency">(VNĐ)</span>
                        <span class="w-100 d-block validate-input val-root d-none">Mời bạn nhập số tiền gốc cần gửi</span>
                    </div>
                </div>
            </div>

            <div class="step-2">
                <h3 class="title">Bước 2: Khoản đóng góp</h3>
                <div class="d-flex justify-content-between mt-3" style="padding-left: 15px; padding-right: 15px;">
                    <div class="step-content">
                        <label style="font-weight: bold;">Số tiền gửi mỗi tháng (VNĐ)</label>
                        <p class="caption text-muted-content">Số tiền bạn định thêm vào tiền gốc hàng tháng.</p>
                    </div>
                    <div class="step-input position-relative">
                        <i class="fa-solid fa-money-bill icon-money"></i>
                        <input placeholder="VD: 10,000,000" class="input money add-money" maxlength="17">
                        <span class="currency">(VNĐ)</span>
                        <span class="w-100 d-block validate-input val-add d-none">Mời bạn nhập số tiền gửi thêm</span>

                    </div>
                </div>
                <div class="d-flex justify-content-between mt-4" style="padding-left: 15px; padding-right: 15px;">
                    <div class="step-content">
                        <label style="font-weight: bold;">Thời gian gửi (Năm)</label>
                        <p class="caption text-muted-content">
                            Khoảng thời gian, tính bằng năm, mà bạn dự định tiết kiệm.
                        </p>
                    </div>
                    <div class="step-input">
                        <input placeholder="VD: 10" class="input time" maxlength="2">
                        <span class="w-100 d-block validate-input d-none val-time d-none">Mời bạn nhập thời gian cần gửi</span>
                    </div>
                </div>
            </div>

            <div class="step-3">
                <h3 class="title">Bước 3: Lãi suất</h3>
                <div class="d-flex justify-content-between mt-4" style="padding-left: 15px; padding-right: 15px;">
                    <div class="step-content">
                        <label style="font-weight: bold;">Lãi suất (%)</label>
                        <p class="caption text-muted-content">
                            Lãi suất ước tính theo kỳ hạn gửi của bạn.
                        </p>
                    </div>
                    <div class="step-input">
                        <input placeholder="VD: 10" class="input interest" maxlength="2">
                        <span class="w-100 d-block validate-input val-interest d-none">Mời bạn nhập lãi suất mong muốn</span>
                    </div>
                </div>
            </div>

            <div class="step-4">
                <h3 class="title">Bước 4: Kỳ hạn</h3>
                <div class="d-flex justify-content-between mt-4" style="padding-left: 15px; padding-right: 15px;">
                    <div class="step-content">
                        <label style="font-weight: bold;">Định kỳ gửi</label>
                        <p class="caption text-muted-content">
                            Kỳ hạn nhận lãi tiền gửi của bạn..
                        </p>
                    </div>
                    <div class="step-input">
                        <select class="select-time quarter">
                            <option value="1">
                                Hàng năm
                            </option>
                            <option value="2">
                                Hàng quý
                            </option>
                            <option value="3">
                                Hàng tháng
                            </option>
                            <option value="4">
                                Hàng ngày
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <button class="btn btn-submit">Tính lãi</button>
        </div>
        <div class="res d-none">

            <div class="wrap-result mt-3">
                <h3 class="text-center">
                    Kết quả trong <span id="year-result" class="highlight"></span> năm bạn sẽ có <span id="money-result"
                                                                                                       class="highlight"></span>
                    (VNĐ)
                </h3>
                <div class="mt-4 ">
                    <canvas id="myChart" ></canvas>
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-show-table">Hiện chi tiết</button>
                </div>
                <table id="result-table-content" class="table mt-4  d-none" style="display: table;">
                    <thead>
                    <tr id="table-result-head">
                        <th class="text-center">
                            <span class="d-block">Năm</span>
                            <span class="d-block text-small">(Tổng <span id="years">10</span> năm)</span>
                        </th>
                        <th class="text-center">
                            <span class="d-block">Tiền gốc (VNĐ)</span>
                            <span class="d-block text-small">
                            (Tiền đóng góp luỹ kế hàng năm)
                        </span>
                        </th>
                        <th class="text-center">
                        <span class="d-block">
                            Giá trị tương lai (VNĐ)
                        </span>
                            <span class="d-block text-small">
                            (Lãi suất kỳ vọng <span id="rate_view">10</span> % / Năm)
                        </span>
                        </th>
                    </tr>
                    </thead>
                    <tbody id="table-result">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
<script src="{{asset('platform/interest/js/compounding.js ')}}"></script>

</html>
