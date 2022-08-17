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
    <link href="{{ asset('platform/real-estate/css/viewdirection.css') }}" rel="stylesheet">
    <title>View house direction</title>

</head>
<body>
<div class="container mt-5">
    <div class="col-5 m-auto">
        <div class="header">Phong thủy xem hướng nhà</div>
        <div class="main-content">
            <div class="title">Chọn hướng nhà phù hợp để đón vượng khí</div>
            <div class="wrap-step">
                    <span class="title-left">
                        Năm sinh của gia chủ
                    </span>
                <input type="text" placeholder="1990" class="year">
                <label>m</label>
            </div>
            <div>
                <span class="validate d-none">
                    Bạn vui lòng điền năm sinh
                </span>
            </div>
            <div class="wrap-step">
                    <span class="title-left">
                        Giới tính
                    </span>
                <input style="width: 20px;" id="man" type="radio" name="sex" checked>
                <label for="man" >Nam</label>
                <input style="width: 20px;" id="woman" type="radio" name="sex">
                <label for="woman">Nữ</label>
            </div>

            <div class="wrap-step">
                    <span class="title-left">
                        Hướng nhà
                    </span>
                <select class="select-direction">
                    <option value="Chấn">
                        Đông
                    </option>
                    <option value="Đoài">
                        Tây
                    </option>
                    <option value="Ly">
                        Nam
                    </option>
                    <option value="Khảm">
                        Bắc
                    </option>
                    <option value="Cấn">
                        Đông Bắc
                    </option>
                    <option value="Tốn">
                        Đông Nam
                    </option>
                    <option value="Càn">
                        Tây Bắc
                    </option>
                    <option value="Khôn">
                        Tây Nam
                    </option>
                </select>
            </div>
            <p class="text-center mt-3">
                    <span class="btn-submit">
                    Xem kết quả
                </span>
            </p>
        </div>
        <div class="wrap-result d-none">
            <div class="re__utils-header">Bảng kết quả</div>
            <span class="boldLabel">Năm sinh dương lịch:</span>
            <span class="number-year res">2001</span>
            <br>
            <span class="boldLabel">Năm sinh âm lịch:</span>
            <span class="name-year res">Tân tỵ</span>
            <br>
            <span class="boldLabel">Quẻ mệnh:</span>
            <span class="hexagrams res">Cấn</span>
            <br>
            <span class="boldLabel">Ngũ hành:</span>
            <span class="five-elements res">Bạch Lạp Kim</span>
            <br>
            <span class="boldLabel">Hướng nhà:</span>
            <span class="direction res"> hướng Đông</span> (<span class="direction-status res"></span>)
            <div>
                <span class="boldLabel">Hướng tốt:</span>
                <span class="good-directions  res"></span>
                <br>
                <span class="boldLabel">Hướng xấu:</span>
                <span class="bad-directions  res"></span>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="{{asset('platform/real-estate/js/viewdirection.js ')}}"></script>
</html>
