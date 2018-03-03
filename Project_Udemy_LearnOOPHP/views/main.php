<html>
<head>
	<title></title>
  <link rel ="stylesheet" href="/phplearning/Project_Udemy_LearnOOPHP/assets/css/bootstrap.min.css">
	<link rel ="stylesheet" href="/phplearning/Project_Udemy_LearnOOPHP/assets/css/mystyle.css">

</head>

<body>
	 <nav class="navbar navbar-inverse "><!-- navbar-fixed-top -->
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Shares</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo ROOT_URL; ?>">Home</a></li>
            <li><a href="<?php echo ROOT_URL;?>Shares">Shares</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo ROOT_URL; ?>User/login">Login</a></li>
            <li><a href="<?php echo ROOT_URL;?>user/register">Register</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" style="margin-top:50px">

      <?php require($view);?>
    

    </div><!-- /.container -->

    </div><!-- /.container -->
</body>


</html>