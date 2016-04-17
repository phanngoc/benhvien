@extends('admin.master-admin')

@section('content')
    <div class="col-md-12">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="edit_ideas" class="col-md-12">
          <h2 class="hospital">Bệnh Viện Đa Khoa Đà Nẵng</h2>
          <!-- post article -->
          <form class="edit_idea" method="POST" action="{{action('AdminController@postUpdateIdea', $ykienphanhoi->id)}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <ul>
              <li> <input class="form-control" type="text" placeholder="Họ Tên" name="hoten" value="{{ $ykienphanhoi->hoten }}"/> </li>
              <li> <input class="form-control" type="email" placeholder="Email" name="email" value="{{ $ykienphanhoi->email }}"></li>
              <li> 
                    <textarea class="form-control" cols="50" rows="5" placeholder="Nội dung" name="ykien">{{ $ykienphanhoi->ykien }}</textarea>
              </li>
              <li>
                  <input type="checkbox" name="status" {{($ykienphanhoi->status == 1) ? 'checked' : ''}} /> Đăng công cộng
            </ul>
              <div class="button">
                <button class="btn btn-primary">Xong</button>
                <button class="btn btn-default" type="button">Bỏ qua</button>
              </div>
          </form>
        </div> <!-- #edit_ideas -->
      </div>
    </div>
    <!--  -->

@stop
