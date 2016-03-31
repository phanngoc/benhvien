<section id="response2" class = "container each">
  <h2 class="title"> PHẢN HỒI </h2>
  <h3 class="sub_title">Hãy góp ý cho chúng tôi</h3>
   <div class="row">
      <form class="col s12" id="ykienphanhoi">
        <div class="row">
          <div class="input-field col s6">
            <input  id="first_name" type="text" class="validate" name="first_name">
            <label for="first_name">Firstname</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate" name="last_name">
            <label for="last_name">Lastname</label>
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
            <label for="textarea1">Comment</label>
          </div>
        </div>
        <button class="btn waves-effect waves-light" type="button" id="submitYkien">Submit
          <i class="material-icons right">send</i>
        </button>
      </form>
    </div>
</section>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#submitYkien').click(function(){
      var first_name = $('#ykienphanhoi').find('input[name="first_name"]').val();
      var email = $('#ykienphanhoi').find('input[name="email"]').val();
      var last_name = $('#ykienphanhoi').find('input[name="last_name"]').val();
      var ykien = $('#ykienphanhoi').find('textarea[name="comment"]').val();
      $.ajax({
        url : "{{route('ykienphanhoi')}}",
        data : {first_name  : first_name, last_name : last_name, email : email, ykien : ykien },
        success : function(response) {

        }
      });
    });

  });
</script>
