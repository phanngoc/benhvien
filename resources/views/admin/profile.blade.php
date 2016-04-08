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
      <div id="profile" class="col-md-12">
        <h2 class="hospital">Bệnh Viện Đa Khoa Đà Nẵng</h2>
        <div class="wrap_infor">
          <p style="color: #3c763d; font-weight:bold;">Admin: </p><span class="name">Nguyễn Văn An</span> <span class="ID">Mã ID: 102110115</span>
          <form class="infor_profile">
            <input class="fullname" type="text" placeholder="FullName" disabled>
            <input class="user" type="text" placeholder="UserName" disabled>
            <input class="pass" type="password" placeholder="PassWord" disabled>
            <div class="btn_">
              <button type="button" class="btn btn-primary btn_edit_profile">Edit</button>
              <button type="button" class="btn btn-default btn_ok">OK</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop
