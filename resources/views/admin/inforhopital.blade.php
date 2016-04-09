@extends('admin.master-admin')

@section('content')
    <div class="col-md-12">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="infor_hospital" class="col-md-12">
          <h2 class="hospital">Bệnh Viện Đà Nẵng</h2>
          <!-- post article -->
          <form class="infor_hospital">
              <input class="form-control" type="text" placeholder=" Nhập tên bệnh viện">
              <input class="form-control" type="text" placeholder=" Địa chỉ ">
              <input class="form-control" type="text" placeholder=" Số điện thoại ">
              <input class="form-control" type="text" placeholder=" Số khoa ">
              <textarea class="form-control" placeholder="Thông tin"></textarea>
              <div class="button">
                <button class="btn btn-primary"> Thêm </button>
                <button class="btn btn-default"> Bỏ qua </button>
              </div>
          </form>
          <table  class="table table-bordered">
            <thead>
              <tr>
                <th> Tên Bệnh Viện </th>
                <th> Địa Chỉ </th>
                <th> Số Điện Thoại </th>
                <th> Số Khoa </th>
                <th class="infor"> Thông Tin </th>
                <th class="option"> Tùy Chọn </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> Bệnh Viện Đa Khoa Đà nẵng </td>
                <td> Hải Phòng, Hải Châu, Đà Nẵng </td>
                <td> 0511 244 222 </td>
                <td> 30 </td>
                <td class="infor"> But before we get into the nuances of address variations, 
                it’s worth pointing out that addresses have a commonly understood structure. 
                Through years of experience with mailing and postal systems, 
                people have a pretty concrete idea of what constitutes an address block. 
                This common understanding is so definitive that eyetracking data suggests, 
                once people begin filling in a set of input fields that make up an address, 
                they often cease looking at their labels. The basic structure of an address is so familiar, 
                people don’t need the guidance labels provide. - See more at: 
                </td>
                <td class="option">
                  <button class="btn btn_edit"> Chỉnh Sửa</button>
                  <button class="btn btn_delete"> Xóa </button>
                </td>
              </tr>
              <tr>
                <td> Bệnh Viện Đa Khoa Đà nẵng </td>
                <td> Hải Phòng, Hải Châu, Đà Nẵng </td>
                <td> 0511 244 222 </td>
                <td> 30 </td>
                <td class="infor"> But before we get into the nuances of address variations, 
                it’s worth pointing out that addresses have a commonly understood structure. 
                Through years of experience with mailing and postal systems, 
                people have a pretty concrete idea of what constitutes an address block. 
                This common understanding is so definitive that eyetracking data suggests, 
                once people begin filling in a set of input fields that make up an address, 
                they often cease looking at their labels. The basic structure of an address is so familiar, 
                people don’t need the guidance labels provide. - See more at: 
                </td>
                <td class="option">
                  <button class="btn btn_edit"> Chỉnh Sửa</button>
                  <button class="btn btn_delete"> Xóa </button>
                </td>
              </tr>
              <tr>
                <td> Bệnh Viện Đa Khoa Đà nẵng </td>
                <td> Hải Phòng, Hải Châu, Đà Nẵng </td>
                <td> 0511 244 222 </td>
                <td> 30 </td>
                <td class="infor"> But before we get into the nuances of address variations, 
                it’s worth pointing out that addresses have a commonly understood structure. 
                Through years of experience with mailing and postal systems, 
                people have a pretty concrete idea of what constitutes an address block. 
                This common understanding is so definitive that eyetracking data suggests, 
                once people begin filling in a set of input fields that make up an address, 
                they often cease looking at their labels. The basic structure of an address is so familiar, 
                people don’t need the guidance labels provide. - See more at: 
                </td>
                <td class="option">
                  <button class="btn btn_edit"> Chỉnh Sửa</button>
                  <button class="btn btn_delete"> Xóa </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!--  -->
@stop
