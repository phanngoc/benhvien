	<!-- form profile cua benh nhan ================================= -->
@if ($user != null)

<script type="text/javascript">
	$(document).ready(function(){
		$('#edit_infor_profile').click(function(){
			$(this).parent().hide();
			$(this).parent().next().show();
		});

		$('#select-dich-vu').change(function(){
			$.ajax({
				url : "{{ route('getRoomFromService') }}",
				data : {type : 'select', idService : '{{$idBenhvien}}'},
				type : 'GET',
				success : function(result) {
					$('#select-phong-kham').html(result);
					$('select').material_select();
				}
			})
		});
	});
</script>
				<h2 class="title_profile"> TRANG CÁ NHÂN </h2>
				<div class="row information_profile">
				    <ul class="col-md-12 infor_profile">
				    	<li class="col-md-6"> {{ $user->hoten }}</li>
				    	<li class="col-md-6"> Sinh ngay: <span class="display"> {{ $user->ngaysinh }}</span></li>
				    	<li class="col-md-6"> Email: <span class="display"> {{ $user->email }}</span></li>
				    	<li class="col-md-6">CMND: <span class="display">{{ $user->CMND }}</span></li>
				    	<li class="col-md-6">Dia Chi: <span class="display">{{ $user->diachi }}</span></li>
				    	<li class="col-md-6">Gioi Tinh: <span class="display">{{ ($user->gioitinh == 0) ? 'Nam' : 'Nu' }}</span></li>
				    	<li class="col-md-6">So Dien Thoai: <span class="display">{{ $user->sodienthoai }}</span></li>
				    	<li class="col-md-6">Mã bệnh nhân: <span class="display"> BN002 </span></li>
				    	<button id="edit_infor_profile" class="btn btn-primary btn_profile"> Chỉnh sửa </button>
				    </ul>
				    <div class="edit-profile" style="display: none">
				    	<form action="{{ route('update-profile') }}" method="POST" id="update-profile">
				    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					    	<div class="row">
						      <div class="input-field col s6">
						        <i class="material-icons prefix">account_circle</i>
						        <input id="icon_prefix" type="text" class="validate" name="hoten" value="{{ $user->hoten }}">
						      </div>
						       <div class="input-field col s6">
						          <i class="material-icons prefix">phone</i>
						          <input id="icon_telephone" type="tel" class="validate" name="sodienthoai" value="{{ $user->sodienthoai }}">
						        </div>
						    </div>

						    <div class="row">
						        <div class="input-field col s6">
						          <i class="material-icons prefix">account_circle</i>
						          <input id="icon_prefix" type="date" name="{{ $user->ngaysinh }}">
						        </div>
						        <div class="input-field col s6">
						          <i class="material-icons prefix">email</i>
						          <input id="email" type="email" class="validate" name="email" value="{{ $user->email }}">
						        </div>
						    </div>

						    <div class="row">
						      <div class="input-field col s6">
						          <i class="material-icons prefix">assignment_ind</i>
						          <input id="icon_prefix" type="text" class="validate" name="CMND" value="{{ $user->CMND }}">
						        </div>
						        <div class="input-field col s6">
						          <i class="material-icons prefix">location_on</i>
						          <input id="icon_telephone" type="tel" class="validate" name="diachi" value="{{ $user->diachi }}">
						        </div>
						    </div>

						    <div class="row">
						        <div class="input-field col s6">
						        <i class="material-icons prefix">person_pin</i>
						           <div class="male">
						          <input name="gioitinh" value="0" type="radio" id="test1" {{ ($user->gioitinh == 0) ? 'checked' : '' }} />
						          <label class="input_sex" for="test1">Male</label>
						        </div>
						        <div>
						          <input name="gioitinh" value="1" type="radio" id="test2" {{ ($user->gioitinh == 0) ? 'checked' : '' }} />
						          <label class="input_sex" for="test2">Female</label>
						        </div>
						        </div>
						    </div>
						    <button class="btn btn-primary btn_update">Update</button>
						</form>
				    </div>
					  <div class="col-md-12 infor_medical">
					    <table class="calender_madecal bordered">
					      <thead>
					          <tr>
					              <th data-field="id">Thời gian</th>
					              <th data-field="name"> Dịch vụ khám </th>
					              <th data-field="price"> Phòng khám </th>
					              <th> Tổng thanh toán</th>
					              <th> Tùy chọn </th>
					          </tr>
					        </thead>

					        <tbody>
					        	<?php
					        		$thongtinkhams = DB::table('thongtinkham')->where('benhnhan_id', Auth::user()->id)->join('phongkham','phongkham.id','=','thongtinkham.phongkham_id')
					        		->join('loaidichvu','loaidichvu.id','=','phongkham.dichvu_id')
					        		->get();
					        		foreach ($thongtinkhams as $key => $value) {
					        			?>
											<tr>
									            <td> {{ $value->thoigiankham }} </td>
									            <td> {{ $value->tendichvu }} </td>
									            <td> {{ $value->ten }} </td>
									            <td> {{ $value->giatien }} </td>
									            <td>
									            	<button class="btn btn-primary btn_profile"> Chỉnh sửa </button>
									            	<button class="btn btn-default btn_profile"> Xóa </button>
									            </td>
									          </tr>
					        			<?php
					        		}
					        	?>
					        </tbody>
					    </table>
					  </div>
					  <div class="edit_profile"  style="display: none;">
					  	<form action="" method="POST" style="width: 100%;">
					  		<ul class="col-md-12">
					  			<li class="col-md-6">
					  				<p class="choose_date"> Chọn ngày khám: </p>
							    	<input type="date" class="form-control"  value="2016-4-12">
					  			</li>
					  			<li class="col-md-6 time">
					  				<p class="choose_time"> Chọn thời gian: </p>
							    	<input id="timepicker" class="timepicker" placeholder="00:00" />
					  			</li>
					  			<li class="col-md-6">
					  				<select class="selectpicker" id = "select-dich-vu" name="loaidichvu_id">
								  		<option value="">Ten dich vu</option>
						           		@foreach($loaidichvus as $loaidichvu)
						           			<option value="{{ $loaidichvu->id }}">{{ $loaidichvu->tendichvu }}</option>
						           		@endforeach
						            </select>
					  			</li>
					  			<li class="col-md-6">
					  				<select id="select-phong-kham" name="phongkham_id">
					              
					            	</select>
					  			</li>
					  		</ul>
					  		<div class="btn_edit_profile">
				            	<button id="done" class="btn btn-primary  btn_profile"> Xong</button>
				            	<button id="cancel" class="btn btn-default btn_profile"> Bỏ qua</button>
					        </div>
					  	</form>
					  </div>	
				</div>
@endif
<!-- form dang ki kham benh===================================== -->