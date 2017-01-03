@extends('master')

@section('content')
    <div class="new-main" style="border-radius: 10px;background-color: white;">
        <div class="row" style="border-radius: 10px">
            <div class="col-sm-12" style="border-radius: 10px">

                <div class="panel panel-default" style="border-radius: 10px">
                    <div class="panel-heading">
                        <div class="new-mainTitle"><h2><span>Create Activity</span></h2></div>
                    </div>
                    <div class="panel-body">

                        <form role="form" class="form-horizontal" method="post" action="/Activity/add">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Activity Name</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-input" name="name">
                                </div>
                            </div>

                            <div class="form-group-separator"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Activity Type</label>

                                <script type="text/javascript">
                                    jQuery(document).ready(function($)
                                    {
                                        $("#s2example-3").select2({
                                            placeholder: 'Choose Type...',
                                            allowClear: true,
                                            minimumResultsForSearch: -1, // Hide the search bar
                                            formatResult: function(state)
                                            {
                                                return '<div style="background:url(http://www.geonames.org/flags/x/' + state.id + '.gif) no-repeat center center;background-size:100%;display:inline-block;position:relative;width:20px;height:15px;margin-right: 10px;top:2px;"></div>'
                                                        + state.text;
                                            }
                                        }).on('select2-open', function()
                                        {
                                            // Adding Custom Scrollbar
                                            $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
                                        });
                                    });
                                </script>
                                <div class="col-sm-4">
                                    <select class="form-control" id="s2example-3" name="type">
                                        <option></option>
                                        <option value="个人运动">Personal Activity</option>
                                        <option value="多人运动">Mutiplayer Activity</option>
                                        <option value="团队运动">Team Activity</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group-separator"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Start Time</label>

                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control datepicker" name="startDate">

                                        <div class="input-group-addon">
                                            <a href="#"><i class="linecons-calendar"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="input-group input-group-minimal">
                                        <input type="text" name="startTime" class="form-control timepicker" data-template="dropdown" data-show-seconds="true" data-default-time="11:25 AM" data-show-meridian="true" data-minute-step="5" data-second-step="5">

                                        <div class="input-group-addon">
                                            <a href="#"><i class="linecons-clock"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">End Time</label>

                                <div class="col-sm-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control datepicker" name="endDate">

                                        <div class="input-group-addon">
                                             <a href="#"><i class="linecons-calendar"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="input-group input-group-minimal">
                                        <input type="text" name="endTime" class="form-control timepicker" data-template="dropdown" data-show-seconds="true" data-default-time="11:25 AM" data-show-meridian="true" data-minute-step="5" data-second-step="5">

                                        <div class="input-group-addon">
                                            <a href="#"><i class="linecons-clock"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-separator"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Activity Experience</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-input" name="money">
                                </div>
                            </div>

                            <div class="form-group-separator"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Invite Friends</label>


                                <script type="text/javascript">
                                    jQuery(document).ready(function($)
                                    {
                                        $("#s2example-2").select2({
                                            placeholder: 'Choose your friends',
                                            allowClear: true
                                        }).on('select2-open', function()
                                        {
                                            // Adding Custom Scrollbar
                                            $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
                                        });

                                    });
                                </script>

                                <select class="col-sm-4 form-control" name="invited[]" style="width: 30%;padding: 6px 12px;margin-left: 15px;" id="s2example-2" multiple>
                                    <?php $friends=Auth::user()->friends; ?>
                                    @foreach($friends as $friend)
                                    <option>{{$friend->friendName}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group-separator"></div>

                            <div class="form-group" style="margin-top: 25px;">
                                <label class="col-sm-3 control-label">Activity Description</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-input" name="description" style="margin-top: 2px;height: 100px;">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-single pull-right" style="margin-top:10px;margin-right: 50%;width: 12%;height:10%;border-radius: 6px">SAVE</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

@stop