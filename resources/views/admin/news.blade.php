@extends('admin.master-admin')
@section('css')
  	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.datetimepicker.css')}}"/>
@stop
@section('content')
		<div class="">
			@include('admin.sidebar')
			<div class="col-md-10">
				<div id="manage_news" class="col-md-12">
					<h2 class="hospital">Danang Hospital</h2>
					<div class="top_page_news">
						<button class="btn btn-primary"><a href="{{action('NewController@getCreateNew')}}"> Create </a></button>
					</div>
					<!-- post article -->
					<div class="wrap_list_news">
						<table class="table table-bordered" id="list-new">
				            <thead>
				              <tr>
				              	<th> Hospital</th>
				                <th> Time </th>
				                <th> Images </th>
				                <th class="title_news">News' Title </th>
				                <th> Kind of News </th>
				                <th class="content_news"> Content </th>
				                <th class="option"> Option </th>
				              </tr>
				            </thead>
				            <tbody>
			                  @foreach($news as $new)
			                    <tr>
			                      <td> Danang Hospital </td>
			                      <td class="time">{{ $new->created_at }}</td>
			                      <td>
			                        <img id="display_img" src="{{ ($new->thumbnail == '') ? Asset('img/images/6.jpg') : asset('uploads/'.$new->thumbnail) }}" alt="your image" style="width: 100px; height: 70px; " />
			                      </td>
			                      <td class="title_news">{{ $new->tieude }}</td>
			                      <td>{{ $new->nameloaitin }}</td>
			                      <td class="content_news">{{ $new->noidung }}</td>
			                      <td>
			                        <button class="btn btn_edit"> <a href="{{action('NewController@getEditNew', $new->id)}}"> Chỉnh Sửa </a></button>
			                        <a href="javascript:" class="delete-new" data-id="{{$new->id}}"><button class="btn btn_delete"> Xóa</button></a>
			                      </td>
			                    </tr>
			                  @endforeach
		            		</tbody>
					    </table>
				</div>
			</div>
		</div>
		<!--  -->
<script type="text/javascript">
	$(function () {
	    $('#list-new').dataTable({
	      "bPaginate": true,
	      "bLengthChange": false,
	      "bFilter": true,
	      "bSort": true,
	      "bInfo": false,
	      "bAutoWidth": false
	    });
	});
</script>

@stop

@section('js')
  <script src="{{asset('js/jquery.datetimepicker.full.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.delete-new').click(function(){
        var id = $(this).data('id');
        var r = confirm("Are you sure to delete new ?");
        if (r == true) {
            window.location.href = "{{ action('NewController@getDestroyNew') }}" + "?id=" + id;
        }
      });
    });
  </script>
@stop
