<!DOCTYPE html>
<html>
<head>
	<title>Đặt lịch khám</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="{{ asset('img/front/favicon.ico')}}" type="image/x-icon" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css')}}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ asset('css/swiper.min.css')}}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ asset('css/animate.css')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="stylesheet" href="{{ asset('css/common.css')}}" type="text/css" media="screen,projection" />
	<script src="{{ asset('js/jquery-1.11.0.min.js')}}" type="text/javascript"></script>
</head>
<body>
<!-- loading ======== -->
	<div class="loading">
	    <div class="top-load">
	        <div id='qLlogo' class="fadeInDownBig animated">
	            <img src="{{ asset('img/front/logo.png')}}" alt="" />
	        </div>
	        <div class="bg-filter"></div>
	    </div>
	    <div class="bottom-load">
	        <div class="load-bar"></div>
	        <div class="bg-filter"></div>
	    </div>
	</div>
		<div id="content">
			<div id="wd-wrapper">
				<header>
<!-- ============================================= section hompage ============================================ -->
					<section id="banner" class="each">
					<!-- ====== menu ===== -->
						<div class="navbar-fixed">
							<div id="bg_menu" class="first fadedown">
								 <nav>
								    <div class="nav-wrapper">
								      <a href="#wd-wrapper" class="brand-logo logo">Logo</a>
								      <ul id="nav-mobile" class="right hide-on-med-and-down">
								        <li><a href="#sign">ĐĂNG KÍ KHÁM</a></li>
								        <li><a href="#information">TIN TỨC</a></li>
								        <li><a href="#news">THÔNG TIN KHOA</a></li>
								        <li><a href="#find">TRA CỨU</a></li>
												<li><a href="#response1">Ý KIẾN KHÁCH HÀNG</a></li>
												<li><a href="#response2">PHẢN HỒI</a></li>
								      </ul>
								    </div>
								  </nav>
							</div>
						</div>
						<!-- ========== swiper slider ========== -->
						<div class="swiper-container">
				        <div class="swiper-wrapper">
					            <div class="swiper-slide">
								    <img src="{{ asset('img/images/2.jpg')}}" alt="" class="image img-responsive">
								</div>

								<div class="swiper-slide">
								    <img src="{{ asset('img/images/3.jpg')}}" alt="" class="image img-responsive" >
								</div>

								<div class="swiper-slide">
								    <img src="{{ asset('img/images/4.jpg')}}" alt="" class="image img-responsive">
								</div>

								<div class="swiper-slide">
								    <img src="{{ asset('img/images/5.jpg')}}" alt="" class="image img-responsive">
								</div>
								<div class="swiper-slide">
								    <img src="{{ asset('img/images/6.jpg')}}" alt="" class="image img-responsive">
								</div>
							</div>
							<div class="dark">
							</div>
				        </div>
				        <!--  display content introduce of each hospital when click ====== -->
						<div class="introduce hidden-sm" style="display: none;">
							Tổ chức Y tế thế giới WHO xếp các loại thịt chế biến như xúc xích, thịt xông khóa… vào nhóm thực phẩm có khả năng gây ung thư cao tương đương với formaldehyde, thuốc lá, bức xạ gamma. Thịt đỏ cũng là một thực phẩm dễ gây ung thư. Các chuyên gia cho biết, khẩu phần ăn chứa 50 g thịt chế biến sẵn mỗi ngày khiến tăng 18% nguy cơ mắc ung thưa. Tuy nhiên, nhiều người vẫn tranh cãi rằng, mức độ rủi ro có thể không nghiêm trọng đến vậy.
						</div>
						<!-- display choose dropdown ======== -->
						<div id="choose_hospital" class="text">
							<h2 id="name_hospital" class="screen fadeleft">BỆNH VIỆN ĐÀ NẴNG</h2>
							<p class="center fadeleft">-------------- Hệ thống đặt khám trực tuyến ---------------</p>

							<div  class="input-field col s12 m6 input_center fadeleft">
	                <select id="mySelectBox" class="icons fadeleft" name="mySelectBox">
	                  <option value="" disabled selected>Ghé Thăm</option>
										@foreach ($benhviens as $benhvien)
											<option value="{{ $benhvien->id }}" data-icon="{{asset('img/images/4.jpg')}}" class="circle">{{$benhvien->ten}}</option>
										@endforeach
	                  <!-- <option value="Bệnh viện đa khoa Đà Nẵng" data-icon="{{asset('img/images/4.jpg')}}" class="circle">BỆNH VIỆN ĐA KHOA ĐÀ NẴNG</option>
	                  <option value="Bệnh viện C Đà Nẵng" data-icon="{{asset('img/images/5.jpg')}}" class="circle">BỆNH VIỆN C ĐÀ NẴNG</option>
	                  <option value="Bệnh viện Phụ sản Đà Nẵng" data-icon="{{asset('img/images/7.jpg')}}" class="circle">BỆNH VIỆN PHỤ SẢN ĐÀ NẴNG</option> -->
	                </select>
				      </div>
	            <button class="btn waves-effect waves-light fadeleft" type="submit" name="action">Đặt khám
							    <i class="material-icons right">settings_phone</i>
							</button>
						</div>

						<script type="text/javascript">
							$(document).ready(function(){
								$('select[id="mySelectBox"]').change(function(){
										var idBenhvien = $(this).val();
										window.location.href = "{{route('home')}}/"+idBenhvien;
								});
							});
						</script>

					</section>
				</header>
