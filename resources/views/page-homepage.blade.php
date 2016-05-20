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
					<section id="banner_page" class="each">
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
							<h2 id="name_hospital" class="screen fadeleft">HOSPITAL IN DANANG</h2>
							<p class="center fadeleft">-------------- System Register Examination Online ---------------</p>

							<div  class="input-field col s12 m6 input_center fadeleft">
				                <select id="mySelectBox" class="icons fadeleft" name="mySelectBox">
				                  <option value="" disabled selected>Visit</option>
										@foreach ($benhviens as $benhvien)
											<option value="{{ $benhvien->id }}" data-icon="{{asset('img/images/4.jpg')}}" class="circle">{{$benhvien->ten}}</option>
										@endforeach
				                </select>
				            </div>
	            			<img class="hompage_logo" src="img/front/logo.png">
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

@stop
