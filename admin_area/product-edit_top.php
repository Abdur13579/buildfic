<?php
	include "../connection.php";
	session_start();
	if (!isset($_SESSION["manager"])) {
			header("location: admin_login.php"); 
		}	
	//session_destroy();
?>

<?php
	if (isset($_POST["tulisan_teratas"]))
	{
		$id = 1 ;
		$tulisan_teratas = $_POST['tulisan_teratas'];
		$tulisan_tengah_1 = $_POST['tulisan_tengah_1'];
		$tulisan_tengah_2 = $_POST['tulisan_tengah_2'];
		$tulisan_bawah = $_POST['tulisan_bawah'];      
		$sql = mysqli_query($connection,"UPDATE banner SET tulisan_teratas='$tulisan_teratas',tulisan_tengah_1='$tulisan_tengah_1',tulisan_tengah_2='$tulisan_tengah_2',tulisan_bawah='$tulisan_bawah'")or die("edit error");		
		if($_FILES['fileField']['tmp_name'] != ""){
		if(move_uploaded_file( $_FILES['fileField']['tmp_name'], "../upload/dapat_diupdate.jpg"))
			{
				
			}
		}
		
		header("location: index.php"); 
		exit();
	}
?>

<?php
	
	{
		{	
		     $background_link_banner = "upload/dapat_diupdate.jpg";
			 $tulisan_teratas = "Welcome to";
			 $tulisan_tengah_1 = "Real";
			 $tulisan_tengah_2 = "Factory";
			 $tulisan_bawah = "Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit sit amet non.";
			
			$sql = mysqli_query($connection,"SELECT * FROM banner");
			$productCount = mysqli_num_rows($sql); // count the output amount
			if ($productCount > 0) {
				while($row = mysqli_fetch_array($sql)){ 
						 $tulisan_teratas = $row["tulisan_teratas"];
						 $tulisan_tengah_1 = $row["tulisan_tengah_1"];
						 $tulisan_tengah_2 = $row["tulisan_tengah_2"];
						 $tulisan_bawah  = $row["tulisan_bawah"];
				}
			} else {
				echo "You have no data for change";
			}
		 }
	}
?>

<!DOCTYPE html>
<html>
	<head>
		  <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
		  <script src="../j_quary/jquery.min.js"></script>
		  <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		  <style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}

	</style>
	</head>
	<body>
		<div class="login-page">
		  <div class="form">
			<form class="login-form" action="product-edit_top.php" method="post" enctype="multipart/form-data">
			  <input type="text" value="<?php echo $tulisan_teratas; ?>" name="tulisan_teratas"/>
			  <input type="text" value="<?php echo $tulisan_tengah_1; ?>" name="tulisan_tengah_1"/>
			  <input type="text" value="<?php echo $tulisan_tengah_2; ?>" name="tulisan_tengah_2"/>
			  <input type="text" value="<?php echo $tulisan_bawah; ?>" name="tulisan_bawah"/>
			  <input type="file" name="fileField" id="fileField" />
			  <button>Update</button>
			</form>
		  </div>
		</div>
	</body>
</html>



