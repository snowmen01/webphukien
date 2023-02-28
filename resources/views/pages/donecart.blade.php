@extends('welcome')
@section('content')
<div class="checkout-successfull">
    <div class="checkout-successfull-icon">
        <img src="https://canifa.com/assets/images/checkout-successfull.svg" alt="">
    </div>
    <h1>Đặt hàng thành công</h1>
    <p>
    Đơn hàng
    <span style="color: rgb(99, 177, 188); text-decoration: underline;"><?php echo Session::get('shipping_code') ?></span>
    đang được chúng tôi xử lý. <br>Cảm ơn bạn đã mua sắm tại Kippy.
  </p> 
  <div class="button">
    <a href="{{url('/')}}">Quay lại trang chủ</a>
</div>
</div>
<style>
    .checkout-successfull h1 {
    font-weight: 700;
    font-size: 24px;
    line-height: 29px;
    color: #63b1bc;
    margin: 55px 0 16px;
}
    .checkout-successfull h1 {
    color: #333f48;
    font-weight: 400;
    font-size: 36px;
    line-height: 54px;
    margin-bottom: 4px;
    margin-top: 40px;
}
.checkout-successfull .button {
    margin-top: 36px;
}
.checkout-successfull {
    text-align: center;
    padding: 140px 0;
    font-weight: 500;
    font-size: 18px;
    line-height: 24px;
}
p {
    margin-top: 0;
    margin-bottom: 15px;
}
.checkout-successfull {
font-weight: 400;
font-size: 14px;
line-height: 24px;
padding-top: 50px;
}
.checkout-successfull .button a {
    display: inline-block;
    color: #333f48;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 14px;
    line-height: 24px;
    border: 1px solid #d2d1d4;
    padding: 12px 40px;
    text-align: center;
}
a {
    text-decoration: none;
}
</style>
@endsection