@extends('index_admin')
@section('admin_content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tất cả sản phẩm</h4>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th >#</th>
                <th class="col-lg-2">Tên sản phẩm</th>
                <th class="col-lg-2">Thư viện ảnh</th>
                <th class="col-lg-1">Ảnh</th>
                <th class="col-lg-1">Giá</th>
                <th class="col-lg-2">Danh mục</th>
                <th class="col-lg-2">Thương hiệu</th>
                <th class="col-lg-2">Tùy chọn</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $key => $row)
              <tr>
                <td>{{$row -> product_id}}</td>
                <td>{{$row -> product_name}}</td>
                <td>
                  <button type="button" class="btn btn-outline-danger btn-icon-text" onclick="window.location.href='{{URL::to('/add-gallery/'.$row->product_id)}}'">
                    <i class="mdi mdi-upload btn-icon-prepend"></i>                                                    
                    Upload
                  </button>
                </td>
                <td><img src="{{'public/uploads/product/'.$row -> product_image}}" alt=""></td>
                <td>{{$row -> product_price}}</td>
                <td>{{$row -> category_name}}</td>
                <td>{{$row -> brand_name}}</td>
                <td>
                  <button type="button" class="btn btn-outline-danger btn-fw" onclick="if (confirm('Bạn thực sự muốn xóa!')) {window.location.href='{{url('/delete-product/'.$row->product_id)}}'}">Xóa</button>
                  <button type="button" class="btn btn-outline-primary btn-fw" onclick="window.location.href='{{URL::to('/edit-product/'.$row->product_id)}}'">Sửa</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection