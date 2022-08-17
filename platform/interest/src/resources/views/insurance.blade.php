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
    <link href="{{ asset('platform/interest/css/insurance.css') }}" rel="stylesheet">
    <title>Calculate</title>

</head>
<body style="background: #E5E5E5">
@include('interest::component.header')
<div class="container">
    <div class="col-8 mt-5" style="background: white; padding:16px; border-radius: 8px;box-shadow: -1px 1px 6px rgb(0 0 0 / 5%);">
        <h1 class="title">Công cụ tính bảo hiểm xã hội một lần online miễn phí 2022</h1>
        <p class="text-muted-content mb-4">
            Nếu nghỉ việc hoặc không đóng bảo hiểm xã hội trong vòng 1 năm, bạn có thể được nhận bảo hiểm xã hội một lần dù chưa đến tuổi về hưu hay nhận lương hưu. Đây là khoản hỗ trợ từ BHXH và Nhà nước dành cho người lao động. Để nhận khoản tiền này, người lao động cần chuẩn bị thủ tục nhận bảo hiểm xã hội một lần. Công cụ tính bảo hiểm xã hội một lần dưới đây của TopCV sẽ giúp bạn hiểu rõ về loại hình bảo hiểm này cũng như cách tính BHXH một lần mà bạn có thể nhận được để đảm bảo quyền lợi của chính mình.
        </p>
        <ul class="nav nav-pills mb-3 border-top" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <span class="nav-custom btn-active tab-must" id="pills-home-tab" data-bs-toggle="pill"
                      data-bs-target="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">BHXH bắt buộc</span>
            </li>
            <li class="nav-item" role="presentation">
                <span class="nav-custom tab-voluntary" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                      role="tab" aria-controls="pills-profile" aria-selected="false">BHXH tự nguyện</span>
            </li>
            <li class="nav-item" role="presentation">
                <span class="nav-custom tab-mix" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                      role="tab" aria-controls="pills-contact"
                      aria-selected="false">Cả BHXH bắt buộc và BHXH tự nguyện</span>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="d-flex justify-content-between mt-4">
                    <div>
                        <span style="font-size: 12px; font-weight: 500;">Giai đoạn nộp bảo hiểm xã hội</span>
                    </div>
                    <div>
                        <span style="font-size: 12px; font-weight: 500; margin-right: 25px;">Mức lương đóng bảo hiểm xã hội</span>
                    </div>
                </div>
                <div class="wrap-insurance-payment">
                    <div
                        class="wrap-selects d-flex justify-content-between insurance-payment-period del-insurance w-100">
                        <div class="select-from d-flex justify-content-between">
                            <div class="mt-3">
                                <select class="select-number tab-must">
                                    @for($i=1; $i<=12 ; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="mt-3">
                                <select class="select-number tab-must">
                                    @for($i=2022; $i>=1994 ; $i--)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <span class="title-to">Đến</span>
                        <div class="select-to d-flex justify-content-between">
                            <div class="mt-3">
                                <select class="select-number tab-must">
                                    @for($i=1; $i<=12 ; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="mt-3 ">
                                <select class="select-number tab-must">
                                    @for($i=2022; $i>=1994 ; $i--)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="input-number mt-3 must-pay">
                            <input class="money input-must" placeholder="VD: 5,000,000">
                            <span class="currency">(VNĐ)</span>
                            <i class="fa-solid fa-trash position-absolute delete-this-dom"
                               style="right: 0; margin-top:12px; cursor: pointer"></i>
                        </div>
                    </div>

                </div>
                <div class="wrap-btn-option mt-3">
                    <button class="btn btn-outline-default btn-add-stage">
                        Thêm giai đoạn
                    </button>
                    <button class="btn btn-black-100 btn-add-maternity">
                        Thêm giai đoạn thai sản
                    </button>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="d-flex justify-content-between mt-4 ">
                    <div>
                        <span style="font-size: 12px; font-weight: 500;">Giai đoạn nộp bảo hiểm xã hội</span>
                    </div>
                    <div>
                        <span style="font-size: 12px; font-weight: 500;margin-left: 225px;">Mức lương đóng BHXH</span>
                    </div>
                    <div>
                        <span style="font-size: 12px; font-weight: 500;margin-right: 80px; ">Đối tượng tham gia</span>
                    </div>
                </div>
                <div class="wrap-insurance-voluntary">
                    <div
                        class="wrap-selects d-flex justify-content-between main-voluntary-social-insurance del-insurance">
                        <div class="select-from d-flex justify-content-between del-voluntary-social-insurance "
                             style="width: 27%;">
                            <div class="mt-3">
                                <select class="select-number  tab-voluntary" style=" width: 95px;">
                                    @for($i=1; $i<=12 ; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="mt-3">
                                <select class="select-number tab-voluntary" style=" width: 95px;">
                                    @for($i=2022; $i>=1994 ; $i--)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <span class="title-to" style="margin-left: 5px; margin-right: 5px;">Đến</span>
                        <div class="select-to d-flex justify-content-between" style="width: 27%;">
                            <div class="mt-3">
                                <select class="select-number tab-voluntary" style=" width: 95px;">
                                    @for($i=1; $i<=12 ; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="mt-3 ">
                                <select class="select-number tab-voluntary" style=" width: 95px;">
                                    @for($i=2022; $i>=1994 ; $i--)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="input-number mt-3" style="margin-left: 10px;">
                            <input class="money input-voluntary" placeholder="VD: 5,000,000">
                            <span class="currency" style="right:10px;">(VNĐ)</span>
                        </div>
                        <div class="input-number mt-3">
                            <select class="select-number tab-voluntary" style="width: 160px">
                                <option value="poor" selected>Hộ nghèo</option>
                                <option value="near-poor">Hộ cận nghèo</option>
                                <option value="other">Đối tượng khác</option>
                            </select>
                            <i class="fa-solid fa-trash position-absolute delete-this-dom"
                               style="right: 0; margin-top:12px; cursor: pointer"></i>
                        </div>

                    </div>
                </div>
                <div class="wrap-btn-option mt-3">
                    <button class="btn btn-outline-default btn-voluntary">
                        Thêm giai đoạn
                    </button>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="d-flex justify-content-between mt-4">
                    <div>
                        <span style="font-size: 12px; font-weight: 500;">Giai đoạn nộp bảo hiểm xã hội</span>
                    </div>
                    <div>
                        <span style="font-size: 12px; font-weight: 500;margin-left: 225px;">Mức lương đóng BHXH</span>
                    </div>
                    <div>
                        <span style="font-size: 12px; font-weight: 500;margin-right: 80px; ">Đối tượng tham gia</span>
                    </div>
                </div>

                <div class="wrap-selects wrap-mix-insurance ">
                    <div class="w-100 d-flex justify-content-between  del-insurance">
                        <div class="select-from d-flex justify-content-between" style="width: 27%;">
                            <div class="mt-3">
                                <select class="select-number tab-mix" style=" width: 95px;">
                                    @for($i=1; $i<=12 ; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="mt-3">
                                <select class="select-number tab-mix" style=" width: 95px;">
                                    @for($i=2022; $i>=1994 ; $i--)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <span class="title-to" style="margin-left: 5px; margin-right: 5px;">Đến</span>
                        <div class="select-to d-flex justify-content-between" style="width: 27%;">
                            <div class="mt-3">
                                <select class="select-number tab-mix" style=" width: 95px;">
                                    @for($i=1; $i<=12 ; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="mt-3 ">
                                <select class="select-number tab-mix" style=" width: 95px;">
                                    @for($i=2022; $i>=1994 ; $i--)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="input-number mt-3" style="margin-left: 10px;">
                            <input class="money input-mix" placeholder="VD: 5,000,000">
                            <span class="currency" style="right:10px;">(VNĐ)</span>
                        </div>
                        <div class="input-number mt-3">
                            <select class="select-number d-none tab-mix" style="width: 160px">
                                <option value="must" selected></option>
                            </select>
                            <i class="fa-solid fa-trash position-absolute delete-this-dom"
                               style="right: 0; margin-top:12px; cursor: pointer"></i>
                        </div>
                    </div>
                </div>
                <div class="wrap-btn-option mt-3">
                    <button class="btn btn-outline-default btn-mix-add-Stage">
                        Thêm giai đoạn
                    </button>
                    <button class="btn btn-black-100 btn-mix-add-Voluntary">
                        Thêm BHXH tự nguyện
                    </button>
                    <button class="btn btn-black-100 btn-mix-add-Maternity">
                        Thêm giai đoạn thai sản
                    </button>

                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <button class="btn btn-default btn-result-insurance">
                Tính bảo hiểm xã hội
            </button>
        </div>

        <div class="result mt-4 mb-3 d-none"><h3 class="title text-center">
                Tiền BHXH một lần được nhận: <span class="total_bhxh"> (VNĐ)</span></h3>
            <div class="description"><h4>Diễn giải cách tính BHXH một lần</h4>
                <p>1. Thời gian tham gia BHXH: <span class="total-year"></span></p>
                <p>
                    2. Mức bình quân tiền lương tháng đóng BHXH:
                </p>
                <p>
                    2.1. Tiền lương đóng BHXH của các giai đoạn tham gia BHXH như sau:
                </p>
                <p class="detail-insurance">

                </p>
                <p>
                    - Tổng tiền đóng BHXH = <span class="total-all"></span> (VNĐ)
                </p>
                <p>
                    2.2. Mức bình quân tiền lương đóng BHXH = Tổng tiền / tổng số tháng = <span class="bqtl"></span> (VNĐ)
                </p>
                <p>
                    3. Mức hưởng BHXH một lần:
                <p class="pl-30p before-2014">

                </p>
                <p class="pl-30p after-2014">
                    Mức hưởng BHXH một lần đối với thời gian đóng BHXH từ 2014 trở đi = <span class=""></span> (VNĐ)
                </p>
                <div class="wrap-state d-none">
                    </p>
                    <p>
                        Số tiền Nhà nước hỗ trợ đóng BHXH:
                    </p>
                    <p>
                        (Nhà nước bắt đầu hỗ trợ đóng BHXH tự nguyện từ 01/01/2018)
                    </p>
                    <p>
                        Số tiền Nhà nước hỗ trợ đóng BHXH tự nguyện từ tháng 01/2018 - hết tháng 12/2021
                    </p>
                    <p class="money-support-before pl-30p">

                    </p>
                    <p>
                        Số tiền Nhà nước hỗ trợ đóng BHXH tự nguyện từ tháng 01/2022 - hết tháng 12/2025
                    </p>
                    <p class="money-support-after pl-30p">

                    </p>
                    <p>
                        Tổng số tiền nhà nước hỗ trợ đóng BHXH = <span class="total-state-support"></span> (VNĐ)
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="{{asset('platform/interest/js/insurance.js ')}}"></script>
</html>
