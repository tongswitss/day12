<?php include_once 'head.php' ?>
<?php include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';?>
<?php include_once "connect.php";
?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<div class="container" style="margin-top:30px">
  <h3>เลือกชื่อนักเรียน</h3>
  <div class="form-group">
  <form action="showselect.php" method='post'> 
        <label for="name">ชื่อนักเรียน:</label>
        <select class="form-control " id="name" name="name">
          <option>--เลือกชื่อนักเรียน--</option>
          <?php
          $sql="SELECT DISTINCT name  FROM student2 ";
          $res=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($res)){
            ?>
            <option><?php echo $row['name'] ?></option>
            <?php
          }
          ?>
          </select>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form> 

      </div>
      <br>
</div>

<?php include_once 'footer.php' ?>
<script>
  $(document).ready(function() {
    $('#name').select2();
});
</script>
</body>
</html>