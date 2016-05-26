@extends('admin.master-admin')

@section('content')
    <div class="">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="list_room" class="col-md-12">
          <h2 class="hospital">Danang Hospital</h2>
          <!-- post article -->
          <form class="list_room">
            <div class="inputs">
                <!-- button -->
                <button class="btn btn-primary"> <a href="{{action('RoomController@getCreateRoom')}}"> Create </a></button>
            </div>
            <table  class="table table-bordered" id="list-room">
              <thead>
                <tr>
                  <th> Hospital </th>
                  <th> Clinic </th>
                  <th> Services </th>
                  <th> Docter </th>
                  <th> Number of Patient </th>
                  <th class="option"> Option </th>
                </tr>
              </thead>
              <tbody>
                @foreach($rooms as $room)
                  <tr>
                    <td>{{ $room->dichvu->benhvien->ten }}</td>
                    <td><a href="{{action('AdminController@getInRoom', $room->id)}}">{{ $room->ten }}</a></td>
                    <td>{{ $room->dichvu->tendichvu }}</td>
                    <td> {{ $room->bacsi }} </td>
                    <td style="text-align: center;"> {{ $room->countpatient }} </td>
                    <td class="option">
                      <a class="btn btn_edit" href="{{action('RoomController@getEditRoom', $room->id)}}"> Chỉnh Sửa </a>
                      <a class="btn btn-danger btn_delete" data-href="{{ action('RoomController@postDestroyRoom', $room->id) }}" data-token="{{ csrf_token() }}" >Xóa</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
          </form>
        </div>
      </div>
    </div>

<script type="text/javascript">

  $(function () {
    $('#list-room').dataTable({
      "bPaginate": true,
      "bLengthChange": false,
      "bFilter": true,
      "bSort": true,
      "bInfo": false,
      "bAutoWidth": false
    });
  });
  
  $(document).ready(function(){
      $(".btn-danger").click(function(){
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
