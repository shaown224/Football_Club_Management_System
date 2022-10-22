<?php
include_once 'dbh.inc.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Player Data</title>
    <style>
    .heading {
            text-align: center;
            border: 1px solid black;
            background-color: rgba(26, 35, 88, 0.856);
            border-radius: 50px;
            margin: 10px;
        }
  </style>
    
  </head>
  <link rel="stylesheet" href="css/style.css">
  <body>
  <a href="adminhome.php"><h1 class = "heading">Admin Panel</h1></a>

    <div class="formcontent">
    <form action="playerupdate.inc.php" method="post">
      Player ID:<input type ="text" name="player_id" placeholder="ID"><br>
      Player Name:<input type ="text" name="player_name" placeholder="Name"><br>
      Player Position:<input type ="text" name="player_position" placeholder="Position"><br>
      Player Age:<input type ="number" name="player_age" placeholder="Age"><br>
      Player nationality:<input type ="text" name="player_nationality" placeholder="Country"><br>
      Player goals:<input type ="number" name="player_goals" placeholder="goals"><br>
      Player assists:<input type ="number" name="player_assists" placeholder="assists"><br>
      Player Wages:<input type ="number" name="player_wages" placeholder="WAges($$)"><br>
      Player Contract:<input type ="date" name="player_contract" placeholder="Contract"><br>
      Player Value:<input type ="number" name="player_value" placeholder="Player Value"><br>
      Player Performance:<input type ="number" step="0.01" name="player_rating" placeholder="Rating"><br/>
      Player Department:<input type ="text" name="player_dept" placeholder="Department Name"><br>
      <div  class="c1"><button type ="submit" name="submit">Update Player Data</button></div>
    </form></div>
  </body>
</html>
