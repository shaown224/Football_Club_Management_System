<?php
include_once 'dbh.inc.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Opponent Eleven</title>
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
    <form action="oppo11.inc.php" method="post">
      Player ID:<input type ="number" name="player_id" placeholder="player id"><br>
      Player Name:<input type ="text" name="player_name" placeholder="player name"><br>
      Player Rating:<input type ="number" step= "0.01" name="player_rating" placeholder="rating"><br>
      UIU 11 ID:<input type ="number" name="uiu_playing_11_id" placeholder="UIU 11 ID"><br>
        <div  class="c1"><button type ="submit" name="submit">Insert Data</button></div>
    </form></div>
  </body>
</html>