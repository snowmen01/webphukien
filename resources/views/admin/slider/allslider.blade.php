@extends('index_admin')
@section('admin_content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tất cả slider</h4>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <style>
              .table td img.img-slider{
                width: auto;
                height: 120px;
              }
            </style>
            <thead>
              <tr>
                <th>#</th>
                <th>Tên slider</th>
                <th>Mô tả slider</th>
                <th>Hình ảnh</th>
                <th>Hiển Thị</th>
                <th>Tùy chọn</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $key => $row)
              <tr>
                <td>{{$row->slider_id}}</td>
                <td>{{$row->slider_name}}</td>
                <td>{{$row->slider_desc}}</td>
                <td><img src='{{url('public/uploads/slider/'.$row->slider_image)}}'class="img-slider"></td>
                <td>
                  <?php
                  if($row-> slider_status==1){
                    ?>
                    <button type="button" class="btn btn-success" onclick="window.location.href='{{url('/unactive-slider/'.$row->slider_id)}}'">Active</button>
                    <?php
                  }else{
                    ?>
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='{{url('/active-slider/'.$row->slider_id)}}'">Hide</button>
                    <?php
                  }
                  ?>
                  </td>
                <td>
                  <button type="button" class="btn btn-outline-danger btn-fw" onclick="if (confirm('Bạn thực sự muốn xóa!')) {window.location.href='{{url('/delete-slider/'.$row->slider_id)}}'}">Xóa</button>
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