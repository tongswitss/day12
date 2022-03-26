<?php
include_once 'connect.php';
$id=$_GET['id'];

$sql="delete from student where id='$id' ";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("location:show3.php");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }