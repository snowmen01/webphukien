@extends('index_admin')
@section('admin_content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Chi tiết đơn hàng</h4>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="col-lg-1">#</th>
                <th class="col-lg-5">Tên hàng</th>
                <th class="col-lg-3">Số lượng</th>
                <th class="col-lg-3">Đơn giá</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    if (!function_exists('currency_format')) {
                        function currency_format($number, $suffix = ' ₫') {
                            if (!empty($number)) {
                                return number_format($number, 0, ',', '.') . "{$suffix}";
                            }
                        }
                    }
                ?>
              @foreach ($data as $key => $row)
              <tr>
                <td>{{$row -> shipping_id}}</td>
                <td>{{$row -> product_name}}</td>
                <td>{{$row -> product_qty}}</td>
                <td>{{currency_format($row -> product_price, $suffix = ' ₫')}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div style="margin-top: 20px"></div>
        <?php
            $status;
            foreach ($data1 as $key => $value) {
                $status = $value->shipping_status;
            }
            if ($status==0){?>
                <button type="button" class="btn btn-outline-danger btn-fw" onclick="window.location.href='{{URL::to('/decline-order/'.$value->shipping_id)}}'">Từ chối</button>
                <button type="button" class="btn btn-outline-success btn-fw" onclick="window.location.href='{{URL::to('/accept-order/'.$value->shipping_id)}}'">Xác nhận</button>
            <?php } ?>
        <button type="button" class="btn btn-outline-primary btn-fw" onclick="window.location.href='{{URL::to('/wait-order')}}'">Quay lại</button>
      </div>
    </div>
  </div>
  @endsection