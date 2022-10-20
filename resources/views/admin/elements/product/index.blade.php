@extends('admin.layouts.app')

@section('title', 'Danh mục sản phẩm')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Danh mục sản phẩm
                    </h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.product.create') }}" class="btn btn-primary btn-sm"><i
                            class="fas fa-plus"></i>Tạo mới</a>
                </div>
            </div>

            <form action="" method="GET" class="form-inline mt-2">
                <div class="form-group">
                    <input type="text" name="name" value="{{ request()->get('name') }}" class="form-control"
                           placeholder="Nhập tên...">
                </div>

                <div class="form-group">
                    <select name="category_id" class="form-control ml-2">
                        <option value="">-- Chọn danh mục --</option>
                        @foreach($categories as $category)
                            <option @if(request()->get('category_id') == $category->id) selected
                                    @endif value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-same-select ml-2">Tìm kiếm</button>
            </form>

            <div class="mt-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <td><strong>Tên</strong></td>
                            <td><strong>Hình ảnh</strong></td>
                            <td><strong>Danh mục</strong></td>
                            <td><strong>Giá</strong></td>
                            <td><strong>Số lượng</strong></td>
                            <td><strong>Trạng thái</strong></td>
                            <td><strong>Người tạo</strong></td>
                            <td><strong>Tạo lúc</strong></td>
                            <td style="width: 210px;"><strong>Hành động</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>
                                    <img src="{{ $product->image }}" width="100">
                                </td>
                                <td>
                                    @if(!empty($product->category))
                                        <a href="{{ route('admin.category.show', $product->category_id) }}"
                                           target="_blank">{{ $product->category->name }}</a>
                                    @endif
                                </td>
                                <td>{{ $product->price_label }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{!! $product->status_label !!}</td>
                                <td>{{ $product->user->name }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.product.show', $product->id) }}" data-toggle="tooltip"
                                       data-placement="top" title="Show" class="btn btn-success btn-sm"><i
                                            class="fas fa-info-circle"></i></a>
                                    <a href="{{ route('admin.product.edit', $product->id) }}" data-toggle="tooltip"
                                       data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="{{  route('admin.product.destroy', $product->id) }}"
                                       data-trans-button-cancel="Hủy"
                                       data-trans-button-confirm="Xóa"
                                       data-trans-title="Chắc chắn bạn muốn xóa ?"
                                       class="btn btn-danger js-confirm-delete btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
