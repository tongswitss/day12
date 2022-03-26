<?php
include_once('connect.php'); 

$sql = "select * from student";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    ?>
    <h4>เพิ่มข้อมูล</h4>
    <table border='1'>
        <tr>
            <th>รหัสนักเรียน</th>
            <th>ชื่อนักเรียน</th>
            <th>เบอร์โทรศัพท์</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
        </tr>
    
    <?php
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['tel']?></td>
            <td>แก้ไข</td>
            <td><a href="d13-06-delete.php?id=<?php echo $row['id']?>">ลบ</a></td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
