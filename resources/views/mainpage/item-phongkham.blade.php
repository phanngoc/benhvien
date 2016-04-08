@foreach ($phongkhams as $phongkham)
  <li class="collection-item avatar" data-id="{{$phongkham->id}}">
    <span class="title">{{ $phongkham->ten }}</span>
    <p>Bác Sỹ: <br>
       {{ $phongkham->bacsi }}
    </p>
  </li>
@endforeach
