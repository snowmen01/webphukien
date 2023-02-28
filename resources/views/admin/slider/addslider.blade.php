@extends('index_admin')
@section('admin_content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Thêm Slider</h4>
        <?php
          $message = Session::get('message');
          if($message)
            echo '<span>'.$message.'</span>';
          Session::put('message', null);
        ?>
        <form class="forms-sample" method="POST" action="{{URL::to('/insert-slider')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1">Tên Slider</label>
            <input type="text" class="form-control" id="exampleInputName1" name="slider_name" placeholder="Tên Slider">
          </div>
          <div class="form-group">
            <label>Hình ảnh</label>
            <input type="file" name="slider_image[]" class="file-upload-default" multiple>
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Tải lên</button>
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Mô tả Slider</label>
            <textarea class="form-control" id="ckeditor1" rows="8" name="slider_desc" placeholder="Mô tả Slider"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Loại</label>
            <select class="form-control" name="slider_status">
                <option value="1">Hiển thị</option>
                <option value="0">Ẩn</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Thêm Slider</button>
        </form>
      </div>
    </div>
  </div>
  @endsection