@extends('admin.layouts.app')

@section('title', 'Danh mục sản phẩm')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Quản lý dự án
                    </h4>
                </div>
                <div class="col-4 text-right">
                        <a href="{{ route('admin.project.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tạo mới</a>
                </div>
            </div>

            <form action="" method="GET" class="form-inline mt-2">
                <div class="form-group">
                    <input type="text" name="name" value="{{ request()->get('name') }}" class="form-control" placeholder="Nhập tên...">
                </div>

                <div class="form-group">
                    <select name="category_id" class="form-control ml-2">
                        <option value="">-- Chọn danh mục --</option>
                        @foreach($categories as $category)
                            <option @if(request()->get('category_id') == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
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
                            <td><strong>Trạng thái</strong></td>
                            <td><strong>Người tạo</strong></td>
                            <td><strong>Tạo lúc</strong></td>
                            <td style="width: 210px;"><strong>Hành động</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->name }}</td>
                                <td> <img src="{{ $project->image }}" width="100"></td>
                                <td>
                                    @if(!empty($project->category))
                                        <a href="{{ route('admin.project_category.edit', $project->category_id) }}" target="_blank">{{ $project->category->name ?? '' }}</a>
                                    @endif
                                </td>
                                <td>{!! $project->active_label !!}</td>
                                <td>{{ $project->user->name }}</td>
                                <td>{{ $project->created_at }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Hanh dong">
                                        <a href="{{ route('admin.project.edit', $project->id) }}" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('admin.project.destroy', $project->id) }}"
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
                    {{ $projects->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
