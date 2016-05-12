@extends('admin.master-admin')
@section('content')
    <div class="">
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
              <textarea class="form-control" cols="50" rows="5" placeholder="Nhap noi dung loai tin" style="margin-bottom:10px;" name="description"></textarea>
              <div class="post_img">
                <input class="input_choose" type='file' name="icon" onchange="readURL(this);"/>
                <img title="Image" id="display_img" src="{{ Asset('img/images/default_spot_main_photo.png') }}" alt="your image" style="width: 240px; height: 180px;" />
              </div>

              <div class="button">
                <button class="btn btn-primary"> Thêm </button>
                <button class="btn btn-default"> Bỏ qua </button>
              </div>
          </form>
          <table class="table table-bordered" id="category-news">
            <thead>
              <tr>
                <th class="show_icon"> Icon </th>
                <th> Tên Loại Tin </th>
                <th> Bệnh viện </th>
                <th> Miêu tả</th>
                <th class="option"> Tùy Chọn </th>
              </tr>
            </thead>
            <tbody>
              @foreach($loaitin as $loai)
                <tr>
                  <td class="show_icon">
                    <div class="wrap_img">
                      <img src="{{Asset('uploads/'.$loai->icon)}}">
                    </div>
                  </td>
                  <td> {{$loai->tentin}} </td>
                  <td>
                     {{$loai->tenbenhvien}}
                  </td>
                  <td>{{ $loai->description }}</td>
                  <td class="option">
                    <a class="btn btn_edit" href="{{ action('AdminController@getEditCategoryNews', $loai->id) }}">Chỉnh Sửa</a>
                    <a class="btn btn_delete" data-href="{{ action('AdminController@postDestroyCategoryNew', $loai->id) }}" data-token="{{ csrf_token() }}">Xóa</a>
                  </td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>

<script type="text/javascript">

  $(function () {
    $('#category-news').dataTable({
      "bPaginate": true,
      "bLengthChange": false,
      "bFilter": true,
      "bSort": true,
      "bInfo": false,
      "bAutoWidth": false
    });
  });
  
  $(document).ready(function(){
      $(".btn_delete").click(function(){
          var link = $(this).data('href');
          var token = $(this).data('token');
          var r = confirm("Are you want to delete ?");
          if (r == true) {
            $.ajax({
              url : link,
              type : 'POST',
              data : { _token : token },
              success : function(result) {
                if (result.status == 200) {
                  window.location.reload(true);
                }
              }
            })
          } 
      });
  });
</script>

@stop

@section('js')
<script src="js/jquery.datetimepicker.full.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
@stop
