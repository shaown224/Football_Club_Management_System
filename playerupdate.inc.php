<?php
  include_once 'dbh.inc.php';
  $player_id = $_POST['player_id'];
  $player_name = $_POST['player_name'];
  $player_position = $_POST['player_position'];
  $player_age = $_POST['player_age'];
  $player_nationality = $_POST['player_nationality'];
  $player_goals = $_POST['player_goals'];
  $player_assists = $_POST['player_assists'];
  $player_wages = $_POST['player_wages'];
  $player_contract = $_POST['player_contract'];
  $player_value = $_POST['player_value'];
  $player_rating = $_POST['player_rating'];
  $player_dept = $_POST['player_dept'];

  $sql = "Update player set player_name='$player_name',player_position='$player_position',player_age='$player_age',player_nationality='$player_nationality',
  player_goals='$player_goals',player_assists='$player_assists', player_wages='$player_wages',
  player_contract='$player_contract',player_value='$player_value',player_rating='$player_rating', player_dept='$player_dept' where player_id='$player_id';";
  mysqli_query($conn,$sql);
  header("Location: playerupdate.php?signupplayer=success");
?>
