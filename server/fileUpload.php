<?php
  session_start();
  $uid=$_SESSION['uid'];
  $conn=mysqli_connect("localhost","root","","pleaseshare");
  $fileName=$_POST['fileName'];
  $file=rand(1000,9999)."-".$_FILES["upload"]["name"];
  $tmpfile=$_FILES["upload"]["tmp_name"];
  $folder="../users/storage/".$uid."/";
  $path=$folder.$file;
  $time=date("Y-m-d h:i:sa");
  $sql="insert into storage(uid,file,path,date) values('$uid','$fileName','$path','$time')";
  if(move_uploaded_file($tmpfile,$folder.$file)) {
    $query=mysqli_query($conn,$sql);
    if($query) {
      $sql="select * from userList where uid='$uid'";
      $result=mysqli_query($conn,$sql);
      while ($row=mysqli_fetch_array($result)) {
        $name=$row['name'];
        $email=$row['email'];
      }
      header("location:../users/UI/userProfile.php?email=$email");
    }
    else {
      echo "something wrong";
    }
  }
 ?>
