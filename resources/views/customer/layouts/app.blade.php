<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Công ty Cổ phần Xây dựng và Thương mại Glasshouse</title>
    <!-- Style-Css -->
    <!--  Icon-Tab-Chrome -->
    <link rel="shortcut icon" href="{{ asset('customer/images/img-logo/logo-khong-nen-GH.png') }}" type="image/x-icon">
    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Libre Baskerville' rel='stylesheet'>
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/2/2.2.0/iconify.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    @yield('css')

    <script src="{{ asset('customer/function.js') }}"></script>
</head>

<body>
<div class="navbar">
    <div class="logo">
        <a href="{{'/'}}"><img src="{{ asset('customer/images/img-logo/logo.png') }}" width="250px"></a>
    </div>
    <nav>
        <ul id="nav" style="padding-top: 0px;">
            <li><a href="{{ route('customer.home.index') }}"><i class="fa fa-home" style="font-size: 18px;"> </i> Trang chủ</a></li>
            <li><a href="{{ route('customer.intro.index') }}">GIỚI THIỆU</a></li>
            <li>
                <a href="{{ route('customer.product.index') }}">SẢN PHẨM <i class="fa fa-angle-down"></i> </a>
                <ul class="subnav" style="border-radius: 5px;">
                   @foreach($prọductCategories as $category)
                        <li>
                            <a href="{{ route('customer.product.index', ['category_id' => $category->id]) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li><a href="#" style="color: #cf2e2e">sản phẩm ROTO <i class="fa fa-angle-down"></i></a>
                <ul class="subnav">
                    <li>
                        <a href="{{ route('customer.product.cuanhomroto') }}" style="color: #cf2e2e">Cửa nhôm Rotoi</a></li>
                    <li>
                        <a href="{{ route('customer.product.phukienroto') }}" style="color: #cf2e2e">Phụ kiện Roto</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('customer.project.index') }} ">CÔNG TRÌNH <i class="fa fa-angle-down "></i></a>
                <ul class="subnav ">
                    @if(!empty($projectCategories))
                        @foreach($projectCategories as $category)
                            <li><a href="{{ route('customer.project.index', ['categories_id' => $category->id]) }}">{{ $category->name }}</a></li>
                        @endforeach
                    @endif
                </ul>
            </li>
            <li><a href="{{ route('customer.contact.index') }} ">LIÊN HỆ</a></li>
{{--            <li><a href="hiring.html ">tuyển dụng</a></li>--}}
            <li>
                <a href="{{ route('customer.cart.index') }}" class="button-cart"><i class="fa fa-shopping-cart " style="font-size: 16px; "></i>
                @if(!empty(session('cart')))
                    {{ count(session('cart')) }}@endif
                </a>
            </li>
            <li>
                <a href="{{ route('customer.formLogin') }}"><i class="fa fa-user"></i></a>
            </li>
        </ul>
    </nav>
    <img src="{{asset('customer/images/img-logo/menu.png')}}" class="menu-icon" onclick="menutoggle() ">
</div>

@yield('slider');
@yield('content');
<!-- banner -->

<!------- footer --------->
@include('customer.includes.footer')

<div class="ring ">
    <a href="tel:+84981961668 ">
        <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show ">
            <div class="coccoc-alo-ph-circle "></div>
            <div class="coccoc-alo-ph-circle-fill "></div>
            <div class="coccoc-alo-ph-img-circle "></div>
        </div>
    </a>
</div>
<div class="chatbox-icon" onclick="showChatbox()" style="cursor: pointer; ">
    <img src="{{ asset('customer/images/img-logo/chat.png') }}" alt=" " style="border-radius: 50%;background-color: #fff; ">
</div>
<section class="avenue-messenger" id="chatbox">
    <div class="menu">
        <div class="button-close" onclick="endChatbox()">&#10005;</div>
    </div>
    <div class="agent-face">
        <div class="half">
            <img class="agent circle " src="{{asset("customer/images/img-logo/logo-nen-trang-GH.png")}}" width="60px " height="60px " alt="Glasshouse "></div>
    </div>
    <div class="chat">
        <div class="chat-title">
            <h1>Glasshouse</h1>
            <h2>Vui lòng chia sẻ mọi thắc mắc hoặc phản hồi của bạn.</h2>
        </div>
        <div class="messages">
            <div class="messages-content"></div>
        </div>
        <div class="message-box">
            <textarea type="text" class="message-input" placeholder="Nhập câu trả lời... "></textarea>
            <button type="submit" class="message-submit">Gửi</button>
        </div>
    </div>
</section>
@yield('js')
<script type="application/javascript">
    var $messages = $('.messages-content'),
        d, h, m,
        i = 0;

    $(window).load(function() {
        $messages.mCustomScrollbar();
        setTimeout(function() {
            fakeMessage();
        }, 100);
    });

    function updateScrollbar() {
        $messages.mCustomScrollbar("update").mCustomScrollbar('scrollTo', 'bottom', {
            scrollInertia: 10,
            timeout: 0
        });
    }

    function setDate() {
        d = new Date()
        if (m != d.getMinutes()) {
            m = d.getMinutes();
            $('<div class="timestamp">' + d.getHours() + ':' + m + '</div>').appendTo($('.message:last'));
            $('<div class="checkmark-sent-delivered">&check;</div>').appendTo($('.message:last'));
            $('<div class="checkmark-read">&check;</div>').appendTo($('.message:last'));
        }
    }

    function insertMessage() {
        msg = $('.message-input').val();
        if ($.trim(msg) == '') {
            return false;
        }
        $('<div class="message message-personal">' + msg + '</div>').appendTo($('.mCSB_container')).addClass('new');
        setDate();
        $('.message-input').val(null);
        updateScrollbar();
        setTimeout(function() {
            fakeMessage();
        }, 1000 + (Math.random() * 20) * 100);
    }

    $('.message-submit').click(function() {
        insertMessage();
    });

    $(window).on('keydown', function(e) {
        if (e.which == 13) {
            insertMessage();
            return false;
        }
    })

    var Fake = [
        'Chào bạn! Chúng tôi có thể giúp gì được cho bạn?',
        'Bạn muốn tham khảo dòng nhôm nào cho công trình của mình?',
        'Bạn muốn nhận báo giá hay không?',
        'Cảm ơn bạn đã góp ý với chúng tôi!',
        'Chúc bạn một ngày vui vẻ!'
    ]

    function fakeMessage() {
        if ($('.message-input').val() != '') {
            return false;
        }
        $('<div class="message loading new "><figure class="avatar"><img src="{{ asset('customer/images/img-logo/logo-nen-trang-GH.png') }}" /></figure><span></span></div>').appendTo($('.mCSB_container'));
        updateScrollbar();

        setTimeout(function() {
            $('.message.loading').remove();
            $('<div class="message new "><figure class="avatar"><img src="{{ asset('customer/images/img-logo/logo-nen-trang-GH.png') }}" /></figure>' + Fake[i] + '</div>').appendTo($('.mCSB_container')).addClass('new');
            setDate();
            updateScrollbar();
            i++;
        }, 1000 + (Math.random() * 20) * 100);

    }
    var MenuItems = document.getElementById("nav")

    MenuItems.style.maxHeight = "0px"

    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "300px"
        } else {
            MenuItems.style.maxHeight = "0px"
        }
    }

    function showChatbox() {
        var x = document.getElementById("chatbox");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

    function endChatbox() {
        var x = document.getElementById("chatbox");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none ";
        }
    }
</script>
</body>

</html>
