@extends('admin.master-admin')
@section('content')
    <div class="">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="kind_of_news" class="col-md-12">
          <h2 class="hospital">Bệnh Viện Đa Khoa Đà Nẵng</h2>
          <!-- post article -->
          <form class="kind_of_news" method="POST" action="{{action('AdminController@postEditCategoryNews')}}" enctype="multipart/form-data">
              <input name="_token" type="hidden" value="{{csrf_token()}}"/>
              <input type="hidden" name="id" value="{{$categoryNew->id}}">
              <input class="form-control" type="text" name="name" placeholder="Nhập Tên loại tin" value="{{ $categoryNew->name }}">

              <select class="form-control" name="benhvien_id">
                @foreach($benhvien as $bv)
                  @if ($bv->id == $categoryNew->benhvien_id)
                    <option value="{{$bv->id}}" selected>{{$bv->ten}}</option>
                  @else
                    <option value="{{$bv->id}}">{{$bv->ten}}</option>
                  @endif
                @endforeach
              </select>

              <textarea class="form-control" cols="50" rows="5" placeholder="Nhap noi dung loai tin" style="margin-bottom:10px;" name="description">{{ $categoryNew->description }}</textarea>
              
              <div class="post_img">
                <input class="input_choose" type='file' name="icon" onchange="readURL(this);"/>
                <img title="Image" id="display_img" src="{{ (strlen($categoryNew->icon) != 0) ? Asset('uploads/'.$categoryNew->icon) : Asset('img/images/default_spot_main_photo.png') }}" alt="your image" style="width: 240px; height: 180px;" />
              </div>

              <div class="button">
                <button class="btn btn-primary"> Thêm </button>
                <button class="btn btn-default"> Bỏ qua </button>
              </div>
          </form>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> Icon </th>
                <th> Tên Loại Tin </th>
                <th> Bệnh viện </th>
                <th class="option"> Tùy Chọn </th>
              </tr>
            </thead>
            <tbody>
              @foreach($loaitin as $loai)
                <tr>
                  <td><img src="{{Asset('uploads/'.$categoryNew->icon)}}"></td>
                  <td> {{$loai->tentin}} </td>
                  <td>
                     {{$loai->tenbenhvien}}
                  </td>
                  <td class="option">
                    <a class="btn btn_edit" href="{{ action('AdminController@getEditCategoryNews', $loai->id) }}"> Chỉnh Sửa</a>
                    <a class="btn btn_delete"> Xóa </a>
                  </td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
@stop

@section('js')
<script src="js/jquery.datetimepicker.full.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
@stop
