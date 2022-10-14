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
            <div class="col-4">
                <div class="item-product">
                    <!-- portfolio item -->
                    <div class="portfolio-item portfolio-effect__item portfolio-item--eff4 ">

                        <img class="portfolio-item__image " src="{{ asset('customer/images/img-project/VP-Glasshouse/9f84563d1265d73b8e74.jpg') }}" alt="">

                        <div class="portfolio-item__info ">

                            <h3 class="portfolio-item__header ">Văn phòng Glasshouse</h3>

                            <div class="portfolio-item__links ">

                                <div class="portfolio-item__link-block ">

                                    <a class="portfolio-item__link " href="VP-Glasshouse.html" title="Xem thêm ">
                                        <i class="material-icons fa fa-link "></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-title"><a href="VP-Glasshouse.html">Văn phòng Glasshouse</a> </div>
                    <span class="project-description ">
                            <p> <strong>Địa chỉ: </strong>Nguyệt Quế 25-20, Vinhomes Riverside The Harmony</p>
                        </span>
                </div>
            </div>
            <div class="col-4 ">
                <div class="item-product ">
                    <!-- portfolio item -->
                    <div class="portfolio-item portfolio-effect__item portfolio-item--eff4 ">

                        <img class="portfolio-item__image " src="{{ asset('customer/images/img-project/BT-A8-XanhVilla/IMG_4648.JPG') }}" alt="">

                        <div class="portfolio-item__info ">

                            <h3 class="portfolio-item__header ">Biệt thự A8 Xanh Villas</h3>

                            <div class="portfolio-item__links ">

                                <div class="portfolio-item__link-block ">

                                    <a class="portfolio-item__link " href="project-BT-A8-XanhVilla.html" title="Xem thêm ">
                                        <i class="material-icons fa fa-link "></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-title "><a href="project-BT-A8-XanhVilla.html">Biệt thự A8 Xanh Villas</a></div>
                    <span class="project-description ">
                            <p> <strong>Địa chỉ: </strong>Hà Nội</p>
                        </span>
                </div>
            </div>
            <div class="col-4 ">
                <div class="item-product ">
                    <!-- portfolio item -->
                    <div class="portfolio-item portfolio-effect__item portfolio-item--eff4 ">

                        <img class="portfolio-item__image " src="{{ asset('customer/images/img-project/BT-BangLang-3/9b5b5db6c8e10dbf54f0.jpg') }}" alt="">

                        <div class="portfolio-item__info ">

                            <h3 class="portfolio-item__header ">Biệt thự Bằng Lăng 03</h3>

                            <div class="portfolio-item__links ">

                                <div class="portfolio-item__link-block ">

                                    <a class="portfolio-item__link " href="{{ route('customer.project.detail', 1) }}" title="Xem thêm ">
                                        <i class="material-icons fa fa-link "></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-title "><a href="{{ route('customer.project.detail', 1) }}">Biệt thự Bằng Lăng 03</a></div>
                    <span class="project-description ">
                            <p> <strong>Địa chỉ: </strong>Hà Nội</p>
                        </span>
                </div>
            </div>
            <div class="col-4 ">
                <div class="item-product ">
                    <!-- portfolio item -->
                    <div class="portfolio-item portfolio-effect__item portfolio-item--eff4 ">

                        <img class="portfolio-item__image " src="{{ asset('customer/images/img-project/BT-BT1-BacAnKhanh/IMG_20200610_100533.jpg') }}" alt="">

                        <div class="portfolio-item__info ">

                            <h3 class="portfolio-item__header ">Biệt thự BT1 Bắc An Khánh</h3>

                            <div class="portfolio-item__links ">

                                <div class="portfolio-item__link-block ">

                                    <a class="portfolio-item__link " href="{{ route('customer.project.detail', 1) }}" title="Xem thêm ">
                                        <i class="material-icons fa fa-link "></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-title "><a href="{{ route('customer.project.detail', 1) }}">Biệt thự BT1 Bắc An Khánh</a></div>
                    <span class="project-description ">
                            <p> <strong>Địa chỉ: </strong>Hà Nội</p>
                        </span>
                </div>
            </div>
            <div class="col-4 ">
                <div class="item-product ">
                    <!-- portfolio item -->
                    <div class="portfolio-item portfolio-effect__item portfolio-item--eff4 ">

                        <img class="portfolio-item__image " src="{{ asset('customer/images/img-project/D14-SanGolf-TamDao/IMG_4603.JPG') }}" alt="">

                        <div class="portfolio-item__info ">

                            <h3 class="portfolio-item__header ">Biệt thự D14 Sân Golf Tam Đảo</h3>

                            <div class="portfolio-item__links ">

                                <div class="portfolio-item__link-block ">

                                    <a class="portfolio-item__link " href="{{ route('customer.project.detail', 1) }}" title="Xem thêm ">
                                        <i class="material-icons fa fa-link "></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-title ">
                        <a href="{{ route('customer.project.detail', 1) }}">Biệt thự D14 Sân Golf Tam Đảo</a>
                    </div>
                    <span class="project-description ">
                            <p> <strong>Địa chỉ: </strong>Tam Đảo</p>
                        </span>
                </div>
            </div>
            <div class="col-4 ">
                <div class="item-product ">
                    <!-- portfolio item -->
                    <div class="portfolio-item portfolio-effect__item portfolio-item--eff4 ">

                        <img class="portfolio-item__image " src="{{ asset('customer/images/img-project/BT-HaLong/z3043193896990_38ed2885ab8426d7b3b6544f16c499c4.jpg') }}" alt="">

                        <div class="portfolio-item__info ">

                            <h3 class="portfolio-item__header ">Biệt thự Hạ Long</h3>

                            <div class="portfolio-item__links ">

                                <div class="portfolio-item__link-block ">

                                    <a class="portfolio-item__link " href="{{ route('customer.project.detail', 1) }}" title="Xem thêm ">
                                        <i class="material-icons fa fa-link "></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-title ">
                        <a href="{{ route('customer.project.detail', 1) }}">Biệt thự Hạ Long</a>
                    </div>
                    <span class="project-description ">
                            <p> <strong>Địa chỉ: </strong>Quảng Ninh</p>
                        </span>
                </div>
            </div>
            <div class="col-4 ">
                <div class="item-product ">
                    <!-- portfolio item -->
                    <div class="portfolio-item portfolio-effect__item portfolio-item--eff4 ">

                        <img class="portfolio-item__image " src="{{ asset('customer/images/img-project/BT-HP-7-31-VH Riverside/IMG_20200612_094716.jpg') }}" alt="">

                        <div class="portfolio-item__info ">

                            <h3 class="portfolio-item__header ">Biệt thự Hoa Phượng - Khu đô thị Vinhomes Riverside</h3>

                            <div class="portfolio-item__links ">

                                <div class="portfolio-item__link-block ">

                                    <a class="portfolio-item__link " href="{{ route('customer.project.detail', 1) }}" title="Xem thêm ">
                                        <i class="material-icons fa fa-link "></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-title "><a href="{{ route('customer.project.detail', 1) }}">Biệt thự Hoa Phượng - Khu đô thị Vinhomes Riverside</a></div>
                    <span class="project-description ">
                            <p> <strong>Địa chỉ: </strong>Hà Nội</p>
                        </span>
                </div>
            </div>
            <div class="col-4 ">
                <div class="item-product ">
                    <!-- portfolio item -->
                    <div class="portfolio-item portfolio-effect__item portfolio-item--eff4 ">

                        <img class="portfolio-item__image " src="{{ asset('customer/images/img-project/BT-NgoaiGiaoDoan/IMG_20210926_101659.jpg') }}" alt="">

                        <div class="portfolio-item__info ">

                            <h3 class="portfolio-item__header ">Biệt thự Ngoại Giao Đoàn</h3>

                            <div class="portfolio-item__links ">

                                <div class="portfolio-item__link-block ">

                                    <a class="portfolio-item__link " href="{{ route('customer.project.detail', 1) }}" title="Xem thêm ">
                                        <i class="material-icons fa fa-link "></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-title "><a href="{{ route('customer.project.detail', 1) }}">Biệt thự Ngoại Giao Đoàn</a></div>
                    <span class="project-description ">
                            <p> <strong>Địa chỉ: </strong>Hà Nội</p>
                        </span>
                </div>
            </div>
            <div class="col-4 ">
                <div class="item-product ">
                    <!-- portfolio item -->
                    <div class="portfolio-item portfolio-effect__item portfolio-item--eff4 ">

                        <img class="portfolio-item__image " src="{{ asset('customer/images/img-project/BT-NgocTrai-19-05/1.jpg') }}" alt="">

                        <div class="portfolio-item__info ">

                            <h3 class="portfolio-item__header ">Biệt thự Ngọc Trai 19-05 Vinhomes Ocean Park</h3>

                            <div class="portfolio-item__links ">

                                <div class="portfolio-item__link-block ">

                                    <a class="portfolio-item__link " href="{{ route('customer.project.detail', 1) }}" title="Xem thêm ">
                                        <i class="material-icons fa fa-link "></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-title "><a href="{{ route('customer.project.detail', 1) }}">Biệt thự Ngọc Trai 19-05 Vinhomes Ocean Park</a></div>
                    <span class="project-description ">
                            <p> <strong>Địa chỉ: </strong>Hà Nội</p>
                        </span>
                </div>
            </div>
            <div class="col-4 ">
                <div class="item-product ">
                    <!-- portfolio item -->
                    <div class="portfolio-item portfolio-effect__item portfolio-item--eff4 ">

                        <img class="portfolio-item__image " src="{{ asset('customer/images/img-project/So1-Mimora-ThuyNguyen-EcoPark/IMG_4441.JPG') }}" alt="">

                        <div class="portfolio-item__info ">

                            <h3 class="portfolio-item__header ">Biệt thự Mimora Thủy Nguyên EcoPark</h3>

                            <div class="portfolio-item__links ">

                                <div class="portfolio-item__link-block ">

                                    <a class="portfolio-item__link " href="{{ route('customer.project.detail', 1) }}" title="Xem thêm ">
                                        <i class="material-icons fa fa-link "></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-title "><a href="{{ route('customer.project.detail', 1) }}">Biệt thự Mimora Thủy Nguyên EcoPark</a></div>
                    <span class="project-description ">
                            <p> <strong>Địa chỉ: </strong>Hà Nội</p>
                        </span>
                </div>
            </div>

            <div class="col-4">
                <div class="item-product">
                    <!-- portfolio item -->
                    <div class="portfolio-item portfolio-effect__item portfolio-item--eff4">

                        <img class="portfolio-item__image" src="{{ asset('customer/images/img-project/BT-TrichSai/BTTS-3.jpg') }}" alt="">

                        <div class="portfolio-item__info">

                            <h3 class="portfolio-item__header">Biệt thự Trích Sài</h3>

                            <div class="portfolio-item__links">

                                <div class="portfolio-item__link-block">

                                    <a class="portfolio-item__link" href="{{ route('customer.project.detail', 1) }}" title="Xem thêm">
                                        <i class="material-icons fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-title"><a href="{{ route('customer.project.detail', 1) }}">biệt thự trích sài</a> </div>
                    <span class="project-description">
                           <p> <strong>Địa chỉ: </strong>Tây Hồ - Hà Nội</p>
                        </span>
                </div>
            </div>
            <div class="col-4">
                <div class="item-product">
                    <!-- portfolio item -->
                    <div class="portfolio-item portfolio-effect__item portfolio-item--eff4 ">

                        <img class="portfolio-item__image " src="{{ asset('customer/images/img-project/BT-VietHung-2/DJI_0013.jpg') }}" alt="">

                        <div class="portfolio-item__info ">

                            <h3 class="portfolio-item__header ">Biệt thự BT8 Việt Hưng</h3>

                            <div class="portfolio-item__links ">

                                <div class="portfolio-item__link-block ">

                                    <a class="portfolio-item__link " href="{{ route('customer.project.detail', 1) }}" title="Xem thêm ">
                                        <i class="material-icons fa fa-link "></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-title"><a href="{{ route('customer.project.detail', 1) }}">Biệt thự BT8 Việt Hưng</a> </div>
                    <span class="project-description ">
                            <p> <strong>Địa chỉ: </strong>Khu đô thị Việt Hưng, Hà Nội</p>
                        </span>
                </div>
            </div>
            <div class="col-4">
                <div class="item-product">
                    <!-- portfolio item -->
                    <div class="portfolio-item portfolio-effect__item portfolio-item--eff4 ">

                        <img class="portfolio-item__image " src="{{ asset('customer/images/img-project/BT-62-VuonTung/2c154566ee9b2dc5748a.jpg') }}" alt="">

                        <div class="portfolio-item__info ">

                            <h3 class="portfolio-item__header ">Biệt thự 62 Vườn Tùng - EcoPark</h3>

                            <div class="portfolio-item__links ">

                                <div class="portfolio-item__link-block ">

                                    <a class="portfolio-item__link " href="{{ route('customer.project.detail', 1) }}" title="Xem thêm ">
                                        <i class="material-icons fa fa-link "></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-title"><a href="{{ route('customer.project.detail', 1) }}">Biệt thự 62 Vườn Tùng - EcoPark</a> </div>
                    <span class="project-description ">
                            <p> <strong>Địa chỉ: </strong>Khu đô thị EcoPark</p>
                        </span>
                </div>
            </div>

        </div>
    </div>
@endsection

