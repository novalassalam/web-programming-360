<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($mysqli,$_POST['user']);
      $mypassword = md5(mysqli_real_escape_string($mysqli,$_POST['pass'])); 
      
      $sql = "SELECT id_user FROM user WHERE email_user = '$myusername' and password_user = '$mypassword'";
      $result = mysqli_query($mysqli,$sql);
      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $nama = $row['nama_user'];
      
      $count = mysqli_num_rows($result);
      		
      if($count == 1) {

         $_SESSION['login_user'] = $myusername;
         
         
         header("location: index.php");
      }else {
        echo "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>
<style>
input[type=text], input[type=password] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}

input[type=submit] {
	width: 100%;
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

input[type=submit]:hover {
	background-color: #45a049;
}

div {
	margin-top:150px;
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 40px;
	width: 450px;
}
</style>
<body>


	<center>
		<div>
			<h2>form login</h2>

			<hr>
			<form action = "" method = "post">
				<label for="fname">username</label>
				<input type="text" id="fname" name="user">

				<label for="lname">password</label>
				<input type="password" id="lname" name="pass">
				<input type="submit" value="Submit">
			</form>
		</div>
	</center>
</body>
</html>
