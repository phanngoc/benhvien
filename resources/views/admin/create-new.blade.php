@extends('admin.master-admin')
@section('content')
		<div class="">
			@include('admin.sidebar')
			<div class="col-md-10">
				<div id="create_news" class="col-md-12">
					<h2 class="hospital">Bệnh Viện Đa Khoa Đà Nẵng</h2>
					<div class=" wrap_post">
						<!-- form creat news -->
						<form class="form_create_news" action="{{action('NewController@postCreateNew')}}" method="POST" enctype="multipart/form-data">
			              	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
			        		<select class="selectpicker form-control" name="category_id">
				                @foreach($loaitin as $loai)
				                    <option value="{{$loai->id}}"> {{ $loai->name }}({{ $loai->ten }}) </option>
				                @endforeach
							</select>

							<input class="form-control" type="text" placeholder="Tiêu đề" name="tieude"/>
							<p class="errors">{{$errors->first('tieude')}}</p>
		          			<textarea class="form-control" cols="50" rows="5" placeholder="Nội dung" name="noidung" value=""></textarea>
							<p class="errors">{{$errors->first('noidung')}}</p>
							<div class="post_img">
	            				<input class="input_choose" type='file' onchange="readURL(this);" name="thumbnail"/>
					        	<img title="Image" id="display_img" src="{{Asset('img/images/default_spot_main_photo.png')}}" alt="your image" />
				            </div>
				            <div class="button">
				                <button class="btn btn-primary">Xong </button>
				                <a class="btn btn-default" href="javascript:history.go(-1)">Bỏ qua</a>
				            </div>
				        </form>
					</div>
				</div>
			</div>
		</div>
@stop
