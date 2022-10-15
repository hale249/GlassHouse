@extends('customer.layouts.app')

@section('title', 'Liên hệ')

@section('css')
    <link rel="stylesheet" href="{{ asset('customer/css/style-cart.css') }}">
@endsection

@section('content')
    <div class="title">
        <h1>Thanh toán</h1>
        <div class="link" style="z-index: 2;">
            <a href="{{ route('customer.product.index') }}">Sản phẩm</a> &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;
            <a href="{{ route('customer.cart.index') }}"><strong>Thanh toán</strong></a>
        </div>
    </div>

    <div class="text-center">
        <h1>Cảm ơn bạn đã thanh toán</h1>
        <h3 style="padding-bottom: 30px; text-align: center">Sau 5 giây hệ thống sẽ tự động trở về trang chủ</h3>
        <button class="btn btn-primary text-center" style="margin-bottom:30px; text-align: center">
            <a href="{{ route('customer.home.index') }}" class="text-center">Trở về trang chủ</a>
        </button>
    </div>
@endsection
