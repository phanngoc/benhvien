@extends('admin.master-admin')

@section('content')
    <div class="">
      @include('admin.sidebar')
      <div class="col-md-10">
        <div id="edit_ideas" class="col-md-12">
          <h2 class="hospital">Danang Hospital</h2>
          <!-- post article -->
          <form class="edit_idea" method="POST" action="{{action('AdminController@postUpdateIdea', $ykienphanhoi->id)}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <ul>
              <li> <input class="form-control" type="text" placeholder="Full name" name="hoten" value="{{ $ykienphanhoi->hoten }}"/> </li>
              <li> <input class="form-control" type="email" placeholder="Email" name="email" value="{{ $ykienphanhoi->email }}"></li>
              <li> 
                    <textarea class="form-control" cols="50" rows="5" placeholder="Content" name="ykien">{{ $ykienphanhoi->ykien }}</textarea>
              </li>
              <li>
                  <input type="checkbox" name="status" {{($ykienphanhoi->status == 1) ? 'checked' : ''}} /> Public Posting
            </ul>
              <div class="button">
                <button class="btn btn-primary">Done</button>
                <a class="btn btn-default" href="javascript:history.back()">Cancel</a>
              </div>
          </form>
        </div> <!-- #edit_ideas -->
      </div>
    </div>
    <!--  -->

@stop
