<?php
   include('database.php');
   session_start();
   $_SESSION['id'] = $user_id;
   $_SESSION['Username'] = $username;
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select Username from users where Username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:loginregister.php");
      die();
   }
?>