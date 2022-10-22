<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
HOME | UIU FC
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
      
      <style>
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
  <li><a href="About.php">ABOUT</a></li>
  <li><a href="userlogin.php">LOG OUT</a></li>

</ul>
</div>


<div class="clear"></div>

</div>

<div class="formcontentp" id="playerinfo">
    <form   class="f_inner" action="showsingleplayer.php" method="post">
       <div> <input type="text" name="search" placeholder="search by name or id" style="background-color:rgba(26, 35, 88, 0.856);color:rgb(18, 194, 41)"></div>
       <div style="padding-left:10px;width:100px"><input type ="submit" name="submit" value="Search"  style="background-color:rgba(26, 35, 88, 0.856);color:rgb(18, 194, 41)"></div>
    </form>
</div>

<div class="wrapper">
  <h1>Welcome To UIU Football Club</h1>
</div>
      
      

  </body>
</html>

