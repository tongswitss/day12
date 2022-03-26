<?php
include_once 'connect.php';
$id=$_GET['id'];

$sql="delete from student2 where student_id='$id' ";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("location:show2.php");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }