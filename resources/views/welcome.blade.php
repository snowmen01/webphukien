<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIPPY - SHOP BÁN PHỤ KIỆN UY TÍN HÀNG ĐẦU VIỆT NAM</title>
    <link rel="stylesheet" href="{{asset('public/frontend/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css//sweetalert2.min.css')}}" id="theme-styles">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.zoom.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/sweetalert2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('public/frontend/css/material-design-iconic-font.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
    <script type='text/javascript'>
        //<![CDATA[
        function loadCSS(e, t, n) {
            "use strict";
            var i = window.document.createElement("link");
            var o = t || window.document.getElementsByTagName("script")[0];
            i.rel = "stylesheet";
            i.href = e;
            i.media = "only x";
            o.parentNode.insertBefore(i, o);
            setTimeout(function() {
                i.media = n || "all"
            })
        }
        loadCSS("https://use.fontawesome.com/releases/v5.1.0/css/all.css");
        loadCSS("//cdn.jsdelivr.net/gh/hung1001/blog@c30405f/smart/lib/font-awesome/css/all.css");
        //]]>
    </script>  
</head>
<body class="cms-index-index cms-cnf-home-2019">
    <div class="wrapper">
        <div id="rainbow-progress-bar"></div>
        <div class="page">
            <header id="header" class="site-header">
                <div class="header-content">
                    <a class="logo" href="{{URL::to('index')}}" id="logo-flash">
                        <img src="{{URL::to('public/frontend/img/log.png')}}" alt="Kippy" class="large">
                    </a>
                    <div id="header-nav" class="header-menu">
                        <div class="header-language">
                        </div>
                        <nav id="menu-main" class="float-left">
                            <div class="megamenu-pc ms-megamenu">
                                <ul id="ms-topmenu" class="ms-topmenu ">
                                    <li data="" class="ms-level0">
                                        <a class="ms-label" href="#">Iphone</a>
                                        <div class="ms-submenu col-xs-12 sub_left" id="submenu-2">
                                            <div class="ms-content">
                                                <div class="ms-maincontent">
                                                    <div class="row">
                                                        <div class="col-sm-2 col-sm-offset-1 parent">
                                                            <strong class="form-group level1 submenu-expand">BÀN PHÍM CƠ</strong>
                                                            <div class="sub-menu">
                                                                <a class="form-group" href="#">COOLER MASTER <span style="color: #da291c;"><strong>&nbsp;HOT</strong></span></a>
                                                                <a class="form-group" href="#">RAZER <span style="color: #da291c;"><strong>&nbsp;HOT</strong></span></a>
                                                                <a class="form-group" href="#">LOGITECH <span style="color: #da291c;"><strong>&nbsp;HOT</strong></span></a>
                                                                <a class="form-group" href="#">RAPOO</a>
                                                                <a class="form-group" href="#">CORSAIR</a>
                                                                <a class="form-group" href="#">ASUS</a>
                                                                <a class="form-group" href="#">EDRA <span style="color: #da291c;"><strong>&nbsp;HOT</strong></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 ">
                                                            <div class="parent"><strong class="form-group level1 submenu-expand">BÀN PHÍM GAMING</strong>
                                                                <div class="sub-menu">
                                                                    <a class="form-group" href="#">MICROSOFT</a>
                                                                    <a class="form-group" href="#">ASROCK</a>
                                                                    <a class="form-group" href="#">DELL</a>
                                                                    <a class="form-group" href="#">LOGITECH <span style="color: #da291c;"><strong>&nbsp;HOT</strong></span></a>
                                                                    <a class="form-group" href="#">FUHLEN</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 ">
                                                            <div class="parent"><strong class="form-group level1 submenu-expand">BÀN PHÍM KHÔNG DÂY</strong>
                                                                <div class="sub-menu">
                                                                    <a class="form-group " href="#">ADATA</a>
                                                                    <a class="form-group " href="#">AKKO</a>
                                                                    <a class="form-group " href="#">COOLER MASTER</a>
                                                                    <a class="form-group " href="#">GEEZER</a>
                                                                    <a class="form-group " href="#">E-DRA</a>
                                                                    <a class="form-group " href="#">RAZER <span style="color: #da291c;"><strong>&nbsp;HOT</strong></span></a>
                                                                </div>
                                                            </div>
                                                            <div class="parent"><strong class="form-group level1 submenu-expand">BÀN PHÍM PHỔ THÔNG</strong>
                                                                <div class="sub-menu">
                                                                    <a class="form-group " href="#">STEELSERIES</a>
                                                                    <a class="form-group " href="#">MICROSOFT</a>
                                                                    <a class="form-group " href="#">FPT</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 ">
                                                            <div class="parent">
                                                                <a href="#"><strong class="form-group level1 " style="color: #da291c;">Dưới 99.000đ</strong></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <a href="#">
                                                                <img alt="" src="{{URL::to('public/frontend/img/newKeyboard.png')}}" width="300" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data="" class="ms-level0">
                                        <a class="ms-label" href="#">Ipad</a>
                                        <div class="ms-submenu col-xs-12 sub_left" id="submenu-2">
                                            <div class="ms-content">
                                                <div class="ms-maincontent">
                                                    <div class="row">
                                                        <div class="col-sm-2 col-sm-offset-1 parent">
                                                            <strong class="form-group level1 submenu-expand">GAMING</strong>
                                                            <div class="sub-menu">
                                                                <a class="form-group" href="#">COOLER MASTER <span style="color: #da291c;"><strong>&nbsp;HOT</strong></span></a>
                                                                <a class="form-group" href="#">RAZER <span style="color: #da291c;"><strong>&nbsp;HOT</strong></span></a>
                                                                <a class="form-group" href="#">LOGITECH <span style="color: #da291c;"><strong>&nbsp;HOT</strong></span></a>
                                                                <a class="form-group" href="#">RAPOO</a>
                                                                <a class="form-group" href="#">CORSAIR</a>
                                                                <a class="form-group" href="#">ASUS</a>
                                                                <a class="form-group" href="#">EDRA <span style="color: #da291c;"><strong>&nbsp;HOT</strong></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 ">
                                                            <div class="parent"><strong class="form-group level1 submenu-expand">PHỔ THÔNG</strong>
                                                                <div class="sub-menu">
                                                                    <a class="form-group" href="#">MICROSOFT</a>
                                                                    <a class="form-group" href="#">ASROCK</a>
                                                                    <a class="form-group" href="#">DELL</a>
                                                                    <a class="form-group" href="#">LOGITECH <span style="color: #da291c;"><strong>&nbsp;HOT</strong></span></a>
                                                                    <a class="form-group" href="#">FUHLEN</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 ">
                                                            <div class="parent"><strong class="form-group level1 submenu-expand">CHUỘT KHÔNG DÂY</strong>
                                                                <div class="sub-menu">
                                                                    <a class="form-group " href="#">ADATA</a>
                                                                    <a class="form-group " href="#">AKKO</a>
                                                                    <a class="form-group " href="#">COOLER MASTER</a>
                                                                    <a class="form-group " href="#">GEEZER</a>
                                                                    <a class="form-group " href="#">E-DRA</a>
                                                                    <a class="form-group " href="#">RAZER <span style="color: #da291c;"><strong>&nbsp;HOT</strong></span></a>
                                                                </div>
                                                            </div>
                                                            <div class="parent"><strong class="form-group level1 submenu-expand">KHÁC</strong>
                                                                <div class="sub-menu">
                                                                    <a class="form-group " href="#">STEELSERIES</a>
                                                                    <a class="form-group " href="#">MICROSOFT</a>
                                                                    <a class="form-group " href="#">FPT</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 ">
                                                            <div class="parent">
                                                                <a href="#"><strong class="form-group level1 " style="color: #da291c;">Dưới 99.000đ</strong></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <a href="#">
                                                                <img alt="" src="{{URL::to('public/frontend/img/newMouse.png')}}" width="300" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data="" class="ms-level0">
                                        <a class="ms-label" href="#">Mac</a>
                                    </li>
                                    <li data="" class="ms-level0">
                                        <a class="ms-label" href="#">Apple Watch</a>
                                    </li>
                                    <li data="" class="ms-level0">
                                        <a class="ms-label" href="#">Phụ kiện</a>
                                    </li>
                                    <li data="" class="ms-level0">
                                        <a class="ms-label" href="#">
                                            <span style="color: #da291c;">Mới</span>
                                        </a>
                                        <div class="ms-submenu col-xs-12 sub_left" id="submenu-33">
                                            <div class="ms-content">
                                                <div class="ms-maincontent">
                                                    <div class="row">
                                                        <div class="col-sm-2 col-sm-offset-1 parent">
                                                            <a href="#">
                                                                <strong class="form-group level1 submenu-expand">Bàn phím</strong>
                                                                <img alt="" src="{{URL::to('public/frontend/img/banphimhome.png')}}" width="300">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-2 parent">
                                                            <a href="#">
                                                                <strong class="form-group level1 submenu-expand">Chuột</strong>
                                                                <img alt="" src="{{URL::to('public/frontend/img/chuothome.png')}}" width="300">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-2 parent">
                                                            <a href="#">
                                                                <strong class="form-group level1 submenu-expand">Tai Nghe</strong>
                                                                <img alt="" src="{{URL::to('public/frontend/img/tainghehome.png')}}" width="300">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-2 parent">
                                                            <a href="#">
                                                                <strong class="form-group level1 submenu-expand">Màn Hình</strong>
                                                                <img alt="" src="{{URL::to('public/frontend/img/manhinhhome.png')}}" width="300">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-2 parent">
                                                            <a href="#">
                                                                <strong class="form-group level1 submenu-expand">Khác</strong>
                                                                <img alt="" src="{{URL::to('public/frontend/img/abchome.jpg')}}" width="300">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="header-search">
                        <div class="search-input-group" >
                            <button class="search-btn" >
                                <span >search</span>
                            </button>
                            <input type="text" name="" placeholder="Bạn tìm gì..." class="search-input" >
                        </div>
                        <div class="search-results">
                            <div class="search-results-container">
                                <div class="search-results-item">
                                    <div style="display:flex;justify-content:space-between" >
                                        <div class="search-results-item-heading">Lịch sử tìm kiếm</div>
                                        <div class="search-results-item-heading" style="color:#44b9dc" >Xóa</div>
                                    </div>
                                    <div class="search-results-item-content"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-group-icon">
                        <a href="#" class="header-store header-icon"></a>
                        <a href="#" class="header-wishlist header-icon"></a>
                        <a href="{{url('/my-account')}}" class="header-account header-icon"></a>
                        <div class="header-cart">
                            @php
                                $total = 0;
                            @endphp
                            @php
                                if (!function_exists('currency_format')) {
                                    function currency_format($number, $suffix = ' ₫') {
                                        if (!empty($number)) {
                                            return number_format($number, 0, ',', '.') . "{$suffix}";
                                        }
                                    }
                                }
                            @endphp
                            @yield('minicart')
                        </div>

                    </div>
                </div>
            </header>
            <div class="header-promotion" style="text-transform: none;">
                <div class="slide">
                    <div class="item" id="header-promotion-ship">Miễn phí vận chuyển cho đơn hàng từ 499.000đ</div>
                    <div class="item" id="header-promotion-ship">ĐỔI HÀNG MIỄN PHÍ - Tại tất cả cửa hàng trong 30 ngày</div>
                </div>
            </div>
            @yield('content')
            <a class="to-tops ripple" href="javascript:;" id="kippy-go-top" title="Về đầu trang">
                <div class="splash-wrapper">
                    <span class="splash" style="height: 44px; width: 44px; left: -1px; top: -1px;">
                    </span>
                </div>
                <i class="fa fa-arrow-up"></i>
            </a>
        </div>
        <div class="site-footer footer-desktop ">
            <div class="footer-container ">
                <div class="f-column1 col-sm-2">
                    <h3 class="title ">Công ty cổ phần Kippy</h3>
                    <p>Số ĐKKD: 0107574310, ngày cấp: 23/09/2016. Nơi cấp: Sở Kế hoạch và đầu tư Hà Nội</p>
                    <p>Địa chỉ liên hệ: Phòng 301 Tòa nhà GP Invest, 170 La Thành, P. Ô Chợ Dừa, Q. Đống Đa, Hà Nội</p>
                    <p>Điện thoại: +8424 - 7303.0222 <br>Fax: +8424 - 6277.6419 <br>Email: hello@kippy.com</p>
                    <div class="copyright ">© 2020 KIPPY</div>
                </div>
                <div class="f-column2 col-sm-2 col-sm-offset-1 ">
                    <h3 class="title ">Thương hiệu</h3>
                    <ul>
                        <li><a href="# " rel="nofollow ">Về Kippy</a></li>
                        <li><a href="# " rel="nofollow ">Phát triển bền vững</a> </li>
                        <li><a href="# " rel="nofollow ">Cơ hội việc làm tại Kippy</a></li>
                        <li><a href="# " rel="dofollow ">Blog</a></li>
                        <li><a href="# ">Hệ thống cửa hàng</a></li>
                        <li><a href="# " rel="nofollow ">Chính sách KH thân thiết</a></li>
                        <li><a href="# " rel="nofollow ">Chính sách bảo mật thông tin</a></li>
                        <li><a href="# " rel="nofollow ">Giới thiệu k point</a></li>
                    </ul>
                </div>
                <div class="f-column3 col-sm-2 ">
                    <h3 class="title ">Hỗ trợ</h3>
                    <ul>
                        <li><a href="# " rel="nofollow ">FAQs - Hỏi đáp</a></li>
                        <li><a href="# " rel="nofollow ">Chính sách vận chuyển</a></li>
                        <li><a href="# " rel="nofollow ">Quy định đổi hàng</a></li>
                        <li><a href="# " rel="nofollow ">Hướng dẫn thanh toán</a></li>
                        <li><a href="# ">Hướng dẫn chọn kích cỡ</a></li>
                        <li><a href="# " rel="nofollow ">Hướng dẫn mua hàng Online</a></li>
                        <li><a href="# " rel="nofollow ">Liên hệ</a></li>

                    </ul>
                </div>
                <div class="f-column4 col-sm-4 col-sm-offset-1 ">
                    <h3 class="title ">Thanh toán</h3>
                    <div class="footer-logo ">
                        <div class="img-payment-method ">
                            <img src="{{URL::to('public/frontend/img/img-payment-method.png')}} " alt=" ">
                        </div>
                    </div>
                    <div class="img-dang-ky ">
                        <a href="#" rel="nofollow ">
                            <img src="{{URL::to('public/frontend/img/img-dang-ky.png')}}" alt=" ">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="progress_width" value="0">
    <script type="text/javascript" src="{{asset('public/frontend/js/theme.js')}}"></script>
    <script type='text/javascript'>
        $("#kippy-go-top").on("click", function(o) {
            o.preventDefault(), $("html,body").animate({
                scrollTop: 0
            }, 999)
        });
    </script>
    <script type="text/javascript">
        function Sizechartpop() {
            jQuery('.bg-sizechart').show();
            jQuery('#sizechart-pop').show();

            jQuery('html').addClass("show-sizechart");
        }

        function closesizechart() {
            jQuery('#sizechart-pop').hide();
            jQuery('.bg-sizechart').hide();
            jQuery('html').removeClass("show-sizechart");
        }

        function changeSizechart(text, el) {
            if (!jQuery(el).hasClass('active')) {
                jQuery('.sizechart-img').hide();
                jQuery('.area-filter').removeClass('active');
                jQuery(el).addClass('active');
                jQuery('.' + text).show();
            }
        }
    </script>


    <script type="text/javascript">
        $('.product-info-detailed .item-title').click(function(){
            return $(this).parents('.product-info-detailed').find('.active').removeClass('active'),$(this).parent().addClass('active'),!1;
        });
        jQuery('.header-cart').on('click', function() {
            jQuery('.header-cart-icon.header-icon').parent().toggleClass('active') ,$('.block-minicart').toggleClass('hide');
        });
        jQuery('.header-search').on('click', function() {
            jQuery('.search-input-group').parent().toggleClass('opened');
        });
    </script>


    <script type="text/javascript" src="{{asset('public/frontend/js/progress.js')}}"></script>

    <script type="text/javascript">
        var e = this;
        $(".checkout-shipping input").each((function() {
            $(this).val() ?$(this).parent().addClass("active") : $(this).parent().removeClass("active")
        }
        )),
        $(".checkout-shipping textarea").each((function() {
            $(this).val() ? $(this).parent().addClass("active") : $(this).parent().removeClass("active")
        }
        )),
        $(".checkout-shipping select").each((function() {
            $(this).children("option:selected").val() ? $(this).parent().addClass("active") : $(this).parent().removeClass("active")
        }
        )),
        $(".checkout-shipping input").focusin((function() {
            $(this).parent().addClass("active focusin")
        }
        )).focusout((function() {
            $(this).val() ? $(this).parent().removeClass("focusin") : $(this).parent().removeClass("active focusin")
        }
        )),
        $(".checkout-shipping textarea").focusin((function() {
            $(this).parent().addClass("active focusin")
        }
        )).focusout((function() {
            $(this).val() ? $(this).parent().removeClass("focusin") : $(this).parent().removeClass("active focusin")
        }
        )),
        $(document).on("change", ".checkout-shipping select", (function() {
            var e = $(this).children("option:selected").val();
            $(this).parent().addClass("active focusin"),
            e ? $(this).parent().removeClass("focusin") : $(this).parent().removeClass("active focusin")
        }
        ));
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.action-tocart').click(function(){
                var id = $(this).data('id');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_qty:cart_product_qty,_token:_token},
                    success:function(data){
                        Swal.fire({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán.",
                                icon: "success",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                        });
                        $('.swal2-confirm').click(function(){
                                window.location.href = '{{url('/show-cart')}}';
                        });
                        $('.swal2-cancel').click(function(){
                                window.location.reload();
                        });
                    }
                });
            });
        });
        $(document).ready(function () {
            $('.changeQuantity').click(function (e) {

                e.preventDefault();

                var quantity = $(this).closest(".cart-item").find('.input-cart-item-qty').val();
                var product_id = $(this).closest(".cart-item").find('.product_id').val();

                var data = {
                    'quantity':quantity,
                    'product_id':product_id,
                    '_token': "{{ csrf_token() }}",
                };

                $.ajax({
                    url: '{{url('/update-qty')}}',
                    method: 'POST',
                    data: data,
                    success: function (response) {
                        window.location.reload();
                    }
                });
            });
        });
    </script>
</body>

</html>