<!-- resources/views/auth/login.blade.php -->
<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.0/yeti/bootstrap.min.css" rel="stylesheet">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">
         Custom CSS
        <link href="css/bootstrap.css" rel="stylesheet">-->
    <style>
        body{
            background: url('/img/stardust.png');
        }

    .centered-form .panel{
        background: rgba(255, 255, 255, 0.8);
        box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
        color: #4e5d6c;
        }

    .centered-form{
        margin-top: 60px;
        }
    </style>
</head>

 <div class="row centered-form">
  <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Please Login</h3>
      </div>
      <div class="panel-body">
        <form method="POST" action="/auth/login">
          {!! csrf_field() !!}
          <div class="form-group">
            <input type="email" name="email" class="form-control input-sm" placeholder="Email Address">
          </div>

          <div class="form-group">
            <input type="password" name="password" class="form-control input-sm" placeholder="Password">
          </div>

          <div class="checkbox">
            <label>
              <input name="remember" type="checkbox" value="Remember Me"> Remember Me
              <a href="/forgot" class="pull-right">Forgot Password?</a>
            </label>
          </div>

          <input type="submit" value="Login" class="btn btn-info btn-block">

        </form>
      </div>
    </div>
    <div class="text-center">
        <a href="/">Home</a> --
      <a href="register" >Don't have an account? Register</a>
    </div>
  </div>
</div>

</html>
