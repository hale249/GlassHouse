@extends('customer.layouts.app')

@section('title', 'Sản phẩm')

@section('css')
    <link rel="stylesheet" href="{{ asset('customer/css/style-project.css') }}">
@endsection

@section('content')
    <div class="title">
        <h1>Biệt thự A8 Xanh Villas</h1>
        <div class="link" style="z-index: 2;">
            <a href="{{ route('customer.project.index') }}">Công trình</a> &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;
            <a href="{{ route('customer.intro.index') }}"><strong>Biệt thự A8 Xanh Villas</strong></a>
        </div>
    </div>

    <div class="container main-content">
        <div class="row">
            <div class="col-md-5">
                <h1 class="info-title">Biệt thự A8 Xanh Villas</h1>
                <p>Công trình Biệt thự A8 Xanh Villas được thiết kế không gian mở để chủ nhân có thể hòa mình vào thiên nhiên sân vườn một cách nhiều nhất có thể. Đặc biệt, chủ nhân đã chọn thiết kế
                    <a href="{{ route('customer.project.detail', 1) }}">Cửa gấp trượt</a> để mở rộng tối đa diện tích không gian phía trong nhà. Dòng nhôm RUM độc quyền của Glasshouse mang đến cho căn biệt thự ngoại thất sang trọng, hiện đại.
                </p>
                <h4 class="info-heading"><strong> Địa chỉ: </strong>Biệt thự được xây dựng tại phân khu A8 Khu đô thị Xanh Villas</h4>
                <h4 class="info-heading"><strong> Khách hàng:</strong></h4>
                <h4 class="info-heading"><strong> Danh mục: </strong>Biệt Thự</h4>
                <button class="btn btn-primary">Công trình trước</button>
                <button class="btn btn-primary">Công trình sau</button>
            </div>
            <div class="col-md-7">
                <img src="{{ asset('customer/images/img-project/BT-A8-XanhVilla/IMG_20200610_111344.jpg') }}" alt="">
                <img src="{{ asset('customer/images/img-project/BT-A8-XanhVilla/IMG_4632.JPG') }}" alt="">
                <img src="{{ asset('customer/images/img-project/BT-A8-XanhVilla/IMG_4634.JPG') }}" alt="">
                <img src="{{ asset('customer/images/img-project/BT-A8-XanhVilla/IMG_4636.JPG') }}" alt="">
                <img src="{{ asset('customer/images/img-project/BT-A8-XanhVilla/IMG_4643.JPG') }}" alt="">
            </div>
            <h2 style="width: 100%;padding-bottom: 30px;">Công trình khác</h2>
            <div class="col-md-4">
                <img src="{{ asset('customer/images/img-project/BT-97-VuonTung/97-98 Vuon Tung Eco Park.png') }}" class="image" alt="">
                <div class="info">
                    <div class="text">
                        <a href="{{ route('customer.project.detail', 1) }}">
                            <h4>Biệt thự Vườn Tùng EcoPark</h4>
                            <p>Hà Nội</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('customer/images/img-project/golf-TamDao/a20-1.jpg') }}" class="image" alt="">
                <div class="info">
                    <div class="text">
                        <a href="{{ route('customer.project.detail', 1) }}">
                            <h4>Khách sạn A20 Tam Đảo</h4>
                            <p>Tam Đảo</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('customer/images/img-project/BT-BacNinh/z3039917879059_750d76c94606631a31a7fb9d687faad6.jpg') }}" class="image" alt="">
                <div class="info">
                    <div class="text">
                        <a href="{{ route('customer.project.detail', 1) }}">
                            <h4>Biệt thự Bắc Ninh</h4>
                            <p>Bắc Ninh</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

