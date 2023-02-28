@extends('index_admin')
@section('admin_content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Toàn bộ đơn đặt hàng</h4>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="col-lg-1">Hành động</th>
                <th class="col-lg-1">Mã đơn hàng</th>
                <th class="col-lg-1">Khách hàng</th>
                <th class="col-lg-3">Địa chỉ</th>
                <th class="col-lg-1">Điện thoại</th>
                <th class="col-lg-2">Note</th>
                <th class="col-lg-1">Tổng tiền</th>
                <th class="col-lg-1">Ngày đặt</th>
                <th class="col-lg-1">Trạng thái</th>
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
                <style>
                    .table td{
                        padding: 5px;
                    }
                    .btn{
                        padding: 5px 10px;
                    }
                </style>
              @foreach ($data as $key => $row)
              <tr>
                <td>
                    Trạng thái
                </td>
                <td>
                    <a style="font-weight: 700" href="{{url('/wait-order-view/'.$row->shipping_code)}}">{{$row -> shipping_code}}</a>
                </td>
                <td>{{$row -> shipping_name}}</td>
                <td>{{$row -> shipping_address}}</td>
                <td>{{$row -> shipping_phone}}</td>
                <td>{{$row -> shipping_note}}</td>
                <td>{{currency_format($row -> shipping_total, $suffix = ' ₫')}}</td>
                <td>{{$row -> date_order}}</td>
                <td>{{$row -> ten_tt}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection