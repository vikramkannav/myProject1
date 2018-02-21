<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/my_style.css">
    <title>Login</title>
</head>
<body>
<div class="login_bg">
    <div class="login_bg_color"></div>
    <div class="login_div">
        <div class="row">
            <div class="col login_form">
                <form class="text-center" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <img src="/img/logo-blue.png"></div>

                    <div class="form-group">
                        <input id="email" type="email" class="form-control" name="email" aria-describedby="emailHelp"
                               placeholder="Username" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                             <strong>{{ $errors->first('email') }}</strong>
                             </span>
                        @endif

                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control" placeholder="Password" name="password"
                               required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>

                    <p class="forgot_pass"><a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a></p>

                    <p class="error-msg" hidden>Error message here</p>


                </form>
            </div>
            <div class="col-sm-8 login_text">
                <div class="logo-white"><img src="/img/logo-white.png"></div>
                <h5>Who we are</h5>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s,
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has
                </p>
            </div>

        </div>


    </div><!--/</div>-->

</div><!--login_bg-->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>