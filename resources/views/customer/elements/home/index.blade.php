@extends('customer.layouts.app')

@section('title', 'Trang chủ')

@section('css')
    <link rel="stylesheet" href="{{ asset('customer/css/style-glasshouse.css') }}">
@endsection

@section('content')
    <div id="slider" class="carousel slide" data-ride="carousel">
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('customer/images/img-slide-banner-1.jpg') }}" alt=" " width="100% " height="500 ">
                <div class="slider-content">
                    <h3>glasshouse</h3>
                    <h5>
                        Đưa không gian Châu Âu đến với ngôi nhà của bạn
                    </h5>
                    <a class="button" href="{{ route('customer.product.index') }}">Xem thêm </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('customer/images/img-slide-banner-2.jpg') }}" alt=" " width="100% " height="500 ">
                <div class="slider-content">
                    <h3>glasshouse</h3>
                    <h5>
                        Đưa không gian Châu Âu đến với ngôi nhà của bạn
                    </h5>
                    <a class="button" href="{{ route('customer.product.index') }}">Xem Thêm</a>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#slider" data-slide="prev">
            <span class="carousel-control-prev-icon "></span>
        </a>
        <a class="carousel-control-next" href="#slider" data-slide="next">
            <span class="carousel-control-next-icon "></span>
        </a>
    </div>
    <div id="product">
        <div class="container">
            <div class="row">
                <div class="col-md-6 columns">
                    <div class="product-info">
                        <h3 style="text-align:center; ">Sản phẩm chủ lực</h3>
                        <p style="font-size: 16px; ">Các sản phẩm của Glasshouse được sản xuất trên dây chuyền thiết bị
                            hiện đại, công nghệ tiên tiến theo tiêu chuẩn Châu Âu, chuyên gia người Đức trực tiếp đào
                            tạo chuyển giao công nghệ tạo nên các ưu điểm vượt trội, đáp ứng tất cả
                            các nhu cầu khắt khe nhất của Qúy khách hàng.</p>
                        <a href="{{ route('customer.product.index') }}" class="button ">Xem Thêm </a>
                    </div>
                </div>

                <div class="col-md-3 columns ">
                    <a href="{{ route('customer.product.detail', 1) }}">
                        <div class="product-img ">
                            <img src="{{ asset('customer/images/img-product/CDMC/CDMC.png') }}" alt=" "
                                 style="background-size: cover; ">
                        </div>
                        <div class="product-content ">
                            <h4>Cửa đi mở quay một cánh</h4>
                            <hr>
                            <span>
                                Tại Glasshouse mẫu cửa đi 1 cánh được sản xuất và lắp đặt đảm bảo độ an toàn tuyệt đối. Cùng với hệ thống cách âm, cách nhiệt và độ kín cao, đây là loại cửa được nhiều gia đình, công ty lựa chọn lắp đặt văn phòng.
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 columns ">
                    <a href="{{ route('customer.product.detail', 1) }}">
                        <div class="product-img ">
                            <img src="{{ asset('customer/images/img-product/CDNC/CDNC-3.png') }}" alt=" ">
                        </div>
                        <div class="product-content ">
                            <h4>Cửa đi mở quay nhiều cánh</h4>
                            <hr>
                            <span>
                                Với công nghệ sản xuất tiên tiến sử dụng hệ nhôm Roto-i, mẫu cửa đi mở quay 2 cánh nhôm Roto-i có những ưu điểm vô cùng vượt bậc như: khả năng chống gió đập, chắn nước, cách nhiệt,….
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 columns ">
                    <a href="{{ route('customer.project.index') }}">
                        <div class="product-img ">
                            <img src="{{ asset('customer/images/img-product/CL/CL.jpg') }}" alt=" ">
                        </div>
                        <div class="product-content ">
                            <h4>Cửa trượt</h4>
                            <hr>
                            <span>
                                Xu hướng thiết kế nhà với những cánh cửa cao, đi kèm theo đó là hệ thống kính nhiều lớp tải trọng lớn đòi hỏi một hệ phụ kiện đặc biệt có sức chịu tải tốt và thanh nhôm profile có kết cấu vững chắc.
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 columns ">
                    <a href="{{ route('customer.product.detail', 1) }}">
                        <div class="product-img ">
                            <img src="{{ asset('customer/images/img-product/CXG/CXG.jpg') }}" alt=" ">
                        </div>
                        <div class="product-content ">
                            <h4>Cửa gấp trượt</h4>
                            <hr>
                            <span>
                                Với hệ thống cánh gấp linh hoạt về hai phía, cửa gấp trượt thay thế những bức tường nặng nề, đem khung cảnh thiên nhiên sống động thu gọn trong tầm mắt.
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 columns ">
                    <a href="{{ route('customer.product.detail', 1) }}">
                        <div class="product-img ">
                            <img src="{{ asset('customer/images/img-product/CSMQ/CSMQ-1.jpg') }}" alt=" ">
                        </div>
                        <div class="product-content ">
                            <h4>Cửa sổ mở quay</h4>
                            <hr>
                            <span>
                                Thế hệ cửa sổ mở quay có thiết kế thân thuộc, gần gũi với kiến trúc và phong cách sinh hoạt của người Việt. Ngôn ngữ thiết kế slim-frame dễ dàng phối hợp với nhiều phong cách nội thất khác nhau.
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 columns ">
                    <a href="{{ route('customer.product.detail', 1) }}">
                        <div class="product-img ">
                            <img src="{{ asset('customer/images/img-product/CSMT/CST-4.png') }}" alt=" ">
                        </div>
                        <div class="product-content ">
                            <h4>Cửa sổ trượt</h4>
                            <hr>
                            <span>
                                Hệ thống cửa lùa – loại cửa sổ nhôm kính được phát triển theo nhu cầu của thị trường Châu Á, với thiết kế tập trung vào độ cứng, độ kín khít, độ bền và tiết kiệm chi phí cho người sử dụng.
                            </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="about-us ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-6 ">
                    <h2 class="title-about ">
                        <p style="float: left; "> Về &nbsp;</p>
                        <p style="color: #0183F1; "> Glasshouse</p>
                    </h2>
                    <p class="content-about " style="color: #000; font-size: 16px
                                "> Được thành lập năm 2009, hoạt động trong lĩnh vực sản xuất, hoàn thiện cửa vách nhôm
                        kính thương hiệu Đức. Với đam mê và đội ngũ nhân viên năng động, nhiều chuyên môn, <a href=" ">
                            Glasshouse </a>đã khẳng định được chất lượng dòng
                        sản phẩm tinh tế, sắc nét trên phân khúc cao cấp. Hiện nay, với việc là nhà phân phối chính hãng
                        dòng nhôm Rotoi và phụ kiện Roto,chúng tôi đang là đối tác chiến lược của Roto Frank tại khu vực
                        Đông Nam Á.</p>
                    <a href="{{ route('customer.intro.index') }}" class="button ">Xem thêm </a>

                </div>
                <div class="col-md-4 ">
                    <img src="{{ asset('customer/images/img-product/img-project-1.jpg') }}" alt=" "
                         style="border: 10px solid #8ec6f7; ">
                    <div class="block-color ">
                        <p> Tư vấn <br> tận tình</p>
                    </div>
                    <img src="{{ asset('customer/images/img-project/img-project-index.jpg') }}" class="img-about-2 " alt=" ">
                    <div class="block-color-2 ">
                        <p>Sản phẩm chất lượng</p>
                    </div>
                    <div class="block-color-3 ">
                        <p> Đội ngũ <br> chuyên nghiệp</p>
                    </div>
                    <div class="block-color-4 ">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="project ">
        <h3 class="title " style="padding-top:30px; ">Công trình nổi bật</h3>
        <!-- cont inner start -->
        <div class="content-wrapper ">
            <div class="news-card ">
                <a href="{{ route('customer.project.index') }}" class="news-card__card-link "></a>
                <img src="{{ asset('customer/images/img-project/golf-TamDao/a20-1.jpg') }}" alt=" " class="news-card__image ">
                <div class="news-card__text-wrapper ">
                    <h2 class="news-card__title ">Khách sạn A20 Tam Đảo</h2>
                    <div class="news-card__post-date ">28/05/2019</div>
                    <div class="news-card__details-wrapper ">
                        <p class="news-card__excerpt ">Đơn vị sản xuất thi công lắp đặt hệ thống cửa nhôm kính, vòm và
                            vách kính: Công ty Cổ phần Thương mại và Xây dựng Glasshouse.&hellip;</p>
                        <a href="{{ route('customer.project.index') }}" class="news-card__read-more ">Xem thêm <i
                                class="fa fa-long-arrow-right "></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card ">
                <a href="{{ route('customer.project.index') }}" class="news-card__card-link "></a>
                <img src="{{ asset('customer/images/img-project/BT-TrichSai/BTTS-3.jpg') }}" alt=" " class="news-card__image ">
                <div class="news-card__text-wrapper ">
                    <h2 class="news-card__title ">Biệt thự Trích Sài</h2>
                    <div class="news-card__post-date ">15/03/2020</div>
                    <div class="news-card__details-wrapper ">
                        <p class="news-card__excerpt ">Đơn vị sản xuất thi công lắp đặt hệ thống cửa nhôm kính, vòm và
                            vách kính: Công ty Cổ phần Thương mại và Xây dựng Glasshouse.&hellip;</p>
                        <a href="{{ route('customer.project.index') }}" class="news-card__read-more ">Xem thêm <i
                                class="fa fa-long-arrow-right "></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card ">
                <a href="{{ route('customer.project.index') }}" class="news-card__card-link "></a>
                <img src="{{ asset('customer/images/img-project/BT-VietHung/BTVH-1.jpg') }}" alt=" " class="news-card__image ">
                <div class="news-card__text-wrapper ">
                    <h2 class="news-card__title ">Biệt thự Việt Hưng</h2>
                    <div class="news-card__post-date ">20/06/2019</div>
                    <div class="news-card__details-wrapper ">
                        <p class="news-card__excerpt ">Đơn vị sản xuất thi công lắp đặt hệ thống cửa nhôm kính, vòm và
                            vách kính: Công ty Cổ phần Thương mại và Xây dựng Glasshouse.&hellip;</p>
                        <a href="{{ route('customer.project.index') }}" class="news-card__read-more ">Xem thêm <i
                                class="fa fa-long-arrow-right "></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card ">
                <a href="{{ route('customer.project.index') }}" class="news-card__card-link "></a>
                <img src="{{ asset('customer/images/img-project/TTH-LungLuong-NBChau/LungLuong-5.jpg') }}" alt=" "
                     class="news-card__image ">
                <div class="news-card__text-wrapper ">
                    <h2 class="news-card__title ">Trường tiểu học Lũng Luông - Ngô Bảo Châu </h2>
                    <div class="news-card__post-date ">10/03/2017</div>
                    <div class="news-card__details-wrapper ">
                        <p class="news-card__excerpt ">Đơn vị sản xuất thi công lắp đặt hệ thống cửa nhôm kính, vòm và
                            vách kính: Công ty Cổ phần Thương mại và Xây dựng Glasshouse.&hellip;</p>
                        <a href="{{ route('customer.project.index') }}" class="news-card__read-more ">Xem thêm <i
                                class="fa fa-long-arrow-right "></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card ">
                <a href="{{ route('customer.project.index') }}" class="news-card__card-link "></a>
                <img src="{{ asset('customer/images/img-project/DA-KienHung/DA-KH-1.jpg') }}" alt=" " class="news-card__image ">
                <div class="news-card__text-wrapper ">
                    <h2 class="news-card__title ">Khu nhà ở thấp tầng phường Kiến Hưng</h2>
                    <div class="news-card__post-date ">15/04/2019</div>
                    <div class="news-card__details-wrapper ">
                        <p class="news-card__excerpt ">Đơn vị sản xuất thi công lắp đặt hệ thống cửa nhôm kính, vòm và
                            vách kính: Công ty Cổ phần Thương mại và Xây dựng Glasshouse.&hellip;</p>
                        <a href="{{ route('customer.project.index') }}" class="news-card__read-more ">Xem thêm <i
                                class="fa fa-long-arrow-right "></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card ">
                <a href="{{ route('customer.project.index') }}" class="news-card__card-link "></a>
                <img src="{{ asset('customer/images/img-project/Diamon-Plaza/Diamond-Plaza-1.jpg') }}" alt=" "
                     class="news-card__image ">
                <div class="news-card__text-wrapper ">
                    <h2 class="news-card__title ">Tòa văn phòng Diamond Plaza</h2>
                    <div class="news-card__post-date ">20/08/2017</div>
                    <div class="news-card__details-wrapper ">
                        <p class="news-card__excerpt ">Đơn vị sản xuất thi công lắp đặt hệ thống cửa nhôm kính, vòm và
                            vách kính: Công ty Cổ phần Thương mại và Xây dựng Glasshouse.&hellip;</p>
                        <a href="{{ route('customer.project.index') }}" class="news-card__read-more ">Xem thêm <i
                                class="fa fa-long-arrow-right "></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="slider-review " class="carousel slide " data-ride="carousel ">
        <!-- The slideshow -->
        <div class="carousel-inner " style="width: 100%; ">
            <div class="carousel-item active ">
                <div class="review-content ">
                    <i class="fa fa-quote-left "></i>
                    <p>
                        Tôi hài lòng với dịch vụ của GlassHouse, làm việc rất chuyên nghiệp, <br> trong thời gian ngắn
                        và mang tính chuyên môn cao.
                    </p>
                    <h3 style="font-weight:600 ">Mr.A </h3>
                    <h3>Chủ biệt thự Trích Sài - Hồ Tây</h3>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="review-content ">
                    <i class="fa fa-quote-left "></i>
                    <p>
                        Sản phẩm Glasshouse mang lại một cái nhìn hoàn toàn mới cho căn nhà của tôi, <br> đội ngũ tư vấn
                        nhiệt tình. Tôi rất hài lòng!
                    </p>
                    <h3 style="font-weight:600 ">Mr.T </h3>
                    <h3>Chủ biệt thự Vinhomes Ocean Park</h3>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev " href="#slider-review " data-slide="prev ">
            <span class="carousel-control-prev-icon "></span>
        </a>
        <a class="carousel-control-next " href="#slider-review " data-slide="next ">
            <span class="carousel-control-next-icon "></span>
        </a>
    </div>
    <div id="partner">
        <h2 class="title" style="margin-top: 30px">Đối tác tiêu biểu</h2>
        <div class="partner-logo-1">
            <img src="{{ asset('customer/images/img-logo/logo-roto.png') }}" alt=" ">
            <img src="{{ asset('customer/images/img-logo/logo-press-metan.png') }}" alt=" ">
            <img src="{{ asset('customer/images/img-logo/logo-schuco.png') }}" alt=" ">
            <img src="{{ asset('customer/images/img-logo/logo-reynaers.png') }}" alt=" ">
            <img src="{{ asset('customer/images/img-logo/logo-xingfa.png') }}" alt=" ">
        </div>
        <div class="partner-logo-2 ">
            <img src="{{ asset('customer/images/img-logo/logo-asiaglass.png') }}" alt=" ">
            <img src="{{ asset('customer/images/img-logo/logo-halonglass.png') }}" alt=" ">
            <img src="{{ asset('customer/images/img-logo/logo-vinaconex.png') }}" alt=" ">
            <img src="{{ asset('customer/images/img-logo/logo-dowcorning.png') }}" alt=" ">
            <img src="{{ asset('customer/images/img-logo/logo-shinetsu.png') }}" alt=" ">
        </div>
    </div>
@endsection
