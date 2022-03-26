<?php include_once 'head.php' ?>
<?php include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';
include_once('connect.php'); 
$sql = "select * from student2";
$result = mysqli_query($conn, $sql);

?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<div class="container" style="margin-top:30px">
  <!-- <div class="row"> -->
    <h3 class="text-center">แสดงข้อมูลนักเรียน ชุด 2</h3>
  <table class="table table-striped" id="student_list">
      <thead>
        <tr>
            <th>รหัสนักเรียน</th>
            <th>ชื่อนักเรียน</th>
            <th>กลุ่ม</th>
            <th>ระดับชั้น</th>
            <th>ดำเนินการ</th>
        </tr> 
      </thead>
      <tbody>
    <?php
    while($row = mysqli_fetch_assoc($result)) {
        ?>
      
        <tr>
            <td><?php echo $row['student_id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['group_id']?></td>
            <td><?php echo $row['level_group']?></td>
            <td>
              <a href="edit_student2.php?id=<?php echo $row['student_id']?>">
                <button class="btn bg-info"><i class="fas fa-edit"></i> แก้ไข</button>
              </a>
              
              <a href="del_student2.php?id=<?php echo $row['student_id']?>">
                <button class="btn bg-danger"><i class="fas fa-trash-alt"></i> ลบ</button>
              </a>
            </td>
        </tr>
      
        <?php
    }
    ?>
    </tbody>
    </table>

    
  <!-- </div> -->
</div>

<?php include_once 'footer.php' ?>
<script>
  $(document).ready( function () {
    $('#student_list').DataTable();
  } );
</script>
</body>
</html>
