@extends('admin.adminlayouts.default')
 
@section('title')
    This is a project page title
@stop

@section('description')
    This is  a project page  description
@stop

@section('keywords')
    This is  a project page  keywords
@stop


@section('content')
<div id="base">
        <!-- BEGIN OFFCANVAS LEFT -->
        <div class="offcanvas">
                    </div><!--end .offcanvas-->
        <!-- END OFFCANVAS LEFT -->

       <!-- BEGIN CONTENT-->
        <div id="content">
                <section>
        
        <div class="section-body contain-lg">


            <!-- BEGIN HORIZONTAL FORM -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-primary">Agent Register</h2>
                </div><!--end .col -->
                <div class="col-lg-7">
                    <article class="margin-bottom-xxl">
                        <p class="lead">
                            Of course Material Admin also has a horizontal layout.
                        </p>
                     
                    </article>
                </div><!--end .col -->
                <div class="col-lg-12">
                                        <form class="form-horizontal">
                        <div class="card">
                            <div class="card-head style-primary">
                                <header>Agent Register</header>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Firstname5" class="col-sm-4 control-label">Firstname</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="Firstname5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Lastname5" class="col-sm-4 control-label">Lastname</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="Lastname5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Username5" class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Username5">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Password5" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="Password5">
                                    </div>
                                </div>
                            </div><!--end .card-body -->
                            <div class="card-actionbar">
                                <div class="card-actionbar-row">
                                    <button type="submit" class="btn btn-flat btn-primary ink-reaction">Create account</button>
                                </div>
                            </div>
                        </div><!--end .card -->
                        
                    </form>
                </div><!--end .col -->
            </div><!--end .row -->
            <!-- END HORIZONTAL FORM -->

        </div>
    </section>
        </div><!--end #content-->       
        <!-- END CONTENT -->
        <!-- BEGIN MENUBAR-->
        <div id="menubar" class="menubar-inverse ">
            <div class="menubar-fixed-panel">
                <div>
                    <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="expanded">
                    <a href="dashboard.html">
                        <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
                    </a>
                </div>
            </div>
            <div class="menubar-scroll-panel">
                <!-- BEGIN MAIN MENU -->
                @include('admin.adminincludes.agentregistersidebar')
                <!-- END MAIN MENU -->

                <div class="menubar-foot-panel">
                    <small class="no-linebreak hidden-folded">
                        <span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
                    </small>
                </div>
            </div><!--end .menubar-scroll-panel-->
        </div><!--end #menubar-->
        <!-- END MENUBAR -->

        <!-- BEGIN OFFCANVAS RIGHT -->
        <div class="offcanvas">
            


<!-- BEGIN OFFCANVAS SEARCH -->
<div id="offcanvas-search" class="offcanvas-pane width-8">
    <div class="offcanvas-head">
        <header class="text-primary">Search</header>
        <div class="offcanvas-tools">
            <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                <i class="md md-close"></i>
            </a>
        </div>
    </div>

    <div class="offcanvas-body no-padding">
        <ul class="list ">
            <li class="tile divider-full-bleed">
                <div class="tile-content">
                    <div class="tile-text"><strong>A</strong></div>
                </div>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar1.jpg" alt="" />
                    </div>
                    <div class="tile-text">
                        Alex Nelson
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="http://www.codecovers.eu/assets/img/modules/materialadmin/avatar1.jpg?1422538623" alt="" />
                    </div>
                    <div class="tile-text">
                        Ann Laurens
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile divider-full-bleed">
                <div class="tile-content">
                    <div class="tile-text"><strong>J</strong></div>
                </div>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar2666b.jpg?1422538624" alt="" />
                    </div>
                    <div class="tile-text">
                        Jessica Cruise
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar8463a.jpg?1422538626" alt="" />
                    </div>
                    <div class="tile-text">
                        Jim Peters
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile divider-full-bleed">
                <div class="tile-content">
                    <div class="tile-text"><strong>M</strong></div>
                </div>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar52dba.jpg?1422538625" alt="" />
                    </div>
                    <div class="tile-text">
                        Mabel Logan
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar114335.jpg?1422538623" alt="" />
                    </div>
                    <div class="tile-text">
                        Mary Peterson
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar3666b.jpg?1422538624" alt="" />
                    </div>
                    <div class="tile-text">
                        Mike Alba
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile divider-full-bleed">
                <div class="tile-content">
                    <div class="tile-text"><strong>N</strong></div>
                </div>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar6463a.jpg?1422538626" alt="" />
                    </div>
                    <div class="tile-text">
                        Nathan Peterson
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile divider-full-bleed">
                <div class="tile-content">
                    <div class="tile-text"><strong>P</strong></div>
                </div>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar7463a.jpg?1422538626" alt="" />
                    </div>
                    <div class="tile-text">
                        Philip Ericsson
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
            <li class="tile divider-full-bleed">
                <div class="tile-content">
                    <div class="tile-text"><strong>S</strong></div>
                </div>
            </li>
            <li class="tile">
                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                    <div class="tile-icon">
                        <img src="../../assets/img/modules/materialadmin/avatar104335.jpg?1422538623" alt="" />
                    </div>
                    <div class="tile-text">
                        Samuel Parsons
                        <small>123-123-3210</small>
                    </div>
                </a>
            </li>
        </ul>
    </div><!--end .offcanvas-body -->
