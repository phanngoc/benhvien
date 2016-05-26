@extends('admin.master-admin')

@section('content')
    <div class="">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="kind_of_news" class="col-md-12">
          <h2 class="hospital">Danang Hospital</h2>
          <!-- post article -->
          <form class="kind_of_news" method="POST" action="{{ $urlPost }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <select class="selectpicker form-control" name="benhvien_id">
                <option> Choose Hospital </option>
                @foreach($benhviens as $benhvien)
                  @if (isset($loaidichvu) && $loaidichvu->benhvien_id == $benhvien->id)
                    <option value="{{ $benhvien->id }}" selected>{{ $benhvien->ten }}</option>
                  @else
                    <option value="{{ $benhvien->id }}">{{ $benhvien->ten }}</option>
                  @endif
                @endforeach
              </select>
              <input class="form-control" type="text" name="tendichvu" placeholder="Services" value="{{ isset($loaidichvu) ? $loaidichvu->tendichvu : '' }}">
              <input class="form-control" type="text" name="giatien" placeholder="Price" value="{{ isset($loaidichvu) ? $loaidichvu->giatien : '' }}" >
              <div class="button">
                <button class="btn btn-primary"> Thêm </button>
                <a class="btn btn-default" onclick="location.reload();"> Cancel </a>
              </div>
          </form>
          <table  class="table table-bordered" id="list-kind-service">
            <thead>
              <tr>
                <th> Hospital </th>
                <th> Services </th>
                <th> Price </th>
                <th class="option"> Option </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($loaidichvus as $loaidichvu)
                <tr>
                  <td>{{ $loaidichvu->benhvien->ten }}</td>
                  <td> {{ $loaidichvu->tendichvu }} </td>
                  <td> {{ $loaidichvu->giatien }} </td>
                  <td class="option">
                    <a class="btn btn_edit" href="{{ action('KindServiceController@getEditKindService', $loaidichvu->id) }}">Chỉnh Sửa</a>
                    <a class="btn btn_delete" data-href="{{ action('KindServiceController@postDestroyKindService', $loaidichvu->id) }}" data-token="{{ csrf_token() }}"> Xóa </a>
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

    $('#list-kind-service').dataTable({
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
