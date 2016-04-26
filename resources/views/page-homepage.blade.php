@extends('master')

@section('content')
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
				                </select>
				            </div>
	            		<button class="btn waves-effect waves-light fadeleft" type="submit" name="action"><a href="#sign">Đặt khám</a>
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
@stop
