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
  
  $sql = "Update  match_result set match_id='$match_id',match_date='$match_date',opponent_team_name='$opponent_team_name',match_venue='$match_venue',
  match_format='$match_format',match_result = '$match_result',uiu_goal='$uiu_goal', opp_goal='$opp_goal',tournament_name='$tournament_name'
  where match_id ='$match_id';";

  mysqli_query($conn,$sql);
  header("Location: updatematchresults.php?updatematchresults=success");
?>