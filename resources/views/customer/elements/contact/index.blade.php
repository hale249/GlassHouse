@extends('customer.layouts.app')

@section('title', 'Liên hệ')

@section('css')
    <link rel="stylesheet" href="{{ asset('customer/css/style-contact.css') }}">
@endsection

@section('content')
    <div class="title">
        <h1>Liên hệ</h1>
        <div class="link" style="z-index: 2;">
            <a href="{{ route('customer.home.index') }}">Trang chủ</a> &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;
            <a href="{{ route('customer.intro.index') }}"><strong>Liên hệ </strong></a>
        </div>
    </div>
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-info col-sm-4">
                    <strong style="font-size: 20px; ">Văn phòng đại diện</strong>
                    <p> <i class="fa fa-map-maker "></i>Nguyệt Quế 25 VinHomes Riverside The Harmony,<br> Long Biên, Hà Nội <br>Giờ làm việc: 7:30 - 17:30 <br>Email: glasshouse.vn@gmail.com</p>
                    <a href=" ">Hotline | +84981961668</a> <br>
                    <hr>
                    <strong style="font-size: 20px; ">Nhà máy sản xuất</strong>
                    <p><i class="fa fa-map-maker "></i>Khu Hồng Hà, số 242 Cổ Bi, Gia Lâm, Hà Nội <br>Giờ làm việc: 7:30 - 17:30 <br></p>
                    <a href=" ">Hotline | +84981961668</a>
                </div>
                <div class="contact-form col-sm-8 ">
                    <form action="/action_page.php " class="needs-validation " novalidate>
                        <small style="margin-left: 250px;"></small>
                        <div class="form-group ">
                            <i class="fa fa-user"> &nbsp </i><label> Họ tên: </label>
                            <input type="text" name="txtName" id="txtName" onblur="checkName()" placeholder="Họ và tên">
                            <p id="errName"></p>
                        </div>
                        <div class="form-group ">
                            <i class="fa fa-phone"> &nbsp </i><label> Số điện thoại: </label>
                            <input type="text" name="txtPhone" id="txtPhone" onblur="checkPhone()" placeholder="Số điện thoại">
                            <p id="errPhone"></p>
                        </div>
                        <div class="form-group ">
                            <i class="fa fa-envelope-o">&nbsp </i><label> Gmail: </label>
                            <input type="text" name="txtEmail" id="txtEmail" onblur="checkEmail()" placeholder="Gmail">
                            <p id="errEmail"></p>
                        </div>
                        <div class="form-group ">
                            <i class="fa fa-home">&nbsp </i><label> Địa chỉ:</label>
                            <input type="text" name="txtAdd" id="txtAdd" onblur="checkAdd()" placeholder="Địa chỉ công trình">
                            <p id="errAdd"></p>
                        </div>
                        <div class="form-group ">
                            <i class="fa fa-commenting-o">&nbsp</i><label> Nội dung:</label><br>
                            <textarea rows="6" name="txtMessage" id="txtMessage" onblur="checkMessage()" style="width: 100%;"></textarea><br>
                            <p id="errMessage"></p>
                        </div>
                        <button type="submit " class="btn btn-primary " style="width: 100%; ">Xác nhận</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.756052321233!2d105.9030640153724!3d21.04244479268588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad9067149e19%3A0x30382228e784006e!2zR2xhc3Nob3VzZSAtIEPhu61hIG5ow7RtIGvDrW5oIGNhbyBj4bqlcA!5e0!3m2!1svi!2s!4v1648624132242!5m2!1svi!2s"
                width="100%" height="450px" style="border:0; margin-left: -15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
