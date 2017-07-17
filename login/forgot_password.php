<html>
<head>
    <!-- All the files that are required -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="files/login_style.css">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <script src="files/login_js.js"></script>
</head>
<body>
<div class="container">
    <!-- FORGOT PASSWORD FORM -->
    <div class="text-center" style="padding:50px 0">
        <div class="logo">forgot password</div>
        <!-- Main Form -->
        <div class="login-form-1">
            <form id="forgot-password-form" class="text-left">
                <div class="etc-login-form">
                    <p>When you fill in your registered email address, you will be sent instructions on how to reset your password.</p>
                </div>
                <div class="login-form-main-message"></div>
                <div class="main-login-form">
                    <div class="login-group">
                        <div class="form-group">
                            <label for="fp_email" class="sr-only">Email address</label>
                            <input type="text" class="form-control" id="fp_email" name="fp_email" placeholder="email address">
                        </div>
                    </div>
                    <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                </div>
                <div class="etc-login-form">
                    <p>already have an account? <a href="index.php">login here</a></p>
                    <p>new user? <a href="user_register.php">create new account</a></p>
                    <br><br>
                    <p>
                        <a href="../">
                            <strong>
                                Go Back &nbsp;&nbsp;<i class="fa fa-arrow-circle-left"></i>
                            </strong>
                        </a>
                    </p>
                </div>
            </form>
        </div>
        <!-- end:Main Form -->
    </div>
</div>
</body>
</html>