@extends('admin.master-admin')

@section('content')
    <div class="">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="infor_hospital" class="col-md-12">
          <h2 class="hospital">Bệnh Viện Đà Nẵng</h2>
          <!-- post article -->
          <form class="infor_hospital" action="{{$urlPost}}" method="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input class="form-control" type="text" name="ten" placeholder=" Nhập tên bệnh viện" value="{{ isset($benhvien) ? $benhvien->ten : '' }}">
              <input class="form-control" type="text" name="diachi" placeholder=" Địa chỉ " value="{{ isset($benhvien) ? $benhvien->diachi : '' }}">
              <input class="form-control" type="text" name="sodienthoai" placeholder=" Số điện thoại " value="{{ isset($benhvien) ? $benhvien->sodienthoai : '' }}">
              <input class="form-control" type="text" name="email" placeholder=" Email " value="{{ isset($benhvien) ? $benhvien->email : '' }}" >
              <textarea class="form-control" name="thongtin" placeholder="Thông tin">{{ isset($benhvien) ? $benhvien->thongtin : '' }}</textarea>
              <div class="button">
                <button class="btn btn-primary"> Thêm </button>
                <a class="btn btn-default" href="{{ action('HopitalController@getHopitals') }}"> Bỏ qua </a>
              </div>
          </form>
          <table  class="table table-bordered">
            <thead>
              <tr>
                <th> Tên Bệnh Viện </th>
                <th> Địa Chỉ </th>
                <th> Số Điện Thoại </th>
                <th> Email </th>
                <th class="infor"> Thông Tin </th>
                <th class="option"> Tùy Chọn </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($benhviens as $benhvien)
                <tr>
                  <td>{{ $benhvien->ten }}</td>
                  <td>{{ $benhvien->diachi }}</td>
                  <td>{{ $benhvien->sodienthoai }}</td>
                  <td>{{ $benhvien->email }}</td>
                  <td>{{ $benhvien->thongtin }}</td>
                  <td class="option">
                    <a class="btn btn_edit" href="{{action('HopitalController@getEditHopital', $benhvien->id)}}"> Chỉnh Sửa</a>
                    <a class="btn btn_delete" data-href="{{ action('HopitalController@postDestroyHopital', $benhvien->id) }}" data-token="{{ csrf_token() }}"> Xóa </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

<script type="text/javascript">
  $(document).ready(function(){
      $(".btn_delete").click(function(){
          var link = $(this).data('href');
          var token = $(this).data('token');
          var r = confirm("Are you want to delete ?");
          if (r == true) {
            $.ajax({
              url : link,
              type : 'POST',
              data : { _token : token },
              success : function(result) {
                if (result.status == 200) {
                  window.location.reload(true);
                }
              }
            })
          } 
      });
  });
</script> 
@stop
