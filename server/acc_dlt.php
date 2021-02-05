<?php
  session_start();
  echo $uid=$_SESSION['uid'];
  $conn=mysqli_connect("localhost","root","","pleaseshare");
  if(!$conn) {
    echo "database error!!!";
    echo "not connected to database...please contact to admin";
    echo "<center> admin contact: <b>9874052056</b></center>";
  }
  else {
    $sql="delete from userList where uid='$uid'";
    $sql1="delete from storage where uid='$uid'";
    $query=mysqli_query($conn,$sql);
    $query1=mysqli_query($conn,$sql1);
    $path="../users/storage/".$uid;
    $files = glob($path . '/*');

    foreach($files as $file){
        //Make sure that this is a file and not a directory.
        if(is_file($file)){
            //Use the unlink function to delete the file.
            unlink($file);
        }
    }
    if($query && $query1 && rmdir($path)) {
      header("location:http://localhost/example.pleaseShare.com/");
    }
    else {
      echo "error";
    }
  }

 ?>
