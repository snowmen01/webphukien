@extends('index_admin')
@section('admin_content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Sửa danh mục sản phẩm</h4>
        <form class="forms-sample" method="POST" action="{{URL::to('/update-category-product/'.$data->category_id)}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputName1">Tên danh mục</label>
            <input type="text" class="form-control" id="exampleInputName1" name="category_product_name" placeholder="Tên danh mục" value="{{$data -> category_name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail3">Mô tả danh mục</label>
            <textarea class="form-control" id="exampleTextarea1" datas="4" name="category_product_desc" placeholder="Mô tả danh mục">{{$data -> category_desc}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mr-2" >Cập nhật</button>
        </form>
      </div>
    </div>
  </div>
  @endsection