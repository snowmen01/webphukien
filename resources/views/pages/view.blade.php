@extends('welcome')
@section('content')
<div class="slide-home" id="slide-home">
    @foreach ($slider as $key => $slider)
    <div class="item">
        <a target="_blank" href="#">
            <picture>
                <img src="{{url('/public/uploads/slider/'.$slider->slider_image)}}" alt="<?php echo $slider->slider_name?>"/>
            </picture>
        </a>
    </div>
    @endforeach
</div>
<div class="main-container col1-layout">
    <div class="main">
        <div class="col-main">
            <div class="block-new-product">
                <div class="container">
                    <style>
                        .section__cate {
                        background: #212529
                    }

                    .home__cate {
                        text-align: center;
                        gap: 24px;
                        align-items: baseline
                    }

                    .home__cate .cate__item {
                        position: relative;
                        padding: 24px 0 32px;
                        background: #32373d;
                        box-shadow: 0 0 16px rgba(0,0,0,.7);
                        border-radius: 6px;
                        transition: all .3s ease;
                        will-change: transform
                    }

                    .home__cate .cate__item a {
                        display: block;
                        position: relative
                    }

                    .home__cate .cate__item:before {
                        content: "";
                        position: absolute;
                        top: 0;
                        right: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: #32373d;
                        border: 2px solid #444b52;
                        border-radius: 6px;
                        transition: all .3s ease
                    }

                    .home__cate .cate__item-title {
                        color: #fff;
                        font-size: 20px;
                        line-height: 28px;
                        font-weight: 500;
                        margin-bottom: 16px
                    }

                    .home__cate .cate__item-btn {
                        display: inline-flex;
                        justify-content: center;
                        align-items: center;
                        opacity: 0;
                        visibility: hidden;
                        margin-top: 16px;
                        color: #e1e4e6;
                        position: absolute;
                        left: 0;
                        right: 0;
                        width: auto;
                        transition: all .3s ease;
                        padding: 3px 0;
                        font-size: 14px;
                        line-height: 14px;
                        font-weight: 400
                    }

                    .home__cate .cate__item-btn span {
                        color: #e1e4e6
                    }

                    .home__cate .cate__item-btn i {
                        margin-left: 4px
                    }

                    .home__cate .cate__item-link {
                        position: relative
                    }

                    .home__cate .cate__item-link:before {
                        display: inline-block;
                        content: "";
                        position: absolute;
                        left: 0;
                        bottom: 0;
                        width: 100%;
                        height: 1px;
                        background-color: #e1e4e6
                    }

                    .home__cate .cate__item:hover {
                        transform: translateY(-14px);
                        border: none
                    }

                    .home__cate .cate__item:hover:before {
                        height: calc(100% + 28px);
                        opacity: 1;
                        visibility: visible
                    }

                    .home__cate .cate__item:hover .cate__item-btn {
                        opacity: 1;
                        visibility: visible
                    }
                    .container__news {
                        width: 100%;
                        max-width: 1200px;
                        padding-right: 12px;
                        padding-left: 12px;
                        margin-right: auto;
                        margin-left: auto;
                        padding-top: 30px;
                        padding-bottom: 30px;
                    }
                    .flex {
                        display: flex;
                    }
                    </style>
                    <section class="section-module section__cate">
                        <div class="container__news">
                        <div class="home__cate flex">
                        <div class="cate__item">
                        <a href="/iphone">
                        <div class="cate__item-title">iPhone</div>
                        <div class="cate__item-img"><img src="https://fstudiobyfpt.com.vn/ContentV2/assets/img/iphone.png" alt="iPhone"></div>
                        <div class="cate__item-btn">
                        <div class="cate__item-link"><span>Khám phá ngay</span><i class="ic-angle-right"></i></div>
                        </div>
                        </a>
                        </div>
                        <div class="cate__item">
                        <a href="/ipad">
                        <div class="cate__item-title">iPad</div>
                        <div class="cate__item-img"><img src="https://fstudiobyfpt.com.vn/ContentV2/assets/img/ipad..png" alt="iPad"></div>
                        <div class="cate__item-btn">
                        <div class="cate__item-link"><span>Khám phá ngay</span><i class="ic-angle-right"></i></div>
                        </div>
                        </a>
                        </div>
                        <div class="cate__item">
                        <a href="/mac">
                        <div class="cate__item-title">Mac</div>
                        <div class="cate__item-img"><img src="https://fstudiobyfpt.com.vn/ContentV2/assets/img/mac..png" alt="Mac"></div>
                        <div class="cate__item-btn">
                        <div class="cate__item-link"><span>Khám phá ngay</span><i class="ic-angle-right"></i></div>
                        </div>
                        </a>
                        </div>
                        <div class="cate__item">
                        <a href="/watch">
                        <div class="cate__item-title">Apple Watch</div>
                        <div class="cate__item-img"><img src="https://fstudiobyfpt.com.vn/ContentV2/assets/img/Apple-watch..png" alt="Apple Watch"></div>
                        <div class="cate__item-btn">
                        <div class="cate__item-link"><span>Khám phá ngay</span><i class="ic-angle-right"></i></div>
                        </div>
                        </a>
                        </div>
                        <div class="cate__item">
                        <a href="/phu-kien">
                        <div class="cate__item-title">Phụ kiện</div>
                        <div class="cate__item-img"><img src="https://fstudiobyfpt.com.vn/ContentV2/assets/img/airtag..png" alt="Phụ kiện"></div>
                        <div class="cate__item-btn">
                        <div class="cate__item-link"><span>Khám phá ngay</span><i class="ic-angle-right"></i></div>
                        </div>
                        </a>
                        </div>
                        </div>
                        </div>
                        </section>
                    <div class="block-title">
                        <h3 class="title">Sản phẩm mới</h3>
                    </div>
                    <div class="block-content">
                        <div class="category-products">
                            <ul class="product-items products-grid products-grid--max-4-col">
                                @foreach ($product as $key => $row)
                                    <li class="product-item">
                                        <div class="product-info">
                                            <form>
                                                @csrf
                                                <input type="hidden" value="{{$row->product_id}}" class="cart_product_id_{{$row->product_id}}">
                                                <input type="hidden" value="1" class="cart_product_qty_{{$row->product_id}}">
                                                <div class="product-img">
                                                    <a href="{{URL::to('/view/'.$row->product_id)}}" title="{{$row->product_name}}" class="product-image">
                                                        <img src="{{URL::to('public/uploads/product/'.$row->product_image)}}" alt="{{$row->product_name}}">
                                                    </a>
                                                    <button style="height: auto; border: none;" type="button" class="product-item-action action-wishlist"><span>Yêu thích</span></button>
                                                    <div>
                                                        <button style="height: auto" type="button" class="product-item-button-tocart action-tocart" name="add-to-cart" data-id="{{$row->product_id}}">
                                                            <span>Thêm vào giỏ</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="product-detail">
                                                <h4 class="product-name">
                                                    <a href="{{URL::to('/view/'.$row->product_id)}}" title="{{$row->product_name}}">{{$row->product_name}}</a>
                                                </h4>
                                                <?php
                                                    if (!function_exists('currency_format')) {
                                                        function currency_format($number, $suffix = ' ₫') {
                                                            if (!empty($number)) {
                                                                return number_format($number, 0, ',', '.') . "{$suffix}";
                                                            }
                                                        }
                                                    }
                                                ?>
                                                <div class="price-box">
                                                    <span class="regular-price" id="{{$row->product_id}}">
                                                        <span class="price">{{currency_format($row->product_price, $suffix = ' ₫')}}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <script type="text/javascript">decorateGeneric($$('ul.products-grid'), ['odd','even','first','last'])</script>
                            <div class="block-home-banner">
                                <a target="_blank" href="#">
                                    <picture>
                                        <img src="public/frontend/img/TNC_Banner_acer.jpg" alt=" ">
                                    </picture>
                                </a>
                            </div>
                            <div class="block-service ">
                                <div class="container ">
                                    <div class="item ">
                                        <div class="policy-icon ">
                                            <i class="fal fa-shipping-fast "></i>
                                        </div>
                                        <div class="detail ">
                                            <h3><a target="_blank " href="# ">CHÍNH SÁCH GIAO HÀNG</a></h3>
                                            <p>Nhận và thanh toán tại nhà</p>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <div class="policy-icon ">
                                            <i class="fal fa-sync "></i>
                                        </div>
                                        <div class="detail ">
                                            <h3><a target="_blank " href="# ">ĐỔI TRẢ DỄ DÀNG</a></h3>
                                            <p>Đổi trả hàng miễn phí trong vòng 15 ngày</p>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <div class="policy-icon ">
                                            <i class="fal fa-credit-card "></i>
                                        </div>
                                        <div class="detail ">
                                            <h3><a target="_blank " href="# ">THANH TOÁN TIỆN LỢI</a></h3>
                                            <p>Trả tiền mặt, CK, trả góp 0%</p>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    .policy-icon {
                                        color: #333f48;
                                        font-size: 40px;
                                        margin: 5px 15px 0 0;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="block-subscribe">
            <div class="block-title">Đăng ký nhận bản tin</div> 
            <div class="block-content">
                <div class="form-subscribe">
                    <input type="text" name="" placeholder="Nhập email của bạn..." class="input-subscribe">
                    <button type="submit" title="Gửi" class="btn-subscribe">
                        <span>Gửi</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="block-social">
            <div class="block-title">Kết nối ngay</div>
            <div class="block-content">
                <a href="#" target="_blank" class="social social-facebook"></a>
                <a href="#" target="_blank" class="social social-instagram"></a>
                <a href="#" target="_blank" class="social social-youtube"></a>
            </div>
        </div>
    </div>
</div>
<div class="block-blog">
    <div class="block-title">#kippyblog</div>
    <div class="block-content">
    </div>
</div>
@endsection
@section('minicart')
@php
    if (!function_exists('currency_format')) {
        function currency_format($number, $suffix = ' ₫') {
            if (!empty($number)) {
                return number_format($number, 0, ',', '.') . "{$suffix}";
            }
        }
    }
@endphp
@php
if(Session::get('cart')==null){ 
    @endphp
    <a href="#" class="header-cart-icon header-icon">
        <span class="count">0</span>
    </a>
@php }else { @endphp
    @php
        $total = 0;
        $totalcart = 0;
    @endphp
    @foreach (Session::get('cart') as $key => $row)
    @php
        $total += $row['product_qty'];
    @endphp
    @endforeach
    <a href="#" class="header-cart-icon header-icon">
        <span class="count"><?php echo $total?></span>
    </a>
@php } @endphp
<div class="block-minicart hide">
    @php
if(Session::get('cart')==false){ 
    @endphp
    <div class="minicart-empty">
        <div class="minicart-empty-icon"></div>
        <p>
            Chưa có sản phẩm <br> trong giỏ hàng của bạn.
        </p>
    </div>
    @php }else { @endphp
  <div class="block-minicart-heading">
  (<?php echo $total?>) sản phẩm trong giỏ hàng
  </div>
  <ol class="minicart-items">
    @foreach (Session::get('cart') as $key => $row)
    @php
        $totalcart += $row['product_price']*$row['product_qty'];
    @endphp 
    <li class="minicart-item">
      <div class="minicart-item-info">
        <div class="minicart-item-photo">
          <div class="minicart-item-photo">
            <a href="{{URL::to('/view/'.$row['product_id'])}}">
              <img src="{{URL::to('public/uploads/product/'.$row['product_image'])}}" alt="<?php $row['product_name'] ?>">
            </a>
          </div>
        </div>
        <div class="minicart-item-details">
          <h3 class="minicart-item-name">
            <a href="{{URL::to('/view/'.$row['product_id'])}}">{{$row['product_name']}}</a>
          </h3>
          <div class="minicart-item-action">
            <a href="#" class="minicart-item-remove">
              <span>Xoá</span>
            </a>
          </div>
          <div class="minicart-item-bottom">
            <div class="minicart-item-price">
              <span class="price">{{currency_format($row['product_price'], $suffix = ' ₫')}}</span>
            </div>
            <div class="minicart-item-qty">
              <button class="btn-qty btn-qty-min"></button>
              <input type="text" name="" readonly="readonly" class="input-qty" value="{{$row['product_qty']}}">
              <button class="btn-qty btn-qty-plus"></button>
            </div>
          </div>
        </div>
      </div>
    </li>
    @endforeach
  </ol>
  <div class="minicart-actions">
    <button class="action checkout" style="height: auto" onclick="window.location.href='{{URL::to('/show-cart')}}'">Xem giỏ hàng</button>
  </div>
  <div class="minicart-subtotal">
    <span>Tổng tạm tính </span>
    <b>{{currency_format($totalcart, $suffix = ' ₫')}}</b>
  </div>
</div>
@php } @endphp
@endsection