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
<h4>แก้ไขข้อมูลนักฟุตบอล</h4>
                    <?php
                        $player_id = $_REQUEST['player_id'];
                        if(isset($_GET['submit'])){
                            $player_name = $_GET['player_name'];
                            $player_club = $_GET['player_club'];
                            $player_score = $_GET['player_score'];
                            $player_title_id = $_GET['player_title_id'];
                            $sql = "update score set ";
                            $sql .= "player_id='$player_id',player_name='$player_name',player_club='$player_club',player_score='$player_score',player_title_id='$player_title_id' ";
                            $sql .="where player_id='$player_id' ";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "แก้ไขข้อมูลนักฟุตบอล $player_name  เรียบร้อยแล้ว<br>";
                            echo '<a href="topscore_list.php">แสดงรายชื่อนักฟุตบอลทั้งหมด</a>';
                        }else{
                    ?>
                    <form class="form-horizontal" role="form" name="score_edit" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="form-group">
                            <input type="hidden" name="player_id" id="player_id" value="<?php echo "$player_id";?>">
                            <label for="player_title_id" class="col-md-2 col-lg-2 control-label">คำนำหน้าชื่อ</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="player_title_id" id="player_title_id" class="form-control">
                                
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from score where player_id='$player_id'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $fplayer_name = $row2['player_name'];
                                    $fplayer_club = $row2['player_club'];
                                    $fplayer_score = $row2['player_score'];
                                    $fplayer_title_id = $row2['player_title_id'];
                                    $fplayer_id = $row2['fplayer_id'];
                                    $sql =  "SELECT * FROM titlescore order by title_id";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['title_id'].'"';
                                        if($row['title_id']==$fplayer_title_id){
                                            echo ' selected="selected" ';
                                        }
                                        echo ">";
                                        echo $row['title_name'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                        </div>
                        <div class="form-group">
                            <label for="player_name" class="col-md-2 col-lg-2 control-label">ชื่อนักฟุตบอล</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="player_name" id="player_name" class="form-control" 
                                       value="<?php echo $fplayer_name;?>">
                            </div>    
                        </div>  
                        <div class="form-group">
                            <label for="player_club" class="col-md-2 col-lg-2 control-label">ชื่อสโมสร</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="player_club" id="player_club" class="form-control" 
                                       value="<?php echo $fplayer_club;?>">
                            </div>    
                        </div>    
                        <div class="form-group">
                            <label for="player_score" class="col-md-2 col-lg-2 control-label">จำนวนประตู</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="player_score" id="player_score" class="form-control" 
                                       value="<?php echo $fplayer_score;?>"> 
                                       </select>
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