@extends('customer.layouts.app')

@section('title', 'Liên hệ')

@section('css')
    <link rel="stylesheet" href="{{ asset('customer/css/style-cart.css') }}">
@endsection

@section('content')
    <div class="title">
        <h1>Giỏ hàng</h1>
        <div class="link" style="z-index: 2;">
            <a href="{{ route('customer.home.index') }}">Trang chủ</a> &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;
            <a href="{{ route('customer.intro.index') }}"><strong>Giỏ hàng </strong></a>
        </div>
    </div>

    <div class="shopping-cart">
        <div class="column-labels">
            <label class="product-image" style="text-align: center;">Sản phẩm</label>
            <label class="product-details">Tên sản phẩm</label>
            <label class="product-type">Phân loại hàng</label>
            <label class="product-price">Giá</label>
            <label class="product-quantity">Số lượng</label>
            <label class="product-removal">Thao tác</label>
            <label class="product-line-price">Tổng tiền</label>
        </div>

        <div class="product">
            <div class="product-image">
                <img src="{{ asset('customer/images/img-product/CDMC/CDMC-MatCat-2.jpg') }}">
            </div>
            <div class="product-details">
                <div class="product-title">Cửa đi một cánh</div>
                <p class="product-description product-content">Phiên bản ngắt nhiệt của FN52W và FN52D nhằm nâng cao hiệu suất cách nhiệt với giá trị U là 2,4W / m2-K.</p>
            </div>
            <div class="product-type ">
                <div class="product-title ">Loại nhôm: <strong> Roto</strong></div>
                <p class="product-description ">Màu sắc: <strong>Ghi</strong></p>
                <p class="product-description ">Phụ kiện: <strong>Roto</strong></p>
                <p class="product-description ">Loại kính: <strong>Kính hộp</strong></p>
            </div>
            <div class="product-price">10.000.000</div>
            <div class="product-quantity center-input ">
                <input type="number" value="2" min="1">
            </div>
            <div class="product-removal center-input ">
                <button class="remove-product remove-cart">
                    <i class="fa fa-trash "></i>
                </button>
            </div>
            <div class="product-line-price price">20.000.000</div>
        </div>

        <div class="product ">
            <div class="product-image ">
                <img src="{{ asset('customer/images/img-product/CDMC-Fix/img-CDMC-Fix-1.jpg') }}">
            </div>
            <div class="product-details ">
                <div class="product-title ">Cửa đi một cánh kèm Fix</div>
                <p class="product-description product-content">Phiên bản ngắt nhiệt của FN52W và FN52D nhằm nâng cao hiệu suất cách nhiệt với giá trị U là 2,4W / m2-K.</p>
            </div>
            <div class="product-type ">
                <div class="product-title ">Loại nhôm: <strong> Roto</strong></div>
                <p class="product-description ">Màu sắc: <strong>Ghi</strong></p>
                <p class="product-description ">Phụ kiện: <strong>Roto</strong></p>
                <p class="product-description ">Loại kính: <strong>Kính hộp</strong></p>
            </div>
            <div class="product-price">10.000.000

            </div>
            <div class="product-quantity center-input ">
                <input type="number" value="1" min="1">
            </div>
            <div class="product-removal center-input ">
                <button class="remove-product remove-cart">
                    <i class="fa fa-trash "></i>
                </button>
            </div>
            <div class="product-line-price price-cart">10.000.000</div>
        </div>

        <div class="totals">
            <div class="totals-item">
                <label>Thuế (10%)</label>
                <div class="totals-value" id="cart-tax">3.000.000</div>
            </div>
            <div class="totals-item">
                <label>Vận chuyển</label>
                <div class="totals-value" id="cart-shipping">200.000</div>
            </div>
            <div class="totals-item totals-item-total">
                <label>Tổng tiền</label>
                <div class="totals-value" id="cart-total">33.200.000</div>
            </div>
        </div>

        <button class="checkout"><a href="{{ route('customer.payment') }}">Thanh Toán</a></button>

    </div>
@endsection
