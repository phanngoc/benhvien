@extends('admin.master-admin')
@section('css')
  	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.datetimepicker.css')}}"/>
@stop
@section('content')
		<div class="col-md-12">
			@include('admin.sidebar')
			<div class="col-md-10">
				<div id="post_news" class="col-md-12">
					<h2 class="hospital">Bệnh Viện Đa Khoa Đà Nẵng</h2>
					<div class="top_page_news">
						<div class="input-group stylish-input-group search_input">
		                  <input type="text" class="form-control"  placeholder="Search" >
			                  <span class="input-group-addon">
			                      <button type="submit">
			                          <span class="glyphicon glyphicon-search"></span>
			                      </button>
			                  </span>
			              </div>
						<button class="btn btn-primary"><a href="{{action('NewController@getCreateNew')}}"> Tạo Mới </a></button>
					</div>
					<!-- post article -->
					<div class="wrap_list_news">
							<table  class="table table-bordered">
		            <thead>
		              <tr>
		              	<th> Bệnh Viện</th>
		                <th> Thời Gian </th>
		                <th> Hình Ảnh </th>
		                <th class="title_news"> Tiêu Đề </th>
		                <th> Lĩnh Vực </th>
		                <th class="content_idea"> Nội Dung </th>
		                <th> Tùy Chọn </th>
		              </tr>
		            </thead>
		            <tbody>
                  @foreach($news as $new)
                    <tr>
                      <td> Bệnh Viện Đa Khoa Đà Nẵng</td>
                      <td class="time">{{ $new->created_at }}</td>
                      <td>
                        <img id="display_img" src="{{ ($new->thumbnail == '') ? Asset('img/images/6.jpg') : asset('uploads/'.$new->thumbnail) }}" alt="your image" style="width: 100px; height: 70px; " />
                      </td>
                      <td class="title_news">{{ $new->tieude }}</td>
                      <td>{{ $new->nameloaitin }}</td>
                      <td class="content_idea">{{ $new->noidung }}</td>
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
