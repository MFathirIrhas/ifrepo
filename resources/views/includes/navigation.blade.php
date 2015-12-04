<!--Navigation-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">if-Repo</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home">Home <span class="sr-only">(current)</span></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Kategori <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Pemograman</a></li>
            <li><a href="#">Pengembangan Aplikasi</a></li>
            <li><a href="#">Pengembangan Web</a></li>
            <li><a href="#">Pengembangan Software</a></li>
            <li><a href="#">Artificial Intelligent</a></li>
            <li><a href="#">Computer Networks</a></li>
            <li><a href="#">Robotics</a></li>
            <li><a href="#">(bantu isi)</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
          <li><a href="#">Repository</a></li>
          <li><a href="#">Forum</a></li>
          <li><a href="about">About</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search" id="1291960344">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

        <?php if(Auth::guest()){ ?> 
            <ul class="nav navbar-nav navbar-right">
          <li><a href="auth/login">Login</a></li>
        </ul>
        <?php }else{ 
            $userlogin = Auth::user()->name;
        ?>
            <ul class="nav navbar-nav navbar-right">
            <li><a><?php echo $userlogin ?></a></li> 
            <li><a href="auth/logout">Logout</a></li>
        </ul>
        <?php } ?>
        

    </div>
  </div>
</nav>
