<form class="col s12">
<!-- first form ===================================== -->
  <div id="first_form" class="wow animated fadeInRightBig">
    <div class="row">
      <div class="input-field col s6 wow animatedss fadeInLeftBig">
        <i class="material-icons prefix">account_circle</i>
        <input id="icon_prefix" type="text" class="validate" name="hoten">
        <label for="icon_prefix">Họ tên:</label>
      </div>
      <div class="input-field col s6 wow animatedss fadeInRightBig">
          <label> Mật Khẩu </label>
          <input type="text" class="validate" name="password">
      </div>
    </div>

     <div class="row">
        <div class="input-field col s6 wow animatedss fadeInLeftBig">
          <label class="lb_date"> Ngày sinh: </label>
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
          <label for="icon_prefix">CMND:</label>
        </div>
        <div class="input-field col s6 wow animatedss fadeInRightBig">
          <i class="material-icons prefix">location_on</i>
          <input id="icon_telephone" type="tel" class="validate" name="diachi">
          <label for="icon_telephone">Địa chỉ: </label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 wow animatedss fadeInLeftBig">
        <label class="lb_date"> Giới tính: </label>
        <i class="material-icons prefix">person_pin</i>
           <div class="male">
          <input name="group1" type="radio" id="test1" />
          <label class="input_sex" for="test1" name="gioitinh" value="0">Male</label>
        </div>
        <div>
          <input name="group1" type="radio" id="test2" />
          <label class="input_sex" for="test2" name="gioitinh" value="1">Female</label>
        </div>
        </div>
        <div class="input-field col s6 wow animatedss fadeInRightBig">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" name="sodienthoai">
          <label for="icon_telephone">Số điện thoại: </label>
        </div>
    </div>
   <button id="first_btn" class="btn waves-effect waves-light continue wow animateds fadeInUpBig" type="button">Tiếp
      <i class="material-icons right">send</i>
   </button>
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
        $('#second_btn').click(function(){
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
    <h2 class="title">Loại Dịch Vụ</h2>
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
    <button id="second_btn" class="btn waves-effect waves-light continue animateds fadeInUpBig" type="button">Tiếp
      <i class="material-icons right">send</i>
   </button>
  </div>
  <!-- third form =========================================================s -->
  <div id="third_form" style="display:none;" class="animateds fadeInRightBig">
    <input type="hidden" name="phongkham" value="">
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
    <button id="third_btn" class="btn waves-effect waves-light continue animateds fadeInUpBig" type="submit" name="action">Tiếp
      <i class="material-icons right">send</i>
    </button>
  </div> 
  <!-- form choose time -->
  <div id="fourth_form" style="display:none;" class="animateds fadeInRightBig">
    <p class="choose_date"> Chọn ngày khám: </p>
    <div class="jquery-calendar" id="datepicker"></div>
    <input type="text" class="display_date" name="date" value="thevalue" />
    <p class="choose_time"> Chọn thời gian: </p>
    <input id="timepicker" class="timepicker" placeholder="00:00"/>
    <button id="fourth_btn" class="btn waves-effect waves-light continue animateds fadeInUpBig" type="button" name="action" data-toggle="modal" data-target="#myModal1"> OK
      <i class="material-icons right">send</i>
    </button>
  </div> <!-- #fourth_form -->
</form>
<!-- alert successfully when submit-======================= -->
<div class="modal fade inform_success" id="myModal1" role="dialog">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <p > Chúc mừng bạn đã đăng ký khám thành công qua hệ thống <b>Đăng kí khám Online</b></p>
          <p class="success">Mã bệnh nhân của bạn là: <b>BN001</b> </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn_close" data-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
</div>
<!-- ============ -->
<script type="text/javascript">
  // display date====================
  $(function(){
    $('#datepicker').datepicker({
      onSelect: function(dateText, inst) {
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
      console.log("it ok:"+phongkhamId);
      $('#third_form').find('li.collection-item').removeClass('status-choose');
      $(this).addClass('status-choose');
      $('#third_form').find('input[name="phongkham"]').val(phongkhamId);
    });
    
    $('input.timepicker').timepicker({
      change: function(time) {
        // var element = $(this), text;
        // var timepicker = element.timepicker();
        // text = 'Selected time is: ' + timepicker.format(time);
        // element.siblings('span.help-line').text(text);
      }
    });
  });
</script>

<style media="screen" type="text/css">
  .status-choose {
    background-color: #C0C0C0 !important;
  }
</style>
