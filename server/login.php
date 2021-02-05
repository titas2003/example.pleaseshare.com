<?php
  session_start();
  $conn=mysqli_connect("localhost","root","","pleaseshare");
  if(!$conn) {
    echo "database error!!!";
    echo "not connected to database...please contact to admin";
    echo "<center> admin contact: <b>9874052056</b></center>";
  }
  else {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $sql="select * from userList where email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql);
    if($row=mysqli_fetch_array($result)) {

      header("location:../users/UI/userProfile.php?email=$email");


    }
    else {
      echo "you are not registered";
    }
  }

 ?>
