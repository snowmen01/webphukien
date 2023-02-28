@extends('welcome') @section('content')
<div class="main-container col1-layout">
    <div class="breadcrumbs">
        <ul>
            <li class="home">
                <a href="#" title="Trang chủ">Trang chủ</a>
                <span>/ </span>
            </li>
            <li class="category238">
                <a href="#" title="">Giỏ Hàng</a>
            </li>
        </ul>
    </div>
    <div class="main">
        <div class="cart display-single-price">
            <div class="page-title title-buttons">
                <h1>Giỏ hàng</h1>
                <ul class="checkout-types top"></ul>
            </div>
        </div>
        @php if(Session::get('cart')==false){ @endphp
            <div class="minicart-close">
                <span>close</span>
            </div>
            <div class="minicart-empty">
                <div class="minicart-empty-icon"></div>
                <p>
                    Chưa có sản phẩm <br> trong giỏ hàng của bạn.
                </p>
            </div>
            @php }else { @endphp
            <table class="cart-items">
                <thead>
                    <tr>
                        <th class="col item"><span>Sản phẩm</span></th>
                        <th class="col actions"></th>
                        <th class="col qty"><span>Số lượng</span></th>
                        <th class="col price"><span>Giá tiền</span></th>
                        <th class="col price-sale"><span>Giảm giá</span></th>
                        <th class="col subtotal"><span>Tổng tiền</span></th>
                    </tr>
                </thead>
                @php $total = 0; $totalproduct = 0; @endphp 
                @foreach (Session::get('cart') as $key => $row) @php 
                $subtotal = $row['product_price']*$row['product_qty']; 
                $total += $subtotal; 
                $totalproduct += $row['product_qty'];
                @endphp
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
                                                    <a href="{{URL::to('/view/'.$row['product_id'])}}" class="">{{$row['product_name']}}</a>
                                                </strong>
                                </div>
                            </div>
                        </td>
                        <td class="col actions">
                            <a href="{{URL::to('/delete-cart/'.$row['product_id'])}}" title="Xóa" class="action-delete">
                                <span>Xóa</span>
                            </a>
                        </td>
                        <td data-th="Số lượng" class="col qty">
                            <div class="cart-item-qty">
                                <a href="#" class="btn-number btn-number-minus changeQuantity" data-field="qty" data-type="minus">
                                    <span>▼</span>
                                </a>
                                <input type="number" class="input-cart-item-qty" name="qty" min="0" id="qty" value="{{$row['product_qty']}}">
                                <input type="hidden" name="rowId_card" value="">
                                <a href="#" class="btn-number btn-number-plus changeQuantity" data-field="qty" data-type="plus">
                                    <span>▲</span>
                                </a>
                            </div>
                        </td>
                        <?php
                                        if (!function_exists('currency_format')) {
                                            function currency_format($number, $suffix = ' ₫') {
                                                if (!empty($number)) {
                                                    return number_format($number, 0, ',', '.') . "{$suffix}";
                                                }
                                            }
                                        }
                                    ?>
                            <td data-th="Giá tiền" class="col price">
                                <span class="price">{{currency_format($row['product_price'], $suffix = ' ₫')}}</span>
                            </td>
                            <td data-th="Giảm giá" class="col price-sale">
                                <span class="price">0 ₫</span>
                            </td>
                            <td data-th="Tổng tiền" class="col subtotal">
                                <span class="price">{{currency_format($subtotal, $suffix = ' ₫')}}</span>
                            </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <div class="cart-bottom">
                <div class="cart-bottom-banner">
                    <img src="https://canifa.com/assets/images/cart-banner.png" alt="">
                    <p><a href="{{url('/index')}}">Tiếp tục mua hàng</a></p>
                </div>
                <div class="cart-summary">
                    <table class="cart-totals">
                        <tbody>
                            <tr class="quantity">
                                <th>Tổng sản phẩm:</th>
                                <td><?php echo $totalproduct ?></td>
                            </tr>
                            <tr>
                                <th>Giảm giá:</th>
                                <td>0 ₫</td>
                            </tr>
                                <?php
                                    if (!function_exists('currency_format')) {
                                        function currency_format($number, $suffix = ' ₫') {
                                            if (!empty($number)) {
                                                return number_format($number, 0, ',', '.') . "{$suffix}";
                                            }
                                        }
                                    }
                                ?>
                                <tr class="grand-totals">
                                    <th>Tạm Tính:</th>
                                    <td>{{currency_format($total, $suffix = ' ₫')}}</td>
                                </tr>
                        </tbody>
                    </table>
                    <button type="button" class="action-checkout" onclick="window.location.href='{{url('/checkout')}}'">
                        <span>Hoàn tất đơn hàng</span>
                    </button>
                </div>
            </div>
            @php } @endphp
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {

    $('.btn-number-plus').click(function (e) {
        e.preventDefault();
        var incre_value = $(this).parents('.cart-item-qty').find('.input-cart-item-qty').val();
        var value = parseInt(incre_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value<10){
            value++;
            $(this).parents('.cart-item-qty').find('.input-cart-item-qty').val(value);
        }
    });

    $('.btn-number-minus').click(function (e) {
        e.preventDefault();
        var decre_value = $(this).parents('.cart-item-qty').find('.input-cart-item-qty').val();
        var value = parseInt(decre_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value>1){
            value--;
            $(this).parents('.cart-item-qty').find('.input-cart-item-qty').val(value);
        }
    });

    });
</script>
@endsection