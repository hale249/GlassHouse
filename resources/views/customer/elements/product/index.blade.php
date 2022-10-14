@extends('customer.layouts.app')

@section('title', 'Sản phẩm')

@section('css')
    <link rel="stylesheet" href="{{ asset('customer/css/style-product.css') }}">
@endsection

@section('content')
    <div class="title">
        <h1>Sản phẩm</h1>
        <div class="link" style="z-index: 2;">
            <a href="{{ route('customer.home.index') }}">Trang chủ</a> &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;
            <a href="{{ route('customer.intro.index') }}"><strong>Sản phẩm</strong></a>
        </div>
    </div>

    <div class="app__container">
        <div class="grid">
            <div class="grid__row app_content">
                <div class="grid__column-2">
                    <nav class="category">
                        <h3 class="category__heading"><i class="fa fa-list"></i> Danh mục</h3>
                        <ul class="category-list">
                            <li class="categoty-item category-item--active">
                                <a href="" class="category-item__link">Cửa đi</a>
                                <ul class="category-sub-item">
                                    <li class="category-item">
                                        <a href="{{ route('customer.product.detail', 1) }}" class="category-item__link">Cửa đi một
                                            cánh</a>
                                    </li>
                                    <li class="category-item">
                                        <a href="{{ route('customer.product.detail', 1) }}" class="category-item__link">Cửa đi một
                                            cánh và Fix</a>
                                    </li>
                                    <li class="category-item">
                                        <a href="{{ route('customer.product.detail', 1) }}" class="category-item__link">Cửa đi nhiều cánh</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="categoty-item">
                                <a href="" class="category-item__link">Cửa sổ</a>
                                <ul class="category-sub-item">
                                    <li class="category-item">
                                        <a href="{{ route('customer.product.detail', 1) }}" class="category-item__link">Cửa sổ mở hất</a>
                                    </li>
                                    <li class="category-item">
                                        <a href="{{ route('customer.product.detail', 1) }}" class="category-item__link">Cửa sổ mở quay</a>
                                    </li>
                                    <li class="category-item">
                                        <a href="{{ route('customer.product.detail', 1) }}" class="category-item__link">Cửa sổ mở lùa</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="category-item">
                                <a href="{{ route('customer.product.detail', 1) }}" class="category-item__link">Cửa lùa</a>
                            </li>
                            <li class="category-item">
                                <a href="{{ route('customer.product.detail', 1) }}" class="category-item__link">Cửa xếp gấp</a>
                            </li>
                        </ul>

                    </nav>
                </div>
                <div class="grid__column-10">
                    <div class="home-filter">
                        <span class="home-filter__label">Sắp xếp theo</span>
                        <button class="home-filter__btn btn" style="background-color: #fff;">Phổ biến</button>
                        <button class="home-filter__btn btn btn-primary">Mới nhất</button>
                        <button class="home-filter__btn btn " style="background-color: #fff;">Bán chạy</button>

                        <div class="select-input ">
                            <span class="select-input__label ">Giá</span>
                            <i class="select-input_icon fa fa-angle-down "></i>
                            <ul class="select-input__list">
                                <li class="select-input__item">
                                    <a href="" class="select-input__link">Giá: Thấp đến cao</a>

                                </li>
                                <li class="select-input__item">
                                    <a href="" class="select-input__link">Giá: Cao đến thấp</a>
                                </li>
                            </ul>
                        </div>

                        <div class="home-filter__page ">
                            <span class="home-filter__page-num ">
                                <span class="home-filter__page-current ">1</span>/3
                            </span>

                            <div class="home-filter__page-control ">
                                <a href=" " class="home-filter__page-btn home-filter__page-btn--disabled "><i
                                        class="fa fa-angle-left "></i></a>
                            </div>
                            <div class="home-filter__page-control ">
                                <a href=" " class="home-filter__page-btn "><i class="fa fa-angle-right "></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="home-product">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 columns ">
                                    <a href="{{ route('customer.product.detail', 1) }}">
                                        <div class="product-img ">
                                            <img src="{{ asset('customer/images/img-product/CDMC/CDMC.png') }}" alt=" "
                                                 style="background-size: cover; ">
                                        </div>
                                        <div class="product-content ">
                                            <h4>Cửa đi mở quay một cánh</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 columns ">
                                    <a href="{{ route('customer.product.detail', 1) }}">
                                        <div class="product-img ">
                                            <img src="{{ asset('customer/images/img-product/CDNC/CDNC-3.png') }}" alt=" ">
                                        </div>
                                        <div class="product-content ">
                                            <h4>Cửa đi mở quay nhiều cánh</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 columns ">
                                    <a href="{{ route('customer.product.detail', 1) }}">
                                        <div class="product-img ">
                                            <img src="{{ asset('customer/images/img-product/CDMC-Fix/img-CDMC-Fix-1.jpg') }}"
                                                 alt=" ">
                                        </div>
                                        <div class="product-content ">
                                            <h4>Cửa đi một cánh và Fix</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 columns ">
                                    <a href="{{ route('customer.product.detail', 1) }}">
                                        <div class="product-img ">
                                            <img src="{{ asset('customer/images/img-product/CuanhomRoto/inowa.jpg') }}" alt=" ">
                                        </div>
                                        <div class="product-content ">
                                            <h4>Cửa trượt Patio Inowa</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 columns ">
                                    <a href="{{ route('customer.product.detail', 1) }}">
                                        <div class="product-img ">
                                            <img src="{{ asset('customer/images/img-product/CuanhomRoto/patiolift-2.jpg') }}"
                                                 alt=" ">
                                        </div>
                                        <div class="product-content ">
                                            <h4>Cửa nhấc trượt patio lift</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 columns ">
                                    <a href="{{ route('customer.product.detail', 1) }}">
                                        <div class="product-img ">
                                            <img src="{{ asset('customer/images/img-product/CuanhomRoto/lattruot.png') }}" alt=" ">
                                        </div>
                                        <div class="product-content ">
                                            <h4>Cửa lật trượt PATIO ALVERSA</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 columns ">
                                    <a href="{{ route('customer.product.detail', 1) }}">
                                        <div class="product-img ">
                                            <img src="{{ asset('customer/images/img-product/CuanhomRoto/gaptruot-2.jpg') }}"
                                                 alt=" ">
                                        </div>
                                        <div class="product-content ">
                                            <h4>Cửa gấp trượt PATIO FOLD</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 columns ">
                                    <a href="{{ route('customer.product.detail', 1) }}">
                                        <div class="product-img ">
                                            <img src="{{ asset('customer/images/img-product/CXG/CXG.jpg') }}" alt=" ">
                                        </div>
                                        <div class="product-content ">
                                            <h4>Cửa quay trượt</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 columns ">
                                    <a href="{{ route('customer.product.detail', 1) }}">
                                        <div class="product-img ">
                                            <img src="{{ asset('customer/images/img-product/CSMQ/CSMQ-1.jpg') }}" alt=" ">
                                        </div>
                                        <div class="product-content ">
                                            <h4>Cửa sổ mở quay</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 columns ">
                                    <a href="{{ route('customer.product.detail', 1) }}">
                                        <div class="product-img ">
                                            <img src="{{ asset('customer/images/img-product/CSMT/CST-4.png') }}" alt=" ">
                                        </div>
                                        <div class="product-content ">
                                            <h4>Cửa sổ trượt</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 columns ">
                                    <a href="{{ route('customer.product.detail', 1) }}">
                                        <div class="product-img ">
                                            <img src="{{ asset('customer/images/img-product/CSMH/CSMH-1.jpg') }}" alt=" ">
                                        </div>
                                        <div class="product-content ">
                                            <h4>Cửa sổ mở hất</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 columns ">
                                    <a href="{{ route('customer.product.detail', 1) }}">
                                        <div class="product-img ">
                                            <img src="{{ asset('customer/images/img-product/CXG/CXG.jpg') }}" alt=" ">
                                        </div>
                                        <div class="product-content ">
                                            <h4>Vách kính mặt dựng</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="pagination home-product__pagination">
            <li class="pagination-item">
                <a href="" class="pagination-item__link">
                    <i class="pagination-item_icon fa fa-angle-left"></i>
                </a>
            <li class="pagination-item pagination-item--active">
                <a href="" class="pagination-item__link">1</a>
            </li>
            <li class="pagination-item">
                <a href="" class="pagination-item__link">2</a>
            </li>
            <li class="pagination-item">
                <a href="" class="pagination-item__link">3</a>
            </li>
            <li class="pagination-item">
                <a href="" class="pagination-item__link">4</a>
            </li>
            <li class="pagination-item">
                <a href="" class="pagination-item__link">5</a>
            </li>
            <li class="pagination-item">
                <a href="" class="pagination-item__link">...</a>
            </li>
            <li class="pagination-item">
                <a href="" class="pagination-item__link">12</a>
            </li>
            <li class="pagination-item">
                <a href="" class="pagination-item__link">
                    <i class="pagination-item_icon fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
    </div>
@endsection

