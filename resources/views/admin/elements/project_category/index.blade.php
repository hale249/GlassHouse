@extends('admin.layouts.app')

@section('title', 'Danh mục sản phẩm')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Danh mục dựa án
                    </h4>
                </div>
                <div class="col-4 text-right">
                        <a href="{{ route('admin.project_category.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tạo mới</a>
                </div>
            </div>

            <div class="mt-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <td><strong>Tên</strong></td>
                            <td><strong>Trạng thái</strong></td>
                            <td><strong>Tạo lúc</strong></td>
                            <td><strong>Hành động</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{!! $category->status_label !!}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Hanh dong">
                                        <a href="{{ route('admin.project_category.edit', $category->id) }}" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('admin.project_category.destroy', $category->id) }}"
                                           data-trans-button-cancel="Thoát"
                                           data-trans-button-confirm="Xoá"
                                           data-trans-title="Xoá khách hàng"
                                           class="btn btn-danger js-confirm-delete btn-sm"><i class="fas fa-trash"></i></a>

                                    </div>
                                </td>
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
    </div>
@endsection
