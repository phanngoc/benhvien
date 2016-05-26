@extends('admin.master-admin')

@section('content')
<div class="">
  @include('admin.sidebar')
  <div class="col-md-10">
    <div id="manage_science" class="col-md-12">
      <h2 class="hospital">Danang Hospital</h2>
      <!-- post article -->
      <form class="sciences" method="POST" action="{{$urlPost}}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}" />
          <select class="selectpicker form-control" name="benhvien_id">
            @foreach ($benhvien as $benh)
              @if(isset($khoa) && $khoa->benhvien_id == $benh->id)
                <option value="{{$benh->id}}" selected>{{$benh->ten}}</option>
              @else
                <option value="{{$benh->id}}">{{$benh->ten}}</option>
              @endif
            @endforeach
          </select>
          <p class="errors">{{$errors->first('benhvien_id')}}</p>
          <input class="form-control" type="text" placeholder="Department's Name" name="tenkhoa" value="{{isset($khoa) ? $khoa->tenkhoa : ''}}">
          <p class="errors">{{$errors->first('tenkhoa')}}</p>
          <textarea class="form-control"  placeholder=" Description" name="thongtin">{{isset($khoa) ? $khoa->thongtin : ''}}</textarea> 
          <p class="errors">{{$errors->first('thongtin')}}</p>
          <input name="hinhanh" type="file"/>
          <p class="errors">{{$errors->first('hinhanh')}}</p>
          <div class="button">
            <button class="btn btn-primary"> Done </button>
            <button class="btn btn-default"> Cancel </button>
          </div>
      </form>
      <table class="table table-bordered" id="science">
        <thead>
          <tr>
            <th>Hospital</th>
            <th>Department</th>
            <th class="infor">Information</th>
            <th>Images</th>
            <th class="option"> Option </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($khoas as $value)
          <tr>
            <td>
              <?php
                $tenBenhVien = \App\Models\Benhvien::find($value->benhvien_id)->ten;
                echo $tenBenhVien;
              ?>
            </td>
            <td><?php echo $value->tenkhoa; ?></td>
            <td class="infor"><?php echo $value->thongtin; ?></td>
            <td><img src="{{Asset('uploads/'.$value->hinhanh)}}" width="185" height="140"/></td>
            <td class="option">
              <a href="{{action('ScienceController@getEditScience', $value->id)}}"><button class="btn btn_edit"> Chỉnh Sửa</button></a>
              <button class="btn btn_delete"> Xóa </button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <script type="text/javascript">
        $(function () {
          $('#science').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": false,
            "bAutoWidth": false
          });
        });
      </script>

    </div>
  </div>
</div>
@stop
