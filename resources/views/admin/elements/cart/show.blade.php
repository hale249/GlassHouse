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
                            <td><strong>Trạng thái</strong></td>
                            <td><strong>Tạo lúc</strong></td>
                            <td><strong>Hành động</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <img src="{{ $category->image }}" width="100">
                                </td>
                                @can(\App\Helpers\PermissionConstant::PERMISSION_VIEW_LIST_ALL_CATEGORY)
                                    <td>{{ $category->user->name }}</td>
                                @endcan
                                <td>{!! $category->status_label !!}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{!! $category->action_buttons !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <a href="{{ route('admin.category.index') }}" class="btn btn-success btn-sm">Thoát</a>
                </div>

                <div class="col text-right">
                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary btn-sm">Chỉnh sửa</a>
                </div>
            </div>
        </div>
    </div>
@endsection
