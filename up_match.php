<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
      
      <style>

        table,tr,th,td{
            text-align: center;
            margin-left:23%;
            width :1000px;
            height: 50px;
            background-color: rgba(0,0,0,0.3);
            border: solid black 2px;
            border-radius: 20px;
        }
          .formcontentp {
              width: 800px;
              border-radius: 20px;
              margin-left: 1500px;
              color: #ffcc02;
          }
           .f_inner {
              display: flex;
              flex-direction: row;
            
          }
          .a{
              width: 350px;
              height: 50px;
              padding-top:1%;
              font-size: 20px;
              background-color: rgba(26, 35, 88, 0.856); 
              margin:auto;
              border:rgba(26, 35, 88, 0.856) 1px;
              border-radius: 20%
              color:rgb(255, 255, 255);
              border: solid black 2px;
              border-radius: 20px;
            }
       
        
      </style>
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
  <li><a href="match_info.php">MATCH INFORMATION</a></li>
  <li><a href="top5.php">SEASON TOPPER</a></li>
    <li><a href="#">ABOUT</a></li>

</ul>
</div>
<div class="clear"></div>
<div class="formcontentp" id="playerinfo">
    <form   class="f_inner" action="shownextmatch.php" method="post">
       <div> <input type="text" name="search" placeholder="search by date" style="background-color:rgba(26, 35, 88, 0.856);color:rgb(18, 194, 41)"></div>
       <div style="padding-left:10px;width:100px"><input type ="submit" name="submit" value="Search"  style="background-color:rgba(26, 35, 88, 0.856);color:rgb(18, 194, 41)"></div>
    </form>
</div>
</div>

<header class="pth">
Next Match <br>
</header>


  </body>
</html>

<?php

  $con = new PDO("mysql:host=localhost;dbname=football_club",'root','');
	$sth = $con->prepare("Select  * from match_details order by match_date asc");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();
  $row=$sth->fetch()
  

  ?>
   <header class="a" >
  UIU FC &nbsp; &nbsp; vs &nbsp; &nbsp; <?php echo $row->opponent_team_name;?> <br>
  </header>

		<table>
			<tr>
                <td>Match Number:</td>
				<td><?php echo $row->match_id; ?></td>
				
			</tr>
            <tr>
				<td>Match Format:</td>
				<td><?php echo $row->match_format;?></td>
			</tr>
            <tr>
				<td>Tournament Name:</td>
				<td><?php echo $row->league_name;?></td>
			</tr>
            <tr>
				<td>Venue:</td>
				<td><?php echo $row->match_venue;?></td>
			</tr>
            <tr>
				<td>Match time:</td>
				<td><?php echo $row->match_time;?></td>
			</tr>
            <tr>
				<td>Match date:</td>
				<td><?php echo $row->match_date;?></td>
			</tr>

		</table>
    <header class="a" >

    <a href="squad_info.php"> See Playing 11 </a>
   
    </header>

<?php 