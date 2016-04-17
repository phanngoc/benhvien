@extends('admin.master-admin')

@section('content')
    <div class="col-md-12">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="patients" class="col-md-12">
          <h2 class="hospital">Bệnh Viện Đà Nẵng</h2>
          <!-- post article -->
            <div class="inputs">
              <!-- search -->
              <div class="input-group stylish-input-group search_input">
                  <input type="text" class="form-control"  placeholder="Search" >
                  <span class="input-group-addon">
                      <button type="submit">
                          <span class="glyphicon glyphicon-search"></span>
                      </button>
                  </span>
              </div>
                <!-- button -->
                <button class="btn btn-primary btn_edit_patient"> OK</button>
            </div>
            <table  class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th> Họ Tên </th>
                <th> Ngày Sinh </th>
                <th> Email </th>
                <th> CMND </th>
                <th> Giới Tính </th>
                <th> Số Điện Thoại </th>
                <th> Địa Chỉ </th>
                <th class="option"> Tùy Chọn </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($benhnhans as $benhnhan)
              <tr>
                <td>{{ $benhnhan->id }}</td>
                <td>{{ $benhnhan->hoten }}</td>
                <td>{{ substr($benhnhan->ngaysinh,0,10) }}</td>
                <td>{{ $benhnhan->email }}</td>
                <td>{{ $benhnhan->CMND }}</td>
                <td>{{ ($benhnhan->gioitinh == 1) ? 'Nu' : 'Nam' }}</td>
                <td>{{ $benhnhan->sodienthoai }}</td>
                <td>{{ $benhnhan->diachi }}</td>
                <td class="option">
                  <a class="btn btn_delete" data-href="{{action('AdminController@postDestroyPatient', $benhnhan->id)}}" data-token = "{{ csrf_token() }}"> Xóa </a>
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
                });
              } 
          });
      });
    </script>
@stop
