<section id="information" class="each container">
	<div class="wrap_news"></div>
	<h2 class="title3">NEWS</h2>
	<div class="row">
		<ul class="infor col s12">
			@foreach($loaitins as $loaitin)
				<div class="col s12 m6 l3 per_infor">
					<li class="wow flipInY animatedss">
			        	<a href="{{ route('category', $loaitin->id)}}" class="menu_text">
			        		<img src="{{ asset('uploads/'.$loaitin->icon)}}" width="110" height="110">
			        		{{ $loaitin->name }}
			        		<div class="des">
			        			<span class="sumary">
                                	{{ $loaitin->description }}
                                </span>
			        		</div>
			        	</a>
			        </li>
				</div>
			@endforeach
	    </ul>
	</div>
</section>