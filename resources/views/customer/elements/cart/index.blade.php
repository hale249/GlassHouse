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
            <label class="product-line-price">Tổng tiền</label>
            <label class="product-removal">Thao tác</label>
        </div>

        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $productIdKey=>$detail)
                @php $total += ($detail['price'] ?? 0) * ($detail['quantity']?? 1) @endphp
                <div class="product">
                    <div class="product-image">
                            <img src="{{ $detail['image'] }}">
                    </div>
                    <div class="product-details">
                        <div class="product-title">{{ $detail['name'] ?? '' }}</div>
                        <p class="product-description product-content">{{ $detail['description_short'] ?? '' }}</p>
                    </div>
                    <div class="product-type ">
                        <div class="product-title ">Loại nhôm: <strong> {{ $detail['aluminum'] ?? '' }}</strong></div>
                        <p class="product-description ">Màu sắc: <strong>{{ $detail['color_name'] ?? '' }}</strong></p>
                        <p class="product-description ">Phụ kiện: <strong>{{ $detail['accessory'] ?? '' }}</strong></p>
                        <p class="product-description ">Loại kính: <strong>{{ $detail['glass_type'] ?? '' }}</strong></p>
                    </div>
                    <div class="product-price">{{ $detail['price'] ?? 0 }}</div>
                    <div class="product-quantity center-input ">
                        <input type="number" value="{{ $detail['quantity'] ?? 1 }}" min="1">
                    </div>
                    <div class="product-line-price price">{{ $detail['total'] ?? 0 }}</div>
                    <div class="product-removal center-input ">
                        <button class="remove-product remove-cart" onclick="deleteToCartProduct({{$productIdKey}})">
                            <i class="fa fa-trash "></i>
                        </button>
                    </div>
                </div>
            @endforeach
        @else
            Giỏ hàng trống
        @endif


        <div class="totals">
            <div class="totals-item">
                <label>Thuế (10%)</label>
                <div class="totals-value" id="cart-tax">
                    @if(!empty(session('cart')))
                        {{ $total / 10 }}
                    @else
                        0
                    @endif
                </div>
            </div>
            <div class="totals-item">
                <label>Vận chuyển</label>
                <div class="totals-value" id="cart-shipping">
                    @if(!empty(session('cart')))
                        100000
                    @else
                        0
                    @endif
                </div>
            </div>
            <div class="totals-item totals-item-total">
                <label>Tổng tiền</label>
                <div class="totals-value" id="cart-total">
                    @if(!empty(session('cart')))
                        {{  $total  +  $total / 10 + 100000 }}
                    @else
                        0
                    @endif
                </div>
            </div>
        </div>

        @if(!empty(session('cart')))
        <button class="checkout"><a href="{{ route('customer.payment') }}">Thanh Toán</a></button>
        @endif
    </div>
@endsection
