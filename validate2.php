<?php include_once 'head.php' ?>
<?php include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';?>
<?php include_once "connect.php";
?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<div class="container" style="margin-top:30px">
<h3>ตรวจสอบการกรอกข้อมูล</h3>
<div class="col-sm-6">
<form name="frm1" action="validate_ok.php" onsubmit="return chk()" method="post">
  <div class="form-group">
          <label for="std_id">รหัสนักเรียน:</label> <label class="text-danger fo">*</label>
          <input id="std_id" type="number"  class="form-control" placeholder="รหัสนักเรียน" name="std_id" required>
    </div>
    <div class="form-group">
          <label for="name">ชื่อนักเรียน:</label> <label class="text-danger fo">*</label>
          <input id="name" type="text"  class="form-control" placeholder="ชื่อนักเรียน" name="name" required>
    </div>
    <div class="form-group">
          <label for="tel">เบอร์โทรศัพท์:</label> <label class="text-danger fo">*</label>
          <input id="tel" type="number"  class="form-control" placeholder="เบอร์โทรศัพท์" name="tel" required>
    </div>
    <div class="text-center">
        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
<script>
  //alert("Script");
  $(document).ready(function(){
   // alert("jQry");
    $('#std_id').focus();
    $('#name').focus(function() {
      var x = $('#std_id').val();
      if (x.length != 11) {
        $('#std_id').focus();
        alert("รหัสนักศึกษาต้องเป็นตัวเลข 11 หลัก");
      }
    })

    $('#tel').focus(function () {
      var y =  $('#name').val();
      if (15 >= y.length) {
        $('#name').focus();
        alert("ชื่อไม่น้อยกว่า 15 ตัวอักษร");
      }
    })

    $('#submit').mouseover(function () {
      var z =  $('#tel').val();
      if (z.length != 10) {
        $('#tel').focus();
        alert("เบอร์โทรต้องเป็นเลข 10 หลัก");
      }
    })



  });
    
</script>

<?php include_once 'footer.php' ?>

</body>
</html>