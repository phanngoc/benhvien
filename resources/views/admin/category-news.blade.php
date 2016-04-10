@extends('admin.master-admin')
@section('content')
    <div class="col-md-12">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="kind_of_news" class="col-md-12">
          <h2 class="hospital">Bệnh Viện Đa Khoa Đà Nẵng</h2>
          <!-- post article -->
          <form class="kind_of_news" method="POST" action="{{action('AdminController@postCategoryNews')}}" enctype="multipart/form-data">
              <input name="_token" type="hidden" value="{{csrf_token()}}"/>
              <input class="form-control" type="text" name="name" placeholder=" Nhập Tên loại tin">

              <select class="form-control" name="benhvien_id">
                @foreach($benhvien as $bv)
                  <option value="{{$bv->id}}">{{$bv->ten}}</option>
                @endforeach
              </select>

              <div class="post_img">
                <input class="input_choose" type='file' name="icon" onchange="readURL(this);"/>
                <img title="Image" id="display_img" src="{{ Asset('img/images/default_spot_main_photo.png') }}" alt="your image" style="width: 240px; height: 180px;" />
              </div>

              <div class="button">
                <button class="btn btn-primary"> Thêm </button>
                <button class="btn btn-default"> Bỏ qua </button>
              </div>
          </form>
          <table  class="table table-bordered">
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
                  <td><img src="{{Asset('uploads/'.$loai->icon)}}"></td>
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
