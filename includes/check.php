<?php

session_start();
include "phps/config.php";
  if (isset($_POST['submit'])){
    $iemail = $_POST['email'];
    $ipass = $_POST['pass'];
    
    $sql="select * from `user` where email = '$iemail' and password = '$ipass' ";
    $result = mysqli_query($conn,$sql);
     if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $onemail = $row['username'];
        $_SESSION["printlogin"] = "pass";
        setcookie("user",$onemail,time()+60*60*60);
        setcookie("areuin",1,time()+60*60*24);
        header ("Location:http://localhost/recordmanagement/dashboard.php?name=$onemail ");
     }else{
         

     }
  }
?>