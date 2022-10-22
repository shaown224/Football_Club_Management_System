<?php
include_once 'dbh.inc.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upcomming Matches</title>
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
    <form action="matchdetails.inc.php" method="post">
      Match ID:<input type ="number" name="match_id" placeholder="Match_id"><br>
      Match Date:<input type ="text" name="match_date" placeholder="Date"><br>
      Match Time:<input type ="text" name="match_time" placeholder="Time"><br>
      Match Vanue:<input type ="text" name="match_venue" placeholder="Venue"><br>
      League Name:<input type ="text" name="league_name" placeholder="League"><br>
      Match Formate:<input type ="text" name="match_format" placeholder="Formate"><br>
      Opponent Team Name:<input type ="text" name="opponent_team_name" placeholder="Opponent"><br>
        <div  class="c1"><button type ="submit" name="submit">Insert Data</button></div>
    </form></div>
  </body>
</html>