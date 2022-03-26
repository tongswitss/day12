<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <a class="navbar-brand" href="index.php">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <!-- <li class="nav-item">
        <a class="nav-link" href="page1.php">หน้าที่ 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="page2.php">หน้าที่ 2</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">นักเรียน</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="add_student.php">เพิ่มข้อมูล</a>
          <a class="dropdown-item" href="show3.php">แสดงข้อมูล</a>
          <a class="dropdown-item" href="#">สรุปจำนวน</a>
          <a class="dropdown-item" href="#">รายงาน</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">นักเรียนชุดที่ 2</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="add_student2.php">เพิ่มข้อมูล</a>
          <a class="dropdown-item" href="show2.php">แสดงข้อมูล</a>
          <a class="dropdown-item" href="select_std.php">เลือกนักเรียน</a>
          <a class="dropdown-item" href="validate.php">form validate</a>
          <a class="dropdown-item" href="validate2.php">form validate2</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">ครู</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="add_teacher.php">เพิ่มข้อมูล</a>
          <a class="dropdown-item" href="showteacher.php">แสดงข้อมูล</a>
        </div>
      </li>
   
      <!-- <li class="nav-item">
        <a class="nav-link" href="page3.php">หน้าที่ 3</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="page4.php">หน้าที่ 4</a>
      </li>    -->
    </ul>
  </div>  
</nav>