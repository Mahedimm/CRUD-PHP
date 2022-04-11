<?php 
include 'connect.php';

  //delete data from table
  if(isset($_GET['deleteid'])){
    $sno = $_GET['deleteid'];

    $sql = "DELETE FROM `article` WHERE `sno`=$sno";
    $result = mysqli_query($conn, $sql);
    if($result){
    //   echo "data deleted successfully";
    header("Location:display.php");
    }
    else{
      echo "data not deleted";
    }
  }
?>