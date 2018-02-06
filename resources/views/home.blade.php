<html lang="en">
<head>
    <title>myProject</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- custom -->
    <link rel="stylesheet" href="css/main.css">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Simple-Line/css/simple-line-icons.css">
</head>
<body>


<div id="wrapper">

@include('layouts.include.leftside')


    <!-- Page content -->

    <div id="page-content-wrapper">

       @include('layouts.include.header')
        <div class="page-content inset" data-spy="scroll" data-target="#spy">


            <br/>



            <div class="row">
                <div class="col-md-12 adv_center">
                    <img src="img/Seal_of_Los_Angeles,_California.png" alt="GoPetie Logo" class="img-responsive">



                    <h3>Welcome to the India.</h3>



                </div>

            </div>
            <div class="clearfix">&nbsp;</div>

            @yield('content')




        </div>

    </div>

    @include('layouts.footer')
</div>

</body>

<script>  /*Menu-toggle*/
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });</script>







</html>