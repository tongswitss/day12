<?php include_once 'head.php' ?>
<?php include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';
include_once "connect.php";
?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<div class="container" style="margin-top:30px">
  <!-- <div class="row"> -->
    <h3>เพิ่มข้อมูลครู</h3>
  <div class='col-md-4'>
    <form action="add_teacher_pr.php" method='post'>
      <div class="form-group">
        <label for="teacher_id">รหัสครู:</label>
        <input type="text" class="form-control" placeholder="รหัสครู" name="teacher_id">
      </div>
      <div class="form-group">
        <label for="fname">ชื่อ:</label>
        <input type="text" class="form-control" placeholder="ชื่อ" name="fname">
      </div>
      <div class="form-group">
        <label for="lname">นามสกุล:</label>
        <input type="text" class="form-control" placeholder="นามสกุล" name="lname">
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