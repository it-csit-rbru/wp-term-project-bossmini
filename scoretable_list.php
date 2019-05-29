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
      <h2>ตารางคะแนนพรีเมียร์ลีก 2018/2019</h2>
         <a href="scoretable_add.php" class="btn btn-link">เพิ่มสโมสร</a>
          <table class="table table-bordered table-striped">
<thead>
<tr>
          <th>อันดับ</th>
          <th>สโมสร(ENG)</th>
          <th>สโมสร(TH)</th>
          
          <th>แข่ง</th>
          <th>ชนะ</th>
          <th>เสมอ</th>
          <th>แพ้</th>
          <th>ลูกได้</th>
          <th>ลูกเสีย</th>
          <th>รวมลูก ได้/เสีย</th>
          <th colspan="2">คะแนน</th>
</tr>                
</thead>
<tbody>      
<?php
            include 'connectdb.php';                        
            $sql =  'SELECT * FROM datascoretable_detall_detall order by data_id';
            $result = mysqli_query($conn,$sql);
            while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                            echo '<tr>';
                            echo '<td>' . $row['data_id'] . '</td>';
                            echo '<td>' . $row['data_en'] . '</td>';
                            echo '<td>' . $row['data_th'] . '</td>';
                            echo '<td>' . $row['table_match']  . '</td>';
                            echo '<td>' . $row['table_win']  . '</td>';
                            echo '<td>' . $row['table_draw']  . '</td>';
                            echo '<td>' . $row['table_lose']  . '</td>';
                            echo '<td>' . $row['table_f']  . '</td>';
                            echo '<td>' . $row['table_a']  . '</td>';
                            echo '<td>' . $row['table_d']  . '</td>';
                            echo '<td>' . $row['table_p']  . '</td>';
                            echo '<td>';
                            ?>
                                <a href="scoretable_edit.php?data_id=<?php echo $row['data_id'];?>" class="btn btn-warning">แก้ไข</a>
                                <a href="JavaScript:if(confirm('ยืนยันการลบ')==true)
                                   {window.location='scoretable_delete.php?data_id=<?php echo $row["data_id"];?>'}" class="btn btn-danger">ลบ</a>
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