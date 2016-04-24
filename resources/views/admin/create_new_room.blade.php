@extends('admin.master-admin')

@section('content')
    <div class="">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="create_room" class="col-md-12">
          <h2 class="hospital">Bệnh Viện Đa Khoa Đà Nẵng</h2>
          <!-- post article -->
          <form class="create_new_room">
            <ul>
              <li> <input class="form-control" type="text" placeholder="Tên phòng"> </li>
              <li> <input class="form-control" type="text" placeholder=" Bác Sỹ trực">  </li>
              <li> 
                <select class="selectpicker choose_type_news form-control">
                  <option> Chọn Loại Dịch Vụ </option>
                  <option> Khám nội </option>
                  <option> Khám Sản </option>
                  <option> Siêu Âm </option>
                  <option> Xét Nghiệm </option>
                </select>
              </li>
            </ul>
              <div class="button">
                <button class="btn btn-primary"> <a href="../dat kham online/list_room.html">Xong </a></button>
                <button class="btn btn-default"> <a href="../dat kham online/list_room">Bỏ qua </a></button>
              </div>
          </form>
        </div>
      </div>
    </div>
@stop
