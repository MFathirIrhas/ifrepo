<!-- resources/views/auth/register.blade.php -->

<html>
<head>
  <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.0/yeti/bootstrap.min.css" rel="stylesheet">
  <style>
    body{
      background: url("/img/stardust.png");
    }

  .centered-form .panel{
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
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
        <h3 class="panel-title">Please sign up</h3>
      </div>
      <div class="panel-body">
        <form method="POST" action="/auth/register">
          {!! csrf_field() !!}
          <!--div class="row"-->
            <!--div class="col-xs-6 col-sm-6 col-md-6"-->
            <div class="form-group">
                <input type="text" name="name" class="form-control input-sm" placeholder="Name">
            </div>
            <!--/div>
            <!-- <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="text" name="last_name" class="form-control input-sm" placeholder="Last Name">
              </div>
            </div>
          </div> -->

          <div class="form-group">
            <input type="email" name="email" class="form-control input-sm" placeholder="Email Address">
          </div>

          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="password" name="password" class="form-control input-sm" placeholder="Password">
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
              </div>
            </div>
          </div>
            
            <div>
                *Password must at least 8 characters with number.
            </div>

          <input type="submit" value="Register" class="btn btn-info btn-block">


        </form>
      </div>
    </div>
      <div class="text-center">
        <a href="/">Home</a> --
          <a href="login">Login</a>
    </div>
  </div>
</div>

</html>
