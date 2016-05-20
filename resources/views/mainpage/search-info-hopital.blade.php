<section id="find" class = "container each">
	<div class="wd-header-line col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h2 class="title">LOCATION</h2>
		<!-- thong tin benh vien -->
		<div class="wrap_search">
			<input type="text" name="search_info_hopital" placeholder="Name hospital" style="color: #fff; width: 500px;" >
			<button class="btn btn-primary" id="btn-search-info">Search</button>
		</div>
		<ul class="hospital animated fadeInLeftBig" id="list-result-search-hopital">
			@foreach ($benhviens as $benhvien)
				<li data-id="{{$benhvien->id}}" data-diachi="{{ $benhvien->diachi }}" class="item-benhvien" data-lat="{{ $benhvien->lat }}" data-lng="{{ $benhvien->lng }}">
					<h2 class="name_hospital">{{ $benhvien->ten }}</h2>
					<p>{{ $benhvien->diachi }}</p>
					<p>{{ $benhvien->sodienthoai }}</p>
				</li>
			@endforeach
		</ul>
		<!-- map ====== -->
		<div id="map" class="wow animateds fadeInRightBig" ></div>
		<input type="search" name="googlesearch" style="color: #fff;" id="input_search_google">
	</div>
</section>

<script type="text/javascript">
	
	$(document).ready(function() {

		$('#btn-search-info').click(function(e) {
			$("#list-result-search-hopital").show();
			var textSearch = $('input[name="search_info_hopital"]').val();
			$.ajax({
				url : '{{ route("searchHopital") }}?textSearch='+textSearch,
				success : function(result) {
					$('#list-result-search-hopital').html(result);
				}
			});
		});

		$('#list-result-search-hopital').on('click', 'li.item-benhvien', function(){
			$('#list-result-search-hopital').find('li.item-benhvien').removeClass('active-item');
			$(this).addClass('active-item');
			var lat = $(this).data('lat');
			var lng = $(this).data('lng');
			var address = $(this).data('diachi');
			setMapByAddress(address);
		});

	});
</script>

<style type="text/css">
	.wrap_search {
		position: relative;
	    margin-bottom: 30px;
	}
	#btn-search-info {
		clear: both;
	    display: block;
	    text-align: center;
	    position: absolute;
	    top: 0;
	    left: 42%;
	}
	/*#list-result-search-hopital {
		display: none;
	}*/
	#list-result-search-hopital li {
		cursor: pointer;
	}
	.active-item {
		background-color: rgba(0, 0, 0, 0.1);
	    width: auto;
	    margin-right: 30px;
	}
</style>