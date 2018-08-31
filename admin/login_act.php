<?php 

require('koneksi.php');

session_start();
$act 	= $_GET['act'];
$user= $_POST['username'];
$pass= md5 ($_POST['password']);

if(isset($_GET['act'])){

	if($act == 1){

		$result = mysql_query("	SELECT * FROM admin 
								WHERE user_admin	= '$user' 
								AND pass_admin			= '$pass'");
		$s = mysql_num_rows($result);

		if ($s > 0) {

			$row = mysql_fetch_array($result);
			$date = date('Y-m-d H:i:s');
			mysql_query("UPDATE user_admin SET lastlogin = '$date' WHERE id_admin = '$result[id_admin]'");
		 	$_SESSION['id_admin'] 		= $row['id_admin'];
		 	$_SESSION['user_admin'] = $row['user_admin'];
		 	$_SESSION['pass_admin']= $row['pass_admin'];
		 	$_SESSION['nama']= $row['nama'];
		 	$_SESSION['level']= $row['level'];
			echo"<script>alert ('welcome ".$user." disini');
	                   window.location='home.php'</script>";
		 	
		  

	}else{
		echo"<script>alert ('anda gagal login');
	window.location='index.php'</script>";
	$result->close();
	}
}
}
?>
