<?php
  include_once 'dbh.inc.php';
  $match_id = $_POST['match_id'];
  $match_date = $_POST['match_date'];
  $match_time = $_POST['match_time'];
  $match_venue = $_POST['match_venue'];
  $league_name = $_POST['league_name'];
  $match_format = $_POST['match_format'];
  $opponent_team_name = $_POST['opponent_team_name'];
  $sql = "Insert into match_details(match_id,match_date,match_time,match_venue,league_name,match_format,opponent_team_name)
  values ('$match_id','$match_date','$match_time','$match_venue','$league_name','$match_format','$opponent_team_name');";
  mysqli_query($conn,$sql);
  header("Location: matchdetails.php?matchdetails=success");
?>
