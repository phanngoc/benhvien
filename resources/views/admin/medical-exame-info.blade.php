@extends('admin.master-admin')

@section('content')
    <div class="col-md-12">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="create_infor_science" class="col-md-12">
          <h2 class="hospital">Bệnh Viện Đà Nẵng</h2>
          <!-- post article -->
           <div class="top_page_infor">
            <div class="input-group stylish-input-group search_input">
              <input type="text" class="form-control"  placeholder="Search" >
                <span class="input-group-addon">
                    <button type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
            <button class="btn btn-primary"> OK</button>
          </div>
           <table  class="table table-bordered">
              <thead>
                <tr>
                  <th> Họ Tên </th>
                  <th> Bệnh Viện </th>
                  <th> Dịch Vụ </th>
                  <th> Phòng Khám </th>
                  <td> Ngày Khám </td>
                  <th> Thời Gian Khám </th>
                  <th> Đã Khám </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> Cún </td>
                  <td> Bệnh Viện Đa Khoa Đà nẵng </td>
                  <td> Khám Mắt </td>
                  <td> Phòng Khám 1</td>
                  <td> 28/4/2016 </td>
                  <td> 14:00</td>
                  <td> <input type="checkbox"> </td>
                </tr>
                <tr>
                  <td> Cún </td>
                  <td> Bệnh Viện Đa Khoa Đà nẵng </td>
                  <td> Khám Mắt </td>
                  <td> Phòng Khám 1</td>
                  <td> 28/4/2016 </td>
                  <td> 14:00</td>
                  <td> <input type="checkbox"> </td>
                </tr>
                <tr>
                  <td> Cún </td>
                  <td> Bệnh Viện Đa Khoa Đà nẵng </td>
                  <td> Khám Mắt </td>
                  <td> Phòng Khám 1</td>
                  <td> 28/4/2016 </td>
                  <td> 14:00</td>
                  <td> <input type="checkbox"> </td>
                </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
@stop
