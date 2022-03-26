<?php
include_once "connect.php";

$std_id=$_POST['std_id'];
$name=$_POST['name'];
$tel=$_POST['tel'];

$sql="insert into student values('$std_id','$name','$tel')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location:show3.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}