@extends('customer.layouts.app')

@section('title', 'Sản phẩm')

@section('css')
    <link rel="stylesheet" href="{{ asset('customer/css/style-product-roto.css') }}">
@endsection

@section('content')

    <!-- single product details -->
    <div class="small-container single-product ">
        <div class="row ">
            <div class="col-2 ">
                <img src="{{ $product->image }}" width="100% " id="productImg ">
                <div class="small-img-row ">
                    @if(!empty($product->productImages))
                        @foreach($product->productImages as $productImage)
                            <div class="small-img-col ">
                                <img src="{{ $productImage->path }}" width="100% " class="small-img ">
                            </div>
                        @endforeach
                        @endif
                </div>
            </div>
            <div class="col-2 " id="form-1">
                <p>Sản phẩm / Cửa sổ </p>
                <h1>{{ $product->name }}</h1>
                <span class="product-id">{{ $product->category->name ?? '' }}</span>
                <div class="input-product">
                    <h3></h3>
                    <p style="text-align: justify;"
                       {!! $product->content !!}
                    </p>
                </div>

                <select class="select-detail" id="select-alu" required="required">
                    <option value="" disabled="disabled" selected="selected">Loại nhôm</option>
                    @foreach($product->productAluminums as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                <select class="select-detail" id="select-color" required="required">
                    <option value="" disabled="disabled" selected="selected">Màu sắc</option>
                    @foreach($product->productColors as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                <select class="select-detail " id="select-accesfa-stack" required="required">
                    <option value="" disabled="disabled" selected="selected">Phụ kiện</option>
                    @foreach($product->productAccessories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                <select class="select-detail " id="select-glass" required="required">
                    <option value="" disabled="disabled" selected="selected">Loại kính</option>
                    @foreach($product->productGlass as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                <input type="text" placeholder="Chiều dài" id="txtlenght">
                <input type="text" placeholder="Chiều rộng" id="txtwidth">
                <input type="number" placeholder="Số lượng" id="txtnumber" value=""><br>
                <!-- <a href="" class="btn " onclick="datatransfer()">Xác nhận</a> -->
                <button class="btn" onclick="datatransfer({{$product->price}})">Xác nhận</button>

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
                                <label for="" id="typeLabel"></label>
                            </td>
                        </tr>
                        <tr>
                            <td>Màu sắc</td>
                            <td><label for="" id="colorLabel"></label></td>
                        </tr>
                        <tr>
                            <td>Kích thước (m2)</td>
                            <td><label for="" id="sizeLabel"></label></td>
                        </tr>
                        <tr>
                            <td>Phụ kiện</td>
                            <td><label for="" id="accessLabel"></label></td>
                        </tr>
                        <tr>
                            <td>Kính</td>
                            <td> <label for="" id="glassLabel"></label></td>
                        </tr>
                        <tfoot>
                        <tr>
                            <td>Báo giá</td>
                            <td><label for="baogia" id="tongtienLabel"></label></td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="button"><a class="btn" onclick="addToCartProduct({{$product->id}})">Thêm vào giỏ hàng</a></div>
            </div>
        </div>
    </div>

    <div class="product-detail">
       {!! $product->content !!}
    </div>
    <div class="small-container ">
        <div class="row row-2 ">
            <h2>Sản phẩm liên quan</h2>
            <a href="{{ route('customer.product.index') }} ">Xem thêm <i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div>
    <!-- products -->
    <div class="small-container ">
        <div class="row ">
            @foreach($productRelates as $product)
                <div class="col-4 ">
                    <a href="{{ route('customer.product.detail', $product->id)  }}">
                        <img src="{{ $product->image }}">
                        <h4>{{ $product->name }}</h4>
                        <div class="rating ">
                        </div>
                        <p>Xem thêm <i class="fa fa-long-arrow-right"></i></p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
