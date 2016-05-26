@extends('admin.master-admin')

@section('content')
    <div class="">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="create_infor_science" class="col-md-12">
          <h2 class="hospital">Danang Hospital</h2>
          <!-- post article -->
          <form class="form_create_infor">
            <select class="selectpicker form-control">
              <option> Choose Hospital </option>
              <option> Bệnh viện Đa khoa Đà Nẵng</option>
              <option> Bệnh viện C Đà Nẵng </option>
              <option> Bệnh Viện Liên Chiểu Đà Nẵng </option>
              <option> Bệnh Viện Hoàn Mỹ Đà Nẵng </option>
            </select>
            <select class="selectpicker form-control">
              <option> Chọn Khoa </option>
              <option> Khoa Thần Kinh</option>
              <option> Khoa Nội </option>
              <option> Khoa Ngoại </option>
              <option> Phòng Hành Chính </option>
            </select>
            <textarea class="form-control" cols="50" rows="5" placeholder="Nội dung"></textarea>
            <div class="post_img">
              <input class="input_choose" type='file' onchange="readURL(this);"/>
              <img title="Image" id="display_img" src="img/images/default_spot_main_photo.png" alt="your image" />
            </div>
              <div class="button">
                <button class="btn btn-primary"> <a href="{{action('AdminController@getHopital')}}">Xong </a></button>
                <button class="btn btn-default"> <a href="{{action('AdminController@getHopital')}}">Bỏ qua </a></button>
              </div>
          </form>
        </div>
      </div>
    </div>
@stop
