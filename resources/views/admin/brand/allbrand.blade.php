@extends('index_admin')
@section('admin_content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tất cả thương hiệu</h4>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th >#</th>
                <th class="col-lg-2">Tên thương hiệu</th>
                <th class="col-lg-7">Mô tả thương hiệu</th>
                <th class="col-lg-1">Hiển Thị</th>
                <th class="col-lg-2">Tùy chọn</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $key => $row)
              <tr>
                <td>{{$row -> brand_id}}</td>
                <td>{{$row -> brand_name}}</td>
                <td>{{$row -> brand_desc}}</td>
                <td>
                <?php
                if($row-> brand_status==1){
                  ?>
                  <button type="button" class="btn btn-success" onclick="window.location.href='{{URL::to('/unactive-brand-product/'.$row->brand_id)}}'">Active</button>
                  <?php
                }else{
                  ?>
                  <button type="button" class="btn btn-secondary" onclick="window.location.href='{{URL::to('/active-brand-product/'.$row->brand_id)}}'">Hide</button>
                  <?php
                }
                ?>
                </td>
                <td>
                  <button type="button" class="btn btn-outline-danger btn-fw" onclick="if (confirm('Bạn thực sự muốn xóa?')) {window.location.href = '{{url('/delete-brand-product/'.$row->brand_id)}}';}">Xóa</button>
                  <button type="button" class="btn btn-outline-primary btn-fw" onclick="window.location.href='{{url('/edit-brand-product/'.$row->brand_id)}}'">Sửa</button>
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