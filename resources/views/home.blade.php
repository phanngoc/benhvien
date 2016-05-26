@extends('master')

@section('content')
		<div id="content">
			<div id="wd-wrapper">
				<header>
					<!-- ====== menu ===== -->
					<div class="navbar-fixed">
						<div id="bg_menu" class="first">
							 <nav>
							    <div class="nav-wrapper">
							      <a href="{{ route('homepage') }}" class="brand-logo logo">Logo</a>
							      <ul id="nav-mobile" class="right hide-on-med-and-down">
							      	<li><a href="#wd-wrapper">HOMEPAGE </a></li>
							        <li><a href="#sign">REGISTER EXAMINATION</a></li>
							        <li><a href="#information">NEWS</a></li>
							        <li><a href="#news">DEPARTMENT</a></li>
							        <li><a href="#find">LOCATION</a></li>
									<li><a href="#response1">VIEW FEEDBACK</a></li>
									<li><a href="#response2">SEND FEEDBACK</a></li>
							      </ul>
							    </div>
							  </nav>
						</div>
					</div>
<!-- ============================================= section hompage ============================================ -->
					<section id="banner" class="each">
						<!-- ========== swiper slider ========== -->
						<div class="swiper-container">
							<img  class="banner" src="{{asset('uploads/'.$benhvien->hinhanh)}}">
							<!-- <div class="dark"></div> -->
							<marquee class="scoll_text" behavior="scroll" direction="up" style"height:100px;" scrolldelay="250"> {{ $benhvien->thongtin }}<br><br>Email: {{ $benhvien->email }} <br>Phone Number: {{ $benhvien->sodienthoai }}</span></marquee>
				        </div>
						
						<!-- display choose dropdown ======== -->
						<div id="choose_hospital" class="hospital_detail_text">
							<h2 id="name_hospital" class="screen ">{{ $benhvien->ten }}</h2>

							<div  class="input-field col s12 m6 input_center ">
				                <select id="mySelectBox" class="icons " name="mySelectBox">
				                  <option value="" disabled selected>Visit</option>
										@foreach ($benhviens as $bv)
											@if ($bv->id == $benhvien->id)
												<option value="{{ $bv->id }}" class="circle" selected>{{$bv->ten}}</option>
											@else
												<option value="{{ $bv->id }}" class="circle">{{$bv->ten}}</option>
											@endif
										@endforeach
				                </select>
				            </div>
	            		<button class="btn waves-effect waves-light" type="submit" name="action"><a href="#sign">Register</a>
						    <i class="material-icons right">settings_phone</i>
						</button>
						</div>

						<script type="text/javascript">
							$(document).ready(function(){
								$('select[id="mySelectBox"]').change(function(){
									var idBenhvien = $(this).val();
									window.location.href = "{{URL::to('/')}}/home/"+idBenhvien;
								});
							});
						</script>

					</section>
				</header>
