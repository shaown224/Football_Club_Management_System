
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Homepage</title>
  </head>
    
    <style>
      
      .pth2 {
        font-size: 50px;
        background-color: rgba(26, 35, 88, 0.856) ;
        margin:auto;
        border:#d16015 1px;
        border-radius: 40%;
        color:rgb(255, 255, 255);
        }

        .heading {
            text-align: center;
            border: 1px solid black;
            background-color: rgba(26, 35, 88, 0.856);
            border-radius: 50px;
            margin: 10px;
        }
        
    </style>
</html>



<?php
  include_once 'dbh.inc.php';
  $sql="Select *
  from match_result
   where match_result = 'not played'
   order by match_id asc";
  $data=mysqli_query($conn,$sql);
  $total= mysqli_num_rows($data);
  ?>
  <link rel="stylesheet" href="css/style.css">
  <a href="adminhome.php"><h1 class = "heading">Admin Panel</h1></a>

      <header class="pth2">
            Match Result Table <br>
        </header>

  

  <div>
  <table class="er">
    <tr>
      <th>match_id</th>
      <th>match_date</th>
      <th>opponent_team_name</th>
      <th>match_venue</th>
      <th>macth_format</th>
      <th>match_result</th>
    </tr>
    <?php
    while($result=mysqli_fetch_assoc($data)){
      echo "<tr>
      <td>".$result['match_id']."</td>
      <td>".$result['match_date']."</td>
      <td>".$result['opponent_team_name']."</td>
      <td>".$result['match_venue']."</td>
      <td>".$result['match_format']."</td>
      <td>".$result['match_result']."</td>
      </tr>";
    }

?>
</table>
</div>

 