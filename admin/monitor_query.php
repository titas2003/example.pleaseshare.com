<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
  </head>
  <body>

  </body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","db.pleaseShare.com");
if(!$conn) {
  echo "database error!!!";
  echo "not connected to database...please contact to admin";
  echo "<center> admin contact: <b>9874052056</b></center>";
}
else {
  $db_name=$_POST['database'];
  $sql_db_use="use ".$db_name;
  //$use_db_log=mysqli_query($conn,$sql_db_use);
  $database_queries="select * from mysql.general_log where command_type='Query' order by thread_id desc limit 400";
  $database_query_log=mysqli_query($conn,$database_queries);
  while($row=mysqli_fetch_array($database_query_log)) {
    $arr=explode(" ",$row['argument']);
    if(ctype_lower($arr[0])) {
      if(($row['argument']!="select * from mysql.general_log where command_type='Query' order by thread_id desc limit 400") && ($row['argument']!="select * from mysql.general_log") && ($row['argument']!="SELECT @@version, @@version_comment")) {
        echo $row["argument"];
        echo "<br><p>--------------------------------------</p><br>";

      }
    }

$row['argument'];
  }
}
 ?>
