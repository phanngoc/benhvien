<section id="find" class = "container each">
	<div class="wd-header-line col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h2 class="title">TRA CỨU THÔNG TIN BỆNH VIỆN</h2>
		<!-- thong tin benh vien -->
		<input type="text" name="search_info_hopital" style="color: #fff;">
		<button class="btn btn-primary" id="btn-search-info">Search</button>
		<ul class="hospital wow animatedss fadeInLeftBig" id="list-result-search-hopital">
			@foreach ($benhviens as $benhvien)
				<li data-id="{{$benhvien->id}}" data-diachi="{{ $benhvien->diachi }}" class="item-benhvien" data-lat="{{ $benhvien->lat }}" data-lng="{{ $benhvien->lng }}">
					<h2 class="name_hospital">{{ $benhvien->ten }}</h2>
					<p>{{ $benhvien->diachi }}</p>
					<p>{{ $benhvien->sodienthoai }}</p>
				</li>
			@endforeach
		</ul>
		<!-- map ====== -->
		<div id="map" class="wow animatedss fadeInRightBig" ></div>
		<input type="search" name="googlesearch" style="color: #fff;" id="input_search_google">
	</div>
</section>

<script type="text/javascript">
	$(document).ready(function() {
		$('#btn-search-info').click(function(e) {
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
			var geocoder = new google.maps.Geocoder();      
			geocoder.geocode( { 'address': address}, function(results, status) {
				console.log(results);
				if (status == google.maps.GeocoderStatus.OK) {
				    map.setCenter(results[0].geometry.location);
				    map.setZoom(14);
				    var marker = new google.maps.Marker({
				        map: map,
				        position: results[0].geometry.location
				    });
				}
			});  

		});
	});
</script>

<style type="text/css">
	#btn-search-info {
		clear: both;
	    display: block;
	    text-align: center;
	    margin: 18px auto;
	}

	.active-item {
		background-color: #e5c9c9;
	}
</style>