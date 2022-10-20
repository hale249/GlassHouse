@extends('admin.layouts.app')

@section('title', 'Danh mục sản phẩm')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        Danh sách liên hệ
                    </h4>
                </div>
            </div>

            <div class="mt-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <td><strong>Tên</strong></td>
                            <td><strong>SĐT</strong></td>
                            <td><strong>Email</strong></td>
                            <td><strong>Địa chỉ</strong></td>
                            <td><strong>Tạo lúc</strong></td>
                            <td><strong>Hành động</strong></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>
                                    <img src="{{ $contact->phone_number }}" width="100">
                                </td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->address }}</td>
                                <td>{{ $contact->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.contact.show', $contact->id) }}" data-toggle="tooltip"
                                       data-placement="top" title="Show" class="btn btn-success btn-sm"><i
                                            class="fas fa-info-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
