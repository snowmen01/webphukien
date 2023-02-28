@extends('index_admin')
@section('admin_content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Sửa thương hiệu</h4>
        <form class="forms-sample" method="POST" action="{{URL::to('/update-brand-product/'.$data->brand_id)}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputName1">Tên thương hiệu</label>
            <input type="text" class="form-control" id="exampleInputName1" name="brand_product_name" placeholder="Tên thương hiệu" value="{{$data -> brand_name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail3">Mô tả thương hiệu</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4" name="brand_product_desc" placeholder="Mô tả thương hiệu">{{$data -> brand_desc}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mr-2" >Cập nhật</button>
        </form>
      </div>
    </div>
  </div>
  @endsection