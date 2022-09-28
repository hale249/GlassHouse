@extends('customer.layouts.app')

@section('title', 'Giới thiệu')

@section('css')
    <link rel="stylesheet" href="{{ asset('customer/css/style-introduct.css') }}">
@endsection

@section('content')
    <div class="title">
        <h1>Giới thiệu</h1>
        <div class="link" style="z-index: 2;">
            <a href="{{ route('customer.home.index') }}">Trang chủ</a> &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;
            <a href="{{ route('customer.intro.index') }}"><strong>Giới thiệu </strong></a>
        </div>
    </div>
    <div class="text-about">
        <div class="container">
            <div class="row">
                <div class="company-name"> Glasshouse</div>
                <div class="paragraph-description">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <h3 class="title-para">Lịch sử hình thành</h3>
                                <p>Được thành lập năm 2009, hoạt động trong lĩnh vực sản xuất, hoàn thiện cửa vách nhôm
                                    kính thương hiệu Đức. Với đam mê và đội ngũ nhân viên năng động, nhiều chuyên môn,
                                    Glasshouse đã khẳng định được chất lượng dòng sản phẩm
                                    tinh tế, sắc nét trên phân khúc cao cấp. Hiện nay, Chúng tôi là đối tác chiến lược
                                    của Roto Frank tại khu vực Đông Nam Á.</p>
                            </div>
                            <div class="col-4">
                                <h3 class="title-para">Tầm nhìn</h3>
                                <p>
                                    Với định hướng phát triển bền vững, Glasshouse luôn hướng tới những giải pháp tốt
                                    nhất, góp phần nâng tầm chất lượng cuộc sống, hiện đại hóa kiến trúc đô thị nhằm đáp
                                    ứng mọi nhu cầu dù là khắt khe nhất của khách hàng. Với mục tiêu phấn đấu đến năm
                                    2020
                                    trở thành một trong những công ty tiên phong về tư vấn thiết kế và thi công các hạng
                                    mục trong ngành kiến trúc nhôm kính, nỗ lực đóng góp vào "sự nghiệp công nghiệp hóa
                                    - hiện đại hóa đất nước".
                                </p>
                            </div>
                            <div class="col-4">
                                <h3 class="title-para">Sứ mệnh</h3>
                                <p>
                                    - Đối với khách hàng: Glasshouse mang trên mình sứ mệnh trở thành nhà cung cấp giải
                                    pháp tổng thể cho các công trình nhôm kính hàng đầu ở Việt Nam. Vì thế mà Glasshouse
                                    luôn không ngừng cải tiến, nâng cao chất lượng sản phẩm, dịch vụ qua từng chặng
                                    đường
                                    phát triển với phương châm hoạt động "chất lượng tạo uy tín". <br> - Đối với xã hội:
                                    Glasshouse luôn gắn lợi ích của doanh nghiệp với lợi ích chung của xã hội, góp phần
                                    bảo vệ môi
                                    trường.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-quote">
                    <div class="container">
                        <div class="row">

                            <div class="col-6 image-quote">
                                <img src="{{ asset('customer/images/img-introduct-roto.jpg') }}" alt="">
                            </div>
                            <div class="col-6 quote">
                                <p><i>“Tôi luôn mong muốn sáng tạo ra những sản phẩm chất lượng, bền vững với thời gian
                                        và thẩm mỹ theo tiêu chuẩn Châu Âu cho khách hàng của mình.”</i> - ông Nguyễn
                                    Đức Hiếu</p>
                                <span class="sub-quote">
                                    <span><a href="{{ route('customer.home.index') }}" style="color: #0183F1;">Glasshouse</a> </span> luôn là sự lựa chọn đầu tiên khi khách hàng có yêu cầu lắp đặt cửa nhôm, kín cao cấp cho không gian sống của
                                mình, vì chúng tôi luôn lắng nghe, quan sát nhu cầu của khách hàng dưới góc nhìn của một người đồng hành. Những thiết kế của Glasshouse thực sự mang những dấu ấn riêng chứ không dừng lại ở sự tương đồng.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="history">
                <h3>Lịch sử hình thành</h3>
                <div class="image-history">
                    <img src="{{ asset('customer/images/img-history.png') }}" alt="">
                </div>
            </div>
            <div class="history">
                <h3>Cơ cấu tổ chức</h3>
                <div class="image-history">
                    <img src="{{ asset('customer/images/SDTC.png') }}" alt="">
                </div>
            </div>
            <div class="history">
                <h3>Quy trình sản xuất
                </h3>
                <div class="image-history">
                    <img src="{{ asset('customer/images/QTSX.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
