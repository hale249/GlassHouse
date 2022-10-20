<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css" integrity="sha512-6c4nX2tn5KbzeBJo9Ywpa0Gkt+mzCzJBrE1RB6fmpcsoN+b/w/euwIMuQKNyUoU/nToKN3a8SgNOtPrbW12fug==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="shortcut icon" href="{{ asset('customer/images/img-logo/logo-khong-nen-GH.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('customer/css/style-login.css') }}">
    <style></style>
</head>

<body>
<div class="container">
    <div class="form-container sign-up-container">
        <form action="{{ route('customer.register') }}" method="post">
            @csrf
            <h1>Đăng ký</h1>
            <span>hoặc đăng ký bằng tài khoản</span>
            <input type="text" name="name" placeholder="Họ tên" />
            <input type="text" name="phone_number" placeholder="Số điện thoại" />
            <input type="email" name="email" placeholder="Email" />
            <input type="password" name="password" placeholder="Mật khẩu" />
            <input type="text" name="address" placeholder="Địa chỉ" />
            <button type="submit">Đăng ký</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <img src="{{ asset('customer/images/img-logo/logoHD-GH.png') }}" alt="">
                <h1>Xin chào!</h1>
                <p>Để nhận nhiều thông tin hơn về sản phẩm của Glasshouse, Xin vui lòng đăng ký tài khoản cá nhân!</p>
                <a href="{{ route('customer.formLogin') }}" class="ghost">Đăng Nhập</a>
            </div>
        </div>
    </div>
</div>
<div class="forget__account" id="forget__account">
    <h3>Khôi phục khoản của bạn</h3>
    <p>Vui lòng nhập Gmail hoặc số điện thoại để khôi phục tài khoản của bạn</p>
    <input type="text" name="" id="username" placeholder="Gmail hoặc số điện thoại">
    <div class="button__forget__account">
        <button type="submit" class="btn-cancel " onclick="cancel__forget__account()">Hủy</button>
        <button type="submit" class="btn btn-primary ">Xác nhận</button>
    </div>
</div>
<h3 style="margin-top:30px">
    <a href="{{ route('customer.home.index') }} " class="back__index">Trang chủ <i class="fa fa-arrow-right "></i></a>
</h3>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
<script>
    function forget__account() {
        document.getElementById("container").style.display = "none";
        document.getElementById("forget__account").style.display = "block"
    }

    function cancel__forget__account() {
        document.getElementById("forget__account").style.display = "none";
        document.getElementById("container").style.display = "block"
    }
</script>
<script>
    $(document).ready(function() {
        $('a.forget__button').click(function() {

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
            $('#over, #forget__account').fadeOut(300, function() {
                $('#over').remove();
            });
            return false;
        });

    });
</script>
</body>

</html>
