<?php
include_once "connect.php";

$std_id=$_POST['std_id'];
$name=$_POST['name'];
$group=$_POST['group'];
$level=$_POST['level'];

$sql="insert into student2 values('$std_id','$name','$group','$level')";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location:show2.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}