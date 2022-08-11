@extends('admin.layouts.app')

@section('title', __('labels.pages.admin.product_item.title.edit'))

@section('content')
    <div class="card">
        <form action="{{ route('admin.product_item.update_token', $item->id) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-0">
                    @lang('labels.pages.admin.product_item.title.management')
                    <small class="text-muted">@lang('labels.pages.admin.product_item.title.edit')</small>
                </h4>
                <hr>
                <div class="form-group row">
                    <label class="col-md-2 form-control-label" for="token">@lang('labels.pages.admin.product_item.form.token')</label>

                    <div class="col-md-10">
                        <input class="form-control" type="text" name="token" id="token" value="{{ $item->token }}" placeholder="{{ __('labels.pages.admin.product_item.form.placeholder.token') }}" maxlength="191" required="" autofocus="">
                    </div><!--col-->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('admin.product_item.index', $item->product_id) }}" class="btn btn-danger btn-sm">@lang('labels.general.cancel')</a>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-success btn-sm">@lang('labels.pages.admin.product_item.form.edit_submit')</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
