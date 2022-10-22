<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
HOME|OFFICIAL SITE|FOOTBALL.FC
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
      
      <style>
            table,tr,th,td{
            text-align: center;
            width :700px;
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
          .main {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin: 20px;
            margin-right:400px;
            
        }
        .tablecontent1{
            display: flex;
            height: auto;
            width: 60%;
            flex-direction: column;
            color: yellow;
            font-size: 30px;
            background-color: rgba(0,0,0,0.3);
            border: solid black 2px;
            border-radius: 20px;
            

        }
        
        .tablecontent2{
            display: flex;
            height: auto;
            margin-left:350px;
            width: 60%;
            flex-direction: column;
            color: yellow;
            font-size: 30px;
            background-color: rgba(0,0,0,0.3);
            border: solid black 2px;
            border-radius: 20px;
            

        }
        
        .item{
            padding: 30px;
            border: 2px solid black;
            border-radius: 25px;
            text-align: center;
            
            align-items: flex-start;
            background-color: lightgoldenrodyellow;
        }
        .info {
            color: white;
            font-size: 30px;
            text-align: center;
        }
        .heading {
            text-align: center;
            border: 1px solid black;
            background-color: orange;
            border-radius: 50px;
            margin: 10px;
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
  <li><a href="up_match.php">MATCH INFORMATION</a></li>
  <li><a href="top5.php">SEASON TOPPER</a></li>
    <li><a href="#">ABOUT</a></li>

</ul>
</div>


<div class="clear"></div>


  </body>
</html>

<?php

    $con = new PDO("mysql:host=localhost;dbname=football_club",'root','');
	$sth = $con->prepare("Select  * from match_details order by match_date asc");
    
	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

    $row=$sth->fetch();

  ?>
  


<?php
  include_once 'dbh.inc.php';
  $uiu="SELECT uiu_playing_11.player_name,uiu_playing_11.player_rating 
        FROM opponent_playing_11
        INNER JOIN uiu_playing_11
        ON opponent_playing_11.uiu_playing_11_id = uiu_playing_11.player_id";


  $opp=" SELECT opponent_playing_11.player_name,opponent_playing_11.player_rating 
        FROM opponent_playing_11
        INNER JOIN uiu_playing_11
        ON opponent_playing_11.uiu_playing_11_id = uiu_playing_11.player_id";


  $data=mysqli_query($conn,$uiu);
  $data1=mysqli_query($conn,$opp);
  
  ?>

<div class ="main">
      
      <div class="tablecontent1">
          <h5 class= "info">UIU FC</h5>

            <table>
                <tr>
                
                <th>player_name</th>
                <th >player_rating</th>
                
                </tr>
                <?php
                $s=0;
                while($result=mysqli_fetch_assoc($data)){
                
                echo "<tr>
                <td>".$result['player_name']."</td>
                <td>".$result['player_rating']."</td>
                
                </tr>";
                $s++;
                }
                ?>
           </table>
   

        
         
      <br><br>
      </div>

    
      <div class="tablecontent2"> 
          <h5 class="info"> <?php echo $row->opponent_team_name;?></h5>
          
            <table>
                <tr>
                
                <th>player_name</th>
                <th >player_rating</th>
                
                </tr>
                <?php
                $s=0;
                while($result=mysqli_fetch_assoc($data1)){
                
                echo "<tr>
                <td>".$result['player_name']."</td>
                <td>".$result['player_rating']."</td>
                
                </tr>";
                $s++;
                }
                ?>
                </table>
                    
          
      </div>
    
  </div>

   
