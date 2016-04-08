@extends('admin.master-admin')

@section('content')
    <div class="col-md-12">
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
                <button class="btn btn-primary btn_edit"> OK</button>
            </div>
            <table  class="table table-bordered">
            <thead>
              <tr>
                <th> ID Bệnh Nhân </th>
                <th> Tên Bệnh Nhân </th>
                <th> Giờ Khám </th>
                <th> Đã Khám</th>
                <th class="option"> Tùy Chọn </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>BN01</td>
                <td> Lê Văn Huy </td>
                <td class="set_time"> 8:00 23/4/2016 </td>
                <td class="status"> <input type="checkbox"> </td>
                <td class="option">
                  <button class="btn btn_edit"> Chỉnh Sửa</button>
                  <button class="btn btn_delete"> Xóa </button>
                </td>
              </tr>
              <tr>
                <td>BN01</td>
                <td> Lê Văn Huy </td>
                <td class="set_time"> 8:00 23/4/2016 </td>
                <td class="status"> <input type="checkbox"> </td>
                <td class="option">
                  <button class="btn btn_edit"> Chỉnh Sửa</button>
                  <button class="btn btn_delete"> Xóa </button>
                </td>
              </tr>
              <tr>
                <td>BN01</td>
                <td> Lê Văn Huy </td>
                <td class="set_time"> 8:00 23/4/2016 </td>
                <td class="status"> <input type="checkbox"> </td>
                <td class="option">
                  <button class="btn btn_edit"> Chỉnh Sửa</button>
                  <button class="btn btn_delete"> Xóa </button>
                </td>
              </tr>
            </tbody>
          </table>
          </form>
        </div>
      </div>
    </div>
@stop
