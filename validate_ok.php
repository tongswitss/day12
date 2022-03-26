<?php include_once 'head.php' ?>
<?php include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';?>
<?php include_once "connect.php";
$std_id=$_POST['std_id'];
$name=$_POST['name'];
$tel=$_POST['tel'];
?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<div class="container" style="margin-top:30px">


<h3>ตรวจสอบการกรอกข้อมูล</h3>
<div class="col-sm-6">
<h3>validate ok</h3>
<?php
echo "ID=".$std_id."  /  ";
echo "NAME=".$name."  /  ";
echo "Tel=".$tel;
?>
</div>

<?php include_once 'footer.php' ?>

</body>
</html>