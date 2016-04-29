@extends('master')

@section('content')
<div id="content">
	<div id="wd-wrapper" class="show_category_news">
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
		<section id="news_detail">
			<h2 class="title_main"> {{ $loaitin->name }} </h2>
			<div class="wrap_list_news">
				<ul class="collection list_news col-md-12">
				@foreach ($tintucs as $tintuc)
					<li class="collection-item avatar item_news">
				    	<div class="col-md-3">
				    		<div class="wrap_photo">
				    		    <img src="{{ Asset('uploads/'.$tintuc->thumbnail) }}" alt="">
				    		</div>
				    	</div>
				     	<div class="col-md-9 content_news">
				     		<a class="title" href="{{ route('news', $tintuc->id) }}">{{ $tintuc->tieude }}</a>
				     		<p class="time">{{ $tintuc->updated_at }}</p>
						    <p class="content">{{ $tintuc->noidung }}</p>
						    <a class="more" href="{{ route('news', $tintuc->id) }}">Xem tiếp >></a>
				     	</div>
				    </li>
				@endforeach
			</ul>
			</div>
			
			<nav class="next_page">
			  <ul class="pagination">
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			        <span class="sr-only">Previous</span>
			      </a>
			    </li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item"><a class="page-link" href="#">4</a></li>
			    <li class="page-item"><a class="page-link" href="#">5</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			        <span class="sr-only">Next</span>
			      </a>
			    </li>
			  </ul>
			</nav>
		</section>
	</div>
</div>
		<!-- footer -->
<footer class="page-footer" style="margin-top:0 !important;">
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
