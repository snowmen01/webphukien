@extends('index_admin')
@section('admin_content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Thêm thư viện ảnh</h4>
        <form action="{{url('/insert-gallery/'.$pro_id)}}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <input type="file" name="file[]" class="file-upload-default" accept="image/*" multiple>
              <div class="input-group col-lg-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-primary" type="button">Chọn tệp</button>
                  <button class="btn btn-primary" type="submit">Tải lên</button>
                </span>
              </div>
            </div>
        </form>
        <input type="hidden" value="{{$pro_id}}" name="pro_id" class="pro_id">
        <form action="">
          <div class="table-responsive pt-3" id="gallery_load">
            @csrf
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection