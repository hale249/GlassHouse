@extends('admin.layouts.app')

@section('title', 'Tạo mới')

@section('content')
    <div class="card">
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    Quản lý sản phẩm
                    <small class="text-muted">Tạo mới</small>
                </h4>
                <hr>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="name">Tên</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Nhập tên..." maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>

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
                    <label class="col-md-2 form-control-label" for="quantity">Số lượng</label>

                    <div class="col-md-10">
                        <input class="form-control" type="number" step="1" name="quantity" id="quantity" value="{{ old('quantity') }}" placeholder="Nhập số lượng" maxlength="191" required="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="price">Giá</label>

                    <div class="col-md-10">
                        <input class="form-control" type="number" step="0.01" name="price" id="price" value="{{ old('price') }}" placeholder="Nhập giá" maxlength="191" required="">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="image">Hình ảnh chính</label>

                    <div class="col-md-10">
                        <input type="file" name="image" id="image">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="images">Hình ảnh mở rộng</label>

                    <div class="col-md-10">
                        <input type="file" name="images[]" id="images" multiple="multiple">
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="description">Mô tả ngắn</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="description_short" id="description" placeholder="Nhập mô tả ngắn" rows="5">{{ old('description') }}</textarea>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="content-text">Nôi dung</label>

                    <div class="col-md-10">
                        <textarea class="form-control" name="description" id="content-text" placeholder="Nội dung" rows="10">{!! old('content') !!}</textarea>
                    </div><!--col-->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="status">Trạng thái</label>

                    <div class="col-md-10">
                        <input type="checkbox" data-on="Show" value="1" data-off="Hidden" name="status" id="status" checked data-toggle="toggle" data-onstyle="primary">
                    </div><!--col-->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.product.index') }}" class="btn btn-danger btn-sm">Thoát</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">Tạo mới</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $(".color_select2_choose").select2({
            tags: true,
            tokenSeparators: [',']
        });
    </script>
@endsection
