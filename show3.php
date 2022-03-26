<?php include_once 'head.php' ?>
<?php include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';
include_once('connect.php'); 
$sql = "select * from student";
$result = mysqli_query($conn, $sql);

?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<div class="container" style="margin-top:30px">
  <!-- <div class="row"> -->
  <table class="table">
        <tr>
            <th>รหัสนักเรียน</th>
            <th>ชื่อนักเรียน</th>
            <th>เบอร์โทรศัพท์</th>
            <th>ดำเนินการ</th>
        </tr> 
    <?php
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['tel']?></td>
            <td>
            <a href="javascript:;" class="addAttr" data-toggle="modal" data-target="#myModal"
            data-std_id=<?php echo $row['ID']?>
            data-std_name=<?php echo $row['name']?>
            data-std_tel=<?php echo $row['tel']?>
            >
              <button class="btn bg-info"><i class="fas fa-edit"></i> แก้ไข</button></a>
              
              <a href="del_student.php?id=<?php echo $row['ID']?>">
                <button class="btn bg-danger"><i class="fas fa-trash-alt"></i> ลบ</button>
              </a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">แก้ไขข้อมูลนักเรียน</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="edit_student_pr.php" method='post'>
            <div class="form-group">
            <label for="std_id">รหัสนักเรียน:</label>
            <input type="text" class="form-control" id="std_id" value=" " name="std_id" readonly>
          </div>
          <div class="form-group">
            <label for="std_name">ชื่อนักเรียน:</label>
            <input type="text" class="form-control"  id="std_name" value="" name="name">
          </div>
          <div class="form-group">
            <label for="std_tel">เบอร์โทรศัพท์:</label>
            <input type="text" class="form-control" id="std_tel" value="" name="tel">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      
         </form>  
      </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
    
  <!-- </div> -->
</div>
<script>
  $('.addAttr').click(function() {
      var std_id = $(this).data('std_id');
      var std_name = $(this).data('std_name');
      var std_tel = $(this).data('std_tel');   

    $('#std_id').val(std_id);
    $('#std_name').val(std_name);
    $('#std_tel').val(std_tel);
  })
</script>

<?php include_once 'footer.php' ?>

</body>
</html>