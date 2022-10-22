<?php
  include_once 'dbh.inc.php';
  $player_id = $_POST['player_id'];
  $player_name = $_POST['player_name'];
  $player_rating = $_POST['player_rating'];
  $uiu_playing_11_id = $_POST['uiu_playing_11_id'];
  
  $sql = "Insert into opponent_playing_11(player_id, player_name, player_rating, uiu_playing_11_id)
  values ('$player_id','$player_name','$player_rating', '$uiu_playing_11_id');";
  mysqli_query($conn,$sql);
  header("Location: oppo11.php?oppo11=success");