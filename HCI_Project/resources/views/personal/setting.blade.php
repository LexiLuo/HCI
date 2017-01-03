@extends('master')

@section('content')
    <div class="setting-contain" style="border-radius: 8px;height: 480px;">
        <div class="setting-title">
            <div class="active-mainTitle"><h2><span>Personal Information</span></h2></div>
        </div>

        <div class="setting-photo">
            <img src="assets/images/avatar1.jpg" style="width: 240px;border-radius: 120px">
        </div>

        <div class="setting-content">
            <form class="setting-form" action="" style="margin-left: -80px;">
                <div class="setting-name setting">
                    <span class="tip">UserName ： </span>
                    <span class="input-group-addon">
                        <i class="linecons-user"></i>
                    </span>
                    <input type="text" class="form-control" data-mask="@\w+" data-is-regex="true" placeholder="username" />
                </div>

                <div class="setting-email setting" style="margin-left: 94px">
                    <span class="tip" >Email ： </span>
                    <span class="input-group-addon">
                        <i class="linecons-mail"></i>
                    </span>
                    <input type="text" class="form-control" data-mask="@\w+" data-is-regex="true" placeholder="email" />
                </div>

                <div class="setting-code setting" style="margin-left: 58px">
                    <span class="tip">Password ： </span>
                    <span class="input-group-addon" style="padding-left: 19px;">
                        <i class="fa-lock"></i>
                    </span>
                    <input type="text" class="form-control" data-mask="@\w+" data-is-regex="true" placeholder="password" />
                </div>

                <div class="setting-recode setting" style="margin-left: -14px">
                    <span class="tip">Password Confirm ： </span>
                    <span class="input-group-addon" style="padding-left: 19px;">
                        <i class="fa-lock"></i>
                    </span>
                    <input type="text" class="form-control" data-mask="@\w+" data-is-regex="true" placeholder="password" />
                </div>

                <button type="submit" class="btn btn-info btn-single pull-right" style="margin-top: 20px;width: 100px;border-radius: 8px;"><span>SAVE</span></button>

            </form>
        </div>
    </div>
@stop