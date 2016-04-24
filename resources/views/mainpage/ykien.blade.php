<section id="response2" class = "container each">
  <div id="wrap-response-option">
    <h2 class="title"> PHẢN HỒI </h2>
    <h3 class="sub_title">Hãy góp ý cho chúng tôi</h3>
     <div class="row">
        <form class="col s12" id="ykienphanhoi">
          <input type="hidden" name="benhvien_id" value="{{ $idBenhvien }}">
          <div class="row">
            <div class="input-field col s6">
              <input  id="first_name" type="text" class="validate" name="first_name">
              <label for="first_name"> Họ tên</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate" name="last_name">
              <label for="last_name"> Chức vụ </label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate" name="email">
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea" name="comment"></textarea>
              <label for="textarea1"> Ý kiến phản hồi </label>
            </div>
          </div>
          <button class="btn waves-effect waves-light" type="button" id="submitYkien">Submit
            <i class="material-icons right">send</i>
          </button>
        </form>
      </div>
  </div>
  <div id="message-success" class="col s12" style="display: none">
      <h3> Cảm ơn ý kiến đóng góp của bạn! </h3>
  </div>
</section>
</div>
</div>

<style type="text/css">
  #message-success {
    height: 150px;
    width: 500px;
    background: rgb(46, 175, 163);
    margin: 0 auto;
    border-radius: 18px;
    position: absolute;
    top: 40%;
    left: 25%;
  }
  #message-success h3{
    text-align: center;
    color: #fff;
    line-height: 215px;
    font-size: 20px;
  }
</style>

<script type="text/javascript">
  $(document).ready(function(){
    $('#submitYkien').click(function(){
      console.log('y kien nguoi dung');
      var benhvien_id = $('#ykienphanhoi').find('input[name="benhvien_id"]').val();
      var first_name = $('#ykienphanhoi').find('input[name="first_name"]').val();
      var email = $('#ykienphanhoi').find('input[name="email"]').val();
      var last_name = $('#ykienphanhoi').find('input[name="last_name"]').val();
      var ykien = $('#ykienphanhoi').find('textarea[name="comment"]').val();
      $.ajax({
        url : "{{route('ykienphanhoi')}}",
        data : {first_name  : first_name, last_name : last_name, email : email, ykien : ykien, benhvien_id : benhvien_id },
        success : function(response) {
          $('#message-success').fadeIn("slow");
          setInterval(function(){
              disappare();
          }, 2000);
          $("input, textarea").val("");
        }
      });
    });

  });
    function disappare() {
      $('#message-success').fadeOut("slow");
    }
</script>
