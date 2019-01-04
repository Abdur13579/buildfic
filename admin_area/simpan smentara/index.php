<?php
	session_start();
	if (!isset($_SESSION["manager"])) {
			header("location: admin_login.php"); 
		}	
	//session_destroy();
?>

<!DOCTYPE html>
<html>
	<head>
		  <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
		  <script src="../j_quary/jquery.min.js"></script>
		  <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="list-group">
			  <a href="top_cms.php"><button type="button" class="list-group-item list-group-item-action">Banner</button></a>
			  <a href="#"><button type="button" class="list-group-item list-group-item-action">A</button></a>
			  <a href="#"><button type="button" class="list-group-item list-group-item-action">B</button></a>
			  <a href="#"><button type="button" class="list-group-item list-group-item-action">C</button></a>
			  <a href="#"><button type="button" class="list-group-item list-group-item-action">D</button></a>
			  <a href="#"><button type="button" class="list-group-item list-group-item-action">E</button></a>
			  <a href="#"><button type="button" class="list-group-item list-group-item-action">F</button></a>
			  <a href="#"><button type="button" class="list-group-item list-group-item-action">G</button></a>
			  <a href="#"><button type="button" class="list-group-item list-group-item-action">H</button></a>
			</div>
		</div>
	</body>
</html>



