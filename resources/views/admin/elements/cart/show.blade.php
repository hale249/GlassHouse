@extends('admin.layouts.app')

@section('title', 'Chi tiết đơn hàng ')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-0">
                Quản lý đơn hàng
                <small class="text-muted">Đơn hàng</small>
            </h4>
            <hr>
            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="name">Tên khác hàng</label>

                <div class="col-md-10">
                    {{ $cart->customer->name ?? '' }}
                </div><!--col-->
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="name">Số điện thoại</label>

                <div class="col-md-10">
                    {{ $cart->customer->phone_number ?? '' }}
                </div><!--col-->
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="name">Trạng thái</label>

                <div class="col-md-10">
                    {{ $cart->status ?? '' }}
                </div><!--col-->
            </div>
            <div class="mt-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <td><strong>Tên</strong></td>
                            <td><strong>Hình ảnh</strong></td>
                            <td><strong>Số lượng</strong></td>
                            <td><strong>Màu sắc</strong></td>
                            <td><strong>Loại nhôm</strong></td>
                            <td><strong>Phụ kiện</strong></td>
                            <td><strong>Loại kính</strong></td>
                            <td><strong>Chiều dài</strong></td>
                            <td><strong>Chiều rộng</strong></td>
                            <td><strong>Giá tiền</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($cartDetails))
                        @foreach($cartDetails as $detail)
                            <tr>
                                <td>{{ $detail->product->name ?? '' }}</td>
                                <td>
                                    <img src="{{ $detail->product->image ?? '' }}" width="100">
                                </td>
                                    <td>{{ $detail->quantity }}</td>
                                <td>{{ $detail->color->name ?? '' }}</td>
                                <td>{{ $detail->accessory->name ?? '' }}</td>
                                <td>{{ $detail->glassType->name ?? '' }}</td>
                                <td>{{ $detail->aluminums->name ?? '' }}</td>
                                <td>{{ $detail->product_longs }}</td>
                                <td>{{ $detail->product_width }}</td>
                                <td>{{ $detail->price }}</td>
                            </tr>
                        @endforeach
                        @else
                            Không có thông tin đơn hàng
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <a href="{{ route('admin.cart.index') }}" class="btn btn-success btn-sm">Thoát</a>
                </div>

                {{--<div class="col text-right">
                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary btn-sm">Chỉnh sửa</a>
                </div>--}}
            </div>
        </div>
    </div>
@endsection
