@extends('admin.master-admin')

@section('content')
    <div class="">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="ideas_infor" class="col-md-12">
          <h2 class="hospital">Danang Hospital</h2>
          <!-- post article -->
          <div class="list_ideas">
            <!-- <div class="inputs">
             
              <div class="input-group stylish-input-group search_input">
                  <input type="text" class="form-control"  placeholder="Search" >
                  <span class="input-group-addon">
                      <button type="submit">
                          <span class="glyphicon glyphicon-search"></span>
                      </button>
                  </span>
              </div>
          
                <button class="btn btn-primary btn_edit_patient"> Đăng tải</button>
            </div> -->
            <table  class="table table-bordered" id="list-idea">
              <thead>
                <tr>
                  <th> Hospital </th>
                  <th> Name </th>
                  <th> Email </th>
                  <th class="content_idea"> Content</th>
                  <th> Posting status </th>
                  <th> Option </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ykienphanhois as $ykienphanhoi)
                  <tr>
                    <td> {{ $ykienphanhoi->benhvien->ten }} </td>
                    <td> {{ $ykienphanhoi->hoten }} </td>
                    <td>{{ $ykienphanhoi->email }}</td>
                    <td class="content_idea"> {{ $ykienphanhoi->ykien }} </td>
                    <td class="status"> <input type="checkbox" name="status" {{ ($ykienphanhoi->status == 1) ? 'checked' : '' }} /> </td>
                    <td>
                      <a class="btn btn_edit" href="{{ action('AdminController@getEditIdea', $ykienphanhoi->id) }}">Edit </a>
                      <a class="btn btn_delete" data-href="{{ action('AdminController@postDestroyIdea', $ykienphanhoi->id) }}" data-token="{{ csrf_token() }}"> Delete </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--  -->
<script type="text/javascript">

  $(function () {
    $('#list-idea').dataTable({
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
