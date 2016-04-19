<div class="col-md-2 menu">
  <a href="#wd-wrapper" class="brand-logo logo">Logo</a>
  <ul class="choose_list">
    <li class="item_choose">
      <a href="{{action('AdminController@index')}}">Thông tin cá nhân</a>
    </li>
    <li class="item_choose">
      <a href="{{action('AdminController@getInforHopitals')}}">Quản lý Bệnh viện</a>
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
      <a href="{{action('AdminController@getKindService')}}">Quản lý Loại Dịch Vụ</a>
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
    <li class="item_choose">
      <a href="#">Đăng xuất</a>
    </li>
  </ul>
</div>
