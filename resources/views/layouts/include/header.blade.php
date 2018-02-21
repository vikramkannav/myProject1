<div class="content-header">
    <div class="row" >
        <div class="col-xs-2 col-1 col-lg-1 col-md-1">
			<span id="home">
				<a id="menu-toggle" href="#" >
					<i class="fa fa-bars ext"></i>
				</a>
			</span>
        </div>
        <div class="col-4 col-md-4 col-lg-4 col-xs-8">

        </div>
        <div class="col-md-6 col-lg-6 hidden-xs hidden-sm" >
            <h3>Pet License Application</h3>
        </div>
        <div class="col-xs-1 adv_right" >
            <div class="logout_btn">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class=" blue_color-text icon-logout icons"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>



        </div>
        <div class="col-xs-12 col-sm-12  hidden-md hidden-lg adv_center">
            <h3>Pet License Application</h3>
        </div>
    </div>
</div>