@extends('admin.master-admin')

@section('content')
    <div class="">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="room" class="col-md-12">
          <h2 class="hospital">Bệnh Viện Đa Khoa Đà Nẵng</h2>
          <!-- post article -->
          <h3 class="name_room"> Phòng Khám 1 </h3>
          <div class="doctor">
            <p > Bác Sỹ: </p> <span>Nguyễn Lê Thúy</span>
          </div>
          <form class="room">
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
                <button class="btn btn-primary"> OK</button>
            </div>
            <table  class="table table-bordered">
            <thead>
              <tr>
                <th> Tên Bệnh Nhân </th>
                <th> Giờ Khám </th>
                <th> Đã Khám</th>
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
@stop
