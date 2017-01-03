@extends('master')

@section('content')
    <div class="friend-contain" style="border-radius: 8px">
        <div class="friend-title">
            <h2><span>My Friends</span></h2>

            <div class="friend-search">
                <form method="get" action="/addfriends">
                <ul style="margin-top: -10px;">
                    <li>
                        <input type="text" name="s" style="border-radius: 8px;height: 40px;margin-top: -19px;" class="form-control search-field" placeholder="Search For Friends" />
                    </li>
                    <li >
                        <button type="submit" class="btn btn-link"  style="padding-top: 13px;">
                            <i class="linecons-search" ></i>
                        </button>
                    </li>
                </ul>
                </form>
            </div>
        </div>

        <div class="friend-content">
            @foreach($friends as $friend)
            <div class="friend-item">
                <div>
                    <img src="assets/images/photo1.jpg" style="border-radius: 120px;width: 60px;padding: 2px">
                </div>
                <div>
                    <span>{{$friend->friendName}}</span>
                </div>
                <div class="friend-delete" style="background-color: #ff776f;border-radius: 8px;height:10px;">
                    <a style="color: white" href="/deleteFriend/{{$friend->friend_id}}"> DELETE</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop