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
  <li><a href="match_info.php">UPCOMING MATCHES</a></li>
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
    Match Result <br>
  </header>
    
    <style>
        table,tr,th,td{
            border: 1px solid;
            border-color: black;
            width :30px;
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
	$sth = $con->prepare("SELECT * FROM `match_result` WHERE match_date like '%$str%' and match_result !='not played'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
                <td>Match Number</td>
				<td><?php echo $row->match_id; ?></td>
				
			</tr>
            <tr>
				<td>Opponent Team</td>
				<td><?php echo $row->opponent_team_name;?></td>
			</tr>
            <tr>
				<td>Match Format</td>
				<td><?php echo $row->match_format;?></td>
			</tr>
            <tr>
				<td>Tournament Name</td>
				<td><?php echo $row->tournament_name;?></td>
			</tr>
            <tr>
				<td>Venue</td>
				<td><?php echo $row->match_venue;?></td>
			</tr>
            <tr>
				<td>Match date</td>
				<td><?php echo $row->match_date;?></td>
			</tr>
            <tr>
				<td>Match Result</td>
				<td><?php echo $row->match_result;?></td>
			</tr>
            

		</table>
<?php 
	}
		
		
		else{
			echo 'Name Does not exist';
		}

}

?>