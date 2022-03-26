<?php include_once 'head.php' ?>
<?php include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';
include_once 'connect.php';

$id=$_GET['id'];
$sql="select * from student where id='$id' ";
// echo $sql;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="container" style="margin-top:30px">
  <!-- <div class="row"> -->
  <h3>แก้ไขข้อมูลนักเรียน</h3>
  <div class='col-md-4'>
    <form action="edit_student_pr.php" method='post'>
      <div class="form-group">
        <label for="std_id">รหัสนักเรียน:</label>
        <input type="text" class="form-control" value="<?php echo $row['id']?>" name="std_id" readonly>
      </div>
      <div class="form-group">
        <label for="name">ชื่อนักเรียน:</label>
        <input type="text" class="form-control" value="<?php echo $row['name']?>" name="name">
      </div>
      <div class="form-group">
        <label for="tel">เบอร์โทรศัพท์:</label>
        <input type="text" class="form-control" value="<?php echo $row['tel']?>" name="tel">
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