<!-- ================================ section dang ki kham benh ======================================================= -->
				<section id="sign" class="container each">
					<div class="wd-header-line col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2 class="title">ĐĂNG KÍ KHÁM BỆNH</h2>
						<!-- choose step ======== -->
						<ul class="step">
							<li id="step_1" class="circle1 wow animatedsss bounceIn">Bước 1</li>
							<li id="step_2" class="circle1 wow animatedsss bounceIn">Bước 2</li>
							<li id="step_3" class="circle1 wow animatedsss bounceIn">Bước 3</li>
							<li id="step_4" class="circle1 wow animatedsss bounceIn">Bước 4</li>
						</ul>
						<!-- form dang nhap ID benh nhan khi nguoi dung la benh nhan ========== -->
						<button class="btn  wow animateds fadeInRightBig signin btn-info btn-lg" type="submit" data-toggle="modal" data-target="#myModal">Đăng Nhập ID Bệnh Nhân
						</button>
						<!-- model display when click button =========-->
						<div class="modal fade" id="myModal" role="dialog">
						    <div class="modal-dialog">
						      <form class="login">
						      	<div class="modal-content">
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">LOGIN</h4>
							        </div>
							        <div class="modal-body">
							          <input id = "username" class="group-control user" type="text" placeholder = "ID Benh nhan">
									  		<input id = "password" class="group-control pass" type="text" placeholder = "Mat khau">
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
						    <form class="col s12">
						    <!-- first form ===================================== -->
							    <div id="first_form" class="animated fadeInRightBig">
							    	<div class="row">
							        <div class="input-field col s6 wow animatedss fadeInLeftBig">
							          <i class="material-icons prefix">account_circle</i>
							          <input id="icon_prefix" type="text" class="validate" name="hoten">
							          <label for="icon_prefix">Họ tên:</label>
							        </div>
							        <div class="input-field col s6 wow animatedss fadeInRightBig">
							          <i class="material-icons prefix">phone</i>
							          <input id="icon_telephone" type="tel" class="validate" name="phone">
							          <label for="icon_telephone">Số điện thoại: </label>
							        </div>
							      </div>

							       <div class="row">
							        	<div class="input-field col s6 wow animatedss fadeInLeftBig">
							        		<label class="lb_date"> Ngày sinh: </label>
								          <i class="material-icons prefix">account_circle</i>
								          <input id="icon_prefix" type="date">
								        </div>
								        <div class="input-field col s6 wow animatedss fadeInRightBig">
									        <i class="material-icons prefix">email</i>
									        <input id="email" type="email" class="validate" name="email">
									        <label for="icon_telephone">Email</label>
									        <label for="email" data-error="wrong" data-success="right">Email</label>
								        </div>
							        </div>

								    <div class="row">
								    	<div class="input-field col s6 wow animatedss fadeInLeftBig">
								          <i class="material-icons prefix">assignment_ind</i>
								          <input id="icon_prefix" type="text" class="validate" name="CMND">
								          <label for="icon_prefix">CMND:</label>
								        </div>
								        <div class="input-field col s6 wow animatedss fadeInRightBig">
								          <i class="material-icons prefix">location_on</i>
								          <input id="icon_telephone" type="tel" class="validate" name="diachi">
								          <label for="icon_telephone">Địa chỉ: </label>
								        </div>
								    </div>

								    <div class="row">
								        <div class="input-field col s12 wow animatedss fadeInLeftBig">
								        <label class="lb_date"> Giới tính: </label>
								        <i class="material-icons prefix">person_pin</i>
								           <div class="male">
										      <input name="group1" type="radio" id="test1" />
										      <label class="input_sex" for="test1" name="gioitinh" value="0">Male</label>
										    </div>
										    <div>
										      <input name="group1" type="radio" id="test2" />
										      <label class="input_sex" for="test2" name="gioitinh" value="1">Female</label>
										    </div>
								        </div>
								    </div>
									 <button id="first_btn" class="btn waves-effect waves-light continue wow animateds fadeInUpBig" type="button">Tiếp
									    <i class="material-icons right">send</i>
									 </button>
							    </div>
							    <!-- sencond form ========================================================-->
							    <div id="second_form" style="display:none;" class="animated fadeInRightBig">
										<input type="hidden" name="loaidichvu" value="0">
										<script type="text/javascript">
											$(document).ready(function(){
												$('.list-dichvu').find('li.collection-item').click(function(){
													var idDichvu = $(this).data('id');
													$('input[name="loaidichvu"]').val(idDichvu);
												});
											});
										</script>
							    	<ul class="collection with-header list-dichvu">
								        <li class="collection-header"><h2>Loại Dịch Vụ</h2></li>
												@foreach ($loaidichvus as $loaidichvu)
													<li class="collection-item" data-id = "{{$loaidichvu->id}}">
														<div>
															{{ $loaidichvu->tendichvu }}
															<a href="#!" class="secondary-content">{{ $loaidichvu->giatien }}<span>vnd</span></a>
														</div>
													</li>
												@endforeach
								    </ul>
								    <button id="second_btn" class="btn waves-effect waves-light continue wow animateds fadeInUpBig" type="button">Tiếp
									    <i class="material-icons right">send</i>
									 </button>
							    </div>
							    <!-- third form =========================================================s -->
							    <div id="third_form" class="animated fadeInRightBig" style="display:none;">
							    	<ul class="collection" id="list-phongkham">
											@foreach ($phongkhams as $phongkham)
												<li class="collection-item avatar">
													<span class="title">{{ $phongkham->ten }}</span>
													<p>Bác Sỹ: <br>
														 {{ $phongkham->bacsi }}
													</p>
													<a class="secondary-content form_datetime">
													 <input type="text" id="datepicker" class="datepicker">
												  </a>
												</li>
											@endforeach
									  </ul>
									  <button id="third_btn" class="btn waves-effect waves-light continue wow animateds fadeInUpBig" type="submit" name="action">Tiếp
									    <i class="material-icons right">send</i>
									  </button>
							    </div> <!-- #third_form -->
									<!-- form choose time -->
									<div id="fourth_form" class="animated fadeInRightBig" style="display:none;">
										<a class="secondary-content form_datetime">
											<input type="text" id="datepicker" class="datepicker">
										</a>
									  <button id="fourth_btn" class="btn waves-effect waves-light continue wow animateds fadeInUpBig" type="submit" name="action">Tiếp
									    <i class="material-icons right">send</i>
									  </button>
							    </div> <!-- #fourth_form -->
						    </form>
						</div>
					</div>
				</section>
				<hr>