</div><!--end .offcanvas-pane -->
<!-- END OFFCANVAS SEARCH -->

            


<!-- BEGIN OFFCANVAS CHAT -->
<div id="offcanvas-chat" class="offcanvas-pane style-default-light width-12">
    <div class="offcanvas-head style-default-bright">
        <header class="text-primary">Chat with Ann Laurens</header>
        <div class="offcanvas-tools">
            <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                <i class="md md-close"></i>
            </a>
            <a class="btn btn-icon-toggle btn-default-light pull-right" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
                <i class="md md-arrow-back"></i>
            </a>
        </div>
        <form class="form">
            <div class="form-group floating-label">
                <textarea name="sidebarChatMessage" id="sidebarChatMessage" class="form-control autosize" rows="1"></textarea>
                <label for="sidebarChatMessage">Leave a message</label>
            </div>
        </form>
    </div>

    <div class="offcanvas-body">
        <ul class="list-chats">
            <li>
                <div class="chat">
                    <div class="chat-avatar"><img class="img-circle" src="../../assets/img/modules/materialadmin/avatar14335.jpg?1422538623" alt="" /></div>
                    <div class="chat-body">
                        Yes, it is indeed very beautiful.
                        <small>10:03 pm</small>
                    </div>
                </div><!--end .chat -->
            </li>
            <li class="chat-left">
                <div class="chat">
                    <div class="chat-avatar"><img class="img-circle" src="../../assets/img/modules/materialadmin/avatar9463a.jpg?1422538626" alt="" /></div>
                    <div class="chat-body">
                        Did you see the changes?
                        <small>10:02 pm</small>
                    </div>
                </div><!--end .chat -->
            </li>
            <li>
                <div class="chat">
                    <div class="chat-avatar"><img class="img-circle" src="../../assets/img/modules/materialadmin/avatar14335.jpg?1422538623" alt="" /></div>
                    <div class="chat-body">
                        I just arrived at work, it was quite busy.
                        <small>06:44pm</small>
                    </div>
                    <div class="chat-body">
                        I will take look in a minute.
                        <small>06:45pm</small>
                    </div>
                </div><!--end .chat -->
            </li>
            <li class="chat-left">
                <div class="chat">
                    <div class="chat-avatar"><img class="img-circle" src="../../assets/img/modules/materialadmin/avatar9463a.jpg?1422538626" alt="" /></div>
                    <div class="chat-body">
                        The colors are much better now.
                    </div>
                    <div class="chat-body">
                        The colors are brighter than before.
                        I have already sent an example.
                        This will make it look sharper.
                        <small>Mon</small>
                    </div>
                </div><!--end .chat -->
            </li>
            <li>
                <div class="chat">
                    <div class="chat-avatar"><img class="img-circle" src="../../assets/img/modules/materialadmin/avatar14335.jpg?1422538623" alt="" /></div>
                    <div class="chat-body">
                        Are the colors of the logo already adapted?
                        <small>Last week</small>
                    </div>
                </div><!--end .chat -->
            </li>
        </ul>
    </div><!--end .offcanvas-body -->
</div><!--end .offcanvas-pane -->


                    </div><!--end .offcanvas-->
      
    </div><!--end #base-->  
@stop
