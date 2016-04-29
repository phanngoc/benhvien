@extends('master')

@section('content')
<div id="content_detail_news">
	<div id="wd-wrapper" class="show_detail_news">
<!-- ============================================= section hompage ============================================ -->
		<header>
			<section class="each">
			<!-- ====== menu ===== -->
				<div class="navbar-fixed">
					<div id="bg_menu" class="first fadedown menu_">
						 <nav>
						    <div class="nav-wrapper">
						      <a href="{{ route('homepage') }}" class="brand-logo logo">Logo</a>
						    </div>
						  </nav>
					</div>
				</div>
			</section>
		</header>
<!-- ========================= section hien thi list thong tin tin tuc ========================================== -->
		<div class="wrap_section_content">
			<div class="wrap_back">
				<a href="javascript:window.history.back();" class="back_page"><img src="{{ Asset('img/images/back icon.png') }}"></a>
				<p class="time">{{ $news->updated_at }}</p>
			</div>
			<section id="sub_news_detail">
				<h2 class="title">{{ $news->tieude }}</h2>
				<ul class="content_detail">
					<li class="content">
						 <p>{{ $news->noidung }}</p>
					</li>
					<li class="img_details">
						<div class="wrap_img">
						    <img src="{{ asset('uploads/'.$news->thumbnail) }}">
						</div>
					</li>
					<li class="content">
						 <p>{{ $news->noidung }}</p>
					</li>
				</ul>
				<p class="author">{{ $news->admin->hoten }}</p>
			</section>
		</div>
	</div>
</div>
		<!-- footer -->
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