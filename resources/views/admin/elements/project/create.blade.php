@extends('admin.layouts.app')

@section('title', 'Tạo mới')

@section('content')
    <div class="card">
        <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    Quản lý dự án
                    <small class="text-muted">Tạo mới</small>
                </h4>
                <hr>
                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="category_id">Danh mục</label>

                    <div class="col-md-10">
                        <select name="category_id" class="form-control" id="category_id" required>
                            <option value="">-- Chọn danh mục --</option>
                            @foreach($categories as $category)
                                <option @if(!empty(old('category_id')) && old('category_id') === $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="name">Tên</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Nhập tên..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="seo_text">SEO bài</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="seo_text" id="seo_text" placeholder="Nhập nội dung seo" rows="5">{{ old('seo_text') }}</textarea>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="description_short">Mô tả ngắn</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="description_short" id="description_short" placeholder="Nhập mô tả ngắn" rows="5">{{ old('description_short') }}</textarea>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="content-text">Nôi dung</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="content" id="content-text" placeholder="Nội dung" rows="10">{!! old('content') !!}</textarea>
                    </div><!--col-->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.project.index') }}" class="btn btn-danger btn-sm">Thoát</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">Tạo mới</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
