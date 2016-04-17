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
          <div class="list_patient">
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
                <button class="btn btn-primary btn_edit_patient"> Đăng tải</button>
            </div>
            <table  class="table table-bordered">
              <thead>
                <tr>
                  <th> Bệnh Viện </th>
                  <th> Họ Tên </th>
                  <th> Chức Vụ </th>
                  <th> Email </th>
                  <th class="content_idea"> Nội Dung </th>
                  <th> Trạng Thái Đăng </th>
                  <th> Tùy Chọn </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ykienphanhois as $ykienphanhoi)
                  <tr>
                    <td> {{ $ykienphanhoi->benhvien->ten }} </td>
                    <td> {{ $ykienphanhoi->hoten }} </td>
                    <td> </td>
                    <td>{{ $ykienphanhoi->email }}</td>
                    <td class="content_idea"> {{ $ykienphanhoi->ykien }} </td>
                    <td class="status"> <input type="checkbox" name="status" {{ ($ykienphanhoi->status == 1) ? 'checked' : '' }} /> </td>
                    <td>
                      <button class="btn btn_edit"> <a href="{{ action('AdminController@getEditIdea', $ykienphanhoi->id) }}">Chỉnh Sửa </a></button>
                      <button class="btn btn_delete"> Xóa </button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--  -->

@stop
