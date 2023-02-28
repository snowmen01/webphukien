<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="{{asset('public/backend/css/login.css')}}">
</head>

<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <h2>Đăng Nhập</h2>
                    <style>
                        span{color:#fff; text-align: center}
                    </style>
                    <?php
                    $message = Session::get('message');
                    if($message)
                        echo '<span>'.$message.'</span>';
                        Session::put('message', null);
                    ?>
                    <form action="{{URL::to('/admin-dashboard')}}" method="post">
                        {{ csrf_field() }}
                        <div class="inputBox">
                            <input type="text" placeholder="Email" name="admin_email">
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Mật khẩu" name="admin_password">
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Đăng Nhập" name="login">
                        </div>
                        <p class="forget">Quên mật khẩu ? <a href="#">Bấm vào đây</a> </p>
                        <p class="forget">Chưa có tài khoản ? <a href="#">Đăng ký</a> </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>