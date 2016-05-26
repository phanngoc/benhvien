<div class="slide-top">
  <a href="#wd-wrapper" class="brand-logo logo">Logo</a>
  <div class="infor-admin">
    <p class="name_admin">{{ Auth::admin()->get()->hoten }}</p>
    <a class="btn btn_logout" href="{{ route('admin.logout') }}">Logout</a>
  </div>
</div>
<div class="col-md-2 menu">
  <?php 
    $pathCurrent = Route::getCurrentRoute()->getActionName(); 
    // dd($pathCurrent == 'App\Http\Controllers\HopitalController@getHopitals');
  ?>
  <ul class="choose_list" class="<?php if ($pathCurrent == 'admin/profile') echo 'active' ?>">
    <li class="item_choose">
      <a href="{{action('AdminController@index')}}" >Profile</a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\HopitalController@getHopitals') echo 'active'; ?>">
      <a href="{{action('HopitalController@getHopitals')}}">Manage Hospital</a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\AdminController@getCategoryNews') echo 'active' ?>">
      <a href="{{action('AdminController@getCategoryNews')}}">Manage Kind of News</a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\NewController@getNews') echo 'active' ?>">
      <a href="{{action('NewController@getNews')}}">Manage News</a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\ScienceController@getScience') echo 'active' ?>">
      <a href="{{action('ScienceController@getScience')}}">Manage Department</a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\KindServiceController@getKindServices') echo 'active' ?>">
      <a href="{{action('KindServiceController@getKindServices')}}">Manage Services</a>
    </li>
    <li  class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\RoomController@getRooms') echo 'active' ?>">
      <a href="{{action('RoomController@getRooms')}}"> Manage Clinic </a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\AdminController@getPatientInfo') echo 'active' ?>">
      <a href="{{action('AdminController@getPatientInfo')}}"> Manage Patient </a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\AdminController@getMedicalExameInfo') echo 'active' ?>">
      <a href="{{action('AdminController@getMedicalExameInfo')}}"> Manage Examination Information </a>
    </li>
    <li class="item_choose <?php if ($pathCurrent == 'App\Http\Controllers\AdminController@getIdea') echo 'active' ?>">
      <a href="{{action('AdminController@getIdea')}}"> Manage Feedback Ideas </a>
    </li>
  </ul>
</div>
