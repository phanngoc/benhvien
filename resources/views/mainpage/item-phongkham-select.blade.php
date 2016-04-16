@foreach ($phongkhams as $phongkham)
	@if ($phongkhamId == $phongkham->id)
		<option value="{{ $phongkham->id }}" selected>{{ $phongkham->ten }}</option>
	@else
		<option value="{{ $phongkham->id }}">{{ $phongkham->ten }}</option>
	@endif
	
@endforeach
