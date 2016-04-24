<div class="slide-top">
  <a href="#wd-wrapper" class="brand-logo logo">Logo</a>
  <div class="infor-admin">
    <p class="name_admin">HaGiang</p>
    <button class="btn btn_logout">Đăng xuất</button>
  </div>
</div>
<div class="col-md-2 menu">
  <ul class="choose_list">
    <li class="item_choose">
      <a href="{{action('AdminController@index')}}">Thông tin cá nhân</a>
    </li>
    <li class="item_choose">
      <a href="{{action('HopitalController@getHopitals')}}">Quản lý Bệnh viện</a>
    </li>
    <li class="item_choose">
      <a href="{{action('AdminController@getCategoryNews')}}">Quản lý Loại Tin</a>
    </li>
    <li class="item_choose">
      <a href="{{action('NewController@getNews')}}">Quản lý tin tức</a>
    </li>
    <li class="item_choose">
      <a href="{{action('ScienceController@getScience')}}">Quản lý Khoa</a>
    </li>
    <li class="item_choose">
      <a href="{{action('KindServiceController@getKindServices')}}">Quản lý Loại Dịch Vụ</a>
    </li>
    <li  class="item_choose">
      <a href="{{action('RoomController@getRooms')}}"> Phòng Khám </a>
    </li>
    <li class="item_choose">
      <a href="{{action('AdminController@getPatientInfo')}}"> Quản lý thông tin bệnh nhân </a>
    </li>
    <li class="item_choose">
      <a href="{{action('AdminController@getMedicalExameInfo')}}"> Quản lý thông tin Khám </a>
    </li>
    <li class="item_choose">
      <a href="{{action('AdminController@getIdea')}}"> Thông tin khách hàng phản hồi </a>
    </li>
  </ul>
</div>
