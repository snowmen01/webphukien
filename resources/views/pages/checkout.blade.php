@extends('welcome') @section('content')
<?php $total = 0; $totalproduct = 0; ?>
<main class="site-main">
    @if(Session::get('customer_id')==true)
    <form action="{{url('/save-customer-order')}}" method="post">
    @csrf
    <input type="hidden" name="total" value="{{$total}}">
    @endif
    <div class="checkout-container">
        <div class="checkout-container--left">
            <div class="checkout-form">
                @if (Session::get('customer_id')==false)
                <div class="checkout-page-title">
                    <h1 class="title">Thanh toán</h1>
                    <div class="des">
                        <b><a href="{{url('/signin')}}">Đăng Nhập</a></b> để tích điểm K-point và nhận nhiều ưu đãi hơn
                    </div>
                </div>
                @endif
                <div class="checkout-step checkout-shipping">
                    <div class="checkout-step-title">1. Thông tin giao hàng</div>
                    <div class="checkout-step-content">
                        <div class="form-group">
                            <label>Họ tên</label>
                            @if(Session::get('customer_id')==true)
                            <input type="text" name="firstname" class="form-control" value="{{$data->customer_name}}">
                            @else
                            <input type="text" name="firstname" class="form-control" value="">
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            @if(Session::get('customer_id')==true)
                            <input type="text" name="telephone" class="form-control" value="{{$data->customer_phone}}">
                            @else
                            <input type="text" name="telephone" class="form-control" value="">
                            @endif
                        </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Tỉnh / Thành phố</label>
                                        <select name="city" id="city" class="form-control choose city">
                                            <option></option> 
                                            @foreach ($thanhpho as $key => $row)
                                            <option value="{{$row->matp}}">
                                                {{$row->name_tp}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Quận / Huyện</label>
                                        <select name="province" id="province" class="form-control choose province">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Phường / Xã</label>
                                        <select name="wards" id="wards" class="form-control wards">
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <div class="form-group"><label>Nhập địa chỉ</label> <input type="text" name="streetName" class="form-control"></div>
                        <div class="form-group"><label>Ghi chú cho đơn hàng <small>(tuỳ chọn)</small></label> <textarea name="notes" class="form-control"></textarea></div>
                        <div class="form-checkbox"><input type="checkbox" name="" id="checkbox1" value=""> <label for="checkbox1"><span>Tạo tài khoản để mua hàng nhanh hơn</span></label></div>
                    </div>
                </div>
                <div class="checkout-step checkout-coupon">
                    <!---->
                    <div class="checkout-step-title">Mã giảm giá</div>
                    <div class="checkout-step-content">
                        <div class="checkout-coupon-form"><input type="text" name="promoCode" placeholder="Nhập mã giảm giá..." class="form-control"> <button class="btn-add-coupon">Sử dụng</button></div>
                    </div>
                </div>
                <!---->
                <div class="checkout-step checkout-shipping-method">
                    <div class="checkout-step-title">2. Vận chuyển</div>
                    <div class="checkout-step-content">
                        <div class="checkout-shipping-method-section"><span>Phí vận chuyển
                <span data-tooltip="Phí vận chuyển 0 đ" class="tooltip-action-help"></span></span> <span class="price">0 ₫</span></div>
                    </div>
                </div>
                <div class="checkout-step checkout-payment-method" isactive="true">
                    <div class="checkout-step-title">3. Phương thức thanh toán</div>
                    <div class="checkout-step-content">
                        <div class="checkout-payment-method-section"><label for="cashondelivery"><input id="cashondelivery" type="radio" value="cashondelivery"> <span>Thanh toán khi giao hàng</span></label></div>
                        <!--<div class="checkout-payment-method-section"><label for="vnpay"><input id="vnpay" type="radio" value="vnpay"> <span>VNPAY</span></label></div>-->
                    </div>
                </div>
                <div class="checkout-proceed-checkout">
                    @if(Session::get('customer_id')==true)
                        <button class="btn-place-order" type="submit">Đặt hàng</button>
                    @else
                        <button class="btn-place-order" onclick="window.location.href='{{url('/signin')}}'">Đặt hàng</button>
                    @endif
                </div>
            </div>
        </div>
        <div class="checkout-container--right">
            <div class="checkout-review">
                <div class="checkout-step-title">Thông tin đơn hàng</div>
                <div class="checkout-step-content">
                    <table class="checkout-cart-items">
                        <thead>
                            <tr>
                                <th class="col item"><span>Sản phẩm</span></th>
                                <th class="col qty"><span>Số lượng</span></th>
                                <th class="col price"><span>Giá tiền</span></th>
                                <th class="col price-sale"><span>Giảm giá</span></th>
                                <th class="col subtotal"><span>Tổng tiền</span></th>
                            </tr>
                        </thead>
                        <?php
                            if (!function_exists('currency_format')) {
                                function currency_format($number, $suffix = ' ₫') {
                                    if (!empty($number)) {
                                        return number_format($number, 0, ',', '.') . "{$suffix}";
                                    }
                                }
                            }
                        ?>
                        <?php
                        if(Session::get('cart')==false){

                        }else{
                        ?> 
                        @foreach (Session::get('cart') as $key => $row)
                        <?php
                            $subtotal = $row['product_price']*$row['product_qty']; 
                            $total += $subtotal; 
                            $totalproduct += $row['product_qty'];
                        ?>
                        <tbody>
                                <tr class="cart-item">
                                    <input type="hidden" class="product_id" value="{{$row['product_id']}}">
                                    <td data-th="Sản phẩm" class="col item">
                                        <div class="cart-item-info">
                                            <div class="cart-item-photo">
                                                <a href="{{URL::to('/view/'.$row['product_id'])}}" class="cart-image-container">
                                                    <img src="{{URL::to('public/uploads/product/'.$row['product_image'])}}" alt="">
                                                </a>
                                            </div>
                                            <div class="cart-item-details">
                                                <strong class="cart-item-name">
                                                    <a href="{{URL::to('/view/'.$row['product_id'])}}" class="cart-image-container">{{$row['product_name']}}</a>
                                                </strong>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td data-th="Số lượng" class="col qty"><span class="price">{{$row['product_qty']}}</span></td>
                                    <td data-th="Giá tiền" class="col price"><span class="price">{{currency_format($row['product_price'], $suffix = ' ₫')}}</span></td>
                                    <td data-th="Giảm giá" class="col price-sale"><span class="price">0 ₫</span></td>
                                    <td data-th="Tổng tiền" class="col subtotal"><span class="price">{{currency_format($row['product_price'] * $row['product_qty'], $suffix = ' ₫')}}</span></td>
                                </tr>
                        </tbody>
                        @endforeach
                    </table>
                    <div class="checkout-totals">
                        <table>
                            <tbody>
                                <tr class="sub-totals">
                                    <th>Tổng tiền hàng</th>
                                    <td>{{currency_format($total, $suffix = ' ₫')}}</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="grand-totals">
                                    <th>Tổng tiền thanh toán</th>
                                    <td>{{currency_format($total, $suffix = ' ₫')}}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="total" value="{{$total}}">
    @if(Session::get('customer_id')==true)
    </form>
    @endif
</main>
<script type="text/javascript">
    $(document).ready(function(){
        $('.choose').change(function(){
            var action = $(this).attr('id');
            var maid = $(this).val();
            var _token = '{{ csrf_token() }}';
            var result = '';
            if(action=='city'){
                result = 'province';
            }else if(action=='province'){
                result = 'wards';
            }
            $.ajax({
                url : '{{url('/select-delivery')}}',
                method : 'POST',
                data : {action:action, maid:maid, _token:_token},
                success : function(data){
                    $('#' + result).html(data);
                }
            });
        });
    })
</script>
<script src="https://djibe.github.io/material/js/material.min.js"></script>
@endsection