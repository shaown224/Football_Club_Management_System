<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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

  </body>
</html>


<?php
  include_once 'dbh.inc.php';
  $sql="SELECT COUNT(*) As 'count',player_position FROM `player` GROUP BY player_position";
  $GK="Select  * from player where player_position ='GK'";
  $ST="Select  * from player where player_position ='ST' or player_position ='RW' or player_position ='LW'";
  $MF="Select  * from player where  player_position ='CM' or player_position ='CDM' or player_position ='LM' or player_position ='RM'";
  $DF="Select  * from player where player_position ='LB' or player_position ='CB' or player_position ='RB'" ;
  $data=mysqli_query($conn,$sql);
  $data1=mysqli_query($conn,$GK);
  $data2=mysqli_query($conn,$ST);
  $data3=mysqli_query($conn,$MF);
  $data4=mysqli_query($conn,$DF);
  ?>

  
 <header class="pth">
    Season total players by position <br>
  </header>
  <table>
    <tr>
     
      <th>position_name</th>
      <th >total player</th>
    
    </tr>
    <?php
    $s=0;
    while($result=mysqli_fetch_assoc($data)){
      
      echo "<tr>
      <td>".$result['player_position']."</td>
      <td>".$result['count']."</td>
     
      </tr>";
      $s++;
    }
    ?>
    </table>
    <header class="pth">
    STRIKERS<br>
  </header>
  <div class="tl1">
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Nationality</th>
      <th>Age</th>
      <th>Position</th>
      <th>Goals</th>
      <th>Assists</th>
      <th>Rating</th>
    </tr>
    <?php
    $s=0;
    while($result = mysqli_fetch_assoc($data2)){
      echo "<tr>
      <td>".$result['player_id']."</td>
      <td>".$result['player_name']."</td>
      <td>".$result['player_nationality']."</td>
      <td>".$result['player_age']."</td>
      <td>".$result['player_position']."</td>
      <td>".$result['player_goals']."</td>
      <td>".$result['player_assists']."</td>
      <td>".$result['player_rating']."</td>
      </tr>";
      $s++;
    }
    ?>
    </table>

    <header class="pth">
    MID FIELDERS <br>
  </header>
  <div class="tl1">
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Nationality</th>
      <th>Age</th>
      <th>Position</th>
      <th>Goals</th>
      <th>Assists</th>
      <th>Rating</th>
    </tr>
    <?php
    $s=0;
    while($result = mysqli_fetch_assoc($data3)){
      echo "<tr>
      <td>".$result['player_id']."</td>
      <td>".$result['player_name']."</td>
      <td>".$result['player_nationality']."</td>
      <td>".$result['player_age']."</td>
      <td>".$result['player_position']."</td>
      <td>".$result['player_goals']."</td>
      <td>".$result['player_assists']."</td>
      <td>".$result['player_rating']."</td>
      </tr>";
      $s++;
    }
    ?>
    </table>

    <header class="pth">
    DEFENDERS<br>
  </header>
  <div class="tl1">
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Nationality</th>
      <th>Age</th>
      <th>Position</th>
      <th>Goals</th>
      <th>Assists</th>
      <th>Rating</th>
    </tr>
    <?php
    $s=0;
    while($result = mysqli_fetch_assoc($data4)){
      echo "<tr>
      <td>".$result['player_id']."</td>
      <td>".$result['player_name']."</td>
      <td>".$result['player_nationality']."</td>
      <td>".$result['player_age']."</td>
      <td>".$result['player_position']."</td>
      <td>".$result['player_goals']."</td>
      <td>".$result['player_assists']."</td>
      <td>".$result['player_rating']."</td>
      </tr>";
      $s++;
    }
    ?>
    </table>











 <header class="pth">
    GOAL KEEPER <br>
  </header>
  <div class="tl1">
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Nationality</th>
      <th>Age</th>
      <th>Position</th>
      <th>Goals</th>
      <th>Assists</th>
      <th>Rating</th>
    </tr>
    <?php
    $s=0;
    while($result = mysqli_fetch_assoc($data1)){
      echo "<tr>
      <td>".$result['player_id']."</td>
      <td>".$result['player_name']."</td>
      <td>".$result['player_nationality']."</td>
      <td>".$result['player_age']."</td>
      <td>".$result['player_position']."</td>
      <td>".$result['player_goals']."</td>
      <td>".$result['player_assists']."</td>
      <td>".$result['player_rating']."</td>
      </tr>";
      $s++;
    }
    ?>
    </table>
      