<!-- section hien thi tin tuc ========================================================================= -->
				<section id="information" class="each container">
					<div class="wrap_news"></div>
					<h2 class="title3">TIN TỨC</h2>
					<div class="row">
						<ul class="infor col s12">
							<div class="col s12 m6 l3 per_infor">
								<li class="wow flipInY animatedss">
						        	<a href="#news1" class="menu_text click-view-detail">
						        		<img src="{{ asset('img/images/icon_news.png')}}">
						        		Tin hàng ngày
						        		<div class="des">
						        			<span class="sumary">
			                                	Dựng mô hình 3D ngoại thất, nội thất cho công trình. nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình fefwesgfsefgwdfas sAThiết lập camera, ánh sáng, rendering
			                                </span>
						        		</div>
						        	</a>
						        </li>
							</div>
					        <div class="col s12 m6 l3 per_infor">
					        	 <li class="wow flipInY animatedss">
						        	<a href="#news2" class="menu_text click-view-detail" >
						        		<img src="{{ asset('img/images/icon_doctor.png')}}">
						        		Giải pháp
						        		<div class="des">
						        			<span class="sumary">
			                                	Dựng mô hình 3D ngoại thất, nội thất cho công trình. nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình fefwesgfsefgwdfas sAThiết lập camera, ánh sáng, rendering
			                                </span>
						        		</div>
						        	</a>
						        </li>
					        </div>
					        <div class="col s12 m6 l3 per_infor">
					       		<li class="wow flipInY animatedss">
						        	<a href="#news1" class="menu_text click-view-detail">
						        		<img src="{{ asset('img/images/icon_advised.png')}}">
						        		Lời khuyên hữu ích
						        		<div class="des">
						        			<span class="sumary">
			                                	Dựng mô hình 3D ngoại thất, nội thất cho công trình. nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình fefwesgfsefgwdfas sAThiết lập camera, ánh sáng, rendering
			                                </span>
						        		</div>
						        	</a>
						        </li>
					        </div>
					        <div class="col s12 m6 l3 per_infor">
					        	<li class="wow flipInY animatedss">
						        	<a href="#news1" class="menu_text click-view-detail">
						        		<img src="{{ asset('img/images/icon_advised.png')}}">
						        		Lời khuyên hữu ích
						        		<div class="des">
						        			<span class="sumary">
			                                	Dựng mô hình 3D ngoại thất, nội thất cho công trình. nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình fefwesgfsefgwdfas sAThiết lập camera, ánh sáng, rendering
			                                </span>
						        		</div>
						        	</a>
						        </li>
					        </div>
					    </ul>
					</div>
					<!-- second row  -->
					<div class="row">
					    <ul class="infor col s12">
							<div class="col s12 m6 l3 per_infor">
								<li class="wow flipInY animateds">
						        	<a href="#news1" class="menu_text click-view-detail">
						        		<img src="{{ asset('img/images/icon_news.png')}}">
						        		Tin hàng ngày
						        		<div class="des">
						        			<span class="sumary">
			                                	Dựng mô hình 3D ngoại thất, nội thất cho công trình. nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình fefwesgfsefgwdfas sAThiết lập camera, ánh sáng, rendering
			                                </span>
						        		</div>
						        	</a>
						        </li>
							</div>
					        <div class="col s12 m6 l3 per_infor">
					        	 <li class="wow flipInY animateds">
						        	<a href="#news1" class="menu_text click-view-detail">
						        		<img src="{{ asset('img/images/icon_doctor.png')}}">
						        		Giải pháp
						        		<div class="des">
						        			<span class="sumary">
			                                	Dựng mô hình 3D ngoại thất, nội thất cho công trình. nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình fefwesgfsefgwdfas sAThiết lập camera, ánh sáng, rendering
			                                </span>
						        		</div>
						        	</a>
						        </li>
					        </div>
					        <div class="col s12 m6 l3 per_infor">
					       		<li class="wow flipInY animateds">
						        	<a href="#news1" class="menu_text click-view-detail">
						        		<img src="{{ asset('img/images/icon_advised.png')}}">
						        		Lời khuyên hữu ích
						        		<div class="des">
						        			<span class="sumary">
			                                	Dựng mô hình 3D ngoại thất, nội thất cho công trình. nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình fefwesgfsefgwdfas sAThiết lập camera, ánh sáng, rendering
			                                </span>
						        		</div>
						        	</a>
						        </li>
					        </div>
					        <div class="col s12 m6 l3 per_infor">
					        	<li class="wow flipInY animateds">
						        	<a href="#news1" class="menu_text click-view-detail">
						        		<img src="{{ asset('img/images/icon_advised.png')}}">
						        		Lời khuyên hữu ích
						        		<div class="des">
						        			<span class="sumary">
			                                	Dựng mô hình 3D ngoại thất, nội thất cho công trình. nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình nội thất cho công trình fefwesgfsefgwdfas sAThiết lập camera, ánh sáng, rendering
			                                </span>
						        		</div>
						        	</a>
						        </li>
					        </div>
					    </ul>
					</div>
					<!-- Khi click vao mot thong tin, se hien ra thong tin chi tiet ======= -->
					<div class="content-detail" style="display: none;">
						<div id= "news1" class="item-detail">
						<div class="ct-close"><a href="#information" class="closes">x</a></div>
							<div class="content-text">
								Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015  chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ  2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn
							</div>
							<img src="{{ asset('img/images/01.jpg')}}">
						</div>
						<div id= "news2" class="item-detail">
						<div class="ct-close"><a href="#information" class="closes">x</a></div>
							<div class="content-text">
								Hành trình Đỏ 2015 – Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015  chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ  2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn
								<img src="{{ asset('img/images/04.jpg')}}">
							</div>
						</div>
					</div>
				</section>
				<hr>
