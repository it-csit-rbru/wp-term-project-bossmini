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
<div class="col-sm-12 col-md-9 col-lg-9">
<h2>ดาวซัลโวพรีเมียร์ลีก 2018/2019</h2>
         <a href="topscore_add.php" class="btn btn-link">เพิ่มรายชื่อ</a>
          <table class="table table-bordered table-striped">
<thead>
<tr>
          <th>ลำดับ</th>
          <th>รายชื่อนักฟุตบอล</th>
          <th>สโมสร(TH)</th>
          
          <th colspan="2">จำนวนประตู</th>
</tr>                
</thead>
<tbody>      
<?php
            include 'connectdb.php';                        
            $sql =  'SELECT * FROM topscore_detall order by player_id';
            $result = mysqli_query($conn,$sql);
            while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                            echo '<tr>';
                            echo '<td>' . $row['player_id'] . '</td>';
                            echo '<td>' . $row['title_name'] .' '. $row['player_name'] . '</td>';
                            echo '<td>' . $row['player_club'] . '</td>';
                            echo '<td>' . $row['player_score']  . '</td>';
                            echo '<td>';
                            ?>
                                <a href="topscore_edit.php?player_id=<?php echo $row['player_id'];?>" class="btn btn-warning">แก้ไข</a>
                                <a href="JavaScript:if(confirm('ยืนยันการลบ')==true)
                                   {window.location='topscore_delete.php?player_id=<?php echo $row["player_id"];?>'}" class="btn btn-danger">ลบ</a>
                            <?php
                                    echo '</td>';                            
                            echo '</tr>';
                        }
                        mysqli_free_result($result);
                        echo '</table>';
                        mysqli_close($conn);
                    ?>
                            </tbody>
                        </table> 


</body>
</html>                        