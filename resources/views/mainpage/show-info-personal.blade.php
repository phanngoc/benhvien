	<!-- form profile cua benh nhan ================================= -->
@if ($user != null)

<script type="text/javascript">
	$(document).ready(function(){
		$('#edit_infor_profile').click(function(){
			$(this).parent().hide();
			$(this).parent().next().show();
		});

		$('#select-dich-vu').change(function(){
			var phongkham_id = $(this).closest('#update-info-care').find('input[name="phongkham_id"]').val();
			var idService = $(this).val();
			$.ajax({
				url : "{{ route('getRoomFromService') }}",
				data : {type : 'select', idService : idService, phongkham_id : phongkham_id},
				type : 'GET',
				success : function(result) {
					$('#select-phong-kham').html(result);
					$('select').material_select();
				}
			})
		});
	});
</script>
<a class="btn btn-primary btn-logout" href="{{ route('client.logout', $benhvien->id) }}"> Logout </a>
<h2 class="title_profile"> PROFILE </h2>
<div class="row information_profile">
    <ul class="col-md-12 infor_profile">
    	<li class="col-md-6" style="font-weight: bold;"> {{ $user->hoten }}</li>
    	<li class="col-md-6"> Birthday: <span class="display"> {{ substr($user->ngaysinh, 0, 11) }}</span></li>
    	<li class="col-md-6"> Email: <span class="display"> {{ $user->email }}</span></li>
    	<li class="col-md-6">Identity card: <span class="display">{{ $user->CMND }}</span></li>
    	<li class="col-md-6">Address: <span class="display">{{ $user->diachi }}</span></li>
    	<li class="col-md-6">Sex: <span class="display">{{ ($user->gioitinh == 0) ? 'Male' : 'Female' }}</span></li>
    	<li class="col-md-6">Phone number: <span class="display">{{ $user->sodienthoai }}</span></li>
    	<li class="col-md-6">Code: <span class="display"> {{ $user->code }} </span></li>
    	<button id="edit_infor_profile" class="btn btn-primary btn_profile"> Edit </button>
    </ul>
    <div class="edit-profile" style="display: none">
    	<form action="{{ route('update-profile', $benhvien->id) }}" method="POST" id="update-profile">
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
		          <input id="icon_prefix" type="date" name="ngaysinh" value="{{  substr($user->ngaysinh,0,10) }}">
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
		          <input name="gioitinh" value="1" type="radio" id="test2" {{ ($user->gioitinh == 1) ? 'checked' : '' }} />
		          <label class="input_sex" for="test2">Female</label>		        </div>
		        </div>
		    </div>
		    <button class="btn btn-default btn_cancel" type="button">Cancel</button>
		    <button class="btn btn-primary btn_update">Update</button>
		</form>
    </div>
	  <div class="col-md-12 infor_medical">
	  	@if (Session::get('messageError'))
	  		<div class="alert alert-danger" id="messageError">
			  <strong>Danger!</strong> Time which you choose have exceed the limit people.
			</div>

			<script type="text/javascript">
	  			setTimeout(function() {
	  				$('#messageError').hide(1000);
	  			}, 5000);
	  		</script>
	  	@endif



	    <table class="calender_madecal bordered">
	      <thead>
	          <tr>
	              <th data-field="date">Date</th>
	              <th data-field="time">Time</th>
	              <th data-field="order">Order</th>
	              <th data-field="name"> Services </th>
	              <th data-field="price"> Clinic </th>
	              <th> Bill</th>
	              <th> Option </th>
	          </tr>
	        </thead>

	        <tbody>
	        	<?php
	        		$thongtinkhams = DB::table('thongtinkham')->where('benhnhan_id', Auth::user()->get()->id)->join('phongkham','phongkham.id','=','thongtinkham.phongkham_id')
	        		->join('loaidichvu','loaidichvu.id','=','phongkham.dichvu_id')
	        		->select(['thongtinkham.id', 'phongkham.id as phongkham_id','loaidichvu.id as loaidichvu_id','thoigiankham', 'buoi', 'tendichvu', 'ten', 'giatien', 'thongtinkham.created_at'])->get();
	        		foreach ($thongtinkhams as $key => $value) {

	        			$order = DB::table('thongtinkham')->where('thoigiankham', $value->thoigiankham)
	        						->where('buoi', $value->buoi)
	        						->where('id', '<>' , $value->id)
	        						->where('created_at', '<', $value->created_at)->count();	
	        			?>
							<tr>
								<input type="hidden" name="thongtinkham_id" value="{{ $value->id }}">
								<input type="hidden" name="phongkham_id" value="{{ $value->phongkham_id }}">
								<input type="hidden" name="loaidichvu_id" value="{{ $value->loaidichvu_id }}">
								<input type="hidden" name="buoi" value="{{ $value->buoi }}">
					            <td class="thoigiankham"> {{ $value->thoigiankham }} </td>
					            <td class="buoi"> {{ ($value->buoi == 1) ? 'Morning' : 'Afternoon' }} </td>
					            <td class="order">{{ $order + 1 }}</td>
					            <td> {{ $value->tendichvu }} </td>
					            <td> {{ $value->ten }} </td>
					            <td> {{ $value->giatien }} </td>
					            <td>
					            	<button class="btn btn-primary btn_profile"> Edit </button>
					            	<button type="button" class="btn btn-default btn_profile delete-thongtinkham"> Delete </button>
					            </td>
					          </tr>
	        			<?php
	        		}
	        	?>
	        </tbody>
	    </table>
	    <button class="btn btn-primary btn_create">Create a new examination</button>
	  </div>
	  <div class="edit_profile"  style="display: none;">
	  	<form action="{{ route('update-info-care', $benhvien->id) }}" method="POST" style="width: 100%;" id="update-info-care">
	  		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	  		<input type="hidden" name="thongtinkham_id" value="">
	  		<input type="hidden" name="phongkham_id" value="">
	  		<ul class="col-md-12">
	  			<li class="col-md-6">
	  				<p class="choose_date"> Choose date: </p>
			    	<input type="date" name="date" class="form-control" value="2016-05-05" id="ngaykham">
	  			</li>
	  			<li class="col-md-6 time">
	  				<p class="choose_time"> Choose time: </p>
			    	<select class="selectpicker choose_time" name="buoi">
				      <option value="" disabled selected>Choose time</option>
				      <option value="1">Morning</option>
				      <option value="2">Afternoon</option>
				    </select>
	  			</li>
	  			<li class="col-md-6">
	  				<select class="selectpicker" id = "select-dich-vu" name="loaidichvu_id">
				  		<option value="">Services</option>
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
            	<button id="done" class="btn btn-primary  btn_profile"> Done</button>
            	<button id="cancel" class="btn btn-default btn_profile btn_cancel" type="button">Cancel</button>
	        </div>
	  	</form>
	  </div>	
