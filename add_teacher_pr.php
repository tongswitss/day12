<?php
include_once "connect.php";

$teacher_id=$_POST['teacher_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];

$sql="insert into teacher_chon values('$teacher_id','$fname','$lname')";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location:showteacher.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
