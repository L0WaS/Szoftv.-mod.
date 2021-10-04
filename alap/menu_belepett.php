<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./main"><span class="menuszoveg">Főoldal</span> </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="./hirdetesfeladas"><span class="menuszoveg">Hirdetésfeladás</span></a></li>
		<li ><a href="./hirdetesek"><span class="menuszoveg">Hirdetések</span></a></li>
		<?php
	  if ($_SESSION["login_rang"]==1)
		  
		  {
			  //print' <li><a href="#"><span class="menuszoveg">Admin 1</span> </a></li>';
			  //print' <li><a href="#"><span class="menuszoveg">Admin 2</span> </a></li>';
		  }
?>
	  
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      <li><a href=""id = "logoutgomb"><span class="glyphicon glyphicon-user"></span><span class="menuszoveg">Kilépés</span> </a></li>
       
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"> <a href="#">Lap 1</a></li>
      
      <li><a href="#">Lap 2</a></li>
	  <li><a href="#">Lap 3</a></li>

	  
	  
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href=""id = "logoutgomb"><span class="glyphicon glyphicon-user"></span> kilépés</a></li>
      
    </ul>
  </div>
</nav>
-->