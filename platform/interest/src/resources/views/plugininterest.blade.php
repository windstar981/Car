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
    <link href="{{ asset('platform/interest/css/plugininterest.css') }}" rel="stylesheet">
    <title>Calculate</title>

</head>
<body>

@include('interest::component.header')

<div class="container">
    <div class="col-xl-9 col-lg-9">
        <div class="box-interest">
            <h3 class="title-interest">
                Ước tính khoản vay
            </h3>
            <div class=" wrap-interest d-flex">
                <div class="wrap-input">
                    <div class="wrap-input-interest-detail mt-0 ">
                        <label class="lb-input-interest">
                            Giá trị nhà đất
                        </label>
                        <input value="3,000,000,000" class="input-interest root-money" maxlength="18">
                        <span class="end-input-money">đ</span>
                    </div>
                    <div class="wrap-input-interest-detail d-flex">
                        <div class="wrap-input-money">
                            <label class="re__input-lable">Tỉ lệ vay</label>
                            <input id="LoanRatio" class="js__pay-input-percent re__input--sm re__icon-percent rate-loan" value="50" maxlength="2">
                            <span class="re__input-icon">%</span>
                        </div>
                        <div class="wrap-input-money">
                            <label class="re__input-lable">Số tiền vay</label>
                            <input id="LoanRatio" class="js__pay-input-percent re__input--sm re__icon-percent number-loan" value="1,500,000,000" maxlength="18">
                            <span class="re__input-icon">đ</span>
                        </div>
                    </div>
                    <div class="wrap-input-interest-detail">
                        <label class="lb-input-interest">
                            Thời hạn vay
                        </label>
                        <input value="5" class="input-interest time-borrow" maxlength="2">
                        <span class="end-input-money">Năm</span>
                    </div>
                    <div class="wrap-input-interest-detail d-flex">
                        <div class="wrap-input-money" style="width: 80%">
                            <label class="re__input-lable">Lãi suất theo ngân hàng %/năm</label>
                            <select class="select-option-interest" id="select-bank">

                            </select>
                        </div>
                        <div class="wrap-input-money" style="width: 20%">
                            <label class="re__input-lable"></label>
                            <input  class="js__pay-input-percent re__input--sm re__icon-percent number-interest" value="6" maxlength="2">
                            <span class="re__input-icon">%</span>
                        </div>
                    </div>
                    <div class="wrap-input-interest-detail">
                        <label class="lb-input-interest">
                            Loại hình
                        </label>
                        <select class="select-option-interest" id="select-type-interest">
                            <option value="1">
                                Dư nợ giảm dần
                            </option>
                            <option value="2">
                                Trả lãi chia đều
                            </option>
                        </select>
                    </div>

                </div>
                <div class="wrap-result-interest">
                    <span class="re__label-title">Tổng số tiền bạn cần trả</span>
                    <label id="TotalAmount" class="js__pay-total re__label-total total-money-must-pay"></label>
                    <div class="re__label-progress-bar">
                        <div class="re__cyan" style="width: 0%;" aria-value="40">
                            <div class="re__crossbar"></div>
                            <span class="number-re__cyan"></span>
                        </div>
                        <div class="re__purple" style="width: 1%;" aria-value="40">
                            <div class="re__crossbar"></div>
                            <span class="number-re__purple"></span>
                        </div>
                        <div class="re__yellow" style="width: 1%;" aria-value="20">
                            <div class="re__crossbar"></div>
                            <span class="number-re__yellow"></span>
                        </div>
                    </div>
                    <div class="payment-result-detail">
                        <div class="equity-capital d-flex justify-content-between">
                            <div>
                                <span class="color-quity">•</span><span class="title-equity">Vốn tự có</span>
                            </div>
                            <div>
                                <span class="js-equity-capital">1.500.000.000 đ</span>
                            </div>
                        </div>
                        <div class="equity-capital d-flex justify-content-between">
                            <div>
                                <span class="color-root-pay">•</span><span class="title-equity">Gốc cần trả</span>
                            </div>
                            <div>
                                <span class="js-root-money-must-pay">1.500.000.000 đ</span>
                            </div>
                        </div>
                        <div class="equity-capital d-flex justify-content-between">
                            <div>
                                <span class="color-interest-pay">•</span><span class="title-equity">Lãi cần trả</span>
                            </div>
                            <div>
                                <span class="js-money-interest-must-pay">1.500.000.000 đ</span>
                            </div>
                        </div>
                        <div class="equity-capital d-flex justify-content-between border-top border-bottom wrap-pay-first-month">
                            <div>
                                <span class="title-equity">Thanh toán tháng đầu</span>
                            </div>
                            <div>
                                <span class="js-pay-first-month">32.500.000 đ</span>
                            </div>
                        </div>
                        <p class="btn-detail-plan "  data-bs-toggle="modal" data-bs-target="#modalPaymentDetail">
                            Chi tiết kế hoạch tài chính
                        </p>
                    </div>
                </div>

            </div>
            <!-- Modal -->
            <div class="modal fade" id="modalPaymentDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLabel">Xem lịch trả nợ hàng tháng</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped table-hover tb-interest" id="tb-export">
                                <thead>
                                <tr>
                                    <th scope="col">Số kỳ</th>
                                    <th scope="col">Dư nợ đầu kỳ (VNĐ)</th>
                                    <th scope="col">Gốc phải trả (VNĐ)</th>
                                    <th scope="col">Lãi phải trả (VNĐ)
                                    <th scope="col">Gốc + Lãi (VNĐ)</th>
                                </tr>
                                </thead>
                                <tbody id="result">

                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-export-excel">Xuất excel</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
<script src="{{asset('platform/interest/js/tableHTMLExport.js ')}}"></script>
<script>

    $('.btn-export-excel').on('click',function (){
        $('#tb-export').tableHTMLExport({type:'json',filename:'sample.json'});
    })
</script>
<script src="{{asset('platform/interest/js/plugininterest.js ')}}"></script>


</html>
