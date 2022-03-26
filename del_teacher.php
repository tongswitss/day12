<?php
include_once 'connect.php';
$id=$_GET['id'];

$sql="delete from teacher_chon where teacher_id='$id' ";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("location:showteacher.php");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }