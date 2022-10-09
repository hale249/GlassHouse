@extends('admin.layouts.app')

@section('title', 'Quản lý khách hàng')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Quản lý khách hàng
                    </h4>
                </div>
            </div>

            <div class="mt-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td><strong>Tên</strong></td>
                                <td><strong>Email</strong></td>
                                <td><strong>Sô điện thoại</strong></td>
                                <td><strong>Taọ lúc</strong></td>
                                <td><strong>Hành động</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->phone_number }}</td>
                                <td>{{ $customer->created_at }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Hanh dong">
                                        <a href="{{ route('admin.customer.edit', $customer->id) }}" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('admin.customer.show_form_change_password', $customer->id) }}" data-toggle="tooltip" data-placement="top" title="Change Password" class="btn btn-warning btn-sm text-white"><i class="fas fa-unlock"></i></a>
                                        <a href="{{ route('admin.customer.destroy', $customer->id) }}"
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
                    {{ $customers->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
