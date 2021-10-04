<?php session_start(); ?>
 <!DOCTYPE html>
 <html>
<head>
 <meta charset="UTF-8">
<title>FoodTrade</title>
  
<base href="http://localhost/FoodTrade/main">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="alap/sajat.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bejelentkezes.css">
  <link rel="stylesheet" type="text/css" href="css/sajat.css">
  
</head>
<body>

<div id="menuhelye">
<?php
	if (isset($_SESSION["login_nev"]))
		require "alap/menu_belepett.php";
	else
		require "alap/menu_nembelepett.html";

?>

</div>

<?php
	$page = isset($_GET['page']) ? $_GET['page'] : "main";
	if($page == "") $page = "main";
	
	if(file_exists("pages/" . $page . "/" . $page . ".php"))
		include "pages/" . $page . "/" . $page . ".php";
	else
		include '404.php';
?>

</body>
</html> 