<!-- section cac Khoa, Phong ban cua benh vien ============================================================= -->
				<section id="news" class="each">
				    <h2 class="title">THÔNG TIN CÁC KHOA, PHÒNG BAN</h2>
				    <!-- list khoa ======= -->
				    <ul class="khoa_list" id="list_khoa">
			            @foreach($khoas as $khoa)
									<li id="show_dialog" class="khoa_item arrow_up x_scrollFadeIn">
										<a data-toggle="modal" data-target="#myModal{{$khoa->id}}">
											<p class="khoa_title">{{$khoa->tenkhoa}}</p>
										</a>
										<!-- click vao ten khoa, se hien ra thong tin chi tiet cua khoa -->
										<div class="row TTKhoa modal fade" id="myModal{{$khoa->id}}" role="dialog">
											 <div class="modal-dialog content_dialog">
												 <div class="modal-content">
														<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h2 class="modal_title">{{$khoa->tenkhoa}}</h2>
													</div>
													<div class="modal-body">
														<div class="img_content">
															<div class="view view-fifth">
																<a href="#ns-6" class="click-view-detail image">
																		<img src="{{ asset($khoa->hinhanh)}}" alt="" />
																		<span class="line"></span>
																</a>
															</div>
														</div>
														<div class="para">
																<p>{{ $khoa->thongtin }}</p>
														</div>
													</div>
												</div>
											</div>
										</div> <!-- .row TTKhoa modal fade -->
									</li>
									@endforeach
			          </ul>

				</section>
				<hr>
