<?php
include 'dbconnect.php';

if(isset($_POST['savenotes'])){
    $title= $_POST['title'];
    $note = $_POST['note'];

    
    $sql = "INSERT INTO `notes` ( `noteid`,`title`, `note`)
         VALUES ( NULL,'$title','$note')";
        $result = mysqli_query($conn, $sql);

        if($result>0){
          header("location:index.php?msg1=".true);
        }
        else{
            header("location:index.php?msg2=".true);
        }


}


?>