<?php
  include_once 'dbh.inc.php';
  $sql="Select * from player";
  $data=mysqli_query($conn,$sql);
  $total= mysqli_num_rows($data);
  ?>
  <link rel="stylesheet" href="css/style.css">

  <style>
    .heading {
            text-align: center;
            border: 1px solid black;
            background-color: rgba(26, 35, 88, 0.856);
            border-radius: 50px;
            margin: 10px;
        }
  </style>

<a href="adminhome.php"><h1 class = "heading">Admin Panel</h1></a>

    
  <header class="pth">
    Player Table <br>
  </header>
  <body>
    
      
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
      <th>Wages</th>
      <th>Contract</th>
      <th>Value</th>
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
      <td>".$result['player_wages']."</td>
      <td>".$result['player_contract']."</td>
      <td>".$result['player_value']."</td>
      </tr>";
    }

?>
</table>
</div>

    
  </body>
 