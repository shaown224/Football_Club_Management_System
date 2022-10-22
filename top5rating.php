<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
          .formcontentp {
              width: 1000px;
              border-radius: 20px;
              margin-left: 800px;
              color: #ffcc02;
          }
           .f_inner {
              display: flex;
              flex-direction: row;
            
          }
          .pth1 {
          font-size: 20px;
          width: 500px;
          background-color: rgba(26, 35, 88, 0.856) ;
          margin:auto;
          border:#d16015 1px;
          border-radius: 40%;
          color:rgb(18, 194, 41);
      }
        
      </style>
  </head>
  <body >

<div class="nav-bar">
  <div class="logo">
   <a href="userhome.php">
  <img src="images/UIU-Logo-250.png" >
   </a>
</div>
<h2>UIU Football Club</h2>
<div class="menu">
<ul>

  <li><a href="userhome.php">HOME</a></li>
  <li><a href="group_player.php">PLAYER GROUP</a></li>
  <li><a href="top5rating.php">TOP PLAYER</a></li>
    <li><a href="top5goal.php">TOP GOAL</a></li>
    <li><a href="top5assist.php">TOP ASSIST </a></li>
    
</ul>
</div>


<div class="clear"></div>


</div>
<header class="pth1">
    How many player do you want to see? <br>
  </header>
<div class="formcontentp" id="playerinfo">
    <form   class="f_inner" action="top5rating.php" method="post">
       <div> <input type="text" name="search" placeholder="type here" style=" background-color:rgba(26, 35, 88, 0.856);"></div>
       <div style="padding-left:10px;width:100px"><input type ="submit" name="submit" value="Submit"  style="background-color:rgba(26, 35, 88, 0.856);color:rgb(18, 194, 41)"></div>
    </form>
</div>


  </body>
</html>


<?php
  include_once 'dbh.inc.php';
  $shaown=3;
  if (isset($_POST["submit"]))
  {
     $shaown=$_POST["search"];
  }
  $sql="Select  * from player order by player_rating desc";
  $data=mysqli_query($conn,$sql);
  ?>
  <link rel="stylesheet" href="css/style.css">

<body>


    <style>
        
    </style>


  <div class="newdiv">

      <header class="pth">
    PLAYER RATING <br>
  </header>
  <div class="tl1">
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Nationality</th>
      <th>Department</th>
      <th>Age</th>
      <th>Position</th>
      <th>Goals</th>
      <th>Assists</th>
      <th>Rating</th>
    </tr>
    <?php
    $s=0;
    while($s<$shaown){
      $result=mysqli_fetch_assoc($data);
      echo "<tr>
      <td>".$result['player_id']."</td>
      <td>".$result['player_name']."</td>
      <td>".$result['player_nationality']."</td>
      <td>".$result['player_dept']."</td>
      <td>".$result['player_age']."</td>
      <td>".$result['player_position']."</td>
      <td>".$result['player_goals']."</td>
      <td>".$result['player_assists']."</td>
      <td>".$result['player_rating']."</td>
      </tr>";
      $s++;
    }

?>
</table></div>
</div>
    
</body>
        
