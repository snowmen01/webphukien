@extends('index_admin')
@section('admin_content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tất cả danh mục</h4>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Tên danh mục</th>
                <th>Mô tả danh mục</th>
                <th>Danh mục con</th>
                <th>Hiển Thị</th>
                <th>Tùy chọn</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $key => $row)
              <tr>
                <td>{{$row -> category_id}}</td>
                <td>{{$row -> category_name}}</td>
                <td>{{$row -> category_desc}}</td>
                <td>
                  <button type="button" class="btn btn-outline-primary btn-icon-text" onclick="window.location.href='{{URL::to('/all-subcate/'.$row->category_id)}}'">
                    <i class="mdi mdi-settings btn-icon-prepend"></i>Quản lý
                  </button>
              </td>
                <td>
                <?php
                if($row-> category_status==1){
                  ?>
                  <button type="button" class="btn btn-success" onclick="window.location.href='{{URL::to('/unactive-category-product/'.$row->category_id)}}'">Active</button>
                  <?php
                }else{
                  ?>
                  <button type="button" class="btn btn-secondary" onclick="window.location.href='{{URL::to('/active-category-product/'.$row->category_id)}}'">Hide</button>
                  <?php
                }
                ?></td>
                <td>
                  <button type="button" class="btn btn-outline-danger btn-fw" onclick="window.location.href='{{URL::to('/delete-category-product/'.$row->category_id)}}'">Xóa</button>
                  <button type="button" class="btn btn-outline-primary btn-fw" onclick="window.location.href='{{URL::to('/edit-category-product/'.$row->category_id)}}'">Sửa</button>
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