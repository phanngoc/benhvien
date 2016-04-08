@extends('admin.master-admin')

@section('content')
    <form id="login" style="display:none;">
      <p class="title_login">LOGIN</p>
      <input id = "username" class="group-control user" type="text" placeholder = "username">
      <input id = "password" class="group-control pass" type="text" placeholder = "password">
      <div class="check">
        <input type="checkbox"><span>Remember</span>
      </div>
      <button id= "btn_login" class="btn btn-primary btn_login">LOGIN</button>
    </form>
    <div class="col-md-12">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="post_information" class="col-md-12">
          <h2 class="hospital">Bệnh Viện Đa Khoa Đà Nẵng</h2>
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
            <button class="btn btn-primary"><a href="../dat kham online/create_infor_scientce.html"> Tạo Mới </a></button>
          </div>
          <!-- post article -->
          <div class="wrap_list_infor">
            <form>
               <table  class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="name_science"> Tên Khoa </th>
                      <th class="img_science"> Hình Ảnh </th>
                      <th class="content_idea"> Thông Tin Khoa </th>
                      <th> Tùy Chọn </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="name_science"> Khoa Nhi </td>
                      <td  class="img_science">
                        <img id="display_img" src="img/images/6.jpg" alt="your image" />
                      </td>
                      <td class="content_idea">Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015  chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ  2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.</td>
                      <td>
                        <button class="btn btn_edit"> <a href="../dat kham online/create_infor_scientce.html"> Chỉnh Sửa </a></button>
                        <button class="btn btn_delete"> Xóa </button>
                      </td>
                    </tr>
                    <tr>
                       <td class="name_science"> Khoa Thần Kinh </td>
                      <td class="img_science" >
                        <img id="display_img" src="img/images/6.jpg" alt="your image" />
                      </td>
                      <td class="content_idea">Hành trình vận động hiến máu xuyên Việt tổ chức tại 22 tỉnh, thành phố trên cả nước, diễn ra từ ngày 5- 26/7/2015  chia thành 2 đoàn Nam, Bắc. Đoàn Hành trình Đỏ phía Nam bắt đầu xuất quân tại tỉnh Cà Mau và phía Bắc xuất quân tại tỉnh Vĩnh Phúc. Theo báo cáo của Ban tổ chức Hành trình Đỏ  2015, tính đến ngày 19/7, Hành trình Đỏ đã di chuyển qua 2/3 chặng đường, vận động khoảng 25.000 lượt người đăng ký hiến máu và đã tiếp nhận được hơn 17.000 đơn vị máu.</td>
                      <td>
                        <button class="btn btn_edit"><a href="../dat kham online/edit_news.html"> Chỉnh Sửa </a></button>
                        <button class="btn btn_delete"> Xóa </button>
                    </tr>
                    <tr>
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
