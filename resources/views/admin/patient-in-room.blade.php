@extends('admin.master-admin')

@section('content')
    <div class="">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="room" class="col-md-12">
          <h2 class="hospital">{{ $phongkham->dichvu->benhvien->ten }}</h2>
          <!-- post article -->
          <h3 class="name_room"> {{ $phongkham->ten }} </h3>
          <div class="doctor">
            <p > Dr: </p> <span>{{ $phongkham->bacsi }}</span>
          </div>
          <form class="room">
            <div class="inputs">

            </div>
            <table  class="table table-bordered" id="patient-in-room">
            <thead>
              <tr>
                <th> Patient's name </th>
                <th> Time </th>
                <th> Make a exam </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($thongtinkhams as $thongtinkham)
                <tr>
                  <td> {{ $thongtinkham->benhnhan->hoten }} </td>
                  <td class="set_time"> {{ $thongtinkham->thoigiankham }} </td>
                  <td class="status"> <input type="checkbox" {{ ($thongtinkham->dakham == 1) ? 'checked' : '' }} /> </td>
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
          $('#patient-in-room').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": false,
            "bAutoWidth": false
          });
        });
    </script>
@stop
