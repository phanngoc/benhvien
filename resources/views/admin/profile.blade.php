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
          <p style="color: #3c763d; font-weight:bold;">Admin: </p><span class="name">{{ $user->hoten }}</span>
          <form class="infor_profile" action="{{ route('admin.updateProfile') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input class="form-control" type="text" placeholder="FullName" name="hoten" value="{{ $user->hoten }}" disabled>
            <input class="form-control" type="text" placeholder="Email" name="email" value="{{ $user->email }}" disabled>
            <input class="form-control" type="text" placeholder="UserName" name="username" value="{{ $user->username }}" disabled>
            <input class="form-control" type="password" placeholder="PassWord" name="password" value="{{ $user->password }}" disabled>
            <div class="btn_">
              <button type="button" class="btn btn-primary btn_edit_profile">Edit</button>
              <button type="submit" class="btn btn-default btn_ok">OK</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop
