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
    <link href="{{ asset('platform/interest/css/unemployment.css') }}" rel="stylesheet">
    <title>Calculate</title>

</head>
<body style="background: #E5E5E5">
@include('interest::component.header')
<div class="container mt-5">
    <div class="col-8 main-content">
        <h1 class="title">Công cụ tính mức hưởng bảo hiểm thất nghiệp chính xác nhất 2022</h1>
        <p class="text-muted-content mb-1">
            Mức hưởng bảo hiểm thất nghiệp được quy đinh tại điều 50, Luật việc làm 2013 và được hướng dẫn chi tiết tại điều 8, Nghị định 28/2015/NĐ-CP
        </p>
        <p class="text-muted-content mb-5">
            Áp dụng mức lương tối thiểu vùng mới nhất có hiệu lực từ ngày 1/1/2020 (Theo điều 3, Nghị định 90/2019/NĐ-CP)
        </p>
        <div class="main-unemployment d-flex">
            <input type="radio" id="no-change-salary" class="input-switch" name="salary" checked value="1">
            <label for="no-change-salary" style="margin-right: 70px;">Lương đóng BH không thay đổi trong 6 tháng</label><br>
            <input type="radio" id="change-salary" class="input-switch" name="salary" value="0">
            <label for="change-salary">Lương đóng BH thay đổi trong 6 tháng</label><br>
        </div>
        <div class="wrap-no-change">
            <label style="font-weight: bold; margin-top:20px; margin-bottom:15px;">Tiền lương đóng BHTN: </label>
            <div class="step-input position-relative "style="    width: 283px;">
                <i class="fa-solid fa-money-bill icon-money"></i>
                <input placeholder="6,000,000" class="input money root-money" id="avgSalaryNoChange" >
                <span class="currency" >(VNĐ)</span>
                <span class="vali-money"><i>Bạn chưa nhập tiền lương đóng BHXH</i></span>
            </div>
            <small>(Bình quân tiền lương tháng đóng BHTN của 06 tháng liền kề trước khi thất
                nghiệp)</small>
        </div>
        <div class="wrap-change d-none">
            <div class="row">
                <div class="col-4">
                    <label style="font-weight: bold; margin-top:20px; margin-bottom:15px;">BHTN tháng 1: </label>
                    <div class="step-input position-relative ">
                        <i class="fa-solid fa-money-bill icon-money"></i>
                        <input placeholder="6,000,000" class="input money root-money w-100" id="month1"  >
                        <span class="currency" >(VNĐ)</span>
                        <span class="vali-money"><i>Bạn chưa nhập tiền lương đóng BHXH</i></span>
                    </div>
                </div>

                <div class="col-4">
                    <label style="font-weight: bold; margin-top:20px; margin-bottom:15px;">BHTN tháng 2: </label>
                    <div class="step-input position-relative ">
                        <i class="fa-solid fa-money-bill icon-money"></i>
                        <input placeholder="6,000,000" class="input money root-money w-100" id="month2" >
                        <span class="currency" >(VNĐ)</span>
                        <span class="vali-money"><i>Bạn chưa nhập tiền lương đóng BHXH</i></span>
                    </div>
                </div>
                <div class="col-4">
                    <label style="font-weight: bold; margin-top:20px; margin-bottom:15px;">BHTN tháng 3: </label>
                    <div class="step-input position-relative ">
                        <i class="fa-solid fa-money-bill icon-money"></i>
                        <input placeholder="6,000,000" class="input money root-money w-100"  id="month3">
                        <span class="currency" >(VNĐ)</span>
                        <span class="vali-money"><i>Bạn chưa nhập tiền lương đóng BHXH</i></span>
                    </div>
                </div>
                <div class="col-4">
                    <label style="font-weight: bold; margin-top:20px; margin-bottom:15px;">BHTN tháng 4: </label>
                    <div class="step-input position-relative ">
                        <i class="fa-solid fa-money-bill icon-money"></i>
                        <input placeholder="6,000,000" class="input money root-money w-100" id="month4" >
                        <span class="currency" >(VNĐ)</span>
                        <span class="vali-money"><i>Bạn chưa nhập tiền lương đóng BHXH</i></span>
                    </div>
                </div>
                <div class="col-4">
                    <label style="font-weight: bold; margin-top:20px; margin-bottom:15px;">BHTN tháng 5: </label>
                    <div class="step-input position-relative ">
                        <i class="fa-solid fa-money-bill icon-money"></i>
                        <input placeholder="6,000,000" class="input money root-money w-100"  id="month5">
                        <span class="currency" >(VNĐ)</span>
                        <span class="vali-money"><i>Bạn chưa nhập tiền lương đóng BHXH</i></span>
                    </div>
                </div>
                <div class="col-4">
                    <label style="font-weight: bold; margin-top:20px; margin-bottom:15px;">BHTN tháng 6: </label>
                    <div class="step-input position-relative ">
                        <i class="fa-solid fa-money-bill icon-money"></i>
                        <input placeholder="6,000,000" class="input money root-money w-100"  id="month6">
                        <span class="currency" >(VNĐ)</span>
                        <span class="vali-money"><i>Bạn chưa nhập tiền lương đóng BHXH</i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="time">
            <label style="font-weight: bold; margin-top:20px; margin-bottom:15px;">Tổng thời gian đóng BHTN chưa hưởng: </label>
            <div class="step-input position-relative " style="    width: 283px;">
                <i class="fa-solid fa-calendar icon-money"></i>
                <input placeholder="12" class="input money root-money" id="time" maxlength="3">
                <span class="currency">(Tháng)</span>
            </div>
            <small>(Thời gian đóng bảo hiểm thất nghiệp – Thời gian đã hưởng trợ cấp thất nghiệp)</small>
        </div>
        <div class="d-flex justify-content-between">
            <div class="salary-regime">
                <label style="font-weight: bold; margin-top:20px; margin-bottom:10px; width: 100%">Chế độ tiền lương </label>
                <input type="radio" id="government" name="salary-1" value="1" checked>
                <label for="government">Doanh nghiệp nhà nước</label><br>
                <input type="radio" id="private" name="salary-1" value="">
                <label for="private">Doanh nghiệp tư nhân</label><br>
            </div>
            <div class="select-regime" style="width: 400px;">
                <label style="font-weight: bold; margin-top:20px; margin-bottom:15px;">Vùng: </label>
                <div class="position-relative">
                    <i class="fa-solid fa-location-dot location"></i>
                    <select class="select-region" id="salary_area" style="cursor:no-drop; background-color:#eee;" disabled >
                        <option value="1">
                            Vùng 1
                        </option>
                        <option value="2">
                            Vùng 2
                        </option>
                        <option value="3">
                            Vùng 3
                        </option>
                        <option value="4">
                            Vùng 4
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="border mt-4">

        </div>
        <div class="text-center mt-4">
            <button class="btn btn-submit">Tính bảo hiểm</button>
        </div>
        <div id="result_wrap"  class="d-none" style="display: block;">
            <strong>Kết quả:</strong>
            <div>* Mức hưởng BHTN hàng tháng: <strong><span id="tinh_bao_hiem_result"></span></strong><i> (Tháng)</i></div>
            <div>* Số tháng hưởng BHTN: <strong><span id="so_thang_huong_bhxh_result"></span></strong><i> (Tháng)</i></div>
        </div>
        <div style="margin-top: 20px;" class="table-detail-explanation d-none">
            <table class="table" style="margin-top: 40px;">
                <tbody>
                <tr class="header-table row-note">
                    <th>Tiền lương đóng BHTN</th>
                    <th>Thời gian đóng BHTN chưa hưởng</th>
                    <th>Chế độ lương</th>
                    <th style="display: none" class="th-vung">Vùng</th>
                    <th>Mức hưởng BHTN hàng tháng</th>
                    <th>Số tháng hưởng BHTN</th>
                </tr>
                <tr>
                    <td>
                        <span class="detail-luong-dong-bhtn"></span> (đồng)
                    </td>
                    <td>
                        <span class="detail-tg-dong-bhtn"></span> (tháng)
                    </td>
                    <td class="detail-che-do-luong">Doanh nghiệp nhà nước</td>
                    <td style="display: none" class="detail-vung text-center"></td>
                    <td>
                        <span class="detail-muc-huong-thuc-nhan"></span> (đồng)
                    </td>
                    <td>
                        <span class="detail-so-thang-thuc-nhan">3</span> (tháng)
                    </td>
                </tr>
                </tbody>
            </table>
            <p style="color: #00B14F; font-size: 16px "><b>(*) Diễn giải chi tiết</b></p>
            <table class="table detail-table">
                <tbody>
                <tr class="header-table">
                    <th>(1) Tiền lương đóng BHTN </th>
                    <td>
                        <span class="detail-luong-dong-bhtn"></span> (Đồng)
                    </td>
                </tr>
                <tr class="row-luong-vung" style="display: none">
                    <th>(2) Lương tối thiểu vùng</th>
                    <td>
                        <span class="min-salary-vung"></span> (Đồng)
                    </td>
                </tr>
                <tr class="row-luong-co-so">
                    <th>(2) Lương cơ sở</th>
                    <td>
                        <span class="luong-co-so"></span> (Đồng)
                    </td>
                </tr>
                <tr>
                    <th>(3) Mức lương tháng được đóng BHTN tối đa
                        <small>(<i>= 20 * (2) </i>)</small>
                    </th>
                    <td>
                        <span class="luong-tinh-bhtn-toi-da"></span> (Đồng)
                    </td>
                </tr>
                <tr>
                    <th>(4) Mức lương tháng áp dụng tính BHTN
                        <span class="font-weight-normal"><small>(<i>Không vượt quá mức lương tháng đóng BHTN tối đa (3)</i>)</small></span>
                    </th>
                    <td>
                        <span class="luong-ap-dung-tinh-bhtn"></span> (Đồng)
                    </td>
                </tr>
                <tr>
                    <th>(5) Mức hưởng trợ cấp thất nghiệp hàng tháng tối đa
                        <span class="font-weight-normal"><small>(<i> = 5 * (2) </i>)</small></span>
                    </th>
                    <td>
                        <span class="luong-huong-hang-thang-toi-da"></span> (Đồng)
                    </td>
                </tr>
                <tr>
                    <th>(6) Thời gian đóng BHTN chưa hưởng</th>
                    <td>
                        <span class="detail-tg-dong-bhtn"></span> (Tháng)
                    </td>
                </tr>
                <tr>
                    <th>(7) Chế độ lương</th>
                    <td class="detail-che-do-luong"></td>
                </tr>
                <tr>
                    <th>(8) Mức trợ cấp hàng tháng theo mức lương áp dụng
                        <span class="font-weight-normal"><small><i>(= 0.6 * Mức lương tháng áp dụng tính BHTN (4))</i></small></span>
                    </th>
                    <td>
                        <span class="tro-cap-theo-luong-ap-dung"></span> (Đồng)
                    </td>
                </tr>
                <tr class="row-note">
                    <th>(9) Mức hưởng BHTN hàng tháng thực nhận
                        <span class="font-weight-normal"><small>(<i>Không vượt quá mức hưởng trợ cấp thất nghiệp hàng
                            tháng tối đa (5)</i> )</small></span>
                    </th>
                    <td>
                        <span class="tro-cap-thuc-linh"></span> (Đồng)
                    </td>
                </tr>
                <tr class="row-note">
                    <th style="border-top: 0">(10) Số tháng hưởng BHTN <a style="color: #00B14F; cursor: pointer" class="cach-tinh-so-thang">(?)</a></th>
                    <td style="border-top: 0">
                        <span class="so-thang-huong-bhtn"></span> (Tháng)
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
<script src="{{asset('platform/interest/js/unemployment.js ')}}"></script>

</html>
