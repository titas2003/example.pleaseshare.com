<?php
  $conn=mysqli_connect("localhost","root","","db.pleaseShare.com");
  if(!$conn) {
    echo "database error!!!";
    echo "not connected to database...please contact to admin";
    echo "<center> admin contact: <b>9874052056</b></center>";
  }
  else {
    $name=$_POST['reg-name'];
    $email=$_POST['reg-email'];
    $password=$_POST['reg-password'];
    $password=md5($password);
    $uid=rand(1000,9999);
    $sql="insert into userList(uid,name,email,password) values('$uid','$name','$email','$password')";
    $query=mysqli_query($conn,$sql);
    if($query) {
      echo "welcome to pleaseShare";
      $path="../users/storage/".$uid;
      mkdir($path);
      sleep(10);
      header("location:../");
    }
    else {
      echo "something went wrong...please contact to admin";
      echo "<center> admin contact: <b>9874052056</b></center>";
    }
  }
 ?>