</div>
@endif

<script type="text/javascript">
	// Profile ==============================
	
	var urlUpdateInfoCare = '{{ route("update-info-care", $benhvien->id) }}'; 
	var urlCreateInfoCare = '{{ route("create-info-care", $benhvien->id) }}'; 
	
	$(".infor_medical .btn_create").click(function(){
		$(".infor_medical").hide();
	    $(".edit_profile").show();
	    $('#update-info-care').attr('action', urlCreateInfoCare);
	});

	$(".infor_medical .btn_profile").click(function(){
		$('#update-info-care').attr('action', urlUpdateInfoCare);
		$(".infor_medical").hide();
		$(".edit_profile").show();
		var $trParent = $(this).parent().parent();
		var thongtinkham_id = $trParent.find('input[name="thongtinkham_id"]').val();
		var loaidichvu_id = $trParent.find('input[name="loaidichvu_id"]').val();
		var phongkham_id = $trParent.find('input[name="phongkham_id"]').val();
		var thoigiankham = $trParent.find('td.thoigiankham').text();
		var buoi = $trParent.find('input[name="buoi"]').val();
	
		var $formUpdateInfoCare = $('#update-info-care');
		$formUpdateInfoCare.find('input[name="date"]').val(thoigiankham.trim());
		$formUpdateInfoCare.find('select[name="buoi"]').val(buoi).trigger('change');

		$formUpdateInfoCare.find('input[name="thongtinkham_id"]').val(thongtinkham_id);
		$formUpdateInfoCare.find('input[name="phongkham_id"]').val(phongkham_id);
		$formUpdateInfoCare.find('#select-dich-vu').val(loaidichvu_id).change();
	  
	});

	$('.delete-thongtinkham').click(function(){
		var thongtinkham_id = $(this).parent().parent().find('input[name="thongtinkham_id"]').val();
		var $this = $(this);
		$.ajax({
			url : '{{ route("delete-info-care") }}',
			data : { thongtinkham_id : thongtinkham_id, _token : '{{ csrf_token() }}' },
			success : function(result) {
				if (result.status == 200) {
					$this.parent().parent().remove();
				}
			}
		})
	});

	$(".edit_profile #done, .edit_profile #cancel").click(function(){
	   $(".infor_medical").show();
	   $(".edit_profile").hide();
	});

    $(function() {
       $('#timepicker').timepicker();
    });

    $('#update-profile .btn_cancel').click(function() {
    	$('.edit-profile').hide();
    	$('.infor_profile').show();
    });

	// $("#edit_infor_profile").click(function(){
	//   $(".infor_profile").hide();
	//   $("#first_form").show();
	// });
</script>

<!-- form dang ki kham benh===================================== -->