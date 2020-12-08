<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($mysqli,"select * from user where email_user = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   
   $login_session = array('email' => $row['email_user'], 'nama' => $row['nama_user']);
        
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>