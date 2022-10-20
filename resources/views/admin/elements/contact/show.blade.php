@extends('admin.layouts.app')

@section('title', 'Danh mục - ' . $category->name)

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-0">
                Danh sách liên hệ
                <small class="text-muted">Liên hệ - {{ $contact->name }}</small>
            </h4>
            <hr>
            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="name">Tên</label>

                <div class="col-md-10">
                    {{ $contact->name }}
                </div><!--col-->
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="phone_number">Số điện thoại</label>

                <div class="col-md-10">
                    {{ $contact->phone_number }}
                </div><!--col-->
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="email">Email</label>

                <div class="col-md-10">
                    {{ $contact->email }}
                </div><!--col-->
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="address">Địa chỉ</label>

                <div class="col-md-10">
                    {{ $contact->address }}
                </div><!--col-->
            </div>

            <div class="form-group row">
                <label class="col-md-2 form-control-label" for="description">Nội dung</label>

                <div class="col-md-10">
                    @if($contact->content)
                        {{ $contact->content }}
                    @else
                        @lang('labels.general.empty')
                    @endif
                </div><!--col-->
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                </div>

                <div class="col text-right">
                    <a href="{{ route('admin.contact.index') }}" class="btn btn-success btn-sm">Thoát</a>
                </div>
            </div>
        </div>
    </div>
@endsection
