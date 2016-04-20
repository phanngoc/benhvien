@extends('admin.master-admin')
@section('content')
  <form id="login">
    <p class="title_login">LOGIN</p>
    <input id = "username" class="group-control user" type="text" placeholder = "username">
    <input id = "password" class="group-control pass" type="text" placeholder = "password">
    <div class="check">
      <input type="checkbox"><span>Remember</span>
    </div>
    <button id= "btn_login" class="btn btn-primary btn_login">LOGIN</button>
  </form>
@stop
