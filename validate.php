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
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
<script>
  //console.log("OK");
  //alert("text")
  function chk() {
    var x = document.forms['frm1']['std_id'].value;

    var y = document.forms['frm1']['name'].value;

    var z  = document.forms['frm1']['tel'].value;


    if (x.length != 11) {
      alert("รหัสนักเรียนต้องใส่ 11 หลัก");
      document.forms['frm1']['std_id'].value='';
      document.getElementById('std_id').focus();
      return false;
    }
    if (15 >= y.length ) {
      alert("ชื่อนักเรียนไม่น้อยกว่า 15 ตัวอักษร");
      document.forms['frm1']['name'].value='';
      document.getElementById('name').focus();
      return false;
    }
   if (z.length != 10) {
      alert("เบอร์โทรศัพท์ เป็นตัวเลข มีจำนวน 10 หลัก ");
      document.forms['frm1']['tel'].value='';
      document.getElementById('tel').focus();
      return false;
    }
  }
</script>

<?php include_once 'footer.php' ?>

</body>
</html>