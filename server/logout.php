<?php
  session_start();
  echo "logging out ...";
  sleep(5);
  $_SESSION['uid']=null;
  header("location:../");
 ?>