<!-- ================================ section dang ki kham benh ======================================================= -->
				
				<section id="sign" class="container each">
					@include('mainpage.show-info-personal')
					@if ($user == null)
						<div class="wd-header-line col-lg-12 col-md-12 col-sm-12 col-xs-12 form_sign_medical">
							<h2 class="title">REGISTER EXAMINATION</h2>
							<!-- choose step ======== -->
							<ul class="step">
								<li id="step_1" class="circle1 active2 wow animatedsss bounceIn">Step 1</li>
								<li id="step_2" class="circle1 wow animatedsss bounceIn">Step 2</li>
								<li id="step_3" class="circle1 wow animatedsss bounceIn">Step 3</li>
								<li id="step_4" class="circle1 wow animatedsss bounceIn">Step 4</li>
							</ul>
							<hr class="connect"></hr>
							<!-- form dang nhap ID benh nhan khi nguoi dung la benh nhan ========== -->
							<button class="btn  wow animateds fadeInRightBig signin btn-info btn-lg" type="submit" data-toggle="modal" data-target="#myModal" data-backdrop="false" data-dismiss="modal">LOGIN
							</button>
							<!-- model display when click button =========-->
							<div class="modal fade form_login" id="myModal" role="dialog">
							    <div class="modal-dialog">
							      <form class="login" action="{{ route('login', $benhvien->id) }}" method="POST">
							      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
							      	<div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal">&times;</button>
								          <h4 class="modal-title">LOGIN</h4>
								        </div>
								        <div class="modal-body">
								            <input id = "username" class="group-control user" name="email" type="text" placeholder = "ID Benh nhan">
										  	<input id = "password" type="password" class="group-control pass" name="password" type="text" placeholder = "Mat khau">
								        </div>
								        <div class="modal-footer">
								          <button id= "btn_login" class="btn btn-primary btn_login">LOGIN</button>
								          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								        </div>
								      </div>
							      </form>
							    </div>
							 </div>
		  					<!-- form dang ki, nguoi dung dien thong tin vao form  -->
							<div class="row">
							    @include('mainpage.form-register-info-user')
							</div>
						</div>
					@endif
				</section>
				
				<hr class="border">
			<!-- section hien thi tin tuc ========================================================================= -->
				@include('mainpage.show-category-news')
				<hr class="border">
			<!-- section cac Khoa, Phong ban cua benh vien ============================================================= -->
				<section id="news" class="each">
					<article>
				    <h2 class="title">OVERVIEW ABOUT DEPARTMENT</h2>
				    <!-- list khoa ======= -->
				    <ul class="khoa_list" id="list_khoa">
			            @foreach($khoas as $khoa)
							<li data-name="{{$khoa->tenkhoa}}" data-info="{{ $khoa->thongtin }}" data-image="{{ asset('uploads/'.$khoa->hinhanh)}}" class="khoa_item js-show-detail animateds fadeInDown">
								<a data-toggle="modal" data-target="#myModal{{$khoa->id}}">
									<p class="khoa_title">{{$khoa->tenkhoa}}</p>
								</a>			
							</li>
						@endforeach
			          </ul>
			          </article>
				</section>
				<hr class="border">

			<!-- section tra cuu thong tin benh vien, dia chi benh vien ======================================================== -->
				@include('mainpage.search-info-hopital')
				<hr class="border">
			<!-- section Y kien khach hang hien thi ================================== -->
				<section id="response1" class="container each">
					<h2 class="title">IDEAS FEEDBACK</h2>
					<div class="als-container" id="idea">
						<span class="als-prev"><img src="{{ asset('img/images/btn_previous.png')}}" alt="prev" title="previous" /></span>
					  <!--  -->
					  <div class="als-viewport">
					  	<ul class="als-wrapper list_images">
						@foreach ($ykienphanhoi as $key => $ykien)
						  <a href="#idea_item{{$key}}" class="click_show">
						      <li class="als-item wow animateds zoomIn">
						      	<div id="flip{{ ($key == 0) ? '' : $key }}">
									<div class="anh">
										<img class="circle" src="{{ asset('img/images/user_icon.png')}}"></img>
									</div>
									<div class="name">
										<h4 class="full_name">{{ $ykien->hoten }}</h4>
										<p class="job">{{ $ykien->email }}</p>
									</div>
								</div>
									<!-- thong tin y kien khi click vao khach hang -->
								<div id="infor{{ ($key == 0) ? '' : $key }}">
									<p>{{ $ykien->ykien }}</p>
								 </div>
						       </li>
					      </a>
						@endforeach
					    </ul>
					  </div>
					   <span class="als-next"><img src="{{ asset('img/images/btn_next.png')}}" alt="next" title="next" /></span> <!-- "next" button -->
					  <div class="content_ideas" style="display: none;">
							@foreach ($ykienphanhoi as $key => $ykien)
							    <div id="idea_item{{$key}}" class="detail_idea">
									<div class="ct-close"><a href="#response1" class="closes">x</a></div>
									<div class="content_idea">
										{{ $ykien->ykien }}
									</div>
								</div>
							@endforeach
					    </div>
					</div>

				</section>
			    <hr class="border">
<!-- section Phan hoi cua nguoi dung ============================================== -->
		@include('mainpage.ykien')
		<!-- footer -->
	<!-- click vao ten khoa, se hien ra thong tin chi tiet cua khoa -->
	<div class="row TTKhoa modal fade" id="myModal-detail" role="dialog" style="width: 100%; max-height: 100%;">
		 <div class="modal-dialog content_dialog">
			 <div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 id="detail-name" class="modal_title"></h2>
				</div>
				<div class="modal-body">
					<div class="img_content">
						<div class="view view-fifth">
							<a href="#ns-6" class="click-view-detail image">
								<img id="detail-image" src="" alt="" />
								<span class="line"></span>
							</a>
						</div>
					</div>
					<div class="para">
						<p id="detail-info"></p>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- .row TTKhoa modal fade -->
	 <footer class="page-footer">
	  <div class="container">
	    <div class="row">
	      <div class="col l6 s12">
	        <h5 class="white-text">BENH VIEN DA NANG</h5>
	        <p class="grey-text text-lighten-4">Email: hospitaldanang@yahoo.com</p>
	        <p class="grey-text text-lighten-4">Phone: 0511(3) 101.222</p>
	      </div>
	      <div class="col l4 offset-l2 s12">
	        <ul>
	          <li>
	          	<a class="grey-text text-lighten-3" href="#!"><i class="icon_facebook">&nbsp</i></a>
	          </li>
	          <li><a class="grey-text text-lighten-3" href="#!"><i class="icon_twiter">&nbsp</i></a></li>
	          <li><a class="grey-text text-lighten-3" href="#!"><i class="icon_google">&nbsp</i></a></li>
	        </ul>
	      </div>
	    </div>
	  </div>
	  <div class="footer-copyright">
	    <div class="container">
	    © 2016 Copyright Benh vien Danang
	    </div>
	  </div>
	</footer>
	@stop
