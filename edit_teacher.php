<?php include_once 'head.php' ?>
<?php include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';
include_once 'connect.php';

//ดึงค่าข้อมูล นร. 1 คน
$id=$_GET['id'];
$sql=" SELECT * FROM teacher_chon where teacher_id='$id' ";
// echo $sql;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="container" style="margin-top:30px">
  <!-- <div class="row"> -->
  <h3>แก้ไขข้อมูลครู</h3>
  <div class='col-md-4'>
    <form action="edit_teacher_pr.php" method='post'>
      <div class="form-group">
        <label for="teacher_id">รหัสครู :</label>
        <input type="text" class="form-control" value="<?php echo $row['teacher_id']?>" name="teacher_id" readonly>
      </div>
      <div class="form-group">
        <label for="fname">ชื่อ :</label>
        <input type="text" class="form-control" value="<?php echo $row['fname']?>" name="fname">
      </div>
      <div class="form-group">
        <label for="lname">นามสกุล :</label>
        <input type="text" class="form-control" value="<?php echo $row['lname']?>" name="lname">
      </div>
      
      
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      
    </form>  
  </div>  
  
  <br>
  <!-- </div> -->
</div>

<?php include_once 'footer.php' ?>

</body>
</html>