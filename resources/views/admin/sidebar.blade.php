<div class="slide-top">
  <a href="#wd-wrapper" class="brand-logo logo">Logo</a>
  <div class="infor-admin">
    <p class="name_admin">{{ Auth::admin()->get()->hoten }}</p>
    <a class="btn btn_logout" href="{{ route('admin.logout') }}">Đăng xuất</a>
  </div>
</div>
<div class="col-md-2 menu">
  <?php 
    $pathCurrent = Route::getCurrentRoute()->getActionName(); 
    // dd($pathCurrent == 'App\Http\Controllers\HopitalController@getHopitals');
  ?>
  <ul class="choose_list" class="<?php if ($pathCurrent == 'admin/profile') echo 'active' ?>">
    <li class="item_choose">
      <a href="{{action('AdminController@index')}}" >Thông tin cá nhân</a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\HopitalController@getHopitals') echo 'active'; ?>">
      <a href="{{action('HopitalController@getHopitals')}}">Quản lý Bệnh viện</a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\AdminController@getCategoryNews') echo 'active' ?>">
      <a href="{{action('AdminController@getCategoryNews')}}">Quản lý Loại Tin</a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\NewController@getNews') echo 'active' ?>">
      <a href="{{action('NewController@getNews')}}">Quản lý tin tức</a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\ScienceController@getScience') echo 'active' ?>">
      <a href="{{action('ScienceController@getScience')}}">Quản lý Khoa</a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\KindServiceController@getKindServices') echo 'active' ?>">
      <a href="{{action('KindServiceController@getKindServices')}}">Quản lý Loại Dịch Vụ</a>
    </li>
    <li  class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\RoomController@getRooms') echo 'active' ?>">
      <a href="{{action('RoomController@getRooms')}}"> Phòng Khám </a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\AdminController@getPatientInfo') echo 'active' ?>">
      <a href="{{action('AdminController@getPatientInfo')}}"> Quản lý thông tin bệnh nhân </a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\AdminController@getMedicalExameInfo') echo 'active' ?>">
      <a href="{{action('AdminController@getMedicalExameInfo')}}"> Quản lý thông tin Khám </a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\AdminController@getIdea') echo 'active' ?>">
      <a href="{{action('AdminController@getIdea')}}"> Thông tin khách hàng phản hồi </a>
    </li>
  </ul>
</div>
