@extends('index_admin')
@section('admin_content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Thêm sản phẩm</h4>
        <?php
          $message = Session::get('message');
          if($message)
            echo '<span>'.$message.'</span>';
          Session::put('message', null);
        ?>
        <form class="forms-sample" method="POST" action="{{URL::to('/save-product')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputName1">Tên sản phẩm </label>
            <input type="text" class="form-control" id="exampleInputName1" name="product_name" placeholder="Tên sản phẩm">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Giá sản phẩm </label>
            <input type="text" class="form-control" id="exampleInputName1" name="product_price" placeholder="Giá sản phẩm">
          </div>
          <div class="form-group">
            <label>Hình ảnh sản phẩm</label>
            <input type="file" name="product_image[]" class="file-upload-default" multiple>
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Tải lên</button>
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Kích Thước </label>
            <input type="text" class="form-control" id="exampleInputName1" name="product_size" placeholder="Kích thước">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Màu sắc </label>
            <input type="text" class="form-control" id="exampleInputName1" name="product_color" placeholder="Màu sắc">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Mô tả sản phẩm</label>
            <textarea class="form-control" id="ckeditor1" rows="8" name="product_desc" placeholder="Mô tả sản phẩm"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Nội dung sản phẩm</label>
            <textarea class="form-control" id="ckeditor2" rows="8" name="product_content" placeholder="Nội dung sản phẩm"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Thương hiệu</label>
            <select class="form-control" name="brand">
                @foreach ($brand_product as $key => $row)
                    <option value="{{$row -> brand_id}}">{{$row -> brand_name}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Danh mục</label>
            <select class="form-control" name="category" onchange="">
                @foreach ($cate_product as $key => $row)
                    <option value="{{$row -> category_id}}">{{$row -> category_name}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <ul class="ks-cboxtags">
              <li>
                <input type="checkbox" id="checkboxOne" value="Rainbow Dash">
                <label for="checkboxOne">Rainbow Dash</label>
              </li>
              <li class="ks-selected">
                <input type="checkbox" id="checkboxTwo" value="Cotton Candy">
                <label for="checkboxTwo">Cotton Candy</label></li>
              <li class="ks-selected">
                <input type="checkbox" id="checkboxThree" value="Rarity">
                <label for="checkboxThree">Rarity</label>
              </li>
              <li>
                <input type="checkbox" id="checkboxFour" value="Moondancer">
                <label for="checkboxFour">Moondancer</label>
              </li>
              <li>
                <input type="checkbox" id="checkboxFive" value="Surprise">
                <label for="checkboxFive">Surprise</label>
              </li>
              <li class="ks-selected">
                <input type="checkbox" id="checkboxSix" value="Twilight Sparkle">
                <label for="checkboxSix">TwilightSparkle</label>
              </li>
            </ul>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Thêm sản phẩm</button>
        </form>
      </div>
    </div>
  </div>
  @endsection