@extends('home')
@section('content')

    <div id="page-content-wrapper">
        <div class="content-header">

            <div class="col-md-1 col-sm-1">  <span id="home">
                            <a id="menu-toggle" href="#" >
                                <i class="fa fa-bars ext"></i>
                            </a>

                        </span>

            </div>

            <div class="col-md-4 col-sm-4 col-lg-2">

                <div id="custom-search-input">
                    <div class="input-group">
                        <input type="text" class="  search-query form-control" placeholder="Search" />
                        <span class="input-group-btn">
                                            <button class="btn btn-danger" type="button">
                                                <span class=" icon-magnifier icons"></span>
                                            </button>
                                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="margin: -12px 0px 4px 0px;">  <h3>Pet License Application</h3>

            </div>
            <div class="col-md-1 col-sm-1  col-lg-3 adv_right" ><div class="logout_btn"><i class=" blue_color-text icon-logout icons"></i></div>

            </div>


        </div>

        <div class="page-content inset" data-spy="scroll" data-target="#spy">

            <div class="row">
                <div class="col-md-12 adv_center">
                    <img src="img/color_logo.png" alt="GoPetie Logo" class="img-responsive">
                    <h1>Welcome to Gopetie</h1>


                    <h3> <span><img src="img/city.png" alt="GoPetie Logo"></span> City of Los Angeles, CA</h3>
                    <h4 class="pull-right">  <i class="fa fa-map-marker blue_color-text"></i> Los Angeles <span><img src="img/city.png" alt="GoPetie Logo"></span></h4>


                </div>

            </div>
            <br/>
            <div class="row">
                <div class="col-md-12 content_area">
                    <h3>Send notification </h3>

                    <br/>
                    <div class="row">

                        <div class="col-md-4 adv_center">

                            <div id="custom-search-input">
                                <div class="input-group">
                                    <input type="text" class="  search-query form-control field_main" placeholder="Search" style="border-radius: 4px;">
                                    <span class="input-group-btn">
                                                                                <button class="btn btn-danger" type="button">
                                                                                    <span class=" icon-magnifier icons"></span>
                                                                                </button>
                                                                            </span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <br/>
                    <div class="row">
                        <div class="col-md-4 adv_center"><input type="text" class="form-control field_main" placeholder="Enter name" ></div>


                    </div>
                    <br/>
                    <div class="row">

                        <div class="col-md-4 adv_center"> <select class="form-control field_main"> <option>Select license type </option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option></select>
                            <i class="icon-arrow-down icons blue_color-text "></i></div>

                    </div>
                    <br/>
                    <div class="row">

                        <div class="col-md-4 adv_center"> <select class="form-control field_main"> <option>Notification type</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option></select>
                            <i class="icon-arrow-down icons blue_color-text "></i></div>

                    </div>
                    <br/>
                    <div class="row">

                        <div class="col-md-6 adv_center"> <input type="text" class="form-control field_main" placeholder="Subject of message"  ></div>

                    </div>

                    <br/>
                    <div class="row">

                        <div class="col-md-6 adv_center"> <textarea class="full_comment_box" rows="8"> Write your comment here...

                                                                </textarea></div>

                    </div>
                    <br/>
                    <div class="row">

                        <div class="col-md-12"><button type="button" class="btn_blue">Send</button></div>

                    </div>


                </div>

            </div>

        </div>

    </div>



@endsection