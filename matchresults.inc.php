<?php
  include_once 'dbh.inc.php';
  $match_id = $_POST['match_id'];
  $match_date = $_POST['match_date'];
  $opponent_team_name = $_POST['opponent_team_name'];
  $match_venue = $_POST['match_venue'];
  $match_format = $_POST['match_format'];
  $match_result = $_POST['match_result'];
  $uiu_goal = $_POST['uiu_goal'];
  $opp_goal = $_POST['opp_goal'];
  $tournament_name = $_POST['tournament_name'];
  
  
  $sql = "Insert into match_result(match_id, match_date, opponent_team_name, match_venue, match_format, match_result,uiu_goal, opp_goal, tournament_name)
  values ('$match_id','$match_date','$opponent_team_name','$match_venue','$match_format','$match_result','$uiu_goal', '$opp_goal', '$tournament_name');";
  mysqli_query($conn,$sql);
  header("Location: matchresults.php?matchresults=success");
?>