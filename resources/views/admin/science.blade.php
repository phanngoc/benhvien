@extends('admin.master-admin')

@section('content')
<div class="col-md-12">
  @include('admin.sidebar')
  <div class="col-md-10">
    <div id="kind_of_news" class="col-md-12">
      <h2 class="hospital">Bệnh Viện Đa Khoa Đà Nẵng</h2>
      <!-- post article -->
      <form class="kind_of_news">
          <input class="form-control" type="text" placeholder=" Nhập Tên Khoa">
          <div class="button">
            <button class="btn btn-primary"> Thêm </button>
            <button class="btn btn-default"> Bỏ qua </button>
          </div>
      </form>
      <table  class="table table-bordered">
        <thead>
          <tr>
            <th> Tên Khoa </th>
            <th class="option"> Tùy Chọn </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> Khoa Công nghệ thông tin </td>
            <td class="option">
              <button class="btn btn_edit"> Chỉnh Sửa</button>
              <button class="btn btn_delete"> Xóa </button>
            </td>
          </tr>
          <tr>
            <td>Khoa mắt </td>
            <td class="option">
              <button class="btn btn_edit"> Chỉnh Sửa</button>
              <button class="btn btn_delete"> Xóa </button>
            </td>
          </tr>
          <tr>
            <td> Khoa Tai - Mũi - Họng </td>
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
@stop