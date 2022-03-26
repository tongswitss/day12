<?php include_once 'head.php' ?>
<?php //include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';?>
<?php
$id=$_POST['id'];
$na=$_POST['na'];
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$sum=$s1+$s2 ;
if ($sum>=80){
    $g='A';
}else if($sum>=70){
    $g='B';
}else if($sum>=60){
    $g='C';
}else if($sum>=50){
    $g='D';
}else {
    $g='F';
}

?>
<style>
    .blue{
        color: blue;
    }
</style>
<div class="container" style="margin-top:30px">
  <!-- <div class="row"> -->
  <h3>รหัสนักเรียน <span class="blue"><?php echo $id ?></span></h3>
  <h3>ชื่อนักเรียน <span class="blue"><?php echo $na ?></span></h3>
  <h3>คะแนนรวม <span class="blue"><?php echo $sum ?></span></h3>
  <h3>เกรด <span class="blue"><?php echo $g ?></span></h3>

    
  <!-- </div> -->
</div>

<?php include_once 'footer.php' ?>

</body>
</html>
