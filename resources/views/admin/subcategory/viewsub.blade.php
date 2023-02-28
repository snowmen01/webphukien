@extends('index_admin')
@section('admin_content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Quản lý danh mục con</h4>
        
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Tên danh mục</th>
                <th>Hiển Thị</th>
                <th>Tùy chọn</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $key => $row)
              <tr>
                <td>{{$row -> subcate_id}}</td>
                <td>{{$row -> subcate_name}}</td>
                <td>
                <?php
                if($row-> subcate_status==1){
                  ?>
                  <button type="button" class="btn btn-success" onclick="window.location.href='{{URL::to('/unactive-subcate/'.$row->subcate_id)}}'">Active</button>
                  <?php
                }else{
                  ?>
                  <button type="button" class="btn btn-secondary" onclick="window.location.href='{{URL::to('/active-subcate/'.$row->subcate_id)}}'">Hide</button>
                  <?php
                }
                ?></td>
                <td>
                  <button type="button" class="btn btn-outline-danger btn-fw" onclick="window.location.href='{{URL::to('/delete-subcate/'.$row->subcate_id)}}'">Xóa</button>
                  <button type="button" class="btn btn-outline-primary btn-fw" onclick="window.location.href='{{URL::to('/edit-subcate/'.$row->subcate_id)}}'">Sửa</button>
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