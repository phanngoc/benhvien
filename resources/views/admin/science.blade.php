@extends('admin.master-admin')

@section('content')
<div class="col-md-12">
  @include('admin.sidebar')
  <div class="col-md-10">
    <div id="kind_of_news" class="col-md-12">
      <h2 class="hospital">Bệnh Viện Đa Khoa Đà Nẵng</h2>
      <!-- post article -->
      <form class="kind_of_news">
          <select class="selectpicker form-control">
            <option> Chọn Bệnh Viện </option>
            <option> Bệnh viện Đa khoa Đà Nẵng</option>
            <option> Bệnh viện C Đà Nẵng </option>
            <option> Bệnh Viện Liên Chiểu Đà Nẵng </option>
            <option> Bệnh Viện Hoàn Mỹ Đà Nẵng </option>
          </select>
          <input class="form-control" type="text" placeholder=" Nhập Tên Khoa">
          <div class="button">
            <button class="btn btn-primary"> Thêm </button>
            <button class="btn btn-default"> Bỏ qua </button>
          </div>
      </form>
      <table  class="table table-bordered">
        <thead>
          <tr>
            <th> Bệnh Viện </th>
            <th> Tên Khoa </th>
            <th class="option"> Tùy Chọn </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> Bệnh Viện C Đà Nẵng</td>
            <td> Khoa Công nghệ thông tin </td>
            <td class="option">
              <button class="btn btn_edit"> Chỉnh Sửa</button>
              <button class="btn btn_delete"> Xóa </button>
            </td>
          </tr>
          <tr>
            <td> Bệnh Viện Hoàn Mỹ Đà Nẵng </td>
            <td>Khoa mắt </td>
            <td class="option">
              <button class="btn btn_edit"> Chỉnh Sửa</button>
              <button class="btn btn_delete"> Xóa </button>
            </td>
          </tr>
          <tr>
            <td> Bệnh Viện Liên Chiểu Đà Nẵng </td>
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
