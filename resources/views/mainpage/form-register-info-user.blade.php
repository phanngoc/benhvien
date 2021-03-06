<form class="col s12" method="POST" action="{{ route('register-info-care', $benhvien->id) }}" id="elem-form-register">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
<!-- first form ===================================== -->
  <div id="first_form" class="wow animated fadeInRightBig">
    <div class="row">
      <div class="input-field col s6 wow animatedss fadeInLeftBig">
        <i class="material-icons prefix">account_circle</i>
        <input id="icon_prefix" type="text" class="validate" name="hoten">
        <label for="icon_prefix">Full name:</label>
      </div>
      <div class="input-field col s6 wow animatedss fadeInRightBig">
          <label> Password </label>
          <input type="password" class="validate" name="password">
      </div>
    </div>

     <div class="row">
        <div class="input-field col s6 wow animatedss fadeInLeftBig">
          <label class="lb_date"> Birthday: </label>
          <i class="material-icons prefix">account_circle</i>
          <input id="myDate" name="ngaysinh" type="date">
        </div>
        <div class="input-field col s6 wow animatedss fadeInRightBig">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="email">
          <label for="icon_telephone">Email</label>
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>
      </div>

    <div class="row">
      <div class="input-field col s6 wow animatedss fadeInLeftBig">
          <i class="material-icons prefix">assignment_ind</i>
          <input id="icon_prefix" type="text" class="validate" name="CMND">
          <label for="icon_prefix">Identity card:</label>
        </div>
        <div class="input-field col s6 wow animatedss fadeInRightBig">
          <i class="material-icons prefix">location_on</i>
          <input id="icon_telephone" type="tel" class="validate" name="diachi">
          <label for="icon_telephone">Address: </label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 wow animatedss fadeInLeftBig">
        <label class="lb_date"> Sex: </label>
        <i class="material-icons prefix">person_pin</i>
           <div class="male">
          <input type="radio" id="test1" name="gioitinh" value="0"/>
          <label class="input_sex" for="test1" name="gioitinh" value="0">Male</label>
        </div>
        <div>
          <input type="radio" id="test2" name="gioitinh" value="1"/>
          <label class="input_sex" for="test2">Female</label>
        </div>
        </div>
        <div class="input-field col s6 wow animatedss fadeInRightBig">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" name="sodienthoai">
          <label for="icon_telephone">Phone number: </label>
        </div>
    </div>
    <div class="wrap_button">
      <button id="first_btn_next" class="btn waves-effect waves-light continue animateds fadeInUpBig" type="button">Next
        <i class="material-icons right">skip_next</i>
      </button>
    </div>
    
  </div>
  <!-- sencond form ========================================================-->
  <div id="second_form" style="display:none;" class="animateds fadeInRightBig">
    <input type="hidden" name="loaidichvu" value="0">
    <script type="text/javascript">
      $(document).ready(function(){
        $('#second_form').find('li.collection-item').click(function(){
          var idDichvu = $(this).data('id');
          $('#second_form').find('li.collection-item').removeClass('status-choose');
          $(this).addClass('status-choose');
          $('input[name="loaidichvu"]').val(idDichvu);
        });
        $('#second_btn_next').click(function(){
          var serviceChoose = $('#second_form').find('input[name="loaidichvu"]').val();
          $.ajax({
            url : '{{route("getRoomFromService")}}',
            data : {idService : serviceChoose},
            success : function(result) {
              $('#third_form').find('#list-phongkham').html(result);
            }
          })
        });
      });
    </script>
    <h2 class="title">Services</h2>
    <ul class="collection with-header list-dichvu">
        @foreach ($loaidichvus as $loaidichvu)
          <li class="collection-item" data-id = "{{$loaidichvu->id}}">
            <div>
              {{ $loaidichvu->tendichvu }}
              <a href="#!" class="secondary-content">{{ $loaidichvu->giatien }}<span>vnd</span></a>
            </div>
          </li>
        @endforeach
    </ul>
    <div class="wrap_button">
      <button id="second_btn_pre" class="btn waves-effect waves-light back animateds fadeInUpBig" type="button">Back
        <i class="material-icons right">skip_previous</i>
      </button>
      <button id="second_btn_next" class="btn waves-effect waves-light continue animateds fadeInUpBig" type="button">Next
        <i class="material-icons right">skip_next</i>
      </button>
    </div>
  </div>
  <!-- third form =========================================================s -->
  <div id="third_form" style="display:none;" class="animateds fadeInRightBig">
    <input type="hidden" name="phongkham_id" value="">
    <ul class="collection" id="list-phongkham">
      @foreach ($phongkhams as $phongkham)
        <li class="collection-item avatar" data-id="{{$phongkham->id}}">
          <span class="title">{{ $phongkham->ten }}</span>
          <p>Bác Sỹ: <br>
             {{ $phongkham->bacsi }}
          </p>
        </li>
      @endforeach
    </ul>
    <div class="wrap_button">
      <button id="third_btn_pre" class="btn waves-effect waves-light back animateds fadeInUpBig" type="button">Back
        <i class="material-icons right">skip_previous</i>
      </button>
      <button id="third_btn_next" class="btn waves-effect waves-light continue animateds fadeInUpBig" type="button">Next
        <i class="material-icons right">skip_next</i>
      </button>
    </div>
  </div> 
  <!-- form choose time -->
  <div id="fourth_form" style="display:none;" class="animateds fadeInRightBig">
    <p class="choose_date"> Choose date: </p>
    <div class="jquery-calendar" id="datepicker"></div>
    <input type="text" class="display_date" name="date" value="thevalue" />
    <select class="selectpicker choose_time" name="buoi">
      <option value="" disabled selected>Choose time</option>
      <option value="1">Morning</option>
      <option value="2">Afternoon</option>
    </select>

    <div class="wrap_button">
      <button id="fourth_btn_pre" class="btn waves-effect waves-light back animateds fadeInUpBig" type="button">Back
        <i class="material-icons right">skip_previous</i>
      </button>
      <button id="fourth_btn_next" class="btn waves-effect waves-light continue animateds fadeInUpBig" type="button" data-toggle="modal" data-target="#myModal_" data-backdrop="false">Next
        <i class="material-icons right">skip_next</i>
      </button>
    <button type="submit" style="display: none" id="submitFormRegistInfoUser">Submit</button>
  </div> <!-- #fourth_form -->
