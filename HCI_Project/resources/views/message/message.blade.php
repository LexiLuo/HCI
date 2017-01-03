@extends('master')

@section('content')

    <div class="mail-contain" style="border-radius: 8px;">

        <div class="mail-title">
            <div class="active-mainTitle"><h2><span>My Information</span></h2></div>
        </div>

        <section class="mailbox-env">
            <div class="mail-env">
                <!-- mail table -->
                <table class="table mail-table">

                    <!-- mail table header -->
                    <thead>
                    <tr>
                        <th class="col-cb">
                            <input type="checkbox" class="cbr" />
                        </th>
                        <th colspan="4" class="col-header-options">

                            <div class="mail-select-options">Select all</div>

                            <div class="mail-pagination">
                                Showing <strong>1 to 30</strong> of <strong>789</strong> emails

                                <div class="next-prev">
                                    <a href="#"><i class="fa-angle-left"></i></a>
                                    <a href="#"><i class="fa-angle-right"></i></a>
                                </div>
                            </div>
                        </th>
                    </tr>
                    </thead>

                    {{--<!-- mail table footer -->--}}
                    {{--<tfoot>--}}
                    {{--<tr>--}}
                        {{--<th class="col-cb">--}}
                            {{--<input type="checkbox" class="cbr" />--}}
                        {{--</th>--}}
                        {{--<th colspan="4" class="col-header-options">--}}

                            {{--<div class="mail-select-options">Select all</div>--}}

                            {{--<div class="mail-pagination">--}}
                                {{--Showing <strong>1 to 30</strong> of <strong>789</strong> emails--}}

                                {{--<div class="next-prev">--}}
                                    {{--<a href="#"><i class="fa-angle-left"></i></a>--}}
                                    {{--<a href="#"><i class="fa-angle-right"></i></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</th>--}}
                    {{--</tr>--}}
                    {{--</tfoot>--}}

                    {{--<!-- email list -->--}}
                    <tbody>
                    @foreach($allMessage as $message)
                    <tr class="unread">
                        <td class="col-cb">
                            <div class="checkbox checkbox-replace">
                                <input type="checkbox" class="cbr" />
                            </div>
                        </td>
                        <td class="col-name">
                            <a href="#" class="star">
                                <i class="fa-star-empty"></i>
                            </a>
                            <a href="#" class="col-name">{{$message->sender_name}}</a>
                        </td>
                        <td class="col-subject">
                            <a href="#">
                                {{$message->content}}
                            </a>
                        </td>
                        <td class="col-options hidden-sm hidden-xs"></td>
                        <td class="col-time">{{$message->time}}</td>
                    </tr>
                    @endforeach


                    </tbody>

                </table>
            </div>
        </section>
    </div>

@stop