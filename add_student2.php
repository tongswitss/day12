<?php include_once 'head.php' ?>
<?php include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';
include_once "connect.php";
?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<div class="container" style="margin-top:30px">
  <!-- <div class="row"> -->
    <h3>เพิ่มข้อมูลนักเรียน</h3>
  <div class='col-md-4'>
    <form action="add_student2_pr.php" method='post'>
      <div class="form-group">
        <label for="std_id">รหัสนักเรียน:</label>
        <input type="text" class="form-control" placeholder="รหัสนักเรียน" name="std_id">
      </div>
      <div class="form-group">
        <label for="name">ชื่อนักเรียน:</label>
        <input type="text" class="form-control" placeholder="ชื่อนักเรียน" name="name">
      </div>
      <!-- <div class="form-group">
        <label for="group">กลุ่ม:</label>
        <input type="text" class="form-control" placeholder="ชื่อกลุ่มการเรียน" name="group">
      </div> -->
      <div class="form-group">
        <label for="group">กลุ่ม:</label>
        <select class="form-control " id="group" name="group">
          <option>--เลือกกลุ่มการเรียน--</option>
          <?php
          $sql="SELECT DISTINCT `group_id` FROM `student2` ";
          $res=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($res)){
            ?>
            <option><?php echo $row['group_id'] ?></option>
            <?php
          }
          ?>
        </select>
      </div>
      <!-- <div class="form-group">
        <label for="level">ระดับชั้น:</label>
        <input type="text" class="form-control" placeholder="ระดับชั้น" name="level">
      </div> -->
      <div class="form-group">
        <label for="level">ระดับชั้น:</label>
        <select class="form-control" id="level" name="level">
          <option>ปวช.1</option>
          <option>ปวช.2</option>
          <option>ปวช.3</option>
          <option>ปวส.1</option>
          <option>ปวส.2</option>
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
<script>
  $(document).ready(function() {
    $('#group').select2();
});
</script>
</body>
</html>
