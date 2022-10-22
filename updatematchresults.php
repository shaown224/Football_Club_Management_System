<?php
include_once 'dbh.inc.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Matches Results</title>
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
    <form action="updatematchresults.inc.php" method="post">
      Match ID:<input type ="number" name="match_id" placeholder="Match_id"><br>
      Match Date:<input type ="text" name="match_date" placeholder="Date"><br>
      Opponent Team Name:<input type ="text" name="opponent_team_name" placeholder="Opponent"><br>
      Match Vanue:<input type ="text" name="match_venue" placeholder="Venue"><br>
      Match Formate:<input type ="text" name="match_format" placeholder="Formate"><br>
      Match Results:<input type ="text" name="match_result" placeholder="Match Results"><br>
      UIU Goal:<input type ="number" name="uiu_goal" placeholder="uiu goal"><br>
      Opponent Goal:<input type ="number" name="opp_goal" placeholder="opponent goal"><br>
      Tournament Name:<input type ="text" name="tournament_name" placeholder="Tournament name"><br>
      
      
        <div  class="c1"><button type ="submit" name="submit">Update Match Results</button></div>
    </form></div>
  </body>
</html>