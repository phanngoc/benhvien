@extends('admin.master-admin')

@section('content')
    <div class="col-md-12">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="list_room" class="col-md-12">
          <h2 class="hospital">Bệnh Viện Đa Khoa Đà Nẵng</h2>
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
                <button class="btn btn-primary btn_edit"> <a href="../dat kham online/create_new_room.html"> Tạo mới </a></button>
            </div>
            <table  class="table table-bordered">
            <thead>
              <tr>
                <th> ID Phòng </th>
                <th> Tên Phòng </th>
                <th> Dịch Vụ </th>
                <th> Bác Sỹ Trực </th>
                <th> Số Lượng Bệnh Nhân </th>
                <th class="option"> Tùy Chọn </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PK01</td>
                <td><a href="{{action('AdminController@getInRoom')}}">Phòng Khám 1 </a></td>
                <td> Khám Nội </td>
                <td> Trần Hà Giang </td>
                <td> 8 </td>
                <td class="option">
                  <button class="btn btn_edit"> <a href="../dat kham online/create_new_room.html"> Chỉnh Sửa </a></button>
                  <button class="btn btn_delete"> Xóa </button>
                </td>
              </tr>
              <tr>
                <td>PK02</td>
                <td> <a href="../dat kham online/rooms.html">Phòng Khám 2 </a></td>
                <td> Siêu Âm </td>
                <td> Trần Hà Giang </td>
                <td> 20 </td>
                <td class="option">
                  <button class="btn btn_edit"> Chỉnh Sửa</button>
                  <button class="btn btn_delete"> Xóa </button>
                </td>
              </tr>
              <tr>
                <td>PK03</td>
                <td> <a href="../dat kham online/rooms.html">Phòng Khám 3 </a></td>
                <td> Khám Ngoại</td>
                <td> Trần Hà Giang </td>
                <td> 12 </td>
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
