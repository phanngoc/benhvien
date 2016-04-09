@extends('admin.master-admin')
@section('content')
		<div class="col-md-12">
			@include('admin.sidebar')
			<div class="col-md-10">
				<div id="create_news" class="col-md-12">
					<h2 class="hospital">Bệnh Viện Đa Khoa Đà Nẵng</h2>
					<div class=" wrap_post">
						<!-- form creat news -->
						<form class="form_create_news" action="{{action('NewController@postEditNew')}}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}"/>
              <input type="hidden" name="id" value="{{$new->id}}">
			        <select class="selectpicker form-control" name="category_id">
                @foreach($loaitin as $loai)
                  @if($loai->id == $new->category_id)
                    <option value="{{$loai->id}}" selected>{{ $loai->name }}-{{ $loai->ten }}</option>
                  @else
                    <option value="{{$loai->id}}"> {{ $loai->name }}-{{ $loai->ten }} </option>
                  @endif
                @endforeach
							</select>

							<input class="form-control" type="text" placeholder="Tiêu đề" name="tieude" value="{{$new->tieude}}"/>
							<p class="errors">{{$errors->first('tieude')}}</p>
		          <textarea class="form-control" cols="50" rows="5" placeholder="Nội dung" name="noidung">{{$new->noidung}}</textarea>
							<p class="errors">{{$errors->first('noidung')}}</p>
							<div class="post_img">
            		<input class="input_choose" type='file' onchange="readURL(this);" name="thumbnail"/>
				        <img title="Image" id="display_img" src="{{Asset('uploads/'.$new->thumbnail)}}" alt="your image" />
                <p class="errors">{{$errors->first('thumbnail')}}</p>
              </div>
	            <div class="button">
	                <button class="btn btn-primary">Xong</button>
	                <button class="btn btn-default" type="button"><a href="javascript:history.go(-1)">Bỏ qua</a></button>
	            </div>
	         </form>
					</div>
				</div>
			</div>
		</div>
@stop
