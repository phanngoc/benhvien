@extends('admin.master-admin')

@section('content')
    <div class="col-md-12">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="list_room" class="col-md-12">
          <h2 class="hospital">Bệnh Viện Đà Nẵng</h2>
          <!-- post article -->
          <form class="list_room">
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
                <button class="btn btn-primary"> <a href="{{action('RoomController@getCreateRoom')}}"> Tạo mới </a></button>
            </div>
            <table  class="table table-bordered">
              <thead>
                <tr>
                  <th> Bệnh Viện </th>
                  <th> Tên Phòng </th>
                  <th> Dịch Vụ </th>
                  <th> Bác Sỹ Trực </th>
                  <th> Số Lượng Bệnh Nhân </th>
                  <th class="option"> Tùy Chọn </th>
                </tr>
              </thead>
              <tbody>
                @foreach($rooms as $room)
                  <tr>
                    <td>{{ $room->dichvu->benhvien->ten }}</td>
                    <td><a href="{{action('AdminController@getInRoom')}}">{{ $room->ten }}</a></td>
                    <td>{{ $room->dichvu->tendichvu }}</td>
                    <td> {{ $room->bacsi }} </td>
                    <td style="text-align: center;"> 8 </td>
                    <td class="option">
                      <a class="btn btn_edit" href="{{action('RoomController@getEditRoom', $room->id)}}"> Chỉnh Sửa </a>
                      <a class="btn btn-danger" data-href="{{ action('RoomController@postDestroyRoom', $room->id) }}" data-token="{{ csrf_token() }}" >Xóa</a>
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
