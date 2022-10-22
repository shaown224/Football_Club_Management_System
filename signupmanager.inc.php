<?php
  include_once 'dbh.inc.php';
  $manager_license_no = $_POST['manager_license_no'];
  $manager_name = $_POST['manager_name'];
  $manager_nationality = $_POST['manager_nationality'];
  $manager_age = $_POST['manager_age'];
  $manager_type = $_POST['manager_type'];
  $manager_matches = $_POST['manager_matches'];
  $manager_wins = $_POST['manager_wins'];
  $manager_draws = $_POST['manager_draws'];
  $manager_loses = $_POST['manager_loses'];
  $manager_weekly_salary = $_POST['manager_weekly_salary'];
  $sql = "Insert into manager(manager_license_no,manager_name,manager_nationality,manager_age,manager_type,manager_matches,manager_wins,manager_draws,
  manager_loses,manager_weekly_salary) values ('$manager_license_no','$manager_name','$manager_nationality','$manager_age','$manager_type','$manager_matches','$manager_wins','$manager_draws',
  '$manager_loses','$manager_weekly_salary');";
  mysqli_query($conn,$sql);
  header("Location: managerinput.php?signupmanager=success");
?>
