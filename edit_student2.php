<?php include_once 'head.php' ?>
<?php include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';
include_once 'connect.php';

//ดึงค่าข้อมูล นร. 1 คน
$id=$_GET['id'];
$sql="select * from student2 where student_id='$id' ";
// echo $sql;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="container" style="margin-top:30px">
  <!-- <div class="row"> -->
  <h3>แก้ไขข้อมูลนักเรียน</h3>
  <div class='col-md-4'>
    <form action="edit_student2_pr.php" method='post'>
      <div class="form-group">
        <label for="std_id">รหัสนักเรียน:</label>
        <input type="text" class="form-control" value="<?php echo $row['student_id']?>" name="std_id" readonly>
      </div>
      <div class="form-group">
        <label for="name">ชื่อนักเรียน:</label>
        <input type="text" class="form-control" value="<?php echo $row['name']?>" name="name">
      </div>
      <div class="form-group">
        <label for="group">กลุ่ม:</label>
        <select class="form-control" id="group" name="group">
          <option>--เลือกกลุ่มการเรียน--</option>
          <?php
          $sql2="SELECT `group_id` FROM `student2`";
          $res2=mysqli_query($conn,$sql2);
          while($row2=mysqli_fetch_assoc($res2)){
            ?>
            <option 
            <?php
              if ($row['group_id']==$row2['group_id']){
                echo "selected";
              }
            ?>
              ><?php echo $row2['group_id'] ?></option>
            <?php
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="level">ระดับชั้น:</label>
        <select class="form-control" id="level" name="level">
          <option 
            <?php
              if ($row['level_group']=="ปวช.1"){
                echo "selected";
              }
            ?>
            >ปวช.1</option>
          <option
            <?php
              if ($row['level_group']=="ปวช.2"){
                echo "selected";
              }
            ?>
            >ปวช.2</option>
          <option 
            <?php
              if ($row['level_group']=="ปวช.3"){
                echo "selected";
              }
            ?>
            >ปวช.3</option>
          <option 
            <?php
              if ($row['level_group']=="ปวส.1"){
                echo "selected";
              }
            ?>
            >ปวส.1</option>
          <option
            <?php
              if ($row['level_group']=="ปวส.2"){
                echo "selected";
              }
            ?>
            >ปวส.2</option>
        </select>
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
