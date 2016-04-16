@extends('master')

@section('content')
<div id="content">
	<div id="wd-wrapper">
<!-- ============================================= section hompage ============================================ -->
		<header>
			<section class="each">
			<!-- ====== menu ===== -->
				<div class="navbar-fixed">
					<div id="bg_menu" class="first fadedown menu_">
						 <nav>
						    <div class="nav-wrapper">
						      <a href="{{ route('home') }}" class="brand-logo logo">Logo</a>
						    </div>
						  </nav>
					</div>
				</div>
			</section>
		</header>
<!-- ========================= section hien thi list thong tin tin tuc ========================================== -->
		<section id="news_detail">
			<h2 class="title_main"> HOẠT ĐỘNG HÀNG NGÀY </h2>
			<ul class="collection list_news col-md-12">
				@foreach ($tintucs as $tintuc)
					<li class="collection-item avatar item_news">
				    	<div class="col-md-3">
				    		 <img src="{{ Asset('uploads/'.$tintuc->thumbnail) }}" alt="" class="circle">
				    	</div>
				     	<div class="col-md-9">
				     		<a class="title" href="{{ route('news', $tintuc->id) }}">{{ $tintuc->tieude }}</a>
				     		<p class="time">{{ $tintuc->updated_at }}</p>
						    <p class="content">{{ $tintuc->noidung }}</p>
						    <a class="more" href="{{ route('news', $tintuc->id) }}">Xem tiếp >></a>
				     	</div>
				    </li>
				@endforeach
			</ul>
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
