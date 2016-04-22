<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}" type="text/css" media="screen" />
</head>
<style type="text/css">
	.title_login {
		margin: 0 auto;
		margin-bottom: 35px;
	    text-align: center;
	    font-size: 30px;
	    font-weight: bold;
	    color: rgb(187, 10, 10);
	}
	#login {
	  text-align: center;
	  width: 300px;
	  margin: 0 auto;
	  padding-top: 50px;
	}
	#login .user {
		width: 300px;
	  height: 35px;
	  color: #535353;
	  margin-bottom: 6px;
	  border-radius: 3px;
	  border: 1px solid #A9A3A3;
	  padding-left: 10px;
	  display: inherit;
	}
	#login .pass {
		width: 300px;
	  height: 35px;
	  color: #535353;
	  margin-bottom: 20px;
	  border-radius: 3px;
	  border: 1px solid #A9A3A3;
	  padding-left: 10px;
	}
	.check {
		float: left;
	    margin-bottom: 10px;
	}
	.check input[type=checkbox]{
		margin-right: 7px;
	}
	.check:after {
		clear: both;
		content: "";
	}
	.btn_login {
		width: 300px !important;
	}
</style>
<body>
<form id="login">
    <p class="title_login">LOGIN</p>
    <input id = "username" class="group-control user" type="text" placeholder = "username">
    <input id = "password" class="group-control pass" type="text" placeholder = "password">
    <div class="check">
      <input type="checkbox"><span>Remember</span>
    </div>
    <button id= "btn_login" class="btn btn-primary btn_login">LOGIN</button>
  </form>
<script src="{{ asset('js/jquery-1.11.0.min.js')}}" type="text/javascript"></script>
</body>
</html>