</form>
<!-- alert successfully when submit-======================= -->
<div class="modal inform_success" id="myModal_" role="dialog">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <p > Congratulations! You've been registed successfully! </p>
          <p style="color: #ff0000;">Lets bring your CODE in form information to hospital on time.</p>
          <p>We always welcome you!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn_close" data-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
</div>

<script type="text/javascript" src="{{ Asset('js/jquery-validation-1.15.0/dist/jquery.validate.js') }}"></script>
<script type="text/javascript" src="{{ Asset('js/jquery-validation-1.15.0/dist/additional-methods.js') }}"></script>

<!-- ============ -->
<script type="text/javascript">
    $('#elem-form-register').validate({
      rules: {
        hoten: {
          required: true,
        },
        password: {
          required: true,
        },
        ngaysinh: {
          required: true,
        },
        email: {
          required: true,
        }
      }
    });

  // display date====================
  $(function(){
    $('#datepicker').datepicker({
      onSelect: function(dateText, inst) {
        console.log(dateText);
        $("input[name='date']").val(dateText);
      }
    });

  });

  // =====================
  function myFunction() {
    document.getElementById("myDate").defaultValue = "2014-02-09";
  }

  $(document).ready(function(){

    $('#third_form').on('click','li.collection-item', function(){
      var phongkhamId = $(this).data('id');
      $('#third_form').find('li.collection-item').removeClass('status-choose');
      $(this).addClass('status-choose');
      $('#third_form').find('input[name="phongkham_id"]').val(phongkhamId);
    });
    
    $('input.timepicker').timepicker({
      change: function(time) {
        // var element = $(this), text;
        // var timepicker = element.timepicker();
        // text = 'Selected time is: ' + timepicker.format(time);
        // element.siblings('span.help-line').text(text);
      }
    });

    $('#fourth_btn_next').click(function(){
      // $('#myModal_').modal('show');
    });

    $('#myModal_').find('.btn_close').click(function(){
      $('#myModal_').modal('hide');
      $('#submitFormRegistInfoUser').click();
    });

  });
</script>

<style media="screen" type="text/css">
  .status-choose {
    background-color: #C0C0C0 !important;
  }
</style>
