@extends('admin.master-admin')

@section('content')
    <form id="login" style="display:none;">
      <p class="title_login">LOGIN</p>
      <input id = "username" class="group-control user" type="text" placeholder = "username">
      <input id = "password" class="group-control pass" type="text" placeholder = "password">
      <div class="check">
        <input type="checkbox"><span>Remember</span>
      </div>
      <button id= "btn_login" class="btn btn-primary btn_login">LOGIN</button>
    </form>
    <div class="col-md-12">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="patients" class="col-md-12">
          <h2 class="hospital">Bệnh Viện Đa Khoa Đà Nẵng</h2>
          <!-- post article -->
          <form class="list_patient">
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
                <th> Phòng Khám </th>
                <th> Giờ Khám </th>
                <th> Đã Khám </th>
                <th class="option"> Tùy Chọn </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>BN01</td>
                <td> Lê Văn Huy </td>
                <td>09/04/1992</td>
                <td>abc@gmail.com</td>
                <td> 187367824 </td>
                <td>Nam </td>
                <td>0974635284</td>
                <td> Hải Châu, Đà Nẵng </td>
                <td class="set_room"><a href="../dat kham online/rooms.html"> Phòng 1 </a></td>
                <td class="set_time"> 8:00 23/4/2016 </td>
                <td> <input type="checkbox"> </td>
                <td class="option">
                  <button class="btn btn_edit"> <a href="../dat kham online/edit_patient.html">Chỉnh Sửa</a></button>
                  <button class="btn btn_delete"> Xóa </button>
                </td>
              </tr>
              <tr>
                <td>BN02</td>
                <td> Nguyễn Thị Thu Hương </td>
                <td>09/04/1992</td>
                <td>abc@gmail.com</td>
                <td> 187367824 </td>
                <td>Nữ </td>
                <td>0974635284</td>
                <td> Hải Châu, Đà Nẵng </td>
                <td class="set_room"> <a href="../dat kham online/rooms.html">Phòng 2 </a></td>
                <td class="set_time"> 8:00 23/4/2016 </td>
                <td> <input type="checkbox"> </td>
                <td class="option">
                  <button class="btn btn_edit"> Chỉnh Sửa</button>
                  <button class="btn btn_delete"> Xóa </button>
                </td>
              </tr>
              <tr>
                <td>BN02</td>
                <td> Nguyễn Thị Thu Hương </td>
                <td>09/04/1992</td>
                <td>abc@gmail.com</td>
                <td> 187367824 </td>
                <td>Nữ </td>
                <td>0974635284</td>
                <td> Hải Châu, Đà Nẵng </td>
                <td class="set_room"> <a href="#">Phòng 3 </a></td>
                <td class="set_time"> 8:00 23/4/2016 </td>
                <td> <input type="checkbox" checked> </td>
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
    <!--  -->
@stop
