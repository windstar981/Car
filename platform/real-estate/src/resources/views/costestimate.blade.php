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
    <link href="{{ asset('platform/real-estate/css/costestimate.css') }}" rel="stylesheet">
    <title>Cost Estimate</title>

</head>
<body>
    <div class="container mt-5">
        <div class="col-5 m-auto">
            <div class="header">Dự toán chi tiết</div>
            <div class="main-content">
                <div class="title">Dự toán chi tiết các hạng mục nhà ở</div>
                <div class="wrap-step">
                    <span class="title-left">
                        Chiều dài
                    </span>
                    <input type="text">
                    <label>m</label>
                </div>
                <div class="wrap-step">
                    <span class="title-left">
                        Chiều rộng
                    </span>
                    <input type="text">
                    <label>m</label>
                </div>
                <div class="wrap-step">
                    <span class="title-left">
                        Số tầng chiều cao
                    </span>
                    <input type="text">
                    <label>tầng</label>
                </div>
                <div class="wrap-step">
                    <span class="title-left">
                        Chiều cao một tầng
                    </span>
                    <input type="text">
                    <label>m</label>
                </div>
                <div class="wrap-step">
                    <span class="title-left">
                        Loại mái nhà
                    </span>
                    <select>
                        <option>
                            Bê tông
                        </option>
                        <option>
                            Ngói
                        </option>
                        <option>
                            Tôn
                        </option>
                    </select>
                </div>
                <p class="text-center mt-3">
                    <span class="btn-submit">
                    Xem kết quả
                </span>
                </p>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="{{asset('platform/real-estate/js/costestimate.js ')}}"></script>
</html>
