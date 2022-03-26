<?php include_once 'head.php' ?>
<?php include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';?>

<div class="container" style="margin-top:30px">
  <!-- <div class="row"> -->
    <h3>เพิ่มข้อมูลนักเรียน</h3>
  <div class='col-md-4'>
    <form action="add_student_pr.php" method='post'>
      <div class="form-group">
        <label for="std_id">รหัสนักเรียน:</label>
        <input type="text" class="form-control" placeholder="รหัสนักเรียน" name="std_id">
      </div>
      <div class="form-group">
        <label for="name">ชื่อนักเรียน:</label>
        <input type="text" class="form-control" placeholder="ชื่อนักเรียน" name="name">
      </div>
      <div class="form-group">
        <label for="tel">เบอร์โทรศัพท์:</label>
        <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" name="tel">
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
