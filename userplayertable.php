<?php
  include_once 'dbh.inc.php';
  $sql="Select * from player";
  $data=mysqli_query($conn,$sql);
  $total= mysqli_num_rows($data);
  ?>
  <link rel="stylesheet" href="css/style.css">

  
       
    
   

  
  <body>
      
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
  <li><a href="userplayertable.php">SEASON PLAYERS</a></li>
  <li><a href="match_info.php">MATCH INFORMATION</a></li>
  <li><a href="top5.php">SEASON TOPPER</a></li>
    <li><a href="#">ABOUT</a></li>

</ul>
</div>


<div class="clear"></div>

</div>
      
      
      <header class="pth">
            Player Table <br>
        </header>

  

  <div>
  <table class="er">
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
    while($result=mysqli_fetch_assoc($data)){
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
    }

?>
</table>
</div>

    
  </body>
 