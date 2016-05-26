@extends('admin.master-admin')

@section('content')
    <div class="">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="infor_hospital" class="col-md-12">
          <h2 class="hospital">Danang Hospital</h2>
          <!-- post article -->
          <form class="infor_hospital" action="{{$urlPost}}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input class="form-control" type="text" name="ten" placeholder=" Hospital's Name" value="{{ isset($benhvien) ? $benhvien->ten : '' }}">
              <input class="form-control" type="text" name="diachi" placeholder=" Address " value="{{ isset($benhvien) ? $benhvien->diachi : '' }}">
              <input class="form-control" type="text" name="sodienthoai" placeholder=" Phone number " value="{{ isset($benhvien) ? $benhvien->sodienthoai : '' }}">
              <input class="form-control" type="text" name="email" placeholder=" Email " value="{{ isset($benhvien) ? $benhvien->email : '' }}" >
              <textarea class="form-control" name="thongtin" placeholder="Information">{{ isset($benhvien) ? $benhvien->thongtin : '' }}</textarea>
              <input type="file" name="hinhanh" onchange="readURL(this);">
              <input type="hidden" name="hinhanh_hidden" value="{{isset($benhvien) ? $benhvien->hinhanh : ''}}">
              <img title="Image" id="display_img" src="{{ isset($benhvien) ? Asset('uploads/'.$benhvien->hinhanh) : Asset('img/images/default_spot_main_photo.png') }}" alt="your image" style="width: 240px; height: 180px;" data-pin-nopin="true">
              <div class="button">
                <button class="btn btn-primary"> Done </button>
                <a class="btn btn-default" href="{{ action('HopitalController@getHopitals') }}"> Cancel </a>
              </div>
          </form>

          <table class="table table-bordered" id="list-hopital">
            <thead>
              <tr>
                <th> Hospital </th>
                <th> Images </th>
                <th> Address </th>
                <th> Phone number </th>
                <th class="email_hospital"> Email </th>
                <th class="infor"> Information </th>
                <th class="option"> Option </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($benhviens as $benhvien)
                <tr>
                  <td>{{ $benhvien->ten }}</td>
                  <td><img src="{{ Asset('uploads/'.$benhvien->hinhanh) }}" alt="" width="120" height="90"></td>
                  <td>{{ $benhvien->diachi }}</td>
                  <td>{{ $benhvien->sodienthoai }}</td>
                  <td class="email_hospital">{{ $benhvien->email }}</td>
                  <td>{{ $benhvien->thongtin }}</td>
                  <td class="option">
                    <a class="btn btn_edit" href="{{action('HopitalController@getEditHopital', $benhvien->id)}}"> Edit</a>
                    <a class="btn btn_delete" data-href="{{ action('HopitalController@postDestroyHopital', $benhvien->id) }}" data-token="{{ csrf_token() }}"> Delete </a>
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
      $('#list-hopital').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": true,
        "bSort": true,
        "bInfo": false,
        "bAutoWidth": false
      });
  });
</script>

<script type="text/javascript">
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