<!-- section tra cuu thong tin benh vien, dia chi benh vien ======================================================== -->
				<section id="find" class = "container each">
					<div class="wd-header-line col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2 class="title">TRA CỨU THÔNG TIN BỆNH VIỆN</h2>
						<!-- thong tin benh vien -->
						<ul class="hospital wow animatedss fadeInLeftBig">
							<li>
								<h2 class="name_hospital">BỆNH VIỆN ĐA KHOA ĐÀ NẴNG</h2>
								<p>124, Hải Phòng, Q. Hải Châu</p>
								<p>+(0511)3826755</p>
								<p>+(0511)3894560</p>
							</li>
							<li>
								<h2 class="name_hospital">BỆNH VIỆN C ĐÀ NẴNG</h2>
								<p>124, Hải Phòng, Q. Hải Châu</p>
								<p>+(0511)3826755</p>
								<p>+(0511)3894560</p>
		    				</li>
						</ul>
						<!-- map ====== -->
						<div id="map" class="wow animatedss fadeInRightBig" ></div>
						<form action="action_page.php" class="search wow animateds fadeInRightBig">
						  <input type="search" name="googlesearch" style="color: #fff;">
						  <button class="btn waves-effect waves-light" type="submit" name="action">Search
						    <i class="material-icons right">search</i>
						  </button>
						</form>
					</div>
				</section>
				<hr>
<!-- section Y kien khach hang hien thi ================================== -->
				<section id="response1" class="container each">
					<h2 class="title">Ý KIẾN KHÁCH HÀNG</h2>
					<div class="als-container" id="idea">
					<!-- arrow prerious -->
					  <span class="als-prev wow animateds zoomIn"><img src="{{ asset('img/images/btn_previous.png')}}" alt="prev" title="previous" /></span>
					  <!--  -->
					  <div class="als-viewport">
					    <ul class="als-wrapper list_images">
								@foreach ($ykienphanhoi as $key => $ykien)
					      <li class="als-item wow animateds zoomIn">
					      	<div id="flip{{ ($key == 0) ? '' : $key }}">
										<div class="anh">
											<img class="circle" src="{{ asset('img/images/img_1.jpg')}}"></img>
											<div class="embay_border line_inner">
												<div class="line_top"></div>
												<div class="line_bottom"></div>
												<div class="line_left"></div>
												<div class="line_right"></div>
											</div>
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
								@endforeach
					    </ul>
					  </div>
					  <!-- button next -->
					  <span class="als-next wow animateds zoomIn"><img src="{{ asset('img/images/btn_next.png')}}" alt="next" title="next" /></span>
					</div>
				</section>
			    <hr>
<!-- section Phan hoi cua nguoi dung ============================================== -->
		@include('mainpage.ykien')
		<!-- footer -->
	 <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>
	<script src="{{ asset('js/jquery-1.11.0.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/materialize.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.als-1.7.js')}}"></script>
	<script src="{{ asset('js/jquery.easing.1.3.js')}}" type="text/javascript"></script>
	<script src="{{ asset('js/swiper.min.js')}}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.scrollTo-1.4.3.1-min.js')}}"></script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="{{ asset('js/wow.js')}}"></script>
	<script src="{{ asset('js/common.js')}}" type="text/javascript"></script>
</body>
</html>
