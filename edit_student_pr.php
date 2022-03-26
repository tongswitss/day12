<?php
include_once "connect.php";

$std_id=$_POST['std_id'];
$name=$_POST['name'];
$tel=$_POST['tel'];

$sql="update student set name ='$name' ,tel='$tel' where id='$std_id' ";
// echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record update successfully";
    header("location:show3.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}