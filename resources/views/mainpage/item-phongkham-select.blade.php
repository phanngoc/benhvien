@foreach ($phongkhams as $phongkham)
	<option value="{{ $phongkham->id }}">{{ $phongkham->ten }}</option>
@endforeach
