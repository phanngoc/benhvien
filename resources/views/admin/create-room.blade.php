@extends('admin.master-admin')

@section('content')
    <div class="">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="edit_room" class="col-md-12">
          <h2 class="hospital">Danang Hospital</h2>
          <!-- post article -->
          <form class="edit_new_room" action="{{ action('RoomController@postCreateRoom') }}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <ul>
              <li> <input class="form-control" type="text" placeholder="Clinic's name" name="ten" value=""/> </li>
              <li> <input class="form-control" type="text" placeholder="Docter" name="bacsi" value=""/> </li>
              <li>
                <select class="selectpicker choose_type_news form-control" name="dichvu_id">
                  <option> Choose Services </option>
                  @foreach($dichvus as $dichvu)
                    <option value="{{ $dichvu->id }}">{{ $dichvu->tendichvu }}({{ $dichvu->benhvien->ten }})</option>
                  @endforeach
                </select>
              </li>
            </ul>
            <div class="button">
              <button class="btn btn-primary">Done</button>
              <button class="btn btn-default" type="button" onclick="window.history.back();">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
@stop
