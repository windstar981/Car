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
    <link href="{{ asset('platform/real-estate/css/fengshui.css') }}" rel="stylesheet">

    <title>View house direction</title>

</head>
<body>
<div class="container mt-5">
    <div class="col-5 m-auto">
        <div class="header">Phong thủy văn phòng</div>
        <div class="main-content">
            <div class="title">Xem phong thủy cho văn phòng</div>
            <div class="wrap-step">
                    <span class="title-left">
                        Năm sinh của gia chủ
                    </span>
                <input type="text" placeholder="1990" class="year">
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


            <p class="text-center mt-3">
                    <span class="btn-submit">
                    Xem kết quả
                </span>
            </p>
        </div>
        <div class="wrap-result d-none">
            <div class="re__utils-header">Bảng kết quả</div>
            <ul>
                <li>Năm sinh dương lịch: <span class="output-year">2001</span></li>
                <li>Năm sinh âm lịch: <span class="output-name-year">Tân tỵ</span></li>
                <li>Quẻ mệnh: <span class="output-destiny">Cấn</span> (<span class="output-destiny-translate">Thổ</span>)
                    thuộc <span class="output-life">Tây tứ mệnh</span></li>
                <li>Ngũ hành:  <span class="five-elements">Bạch Lạp Kim</span></li>
            </ul>
            <h3>1. Vị trí và hướng bàn làm việc:</h3>
            <div>- Phương vị đặt bàn là Thần Tài của người sinh năm <span class="output-name-year">Tân tỵ</span>
                là ở góc hướng <strong><span class="output-direction" style="text-transform:capitalize;">chính Đông</span> </strong> của văn phòng</div>
            <div>- Bạn thuộc  <span class="output-life">Tây tứ mệnh</span>, do đó bàn làm việc nên quay về một trong các hướng  <span class="output-directions">Tây, Tây Bắc, Đông Bắc, Tây Nam</span>. </div>
            <div class="nobullet">
                - Ngoài ra cần ghi nhớ các quy tắc:
                <ul style="list-style: none">
                    <li>+ Bàn phải hướng ra cửa, nhưng không đối diện thẳng với cửa phòng </li>
                    <li>+ Sau lưng người ngồi phải có một điểm tựa (có thể là tường, tủ, ...) </li>
                    <li>+ Không nên quay mặt vào tường hoặc quay lưng ra cửa phòng </li>
                    <li>+ Không nên đặt bàn ở trung cung, tức chính giữa phòng </li>
                    <li>+ Không đặt bàn nơi góc nhọn, góc khuất, cuối hành lang, lối đi </li>
                    <li>+ Không đặt bàn ngay trước cột vuông hay dưới xà ngang </li>
                    <li>+ Không đặt bàn hướng ra toilet hoặc cầu thang </li>
                </ul>
            </div>
            <div>- Kết luận: Bạn nên đặt bàn làm việc ở góc hướng  của văn phòng, và quay bàn làm việc nhìn về một trong
                các hướng <span class="output-directions" >Tây, Tây Bắc, Đông Bắc, Tây Nam</span>.</div>
            <h3>2. Hình dáng và màu sắc bàn làm việc</h3>
            <div>- Bạn sinh năm <span class="output-year">2001</span>, có niên mệnh thuộc <span class="five-elements"></span>, <span class="output-direction">Kim</span></div>
            <div>- Lưu ý kích thước bàn làm việc nên cân xứng với các vật dụng trên bàn, không nên quá chật làm giảm hưng phấn làm việc, cũng không nên quá rộng tạo cảm giác bất ổn. </div>
            <h3>3. Bày biện và sắp xếp đồ đạc trên bàn làm việc</h3>
            <div>- Xếp hồ sơ, giấy tờ cần giải quyết gấp ở hướng đông (cung tài lộc). Chồng hồ sơ bên trái nên cao hơn bên phải (Tả Thanh Long, Hữu Bạch Hổ).</div>
            <div>- Đặt vật chặn giấy thủy tinh hoặc pha lê ở hướng tây bắc (cung quý nhân). Từ đó, bạn sẽ nhận được sự giúp đỡ của nhiều người.</div>
            <div>- Danh thiếp của đối tác làm ăn nên đặt ở hướng bắc (cung quan lộc). Có vậy công việc của bạn mới có thể gặp nhiều thuận lợi, may mắn.</div>
            <div>- Hướng Bắc: tách trà, ly nước hoặc cà phê…</div>
            <div>- Phía Đông đặt một bình hoa tươi ở bàn làm việc, giúp tạo năng lượng dương rất tốt, khuyến khích bạn hăng say làm việc.</div>
            <div>- Góc Đông Nam của bàn làm việc đặt một cây nhỏ tươi tốt để thu hút tài lộc và sự thăng tiến. Tuy nhiên cần tránh cây xương rồng hoặc các cây có lá sắc nhọn. Để đem lại những điều tốt đẹp, hoa và cây cảnh cần tươi và xum xuê. Nếu cây chết, hãy bỏ ngay và thay bằng một cây khác. Góc Đông Nam của bàn làm việc cũng nên đặt các tượng giả cổ màu đỏ hoặc màu tía tượng trưng cho sự giàu có.</div>
            <div>- Góc Tây Nam của bàn làm việc đặt pha lê tròn hoặc quả cầu thuỷ tinh trơn để tạo sự hoà đồng giữa bạn với các đồng nghiệp.</div>
            <div>- Hướng Nam của bàn làm việc đặt các loại đèn nhằm cung cấp năng lượng chủ về tên tuổi và danh tiếng cho bạn</div>
            <div>- Hướng Tây hoặc Tây Bắc của bàn làm việc nên đặt các thiết bị văn phòng bằng kim loại (như máy tính), nhớ rằng phải đặt vật thấp ở bên phải và vật cao ở bên trái. Ngoài ra phía Tây có thể trang trí thỏi vàng phong thuỷ.</div>
            <div>Cuối cùng, quan trọng hơn hết là bàn làm việc phải thật sự sạch sẽ, gọn gàng, thông thoáng, để sinh khí luân chuyển, tránh các dòng khí bị ngưng trệ. Riêng điều đó thôi, đã tạo cho ta một cảm giác thật dễ chịu, một tinh thần thật sảng khoái. Và tinh thần phải sảng khoái thì mới hoàn thành tốt công việc.</div>

        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="{{asset('platform/real-estate/js/fengshui.js ')}}"></script>

</html>
