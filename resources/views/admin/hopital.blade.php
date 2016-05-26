@extends('admin.master-admin')

@section('content')
    <div class="">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="post_information" class="col-md-12">
          <h2 class="hospital">Danang Hospital</h2>
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
            <button class="btn btn-primary"><a href="{{action('AdminController@getCreatInforScience')}}"> Create </a></button>
          </div>
          <!-- post article -->
          <div class="wrap_list_infor">
            <form>
               <table  class="table table-bordered">
                  <thead>
                    <tr>
                      <th> Hospital</th>
                      <th class="name_science"> Department </th>
                      <th class="img_science"> Images </th>
                      <th class="content_idea"> Depertment's Information </th>
                      <th> Option </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> Bệnh Viện C Đà Nẵng</td>
                      <td class="name_science"> Khoa Nhi </td>
                      <td  class="img_science">
                        <img id="display_img" src="img/images/6.jpg" alt="your image" />
                      </td>
                      <td class="content_idea">Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015  chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ  2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.</td>
                      <td>
                        <button class="btn btn_edit"> <a href="{{action('AdminController@getEditInforScience')}}"> Chỉnh Sửa </a></button>
                        <button class="btn btn_delete"> Xóa </button>
                      </td>
                    </tr>
                    <tr>
                      <td> Bệnh Viện Hoàn Mỹ Đà Nẵng </td>
                       <td class="name_science"> Khoa Thần Kinh </td>
                      <td class="img_science" >
                        <img id="display_img" src="img/images/6.jpg" alt="your image" />
                      </td>
                      <td class="content_idea">Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015  chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ  2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.</td>
                      <td>
                        <button class="btn btn_edit"><a href="{{action('AdminController@getEditInforScience')}}"> Chỉnh Sửa </a></button>
                        <button class="btn btn_delete"> Xóa </button>
                    </tr>
                    <tr>
                      <td> Bệnh Viện Hoàn Mỹ Đà Nẵng </td>
                       <td class="name_science"> Phòng Tổ Chức Hành Chính </td>
                      <td class="img_science">
                        <img  id="display_img" src="img/images/6.jpg" alt="your image"/>
                      </td>
                      <td class="content_idea">Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015  chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ  2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.</td>
                      <td>
                        <button class="btn btn_edit"> Chỉnh Sửa</button>
                        <button class="btn btn_delete"> Xóa </button>
                    </tr>
                  </tbody>
                </table>
            </form>
        </div>
      </div>
    </div>
  </div>
@stop
