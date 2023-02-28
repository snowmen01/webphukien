@extends('index_admin')
@section('admin_content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Thêm thương hiệu</h4>
        <?php
          $message = Session::get('message');
          if($message)
            echo '<span>'.$message.'</span>';
          Session::put('message', null);
        ?>
        <form class="forms-sample" method="POST" action="{{URL::to('/save-brand-product')}}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1">Tên thương hiệu</label>
            <input type="text" class="form-control" id="exampleInputName1" name="brand_product_name" placeholder="Tên thương hiệu">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Mô tả thương hiệu</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4" name="brand_product_desc" placeholder="Mô tả thương hiệu"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Loại</label>
            <select class="form-control" name="brand_product_status">
                <option value="1">Hiển thị</option>
                <option value="0">Ẩn</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Thêm thương hiệu</button>
        </form>
      </div>
    </div>
  </div>
  @endsection