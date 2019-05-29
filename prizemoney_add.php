<!DOCTYPE html>
<html lang="en">
<head>
  <title>web premier league</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Premier League</h1>
  <p></p> 
</div>


<nav class="navbar navbar-expand-sm bg-dark navbar-blue">
  <a class="navbar-brand" href="index.php">หน้าหลัก</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="topscore_list.php">ดาวซัลโว</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="prizemoney_list.php">รายได้สโมสร</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="scoretable_list.php">ตารางคะแนน</a>
      </li> 
    </ul>
  </div>  
</nav>
<h4>เพิ่มรายได้สโมสร</h4>    
                <?php
                    if(isset($_GET['submit'])){
                        $data_en = $_GET['data_en'];
                        $data_th = $_GET['data_th'];
                        $sql .= " values (null,'$data_en','$data_th'";   
                        $sql = "insert into datateam ";
                        echo $sql;
                        include 'connectdb.php';
                        if( mysqli_query($conn,$sql)){
                            echo "เพิ่มรายได้ $data_en เรียบร้อยแล้ว<br>";
                        }else{
                            echo "เพิ่มรายได้ $data_en ผิดพลาด<br>";
                        }
                        mysqli_close($conn);
                        echo '<a href="prizemoney_list.php">แสดงรายได้ทั้งหมด</a>';
                    }else{
                ?>
                    <form class="form-horizontal" role="form" name="datateam_add" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <div class="form-group">
                            <label for="data_en" class="col-md-2 col-lg-2 control-label">สโมสร(eng)</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="data_en" id="data_en" class="form-control">
                            </div>    
                        </div>
                        <form class="form-horizontal" role="form" name="datateam_add" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <div class="form-group">
                            <label for="data_th" class="col-md-2 col-lg-2 control-label">สโมสร(th)</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="data_th" id="data_th" class="form-control">
                            </div>    
                        </div>
                        <form class="form-horizontal" role="form" name="datateam_add" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <div class="form-group">
                            <label for="Money_name" class="col-md-2 col-lg-2 control-label">จำนวนเงิน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="Money_name" id="Money_name" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-lg-10">
                                <input type="submit" name="submit" value="ตกลง" class="btn btn-default">
                            </div>    
                        </div>
                    </form>
                <?php
                    }
                ?>
     </body>
</html>                