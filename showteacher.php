<?php include_once 'head.php' ?>
<?php include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';
include_once('connect.php'); 
$sql = "SELECT * FROM teacher_chon";
$result = mysqli_query($conn, $sql);

?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<div class="container" style="margin-top:30px">
  <!-- <div class="row"> -->
    <h3 class="text-center">แสดงข้อมูลครู </h3>
  <table class="table table-striped" id="student_list">
      <thead>
        <tr>
            <th>รหัสครู</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>ดำเนินการ</th>
            
        </tr> 
      </thead>
      <tbody>
    <?php
    while($row = mysqli_fetch_assoc($result)) {
        ?>
      
        <tr>
            <td><?php echo $row['teacher_id']?></td>
            <td><?php echo $row['fname']?></td>
            <td><?php echo $row['lname']?></td>
           
            <td>
               <a href="javascript:;" class="addAttr" data-toggle="modal" data-target="#myModal"

                  data-teacher_id = <?php echo $row['teacher_id']?>
                  data-teacher_fname = <?php echo $row['fname']?>
                  data-teacher_lname = <?php echo $row['lname']?>
              >
                <button class="btn bg-info"><i class="fas fa-edit"></i> แก้ไข</button>
              </a>
              
              <a href="del_th.php?id=<?php echo $row['teacher_id']?>">
                <button class="btn bg-danger"><i class="fas fa-trash-alt"></i> ลบ</button>
              </a>
            </td>
        </tr>
      
        <?php
    }
    ?>
    </tbody>
    </table>
    <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">เเก้ไข้ข้อมูลครู</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="edit_teacher_pr.php" method='post'>
      <div class="form-group">
        <label for="teacher_id">รหัสครู :</label>
        <input type="text" class="form-control" id="teacher_id" value=" " name="teacher_id" readonly>
      </div>
      <div class="form-group">
        <label for="fname">ชื่อ :</label>
        <input type="text" class="form-control" id="teacher_fname"value=" " name="fname">
      </div>
      <div class="form-group">
        <label for="lname">นามสกุล :</label>
        <input type="text" class="form-control" id="teacher_lname" value=" " name="lname">
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

<?php include_once 'footer.php' ?>
<script>
  $('.addAttr').click(function() {
      var teacher_id = $(this).data('teacher_id');
      var teacher_fname = $(this).data('teacher_fname');
      var teacher_lname = $(this).data('teacher_lname');   

    $('#teacher_id').val(teacher_id);
    $('#teacher_fname').val(teacher_fname);
    $('#teacher_lname').val(teacher_lname);
  })
</script>
</body>
</html>