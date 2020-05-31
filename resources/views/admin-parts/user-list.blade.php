@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <style>
                @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

                .panel > .list-group .list-group-item:first-child {
                    /*border-top: 1px solid rgb(204, 204, 204);*/
                }
                @media (max-width: 767px) {
                    .visible-xs {
                        display: inline-block !important;
                    }
                    .block {
                        display: block !important;
                        width: 100%;
                        height: 1px !important;
                    }
                }
                #back-to-bootsnipp {
                    position: fixed;
                    top: 10px; right: 10px;
                }


                .c-search > .form-control {
                    border-radius: 0px;
                    border-width: 0px;
                    border-bottom-width: 1px;
                    font-size: 1.3em;
                    padding: 12px 12px;
                    height: 44px;
                    outline: none !important;
                }
                .c-search > .form-control:focus {
                    outline:0px !important;
                    -webkit-appearance:none;
                    box-shadow: none;
                }
                .c-search > .input-group-btn .btn {
                    border-radius: 0px;
                    border-width: 0px;
                    border-left-width: 1px;
                    border-bottom-width: 1px;
                    height: 44px;
                }


                .c-list {
                    padding: 0px;
                    min-height: 44px;
                }
                .title {
                    display: inline-block;
                    font-size: 1.7em;
                    font-weight: bold;
                    padding: 5px 15px;
                }
                ul.c-controls {
                    list-style: none;
                    margin: 0px;
                    min-height: 44px;
                }

                ul.c-controls li {
                    margin-top: 8px;
                    float: left;
                }

                ul.c-controls li a {
                    font-size: 1.7em;
                    padding: 11px 10px 6px;
                }
                ul.c-controls li a i {
                    min-width: 24px;
                    text-align: center;
                }

                ul.c-controls li a:hover {
                    background-color: rgba(51, 51, 51, 0.2);
                }

                .c-toggle {
                    font-size: 1.7em;
                }

                .name {
                    font-size: 1.7em;
                    font-weight: 700;
                }

                .c-info {
                    padding: 5px 10px;
                    font-size: 1.25em;
                }
            </style>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading c-list">
                                <span class="title">Recently Taken Test</span>

                            </div>


                            <ul class="list-group" id="contact-list">
                                @if (!empty($result))
                                    @foreach($result as $r)

                                        @if (!empty($r->user_name))
                                            <table id="datatable" class="table table-striped nowrap dataTable no-footer dtr-inline" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        <strong>ID</strong>
                                                    </th>

                                                    <th>
                                                        <strong>Name</strong>
                                                    </th>
                                                    <th>
                                                        <strong>Subject Name</strong>
                                                    </th>
                                                    <th>
                                                        <strong>Total Marks</strong>
                                                    </th>
                                                    <th>
                                                        <strong>Obtain</strong>
                                                    </th>
                                                    <th>
                                                        <strong>Test Time</strong>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>  {{$r->user_id}}</td>
                                                    <td>
                                                        <img alt="user" class="media-box-object rounded-circle mr-2" src="assets/img/avtar-2.png" width="30">
                                                        {{$r->user_name}}
                                                    </td>
                                                    <td>
                                                        {{$r->subject_name}}
                                                    </td>
                                                    <td>{{$r->total_marks}}</td>
                                                    <td>{{$r->obtain_marks}}</td>
                                                    
                                                    <td>{{ Carbon\Carbon::parse($r->created_at)->diffForHumans()}}</td>
                                                </tr>


                                                </tbody>
                                            </table>
{{--                                        <li class="list-group-item">--}}
{{--                                            <div class="col-md-6">--}}
{{--                                                <span class="name"></span><br/>--}}

{{--                                            </div>--}}
{{--                                            <div class="col-md-2">--}}
{{--                                                <div class="btn btn-block btn-primary">Result</div>--}}
{{--                                            </div>--}}
                                            <div class="clearfix"></div>
{{--                                        </li>--}}
                                        @endif
                                    @endforeach

                                @endif

                            </ul>
                        </div>
                    </div>
                </div>

                <div id="cant-do-all-the-work-for-you" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="mySmallModalLabel">Ooops!!!</h4>
                            </div>
                            <div class="modal-body">
                                <p>I am being lazy and do not want to program an "Add User" section into this snippet... So it looks like you'll have to do that for yourself.</p><br/>
                                <p><strong>Sorry<br/>
                                        ~ Mouse0270</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- JavaScrip Search Plugin -->
{{--                <script src="{{asset('admin/js/jquery.searchable-1.0.0.min.js')}}"></script>--}}
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
            </div>

        </div>


@endsection
