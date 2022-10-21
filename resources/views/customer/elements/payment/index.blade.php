@extends('customer.layouts.app')

@section('title', 'Liên hệ')

@section('css')
    <link rel="stylesheet" href="{{ asset('customer/css/style-cart.css') }}">
@endsection

@section('content')
    <div class="title">
        <h1>Thanh toán</h1>
        <div class="link" style="z-index: 2;">
            <a href="{{ route('customer.product.index') }}">Sản phẩm</a> &nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;
            <a href="{{ route('customer.cart.index') }}"><strong>Thanh toán</strong></a>
        </div>
    </div>
    <div class="shopping-cart" id="shopping-cart">
        <div class="cart-address">
            <div class="tax">
                <div class="color-gradient">
                </div>
                <div class="color-gradient-2">
                </div>
                <div class="color-gradient-3">
                </div>
                <div class="color-gradient-4">
                </div>
                <div class="main-address">
                    <div class="title-address">
                        <i class="fa fa-map-marker"></i> Địa chỉ nhận hàng
                    </div>
                    <div class="columns-labels">
                        <label class="product-details"> Thông tin</label>
                        <label class="address column-mobile">Địa chỉ</label>
                        <label class="product-removal column-mobile">Thao tác</label>
                    </div>
                    <div class="product">
                        <div class="product-details">
                            <div class="product-title">Glasshouse</div>
                            <p class="product-description">(+84) 912345678</p>
                        </div>
                        <div class="address">
                            <div class="product-description">Số 242 Cổ Bi, Gia Lâm, Hà Nội.</div>
                        </div>
                        <div class="product-removal center-input ">
                            <a href="#change__address" class="window__change" style="color: #c66; font-weight: 800;"> Thay đổi</a>
                        </div>
                    </div>
                    <div id="change__address">
                        <div class="form__address" id="form__address">
                            <h3 class="title__change__add">Địa chỉ của tôi</h3>
                            <div class="info__address">
                                <input type="radio" name="" id=""> <span><strong> Glasshouse</strong> | (+84) 912345678</span>
                                <a href="#change__address" style="float: right;color:#0183F1" onclick="change__address()">Cập nhật</a>
                                <p class="add__info">242 <br>Xã Cổ Bi, Huyện Gia Lâm, Hà Nội</p>
                                <p class="add__arrive">Địa chỉ lấy hàng</p>

                                <p class="add__address">
                                    <a href="#change__address" onclick="add__address()"><i class="fa fa-plus"></i> Thêm địa chỉ mới</a>
                                </p>
                            </div>
                            <div class="button__confirm">
                                <a href="" class="confirm">Xác nhận</a>
                                <a href="#" class="close__btn">Hủy</a>
                            </div>
                        </div>
                        <div class="form__change" id="form__change">
                            <h3 class="title__change__add">Cập nhật địa chỉ</h3>
                            <div class="fill-info">
                                <input type="text" name="" id="" placeholder="Họ và tên" style="width:45%;margin-right: 47px;">
                                <input type="text" name="" id="" placeholder="Số điện thoại" style="width:45%">
                                <input type="text" name="" id="" placeholder="Tỉnh/ Thành phố, Quận/Huyện, Phường/Xã">
                                <input type="text" name="" id="" placeholder="Địa chỉ cụ thể" style="height: 100px;">
                                <span class="check__address">Nhà riêng</span> <span class="check__address">Công trình xây dựng</span>
                            </div>
                            <div class="button__confirm">
                                <a href="" class="confirm">Xác nhận</a>
                                <a href="#change__address" class="cancel" onclick="cancel__change__address()">Trở lại </a>
                            </div>
                        </div>
                        <div class="form__add__address" id="form__add__address">
                            <h3 class="title__change__add">Địa chỉ mới</h3>
                            <div class="fill-info">
                                <input type="text" name="" id="" placeholder="Họ và tên" style="width:45%;margin-right: 47px;">
                                <input type="text" name="" id="" placeholder="Số điện thoại" style="width:45%">
                                <input type="text" name="" id="" placeholder="Tỉnh/ Thành phố, Quận/Huyện, Phường/Xã">
                                <input type="text" name="" id="" placeholder="Địa chỉ cụ thể" style="height: 100px;">
                                <p>Loại địa chỉ: </p>
                                <span class="check__address">Nhà riêng</span> <span class="check__address">Công trình xây dựng</span>
                            </div>
                            <div class="button__confirm">
                                <a href="" class="confirm">Xác nhận</a>
                                <a href="#change__address" class="cancel" onclick="cancel__add__address()">Trở lại</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" column-labels ">
            <label class="product-image " style="text-align: center; ">Sản phẩm</label>
            <label class="product-details ">Tên sản phẩm</label>
            <label class="product-type ">Phân loại hàng</label>
            <label class="product-price ">Giá</label>
            <label class="product-quantity ">Số lượng</label>
            <label class="product-line-price ">Tổng tiền</label>
        </div>


        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $productIdKey=>$detail)
                @php $total += ($detail['price'] ?? 0) * ($detail['quantity']?? 1) @endphp
                <div class="product">
                    <div class="product-image">
                        <img src="{{ $detail['image'] }}">
                    </div>
                    <div class="product-details">
                        <div class="product-title">{{ $detail['name'] ?? '' }}</div>
                        <p class="product-description product-content">{{ $detail['description_short'] ?? '' }}</p>
                    </div>
                    <div class="product-type ">
                        <div class="product-title ">Loại nhôm: <strong> {{ $detail['aluminum'] ?? '' }}</strong></div>
                        <p class="product-description ">Màu sắc: <strong>{{ $detail['color_name'] ?? '' }}</strong></p>
                        <p class="product-description ">Phụ kiện: <strong>{{ $detail['accessory'] ?? '' }}</strong></p>
                        <p class="product-description ">Loại kính: <strong>{{ $detail['glass_type'] ?? '' }}</strong></p>
                    </div>
                    <div class="product-price">{{ $detail['price'] ?? 0 }}</div>
                    <div class="product-quantity center-input ">
                        <input type="number" value="{{ $detail['quantity'] ?? 1 }}" min="1">
                    </div>
                    <div class="product-line-price price">{{ $detail['total'] ?? 0 }}</div>
                </div>
            @endforeach
        @else
            Giỏ hàng trống
        @endif

        <div class="totals ">
            <div class="totals-item ">
                <label>Thuế (10%)</label>
                <div class="totals-value " id="cart-tax ">
                    @if(!empty(session('cart')))
                        {{ $total / 10 }}
                    @else
                        0
                    @endif
                </div>
            </div>
            <div class="totals-item ">
                <label>Vận chuyển</label>
                <div class="totals-value " id="cart-shipping ">
                    @if(!empty(session('cart')))
                        100000
                    @else
                        0
                    @endif
                </div>
            </div>
            <div class="totals-item totals-item-total ">
                <label>Tổng tiền</label>
                <div class="totals-value " id="cart-total ">
                    @if(!empty(session('cart')))
                        {{  $total  +  $total / 10 + 100000 }}
                    @else
                        0
                    @endif
                </div>
            </div>
        </div>
        <div class="choose-banking ">

        </div>
        @if(!empty(session('cart')))
        <button class="checkout "><a href="{{ route('customer.payment.success') }}">Thanh Toán</a></button>
        @endif
    </div>
    <div id="back-to-index">
        <div class="payment-content ">
            <img src="{{ asset('customer/images/tick-xanh.png') }}" alt=" ">
            <h1>Cảm ơn bạn đã thanh toán</h1>
            <h3 style="padding-bottom: 30px; ">Sau 5 giây hệ thống sẽ tự động trở về trang chủ</h3>
            <button class="btn btn-primary " style="margin-bottom:30px " ><a href="{{ route('customer.home.index') }}">Trở về trang chủ</a></button>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>
    <script type="application/javascript">
        function someFunc() {
            payment();
            setTimeout(function() {
                window.location = "index.html ";
            }, 5000);
        }

            /* Set rates + misc */
            var taxRate = 500.000;
            var shippingRate = 200.000;
            var fadeTime = 300;


            /* Assign actions */
            $('.product-quantity input').change(function() {
            updateQuantity(this);
        });

            $('.product-removal button').click(function() {
            removeItem(this);
        });


            /* Recalculate cart */
            function recalculateCart() {
            var subtotal = 0;

            /* Sum up row totals */
            $('.product').each(function() {
            subtotal += parseFloat($(this).children('.product-line-price').text());
        });

            /* Calculate totals */
            var tax = subtotal * taxRate;
            var shipping = (subtotal > 0 ? shippingRate : 0);
            var total = subtotal + tax + shipping;

            /* Update totals display */
            $('.totals-value').fadeOut(fadeTime, function() {
            $('#cart-subtotal').html(subtotal.toFixed(2));
            $('#cart-tax').html(tax.toFixed(2));
            $('#cart-shipping').html(shipping.toFixed(2));
            $('#cart-total').html(total.toFixed(2));
            if (total == 0) {
            $('.checkout').fadeOut(fadeTime);
        } else {
            $('.checkout').fadeIn(fadeTime);
        }
            $('.totals-value').fadeIn(fadeTime);
        });
        }


            /* Update quantity */
            function updateQuantity(quantityInput) {
            /* Calculate line price */
            var productRow = $(quantityInput).parent().parent();
            var price = parseFloat(productRow.children('.product-price').text());
            var quantity = $(quantityInput).val();
            var linePrice = price * quantity;

            /* Update line price display and recalc cart totals */
            productRow.children('.product-line-price').each(function() {
            $(this).fadeOut(fadeTime, function() {
            $(this).text(linePrice.toFixed(2));
            recalculateCart();
            $(this).fadeIn(fadeTime);
        });
        });
        }


            /* Remove item from cart */
            function removeItem(removeButton) {
            /* Remove row from DOM and recalc cart total */
            var productRow = $(removeButton).parent().parent();
            productRow.slideUp(fadeTime, function() {
            productRow.remove();
            recalculateCart();
        });
        }

            function payment() {
            document.getElementById("shopping-cart ").style.display = "none ";
            document.getElementById("back-to-index ").style.display = "block "
        }

            function change__address() {
            document.getElementById("form__address").style.display = "none ";
            document.getElementById("form__change").style.display = "block "
        }

            function add__address() {
            document.getElementById("form__address").style.display = "none ";
            document.getElementById("form__add__address").style.display = "block "
        }

            function cancel__change__address() {
            document.getElementById("form__change").style.display = "none ";
            document.getElementById("form__address").style.display = "block "
        }

            function cancel__add__address() {
            document.getElementById("form__add__address").style.display = "none ";
            document.getElementById("form__address").style.display = "block "
        }

        function someFunc() {
            payment();
            setTimeout(function() {
                window.location = "index.html ";
            }, 5000);
        }

        $(document).ready(function() {
            $('a.window__change').click(function() {

                //lấy giá trị thuộc tính href - chính là phần tử "#change__add"
                var changeAddBox = $(this).attr('href');

                //cho hiện hộp đăng nhập trong 300ms
                $(changeAddBox).fadeIn("slow");

                // thêm phần tử id="over" vào sau body
                $('body').append('<div id="over"></div>');
                $('#over').fadeIn(300);
                return false;
            });

            // khi click đóng hộp thoại
            $(document).on('click', "a.close__btn, #over", function() {
                $('#over, #change__address').fadeOut(300, function() {
                    $('#over').remove();
                });
                return false;
            });

        });
    </script>
@endsection
