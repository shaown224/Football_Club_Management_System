
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body >

<div class="nav-bar">
  <div class="logo">
   <a href="userhome.php">
  <img src="images/UIU-Logo-250.png" >
   </a>
</div>
<h2>UIU Football Club</h2>
<div class="menu">
<ul>

  <li><a href="userhome.php">HOME</a></li>
  <li><a href="userplayertable.php">SEASON PLAYERS</a></li>
  <li><a href="up_match.php">MATCH INFORMATION</a></li>
  <li><a href="top5.php">SEASON TOPPER</a></li>
    <li><a href="#">ABOUT</a></li>

</ul>
</div>


<div class="clear"></div>
</div>


  </body>
</html>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
    <header class="pth">
    Player Information <br>
  </header>
    
    <style>
        table,tr,th,td{
		      	border: 1px solid;
            border-color: black;
            width :50px;
            height: 50px;
			border-radius: 20px;
        }
    </style>
  <link rel="stylesheet" href="css/style.css">
  <body>
  </body>
</html>


<?php

$con = new PDO("mysql:host=localhost;dbname=football_club",'root','');
if (isset($_POST["submit"]))
{
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * 
                        FROM player
                        WHERE player_name IN(
                                                SELECT player_name 
                                                FROM player
                                                WHERE player_name like '%$str%'
                                            )
                                            OR
                                            player_id IN
                                            (
                                                SELECT player_id
                                                FROM player
                                                WHERE player_id like '%$str%'
                                            )
                                          
                                          ");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
    <tr>
                <td>Player ID</td>
				<td><?php echo $row->player_id; ?></td>
				
			</tr>
			<tr>
                <td>Player Name</td>
				<td><?php echo $row->player_name; ?></td>
				
			</tr>
            <tr>
				<td>Player Position</td>
				<td><?php echo $row->player_position;?></td>
			</tr>
            <tr>
				<td>Player Age</td>
				<td><?php echo $row->player_age;?></td>
			</tr>
            <tr>
				<td>Player Nationality</td>
				<td><?php echo $row->player_nationality;?></td>
			</tr>
            <tr>
				<td>Player Goal</td>
				<td><?php echo $row->player_goals;?></td>
			</tr>
            <tr>
				<td>Player Asisst</td>
				<td><?php echo $row->player_assists;?></td>
			</tr>
            <tr>
				<td>Player Rating</td>
				<td><?php echo $row->player_rating;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}

}

?>