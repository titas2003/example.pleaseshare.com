<?php
  session_start();
  $email=$_GET['email'];
  $conn=mysqli_connect("localhost","root","","db.pleaseShare.com");
  $sql="select * from userList where email='$email'";
  $result=mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result)) {
    $name=$row['name'];
    $uid=$row['uid'];
  }
  //$_SESSION['uid']=$uid;
  $_SESSION['uid']=$uid;
  // array_push($_SESSION['uid'], $uid);
  $sql1="select * from storage where uid='$uid'";
  $result1=mysqli_query($conn,$sql1);
  $sl=1;
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>welcome <?php echo $name; ?></title>
   </head>
   <body>
     <div class="storage">
       <h3>Storage</h3>
       <table>
         <thead>
           <td><b>sl&nbsp;</b></td>
           <td><b>FILE NAME &nbsp;</b></td>
             <td><b>&nbsp;&nbsp;DATE</b></td>
         </thead>
         <?php
            while($row1=mysqli_fetch_array($result1)) {

          ?>
          <tr>
            <td><?php echo $sl; ?></td>
            <td><a href="<?php echo "../".$row1['path']; ?>" download><?php echo $row1['file']; ?></a></td>
            <td><?php echo  $row1['date']; ?></td>
            <td></td>
          </tr>
        <?php
          $sl++;
      }
      ?>
       </table>
     </div>
     <hr />
     <div class="upload">
       <form class="upload-form" action="../../server/fileUpload.php" method="post" enctype="multipart/form-data">
         <input type="text" name="fileName" placeholder="enter file name"><br><br>
         <!--<input type="file" accept="video/*" />
         <p id="progress"></p>-->
         <input type="file" name="upload"><br><br>
         <input type="submit" name="submit" value="upload file">
       </form>
     </div>
     <hr />
     <div class="logout">
       <a href="../../server/logout.php"><b>LOGOUT</b></a>
     </div>
     <div class="delete account">
       <a href="../../server/acc_dlt.php"><b>delete account</b></a>
     </div>
   </body>
 </html>
