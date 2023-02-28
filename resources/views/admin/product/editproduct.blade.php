@extends('index_admin')
@section('admin_content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Cập nhật sản phẩm</h4>
        <form class="forms-sample" method="POST" action="{{URL::to('/update-product/'.$data->product_id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputName1">Tên sản phẩm </label>
              <input type="text" class="form-control" id="exampleInputName1" name="product_name" placeholder="Tên sản phẩm" value="{{$data->product_name}}">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Giá sản phẩm </label>
              <input type="text" class="form-control" id="exampleInputName1" name="product_price" placeholder="Giá sản phẩm" value="{{$data->product_price}}">
            </div>
            <div class="form-group">
              <label>Hình ảnh sản phẩm</label>
              <input type="file" name="product_image[]" class="file-upload-default" multiple>
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-bdatase btn btn-primary" type="button">Tải lên</button>
                </span>
              </div>
              <img src="{{URL::to('public/uploads/product/'.$data->product_image)}}" alt="" width="100" height="100">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Kích Thước </label>
              <input type="text" class="form-control" id="exampleInputName1" name="product_size" placeholder="Kích thước" value="{{$data->product_size}}">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Màu sắc </label>
              <input type="text" class="form-control" id="exampleInputName1" name="product_color" placeholder="Màu sắc" value="{{$data->product_color}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Mô tả sản phẩm</label>
              <textarea class="form-control" id="ckeditor1" datas="8" name="product_desc" placeholder="Mô tả sản phẩm">{{$data->product_desc}}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Nội dung sản phẩm</label>
              <textarea class="form-control" id="ckeditor2" datas="8" name="product_content" placeholder="Nội dung sản phẩm">{{$data->product_content}}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Thương hiệu</label>
              <select class="form-control" name="brand">
                @foreach ($brand as $key => $brand)
                  @if($brand->brand_id == $data->brand_id)
                    <option selected value="{{$data -> brand_id}}">{{$brand -> brand_name}}</option>
                  @else
                    <option value="{{$data -> brand_id}}">{{$brand -> brand_name}}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Danh mục</label>
              <select class="form-control" name="category">
                @foreach ($cate as $key => $cate)
                  @if($cate->category_id == $data->category_id)
                    <option selected value="{{$cate -> category_id}}">{{$cate -> category_name}}</option>
                  @else
                    <option value="{{$cate-> category_id}}">{{$cate -> category_name}}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
          </form>
      </div>
    </div>
  </div>
  @endsection