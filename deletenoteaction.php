<?php
include 'dbconnect.php';

if(isset($_GET['pid']))
{
$noteid = $_GET['pid'];
$sql = "DELETE FROM notes WHERE noteid='$noteid'";
$result = mysqli_query($conn, $sql);


if($result>0){
    header("location:index.php?msg1=".true);
  }
  else{
      header("location:index.php?msg2=".true);
  }
}
?>