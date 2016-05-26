@extends('admin.master-admin')

@section('content')
    <div class="">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="patients" class="col-md-12">
          <h2 class="hospital">Danang Hospital</h2>
          <!-- post article -->
            <table  class="table table-bordered" id="list-patient">
            <thead>
              <tr>
                <th>ID</th>
                <th> Full name </th>
                <th> Birtdate </th>
                <th> Email </th>
                <th> Identity Card </th>
                <th> Sex </th>
                <th> Phone Number </th>
                <th> Address </th>
                <th> Option </th>
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

      $(function () {
          $('#list-patient').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": false,
            "bAutoWidth": false
          });
      });

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
