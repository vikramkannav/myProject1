@extends('home')
@section('content')

           <div class="row">
                <div class="col-md-12 content_area">
                    <h3>Manual Entry</h3>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 blue_color-text"><h4>Owner Information</h4></div>
                            <br/>
                        </div>

                        <div class="row">
                            <div class="col-md-12"><img src="/img/cam_icon-blue.png"></div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="col-md-4 adv_center form-group"><input type="text" class="form-control field_main" placeholder="Full name"></div>
                            <div class="col-md-4 adv_center form-group"><input type="text" class="form-control field_main " placeholder="Address"></div>
                            <div class="col-md-4 adv_center form-group"><input type="text" class="form-control field_main" placeholder="Contact no"></div>
                            <div class="col-md-4 adv_center form-group"><input type="text" class="form-control field_main" placeholder="Email"></div>
                            <div class="col-md-4 adv_center form-group"><input type="text" class="form-control field_main" placeholder="Zip code"></div>
                            <div class="col-md-4 adv_center form-group"><input type="text" class="form-control field_main" placeholder="City"></div>

                        </div>

                        <div class="clearfix"></div>







                            <div class="col-md-12 text-center"><button type="button" class="btn_blue">Submit</button></div>
                        </div>
                    </div>
            </div>



@endsection