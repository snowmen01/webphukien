@extends('welcome') @section('content') @foreach ($data as $key => $row)
<div class="main-container col1-layout">
    <div class="breadcrumbs">
        <ul>
            <li class="home">
                <a href="#" title="Trang chủ">Trang chủ</a>
                <span>/ </span>
            </li>
            <li class="category238">
                <a href="#" title="">Bàn phím</a>
                <span>/ </span>
            </li>
            <li class="category814">
                <a href="#" title="">Bàn Phím Gamming</a>
                <span>/ </span>
            </li>
            <li class="category2247">
                <a href="#" title="">Bàn Phím cơ</a>
                <span>/ </span>
            </li>
            <li class="category2249">
                <a href="#" title="">Bàn phím không dây</a>
                <span>/ </span>
            </li>
            <li class="product">
                <strong>{{$row->product_name}}</strong>
            </li>
        </ul>
    </div>
    <div class="main">
        <div class="col-main">
            <div style="clear: both;"></div>
            <div class="product-view">
                <div class="product-essential">
                    <form>
                        @csrf
                        <input type="hidden" value="{{$row->product_id}}" class="cart_product_id_{{$row->product_id}}" name="product_hidden">
                        <input type="hidden" value="{{$row->product_name}}" class="cart_product_name_{{$row->product_id}}">
                        <input type="hidden" value="{{$row->product_image}}" class="cart_product_image_{{$row->product_id}}">
                        <input type="hidden" value="{{$row->product_price}}" class="cart_product_price_{{$row->product_id}}">
                        <input type="hidden" value="1" class="cart_product_qty_{{$row->product_id}}" name="qty_hidden">
                        <div class="product-info-main">
                            <div class="product-img-box">
                                <div class="product-image-main">
                                    <div class="product-image-gallery">
                                        <div id="product-image-gallery">
                                            @foreach($gallery as $key => $gal)
                                            <div class="item img-SO156" data-src="{{URL::to('/public/uploads/product/'.$gal->gallery_image)}}">
                                                <div class="item-info">
                                                    <div class="item-zoom">
                                                        <img src="{{URL::to('/public/uploads/product/'.$gal->gallery_image)}}" data-src="{{URL::to('/public/uploads/product/'.$gal->gallery_image)}}" />
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="product-image-gallery-thumb">
                                        <div id="product-image-gallery-thumb">
                                            @foreach($gallery as $key => $gal)
                                            <div class="item">
                                                <img src="{{URL::to('/public/uploads/product/'.$gal->gallery_image)}}" />
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-shop product-shop-5870">
                                <div class="product-shop-content" style="z-index: 10;">
                                    <div class="product-name">
                                        <span class="h1">{{$row->product_name}}</span>
                                    </div>
                                    <div class="product-price-code">
                                        <div class="product-detail-code">Mã: {{$row->product_id}}</div>
                                        <div class="price-info">
                                            <div class="price-box">
                                                <?php
                                                    if (!function_exists('currency_format')) {
                                                        function currency_format($number, $suffix = ' ₫') {
                                                            if (!empty($number)) {
                                                                return number_format($number, 0, ',', '.') . "{$suffix}";
                                                            }
                                                        }
                                                    }
                                                ?>
                                                    <span class="regular-price" id="{{$row->product_id}}">
                                                    <span class="price">{{currency_format($row->product_price, $suffix = ' ₫')}}</span>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="product-info-detailed">
                                            <div class="item active">
                                                <div class="item-title">Thông số sản phẩm</div>
                                                <div class="item-content">
                                                    <?php echo $row->product_desc ?>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="item-title">Thông Tin Bảo Hành</div>
                                                <div class="item-content">12 Tháng</div>
                                            </div>
                                            <div class="item">
                                                <div class="item-title">Hướng dẫn sử dụng</div>
                                                <div class="item-content">Sắp tới sẽ có</div>
                                            </div>
                                        </div>
                                        <div class="product-size-guide" onclick="Sizechartpop()">
                                            <a href="javascript:void(0);">Chi tiết size bàn phím</a>
                                        </div>
                                        <ul class="product-service">
                                            <li class="free-ship">
                                                <strong>Miễn phí vận chuyển <span class="tooltip-help"></span></strong>
                                                <p>Cho đơn hàng từ 499.000₫</p>
                                            </li>
                                            <li class="free-exchange">
                                                <strong>Miễn phí đổi hàng <span class="tooltip-help"></span></strong>
                                                <p>Trong 30 ngày kể từ ngày mua.</p>
                                            </li>
                                        </ul>
                                        <div class="product-options-actions">
                                            <button type="button" title="Add to Cart" class="action action-tocart" data-id="{{$row->product_id}}">
                                                <span>Thêm vào giỏ hàng</span>
                                            </button>
                                            <div class="modal-addcart-success">
                                                <section class="sf-modal"></section>
                                            </div>
                                            <button type="button" title="" class="action action-store">
                                                <span>Tìm tại cửa hàng</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-sizechart" style="display: none" onclick="closesizechart()"></div>
    <div class="sizechart-pop" id="sizechart-pop" style="display: none; overflow: auto;">
        <div class="sizechart_header">
            <a class="close-popup" href="javascript:void(0);" onclick="closesizechart()">X</a>
            <h2 class="finder-title">HƯỚNG DẪN CHỌN BÀN PHÍM</h2>
        </div>
        <div class="sizechart_conten">
            <picture>
                <img src="{{URL::to('/public/uploads/imgsize.png')}}" alt="">
            </picture>
        </div>
    </div>
    @endforeach
    <div class="block-related">
        <div class="block-title">
            <h2>SẢN PHẨM LIÊN QUAN</h2>
        </div>
        <ul class="product-items products-grid mini-products-list" id="block-related">
            @foreach ($related as $key => $data)
            <li class="product-item item">
                <div class="product-info">
                    <div class="product-img">
                        <a href="{{URL::to('/view/'.$data->product_id)}}" title="{{$data->product_name}}" class="product-image">
                            <img src="{{URL::to('/public/uploads/product/'.$data->product_image)}}" alt="{{$data->product_name}}"/>
                        </a>
                        <button style="height: auto; border: none;" type="button" class="product-item-action action-wishlist"><span>Yêu thích</span></button>
                        <div>
                            <button style="height: auto" type="button" class="product-item-button-tocart action-tocart" name="add-to-cart" data-id="{{$data->product_id}}">
                                <span>Thêm vào giỏ</span>
                            </button>
                        </div>
                    </div>
                    <div class="product-detail">
                        <h4 class="product-name">
                            <a href="{{URL::to('/view/'.$data->product_id)}}" title="{{$data->product_name}}">{{$data->product_name}}</a>
                        </h4>
                        <div class="price-box">
                            <?php
                                        if (!function_exists('currency_format')) {
                                            function currency_format($number, $suffix = ' ₫') {
                                                if (!empty($number)) {
                                                        return number_format($number, 0, ',', '.') . "{$suffix}";
                                                }
                                             }
                                        }
                                    ?>
                                <span class="regular-price" id="{{$data->product_id}}">
                                        <span class="price">{{currency_format($data->product_price, $suffix = ' ₫')}}</span>
                                </span>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
</div>
@endsection