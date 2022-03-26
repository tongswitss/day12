<?php include_once 'head.php' ?>
<?php //include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';?>

<div class="container" style="margin-top:30px">
  <!-- <div class="row"> -->
  <form action="page1_pr.php" method='post'>
    <div class="form-inline">
      <label for="id">รหัสนักเรียน : </label>&nbsp;&nbsp;
      <input type="text" class="form-control" id="usr" name="id">
    </div>
    <br>
    <div class="form-inline">
      <label for="na">ชื่อนักเรียน : </label>&nbsp;&nbsp;
      <input type="text" class="form-control" id="pwd" name="na">
    </div>
    <br>
    <div class="form-inline">
      <label for="s1">คะแนนครั้งที่ 1 : </label>&nbsp;&nbsp;
      <input type="text" class="form-control" id="pwd" name="s1">
    </div>
    <br>
    <div class="form-inline">
      <label for="s2">คะแนนครั้งที่ 2 : </label>&nbsp;&nbsp;
      <input type="text" class="form-control" id="pwd" name="s2">
    </div>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <br>

    
  <!-- </div> -->
</div>

<?php include_once 'footer.php' ?>

</body>
</html>
