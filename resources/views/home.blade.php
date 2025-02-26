@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <style>
            @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

            body {
                padding: 30px 0px 60px;
            }
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

        <a href="http://bootsnipp.com/mouse0270/snippets/4l0k2" class="btn btn-danger hide" id="back-to-bootsnipp">Back to Bootsnipp</a>

        <div class="container">
            <div class="row">
                <h3>Developer Question</h3>
                <p>Can anyone tell me why this snippet flashes after the tooltip is removed from the DOM? It is driving me crazy!</p>
                <hr/>
                <h3>Developer Answer</h3>
                <p>It appears that tooltips do not like to be removed from within an <code>iframe</code> and cause the page to <em><strong>flash</strong></em>. If you are experiencing this issue with the tooltips please <a id="fullscreen" href="#fullscreen">click here</a> to view this snippet in an iframe.</p>
            </div>

            <div class="row form-group">
                <h3>Onwards to the snippet!</h3>
                <p>This snippet is a minimal contact list that allows you to search for anyone in the list by name, location, phone number or email.</p>
                <p> Give it a shot search for <code>s@</code> and you'll get everyone whos last character in their email is <code>S</code></p>
                <p> Or search for <code>Ln</code> and you'll get everyone whos location is a <code>Lane</code> rather than a <code>Street</code> or <code>Drive</code>.</p>
                <p> Or search for <code>22</code> and you'll get everyone whos phone number or location has a <code>22</code> in it.</p>
                <hr/>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-offset-3 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading c-list">
                            <span class="title">Contacts</span>
                            <ul class="pull-right c-controls">
                                <li><a href="#cant-do-all-the-work-for-you" data-toggle="tooltip" data-placement="top" title="Add Contact"><i class="glyphicon glyphicon-plus"></i></a></li>
                                <li><a href="#" class="hide-search" data-command="toggle-search" data-toggle="tooltip" data-placement="top" title="Toggle Search"><i class="fa fa-ellipsis-v"></i></a></li>
                            </ul>
                        </div>

                        <div class="row" style="display: none;">
                            <div class="col-xs-12">
                                <div class="input-group c-search">
                                    <input type="text" class="form-control" id="contact-list-search">
                                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                            </span>
                                </div>
                            </div>
                        </div>

                        <ul class="list-group" id="contact-list">
                            <li class="list-group-item">
                                <div class="col-xs-12 col-sm-3">
                                    <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                                </div>
                                <div class="col-xs-12 col-sm-9">
                                    <span class="name">Scott Stevens</span><br/>
                                    <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="5842 Hillcrest Rd"></span>
                                    <span class="visible-xs"> <span class="text-muted">5842 Hillcrest Rd</span><br/></span>
                                    <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(870) 288-4149"></span>
                                    <span class="visible-xs"> <span class="text-muted">(870) 288-4149</span><br/></span>
                                    <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="scott.stevens@example.com"></span>
                                    <span class="visible-xs"> <span class="text-muted">scott.stevens@example.com</span><br/></span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="list-group-item">
                                <div class="col-xs-12 col-sm-3">
                                    <img src="http://api.randomuser.me/portraits/men/97.jpg" alt="Seth Frazier" class="img-responsive img-circle" />
                                </div>
                                <div class="col-xs-12 col-sm-9">
                                    <span class="name">Seth Frazier</span><br/>
                                    <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="7396 E North St"></span>
                                    <span class="visible-xs"> <span class="text-muted">7396 E North St</span><br/></span>
                                    <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(560) 180-4143"></span>
                                    <span class="visible-xs"> <span class="text-muted">(560) 180-4143</span><br/></span>
                                    <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="seth.frazier@example.com"></span>
                                    <span class="visible-xs"> <span class="text-muted">seth.frazier@example.com</span><br/></span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="list-group-item">
                                <div class="col-xs-12 col-sm-3">
                                    <img src="http://api.randomuser.me/portraits/women/90.jpg" alt="Jean Myers" class="img-responsive img-circle" />
                                </div>
                                <div class="col-xs-12 col-sm-9">
                                    <span class="name">Jean Myers</span><br/>
                                    <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="4949 W Dallas St"></span>
                                    <span class="visible-xs"> <span class="text-muted">4949 W Dallas St</span><br/></span>
                                    <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(477) 792-2822"></span>
                                    <span class="visible-xs"> <span class="text-muted">(477) 792-2822</span><br/></span>
                                    <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="jean.myers@example.com"></span>
                                    <span class="visible-xs"> <span class="text-muted">jean.myers@example.com</span><br/></span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="list-group-item">
                                <div class="col-xs-12 col-sm-3">
                                    <img src="http://api.randomuser.me/portraits/men/24.jpg" alt="Todd Shelton" class="img-responsive img-circle" />
                                </div>
                                <div class="col-xs-12 col-sm-9">
                                    <span class="name">Todd Shelton</span><br/>
                                    <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="5133 Pecan Acres Ln"></span>
                                    <span class="visible-xs"> <span class="text-muted">5133 Pecan Acres Ln</span><br/></span>
                                    <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(522) 991-3367"></span>
                                    <span class="visible-xs"> <span class="text-muted">(522) 991-3367</span><br/></span>
                                    <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="todd.shelton@example.com"></span>
                                    <span class="visible-xs"> <span class="text-muted">todd.shelton@example.com</span><br/></span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="list-group-item">
                                <div class="col-xs-12 col-sm-3">
                                    <img src="http://api.randomuser.me/portraits/women/34.jpg" alt="Rosemary Porter" class="img-responsive img-circle" />
                                </div>
                                <div class="col-xs-12 col-sm-9">
                                    <span class="name">Rosemary Porter</span><br/>
                                    <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="5267 Cackson St"></span>
                                    <span class="visible-xs"> <span class="text-muted">5267 Cackson St</span><br/></span>
                                    <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(497) 160-9776"></span>
                                    <span class="visible-xs"> <span class="text-muted">(497) 160-9776</span><br/></span>
                                    <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="rosemary.porter@example.com"></span>
                                    <span class="visible-xs"> <span class="text-muted">rosemary.porter@example.com</span><br/></span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="list-group-item">
                                <div class="col-xs-12 col-sm-3">
                                    <img src="http://api.randomuser.me/portraits/women/56.jpg" alt="Debbie Schmidt" class="img-responsive img-circle" />
                                </div>
                                <div class="col-xs-12 col-sm-9">
                                    <span class="name">Debbie Schmidt</span><br/>
                                    <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="3903 W Alexander Rd"></span>
                                    <span class="visible-xs"> <span class="text-muted">3903 W Alexander Rd</span><br/></span>
                                    <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(867) 322-1852"></span>
                                    <span class="visible-xs"> <span class="text-muted">(867) 322-1852</span><br/></span>
                                    <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="debbie.schmidt@example.com"></span>
                                    <span class="visible-xs"> <span class="text-muted">debbie.schmidt@example.com</span><br/></span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="list-group-item">
                                <div class="col-xs-12 col-sm-3">
                                    <img src="http://api.randomuser.me/portraits/women/76.jpg" alt="Glenda Patterson" class="img-responsive img-circle" />
                                </div>
                                <div class="col-xs-12 col-sm-9">
                                    <span class="name">Glenda Patterson</span><br/>
                                    <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="5020 Poplar Dr"></span>
                                    <span class="visible-xs"> <span class="text-muted">5020 Poplar Dr</span><br/></span>
                                    <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(538) 718-7548"></span>
                                    <span class="visible-xs"> <span class="text-muted">(538) 718-7548</span><br/></span>
                                    <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="glenda.patterson@example.com"></span>
                                    <span class="visible-xs"> <span class="text-muted">glenda.patterson@example.com</span><br/></span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
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
            <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>

        </div>

    </div>
</div>
    <script>
        $(function () {
            /* BOOTSNIPP FULLSCREEN FIX */
            if (window.location == window.parent.location) {
                $('#back-to-bootsnipp').removeClass('hide');
            }


            $('[data-toggle="tooltip"]').tooltip();

            $('#fullscreen').on('click', function(event) {
                event.preventDefault();
                window.parent.location = "http://bootsnipp.com/iframe/4l0k2";
            });
            $('a[href="#cant-do-all-the-work-for-you"]').on('click', function(event) {
                event.preventDefault();
                $('#cant-do-all-the-work-for-you').modal('show');
            })

            $('[data-command="toggle-search"]').on('click', function(event) {
                event.preventDefault();
                $(this).toggleClass('hide-search');

                if ($(this).hasClass('hide-search')) {
                    $('.c-search').closest('.row').slideUp(100);
                }else{
                    $('.c-search').closest('.row').slideDown(100);
                }
            })

            $('#contact-list').searchable({
                searchField: '#contact-list-search',
                selector: 'li',
                childSelector: '.col-xs-12',
                show: function( elem ) {
                    elem.slideDown(100);
                },
                hide: function( elem ) {
                    elem.slideUp( 100 );
                }
            })
        });

    </script>
@endsection
