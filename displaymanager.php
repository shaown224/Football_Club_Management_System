<?php
  include_once 'dbh.inc.php';
  $sql="Select * from manager";
  $data=mysqli_query($conn,$sql);
  $total= mysqli_num_rows($data);
  ?>
    <link rel="stylesheet" href="css/style.css">
    <style>
    .heading {
            text-align: center;
            border: 1px solid black;
            background-color: rgba(26, 35, 88, 0.856);
            border-radius: 50px;
            margin: 10px;
        }
  </style>

<a href="adminhome.php"><h1 class = "heading">Admin Panel</h1></a>
  <header>
    Manager Table <br>
  </header>
    <div class="tl1"><table>
    <tr>
      <th>License No.</th>
      <th>Name</th>
      <th>Nationality</th>
      <th>Age</th>
      <th>Type</th>
      <th>Matches</th>
      <th>Wins</th>
      <th>Draws</th>
      <th>Loses</th>
      <th>Weekly Salary</th>
    </tr>
    <?php
    while($result=mysqli_fetch_assoc($data)){
      echo "<tr>
      <td>".$result['manager_license_no']."</td>
      <td>".$result['manager_name']."</td>
      <td>".$result['manager_nationality']."</td>
      <td>".$result['manager_age']."</td>
      <td>".$result['manager_type']."</td>
      <td>".$result['manager_matches']."</td>
      <td>".$result['manager_wins']."</td>
      <td>".$result['manager_draws']."</td>
      <td>".$result['manager_loses']."</td>
      <td>".$result['manager_weekly_salary']."</td>
      </tr>";
    }

?>
</table></div>
