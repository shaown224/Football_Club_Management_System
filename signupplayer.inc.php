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
  $sql = "Insert into player(player_id,player_name,player_position,player_age,player_nationality,player_goals,player_assists,player_wages,player_contract,player_value,player_rating, player_dept) 
  values ('$player_id','$player_name','$player_position','$player_age','$player_nationality','$player_goals','$player_assists','$player_wages','$player_contract','$player_value','$player_rating','$player_dept');";
  mysqli_query($conn,$sql);
  header("Location: playerinput.php?signupplayer=success");
?>
