@foreach ($benhviens as $benhvien)
	<li data-id="{{$benhvien->id}}" data-diachi="{{ $benhvien->diachi }}" class="item-benhvien" data-lat="{{ $benhvien->lat }}" data-lng="{{ $benhvien->lng }}">
		<h2 class="name_hospital">{{ $benhvien->ten }}</h2>
		<p>{{ $benhvien->diachi }}</p>
		<p>{{ $benhvien->sodienthoai }}</p>
	</li>
@endforeach
