<?php
  include_once 'dbh.inc.php';
  $player_id = $_POST['player_id'];
  $player_name = $_POST['player_name'];
  $player_rating = $_POST['player_rating'];
  
  $sql = "Insert into uiu_playing_11(player_id, player_name, player_rating)
  values ('$player_id','$player_name','$player_rating');";
  mysqli_query($conn,$sql);
  header("Location: uiu11.php?uiu11=success");
?>
