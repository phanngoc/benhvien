@extends('admin.master-admin')

@section('content')
  
    <div class="">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="create_infor_science" class="col-md-12">
          <h2 class="hospital">Bệnh Viện Đà Nẵng</h2>
          <!-- post article -->
           <div class="top_page_infor">
         <!--    <div class="input-group stylish-input-group search_input">
              <input type="text" class="form-control"  placeholder="Search" >
                <span class="input-group-addon">
                    <button type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div> -->
            <button class="btn btn-primary pull-right" id="saveDaKham">Save</button>
          </div>
           <table  class="table table-bordered" id="tableThongTinKham">
              <thead>
                <tr>
                  <th> Họ Tên </th>
                  <th> Mã code </th>
                  <th> Bệnh Viện </th>
                  <th> Dịch Vụ </th>
                  <th> Phòng Khám </th>
                  <th> Ngày Khám </th>
                  <th> Thời Gian Khám </th>
                  <th> Thời gian đăng kí</th>
                  <th> Đã Khám </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($thongtinkhams as $thongtinkham)
                  <tr>
                    <input type="hidden" name="thongtinkham_id" value="{{ $thongtinkham->id }}">
                    <td> {{ $thongtinkham->benhnhan->hoten }} </td>
                    <td class="column-code"> {{ $thongtinkham->benhnhan->code }} </td>
                    <?php if ($thongtinkham->phongkham == null) 
                    {
                        dd(1);
                    }
                    ?>
                    <td> {{ $thongtinkham->phongkham->dichvu->benhvien->ten }}</td>
                    <td> {{ $thongtinkham->phongkham->dichvu->tendichvu }} </td>
                    <td> {{ $thongtinkham->phongkham->ten }} </td>
                    <td> {{ substr($thongtinkham->thoigiankham,0,10) }}</td>
                    <td> {{ substr($thongtinkham->thoigiankham,11,5) }}</td>
                    <td> {{ $thongtinkham->created_at }} </td>
                    <td> <input type="checkbox" {{ ($thongtinkham->dakham == 1) ? 'checked' : '' }} name="dakham" /></td>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>

  <script type="text/javascript">
    $(function () {
      $('#tableThongTinKham').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": true,
        "bSort": true,
        "bInfo": false,
        "bAutoWidth": false
      });
    });
  </script>

<style type="text/css">
  .column-code {
    width : 220px;
    word-break : break-all;
  }
</style>

    <script type="text/javascript">
        $(document).ready(function(){
          $('#saveDaKham').click(function(){
            var arrResult = [];
            $('#tableThongTinKham').find('tbody tr').each(function(key, value) {
              var thongtinkhamId = $(value).find('input[name="thongtinkham_id"]').val();
              var dakham = ($(value).find('input[name="dakham"]').is(':checked') == true) ? 1 : 0;
              arrResult.push({thongtinkhamId : thongtinkhamId, dakham : dakham});
            });
           
            $.ajax({
              url : '{{route("updateStatusTakeMedical")}}',
              method : 'POST',
              data : { data : arrResult, _token : "{{csrf_token()}}" },
              success : function(result) {
                if (result.status = 200) {
                  alert("Update successfully");
                }
              }
            });
          });
        });
    </script>
@stop
