@extends('admin.layouts.app')

@section('title', 'Danh mục sản phẩm')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Giỏ hàng
                    </h4>
                </div>
            </div>

            <form action="" method="GET" class="form-inline mt-2">
                <div class="form-group">
                    <input type="text" name="name" value="{{ request()->get('name') }}" class="form-control" placeholder="Nhập tên...">
                </div>
                <button type="submit" class="btn btn-primary btn-same-select ml-2">Tìm kiếm</button>
            </form>

            <div class="mt-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <td><strong>Tên khách hàng</strong></td>
                            <td><strong>Số điện thoại</strong></td>
{{--                            <td><strong>Số lượng</strong></td>--}}
                            <td><strong>Tổng tiền</strong></td>
                            <td><strong>Trạng thái</strong></td>
                            <td><strong>Tạo lúc</strong></td>
                            <td style="width: 210px;"><strong>Hành động</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($carts as $cart)
                            <tr>
                                <td>{{ $cart->customer->name ?? '' }}</td>
                                <td>
                                    {{ $cart->customer->phone_number ?? '' }}
                                </td>
{{--                                <td>{{ $cart->quantity ?? 1 }}</td>--}}
                                <td>{{ $cart->total }}</td>
                                <td>{{ $cart->status }}</td>
                                <td>{{ $cart->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.cart.show', $cart->id) }}" data-toggle="tooltip" data-placement="top" title="Show" class="btn btn-success btn-sm"><i class="fas fa-info-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $carts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
