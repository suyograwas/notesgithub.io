<?php
include 'dbconnect.php';

if(isset($_POST['savenotes'])){
    $noteid= $_POST['noteid'];
    $title= $_POST['title'];
    $note = $_POST['note'];

    
    $sql = "UPDATE notes SET title = '$title', note = '$note' WHERE noteid = '$noteid';;";
        $result = mysqli_query($conn, $sql);

        if($result>0){
          header("location:index.php?msg1=".true);
        }
        else{
            header("location:index.php?msg2=".true);
        }


}


?>