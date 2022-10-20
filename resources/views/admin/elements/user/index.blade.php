@extends('admin.layouts.app')

@section('title', 'Quản lý người dùng')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Quản lý người dùng
                    </h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm"><i
                            class="fas fa-plus"></i> Tạo mới</a>
                </div>
            </div>

            <div class="mt-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <td><strong>Tên</strong></td>
                            <td><strong>Email</strong></td>
                            <td><strong>Taọ lúc</strong></td>
                            <td><strong>Hành động</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.users.show_form_change_password', $user->id) }}"
                                       data-toggle="tooltip" data-placement="top" title="Change Password"
                                       class="btn btn-warning btn-sm text-white"><i class="fas fa-unlock"></i></a>
                                    <a href="{{ route('admin.users.edit', $user->id) }}" data-toggle="tooltip"
                                       data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="{{ route('admin.users.destroy', $user->id) }}"
                                       data-trans-button-cancel="Hủy"
                                       data-trans-button-confirm="Xóa"
                                       data-trans-title="Chắc chắn bạn muốn xóa không?"
                                       class="btn btn-danger js-confirm-delete btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
