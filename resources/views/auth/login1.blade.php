<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>--}}
{{--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="css/pages.css">

    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title>Ecommerce</title>
</head>
<body>
<div class="container">
    <div class="row main">

        <div class="main-login main-center">

            <form class="form-horizontal" method="post" action="/" id="loginForm">
                @csrf
                <div id="logindiv" class="show">

                <div class="form-group">
                    <h4 style="text-align: center; color: #3071a9;">Sign In</h4>

                </div>

                 <div class="form-group hide" id="notification">
                            <div class="cols-sm-10">
                                <div class="alert alert-info alert-rounded" id="error" style="font-size: 18px;">
                                </div>
                            </div>
                        </div>


                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <button type="button" id="loginBtn" class="btn btn-primary btn-lg btn-block login-button">Login</button>
                </div>
                <div class="login-register">
                    <a href="/register">Register</a>
                </div>

                </div>

                <div id="otpdiv" class="hide">

                <div class="form-group">
                    <h5 style="text-align: center; color: #3071a9;">Enter the OTP sent to your mobile</h5>

                </div>


                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">OTP</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="otp" id="otp"  placeholder="Enter the otp"/>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <button type="button" id="VerifyBtn" class="btn btn-primary btn-lg btn-block login-button">Verify</button>
                </div>
                </div>

            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/login.js"></script>
</body>
</html>