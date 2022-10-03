@extends('customer.layouts.app')

@section('title', 'Sản phẩm')

@section('css')
    <link rel="stylesheet" href="{{ asset('customer/css/style-product-roto.css') }}">
@endsection

@section('content')
    <div class="title">
        <h1>Sản phẩm</h1>
        <div class="link" style="z-index: 2;">
            <a href="{{ route('customer.home.index') }}">Trang chủ</a> &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;
            <a href="{{ route('customer.intro.index') }}"><strong>Chi tiết sản phẩm</strong></a>
        </div>
    </div>

    <!-- single product details -->
    <div class="small-container single-product ">
        <div class="row ">
            <div class="col-2 ">
                <img src="{{ asset('customer/images/img-product/CSMH/CSMH-1.jpg') }}" width="100% " id="productImg ">
                <div class="small-img-row ">
                    <div class="small-img-col ">
                        <img src="{{ asset('customer/images/img-product/CSMH/CSMH-3.jpg') }}" width="100% " class="small-img ">
                    </div>
                    <div class="small-img-col ">
                        <img src="{{ asset('customer/images/img-product/CSMH/CSMH-4.jpg') }}" width="100% " class="small-img ">
                    </div>
                    <div class="small-img-col ">
                        <img src="{{ asset('customer/images/img-product/CSMH/CSMH-5.jpg') }}" width="100% " class="small-img ">
                    </div>
                    <div class="small-img-col ">
                        <img src="{{ asset('customer/images/img-product/CSMH/csm_Line_cranked_72f084644b-470x470.jpg') }}" width="100% " class="small-img ">
                    </div>
                </div>
            </div>
            <div class="col-2 " id="form-1">
                <p>Sản phẩm / Cửa sổ </p>
                <h1>Cửa sổ mở hất</h1>
                <span class="product-id">CSMH</span>
                <div class="input-product">
                    <h3></h3>
                    <p style="text-align: justify;">Cửa sổ mở hất có thể phù hợp với mọi vị trí lắp đặt trong kiến trúc một công trình. Không phân biệt cửa sổ phòng ngủ hay ban công, cửa ra sân vườn,…đều có thể lắp đặt cửa. Đặc biệt theo các chuyên gia thì nét riêng của loại cửa này
                        là có thể giảm trọng tải công trình hiệu quả. Vì thế nếu một công trình cần giảm tải trọng để đảm bảo an toàn chất lượng thì lắp đặt cửa là rất lý tưởng.
                    </p>
                </div>

                <select class="select-detail" id="select-alu " required="required">
                    <option value="" disabled="disabled" selected="selected">Loại nhôm</option>
                    <option value="Roto">Roto</option>
                    <option value="Xingfa">Xingfa</option>
                    <option value="RUM">RUM</option>
                </select>
                <select class="select-detail" id="select-color" required="required">
                    <option value="" disabled="disabled" selected="selected">Màu sắc</option>
                    <option value="Ghi">Ghi</option>
                    <option value="Đen">Đen</option>
                    <option value="Trắng">Trắng</option>
                    <option value="Nâu Cafe">Nâu Cafe</option>
                    <option value="Vân Gỗ">Đen</option>
                </select>
                <select class="select-detail " id="select-accesfa-stack" required="required">
                    <option value="" disabled="disabled" selected="selected">Phụ kiện</option>
                    <option value="Roto">Roto</option>
                    <option value="Kinlong">Kinlong</option>
                </select>
                <select class="select-detail " id="select-glass" required="required">
                    <option value="" disabled="disabled" selected="selected">Loại kính</option>
                    <option value="Hộp">Hộp</option>
                    <option value="Dán">Dán an toàn</option>
                    <option value="Cường Lực">Cường lực</option>
                </select>
                <input type="text" placeholder="Chiều dài" id="txtlenght">
                <input type="text" placeholder="Chiều rộng" id="txtwidth">
                <input type="number" placeholder="Số lượng" id="txtnumber" value=""><br>
                <!-- <a href="" class="btn " onclick="datatransfer()">Xác nhận</a> -->
                <button class="btn" onclick="datatransfer()">Xác nhận</button>

            </div>
            <div class="col-2 " id="form-2">
                <p>Sản phẩm / Cửa sổ</p>
                <h1>Cửa sổ mở hất</h1>
                <div class="receipt-box">
                    <h3 style="font-size: 18px;">Thông tin sản phẩm</h3>
                    <table class="table">
                        <tr>
                            <td>Loại nhôm</td>
                            <td>
                                <label for="" id="type"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>Màu sắc</td>
                            <td><label for="" id="color"></label></td>
                        </tr>
                        <tr>
                            <td>Kích thước (m2)</td>
                            <td><label for="" id="size"></label></td>
                        </tr>
                        <tr>
                            <td>Phụ kiện</td>
                            <td><label for="" id="access"></label></td>
                        </tr>
                        <tr>
                            <td>Kính</td>
                            <td> <label for="" id="glass"></label></td>
                        </tr>
                        <tfoot>
                        <tr>
                            <td>Báo giá</td>
                            <td><label for="baogia" id="tongtien"></label></td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="button"><a class="btn" href="#">Thêm vào giỏ hàng</a></div>
            </div>
        </div>
    </div>

    <div class="product-detail">
        <h3 class="title-detail">
            Mô tả sản phẩm:
        </h3>
        <p class="description-detail">
            ■ Đặc điểm chính: <br> - Phù hợp với mọi vị trí, kiến trúc <br> - Giảm trọng tải hiệu quả <br> - Không gây ảnh hưởng tới diện tích công trình <br> - Khi mở có thể mở hất góc to, nhỏ tùy ý, tối đa 45 độ<br>
        </p>
        <div class="image-detail">
            <img src="{{ asset('customer/iamges/img-product/CSMH/CSMH-1.jpg') }}" alt="">
        </div>
        <h3 class="small-title-detail">
            Một số kiểu cửa thông dụng
        </h3>
        <div class="image-detail">

        </div>
        <h3 class="small-title-detail">
            Thông số kỹ thuật
        </h3>
        <div class="image-detail">

        </div>
    </div>
    <div class="small-container ">
        <div class="row row-2 ">
            <h2>Sản phẩm liên quan</h2>
            <a href="../html/product.html ">Xem thêm <i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div>
    <!-- products -->
    <div class="small-container ">
        <div class="row ">
            <div class="col-4 ">
                <a href="product-CD1C-fix.html">
                    <img src="{{ asset('customer/images/img-product/CDMC-Fix/img-CDMC-Fix-1.jpg') }}">
                    <h4>Cửa đi một cánh và Fix</h4>
                    <div class="rating ">
                    </div>
                    <p>Xem thêm <i class="fa fa-long-arrow-right"></i></p>
                </a>
            </div>
            <div class="col-4 ">
                <a href="{{ route('customer.product.detail', 1) }}">
                    <img src="{{ asset('customer/images/img-product/CDMT/146708746457.jpg') }}">
                    <h4>Cửa lùa</h4>
                    <div class="rating ">
                    </div>
                    <p>Xem thêm <i class="fa fa-long-arrow-right"></i></p>
                </a>
            </div>
            <div class="col-4 ">
                <a href="{{ route('customer.product.detail', 1) }}">
                    <img src="{{ asset('customer/images/img-product/CDNC/img-CDNC-1.jpg') }}">
                    <h4>Cửa đi nhiều cánh</h4>
                    <div class="rating ">
                    </div>
                    <p>Xem thêm <i class="fa fa-long-arrow-right"></i></p>
                </a>
            </div>

            <div class="col-4 ">
                <a href="{{ route('customer.product.detail', 1) }}">
                    <img src="{{ asset('customer/images/img-product/CDMC/img-product-CDMC-1.jpg') }}">
                    <h4>Cửa đi một cánh</h4>
                    <div class="rating ">
                    </div>
                    <p>Xem thêm <i class="fa fa-long-arrow-right"></i></p>
                </a>
            </div>
        </div>
    </div>
@endsection

