@extends('customer.layouts.app')

@section('title', 'Sản phẩm')

@section('css')
    <link rel="stylesheet" href="{{ asset('customer/css/style-project.css') }}">
@endsection

@section('content')
    <div class="title">
        <h1>Biệt thự A8 Xanh Villas</h1>
        <div class="link" style="z-index: 2;">
            <a href="{{ route('customer.project.index') }}">Công trình</a> &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;
            <a href="{{ route('customer.intro.index') }}"><strong>Biệt thự A8 Xanh Villas</strong></a>
        </div>
    </div>

    <div class="container main-content">
        <div class="row">
            <div class="col-md-5">
                <h1 class="info-title">{{ $project->name }}</h1>
                <p>
                    {!! $project->content !!}
                </p>
                <h4 class="info-heading"><strong> Địa chỉ: </strong>{{ $project->address }}</h4>
                <h4 class="info-heading"><strong> Khách hàng:</strong></h4>
                <h4 class="info-heading"><strong> Danh mục: </strong>{{ $project->category->name ?? '' }}</h4>
                @if($firstId)
                    <button class="btn btn-primary"><a href="{{ route('customer.project.detail', $firstId) }}">Công trình trước</a></button>
                @endif
                @if($nextId)
                    <button class="btn btn-primary"><a href="{{ route('customer.project.detail', $nextId) }}">Công trình sau</a></button>
                @endif
            </div>
            <div class="col-md-7">
                @if(!empty($project->projectImages))
                    @foreach($project->projectImages as $projectImage)
                <img src="{{  $projectImage->path }}" alt="">
                    @endforeach
                @endif
            </div>
            @if(!empty($listProjects))
                <h2 style="width: 100%;padding-bottom: 30px;">Công trình khác</h2>

            @foreach($listProjects as $project)
                    <div class="col-md-4">
                        <img src="{{ $project->image }}" class="image" alt="">
                        <div class="info">
                            <div class="text">
                                <a href="{{ route('customer.project.detail', $project->id) }}">
                                    <h4>{{ $project->name }}</h4>
                                    <p>{{ $project->address }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection

