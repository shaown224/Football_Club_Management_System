<?php
  include_once 'dbh.inc.php';
  $sql="Select * from users";
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
  <div class="tl1"><table>
    <tr>
      <th>User ID</th>
      <th>Name</th>
      <th>Username</th>
      <th>Password</th>
      <th>E-mail</th>
    </tr>
    <?php
    while($result=mysqli_fetch_assoc($data)){
      echo "<tr>
      <td>".$result['user_id']."</td>
      <td>".$result['user_fullname']."</td>
      <td>".$result['user_username']."</td>
      <td>".$result['user_password']."</td>
      <td>".$result['user_email']."</td>
      </tr>";
    }

?>
</table></div>
