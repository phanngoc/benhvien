<form class="col s12">
<!-- first form ===================================== -->
  <div id="first_form" class="animated fadeInRightBig">
    <div class="row">
      <div class="input-field col s6 wow animatedss fadeInLeftBig">
        <i class="material-icons prefix">account_circle</i>
        <input id="icon_prefix" type="text" class="validate" name="hoten">
        <label for="icon_prefix">Họ tên:</label>
      </div>
      <div class="input-field col s6 wow animatedss fadeInRightBig">
        <i class="material-icons prefix">phone</i>
        <input id="icon_telephone" type="tel" class="validate" name="phone">
        <label for="icon_telephone">Số điện thoại: </label>
      </div>
    </div>

     <div class="row">
        <div class="input-field col s6 wow animatedss fadeInLeftBig">
          <label class="lb_date"> Ngày sinh: </label>
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="date">
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
        <div class="input-field col s12 wow animatedss fadeInLeftBig">
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
    </div>
   <button id="first_btn" class="btn waves-effect waves-light continue wow animateds fadeInUpBig" type="button">Tiếp
      <i class="material-icons right">send</i>
   </button>
  </div>
  <!-- sencond form ========================================================-->
  <div id="second_form" style="display:none;" class="animated fadeInRightBig">
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
    <ul class="collection with-header list-dichvu">
        <li class="collection-header"><h2>Loại Dịch Vụ</h2></li>
        @foreach ($loaidichvus as $loaidichvu)
          <li class="collection-item" data-id = "{{$loaidichvu->id}}">
            <div>
              {{ $loaidichvu->tendichvu }}
              <a href="#!" class="secondary-content">{{ $loaidichvu->giatien }}<span>vnd</span></a>
            </div>
          </li>
        @endforeach
    </ul>
    <button id="second_btn" class="btn waves-effect waves-light continue wow animateds fadeInUpBig" type="button">Tiếp
      <i class="material-icons right">send</i>
   </button>
  </div>
  <!-- third form =========================================================s -->
  <div id="third_form" class="animated fadeInRightBig" style="display:none;">
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
    <button id="third_btn" class="btn waves-effect waves-light continue wow animateds fadeInUpBig" type="submit" name="action">Tiếp
      <i class="material-icons right">send</i>
    </button>
  </div> <!-- #third_form -->
  <!-- form choose time -->
  <div id="fourth_form" class="animated fadeInRightBig" style="display:none;">
    <a class="secondary-content form_datetime">
      <input type="text" id="datepicker" class="datepicker">
    </a>
    <button id="fourth_btn" class="btn waves-effect waves-light continue wow animateds fadeInUpBig" type="submit" name="action">Tiếp
      <i class="material-icons right">send</i>
    </button>
  </div> <!-- #fourth_form -->
</form>
<script type="text/javascript">
  $(document).ready(function(){
    $('#third_form').on('click','li.collection-item', function(){
      var phongkhamId = $(this).data('id');
      console.log("it ok:"+phongkhamId);
      $('#third_form').find('li.collection-item').removeClass('status-choose');
      $(this).addClass('status-choose');
      $('#third_form').find('input[name="phongkham"]').val(phongkhamId);
    });
  });
</script>

<style media="screen" type="text/css">
  .status-choose {
    background-color: #C0C0C0 !important;
  }
</style>