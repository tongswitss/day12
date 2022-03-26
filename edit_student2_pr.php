<?php
include_once "connect.php";

$std_id=$_POST['std_id'];
$name=$_POST['name'];
$group=$_POST['group'];
$level=$_POST['level'];

$sql="update student2 set name ='$name' ,group_id='$group',level_group='$level' 
    where student_id='$std_id' ";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record update successfully";
    // header("location:show2.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}