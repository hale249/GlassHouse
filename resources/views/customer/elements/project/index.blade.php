@extends('customer.layouts.app')

@section('title', 'Sản phẩm')

@section('css')
    <link rel="stylesheet" href="{{ asset('customer/css/style-project.css') }}">
@endsection

@section('content')
    <div class="title">
        <h1>Biệt thự</h1>
        <div class="link" style="z-index: 2;">
            <a href="{{ route('customer.home.index') }}">Công trình</a> &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;
            <a href="{{ route('customer.project.index') }}"><strong>Biệt thự</strong></a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @if($projects->isNotEmpty())
                @foreach($projects as $project)
            <div class="col-4">
                <div class="item-product">
                    <!-- portfolio item -->
                    <div class="portfolio-item portfolio-effect__item portfolio-item--eff4 ">

                        <img class="portfolio-item__image " src="{{ asset('customer/images/img-project/VP-Glasshouse/9f84563d1265d73b8e74.jpg') }}" alt="">

                        <div class="portfolio-item__info ">

                            <h3 class="portfolio-item__header ">{{ $project->name }}</h3>

                            <div class="portfolio-item__links ">

                                <div class="portfolio-item__link-block ">

                                    <a class="portfolio-item__link " href="{{ route('customer.project.detail', $project->id) }}" title="Xem thêm ">
                                        <i class="material-icons fa fa-link "></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-title"><a href="{{ route('customer.project.detail', 1) }}">{{ $project->name }}</a> </div>
                    <span class="project-description ">
                            <p> <strong>Địa chỉ: </strong>{{ $project->address ?? '' }}</p>
                        </span>
                </div>
            </div>
                @endforeach
            @endif

        </div>
    </div>
@endsection

