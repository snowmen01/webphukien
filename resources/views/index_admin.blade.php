<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Quản Lý Hệ Thống</title>
  <link rel="stylesheet" href="{{asset('public/backend/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/base/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/css/checkbox.css')}}">
  <script src="{{asset('public/backend/vendors/base/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('public/backend/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('public/backend/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('public/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('public/backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('public/backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('public/backend/js/template.js')}}"></script>
  <script src="{{asset('public/backend/js/dashboard.js')}}"></script>
  <script src="{{asset('public/backend/js/data-table.js')}}"></script>
  <script src="{{asset('public/backend/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('public/backend/js/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('public/backend/js/file-upload.js')}}"></script>
  <script src="{{asset('public/backend/js/jquery-2.1.1.min.js')}}"></script>
  <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
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
  <link rel="shortcut icon" href="{{URL::to('images/favicon.png')}}" />
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="{{URL::to('/dashboard')}}"><img src="{{URL::to('public/frontend/img/log.png')}}" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="{{URL::to('/dashboard')}}"><img src="https://technext.github.io/majestic/images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Tin nhắn</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="https://technext.github.io/majestic/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Kippy
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Xuân Hùng
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="https://technext.github.io/majestic/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">
                    Nguyễn Nghĩa
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Khương Duy
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Thông báo</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Có gì mới</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Bạn đang hoạt động!
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="https://technext.github.io/majestic/images/faces/face4.jpg" alt="profile"/>
              <span class="nav-profile-name">
              <?php
                  $name = Session::get('admin_name');
                  if($name)
                  echo $name;
              ?>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Cài đặt
              </a>
              <a class="dropdown-item" href="{{URL::to('/logout')}}">
                <i class="mdi mdi-logout text-primary"></i>
                Đăng Xuất
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/dashboard')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Tổng quan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" class="nav-link" data-toggle="collapse" href="#slider" aria-expanded="false" aria-controls="slider">
              <i class="mdi mdi-book-multiple-variant menu-icon"></i>
              <span class="menu-title">Slider</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="slider">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/add-slider')}}"> Thêm slider</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/all-slider')}}"> Danh sách slider</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-ticket menu-icon"></i>
              <span class="menu-title">Danh mục sản phẩm</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/add-category-product')}}"> Thêm danh mục</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/all-category-product')}}"> Danh sách danh mục</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#abc" aria-expanded="false" aria-controls="abc">
              <i class="mdi mdi-bookmark-check menu-icon"></i>
              <span class="menu-title">Thương hiệu sản phẩm</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="abc">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/add-brand-product')}}"> Thêm thương hiệu</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/all-brand-product')}}"> Danh sách thương hiệu</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#abcd" aria-expanded="false" aria-controls="abcd">
              <i class="mdi mdi-basket menu-icon"></i>
              <span class="menu-title">Sản phẩm</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="abcd">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/add-product')}}"> Thêm sản phẩm</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/all-product')}}"> Danh sách sản phẩm</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#abcdx" aria-expanded="false" aria-controls="abcdx">
              <i class="mdi mdi-basket menu-icon"></i>
              <span class="menu-title">Đơn hàng</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="abcdx">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/wait-order')}}"> Đơn hàng chờ xác nhận</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/all-order')}}"> Danh sách đơn hàng</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>

      <div class="main-panel">
        @yield('admin_content')
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a href="#" target="_blank">Kippy</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      load_gallery();
      function load_gallery(){
          var pro_id = $('.pro_id').val();
          var _token = $('input[name="_token"]').val();
          $.ajax({
            url:"{{url('/select-gallery')}}",
            method:"POST",
            data:{pro_id:pro_id,_token:_token},
            success: function(data){
              $('#gallery_load').html(data);
            }
          });
      }
      $(document).on('click', '.delete-gallery', function(){
          var gal_id = $(this).data('gal_id');
          var _token = $('input[name="_token"]').val();
          let abc = confirm('Bạn muốn xóa hình này không?');
          if(abc){
            $.ajax({
            url:"{{url('/delete-gallery')}}",
            method:"POST",
            data:{gal_id:gal_id,_token:_token},
            success: function(data){
              load_gallery();
            }
          });
          }
      });
    });
  </script>
  <script type="text/javascript">
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.replace('ckeditor2');
  </script>
</body>
</html>

