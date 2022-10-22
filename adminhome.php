<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Homepage</title>
  </head>
    
    <style>
        .main {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin: 30px;
            
        }
        .tablecontent1{
            display: flex;
            height: auto;
            width: 33%;
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
            width: 33%;
            flex-direction: column;
            color: yellow;
            font-size: 30px;
            background-color: rgba(0,0,0,0.3);
            border: solid black 2px;
            border-radius: 20px;
            

        }
        
        .tablecontent3{
            display: flex;
            height: auto;
            width: 33%;
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
            background-color: rgba(26, 35, 88, 0.856);
            border-radius: 50px;
            margin: 10px;
        }
        
        .fan {
            border: 2px solid black;
            border-radius: 25px;
            text-align: center;
            
            align-items: flex-start;
            background-color: lightgoldenrodyellow;
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
          .not{
            text-align: center;
            width:300px;
            border: 1px solid black;
            background-color:  rgba(26, 35, 88, 0.856);
            border-radius: 50px;
            margin: 10px;

          }
        
    </style>
    <link rel="stylesheet" href="css/style.css">
  <body>
      
      
    
      
    <h1 class = "heading">Admin Panel</h1>

    <div>
    <h1 class ="not"><a href="ad_up.php">Update Info</a></h1>
    <h1 class ="not"><a href="index.php">Log Out</a></h1>
    <div class="formcontentp" id="playerinfo">
    <form   class="f_inner" action="showsingleplayer.php" method="post">
       <div> <input type="text" name="search" placeholder="search by name" style="background-color:rgba(26, 35, 88, 0.856);color:rgb(18, 194, 41)"></div>
       <div style="padding-left:10px;width:100px"><input type ="submit" name="submit" value="Search"  style="background-color:rgba(26, 35, 88, 0.856);color:rgb(18, 194, 41)"></div>
    </form>
    </div>
    
  
    </div>
    
      <div class ="main">
      
        <div class="tablecontent1">
            <h5 class= "info">Player Information</h5>
            <div class="item"><a href="displayplayer.php" style="color:black">Player Table</a></div>
            <div  class="item"><a href="playerinput.php"style="color:black">Insert Player</a></div>
            <div  class="item"><a href="deleteplayer.php"style="color:black">Delete Player Data</a></div>
            <div  class="item"><a href="playerupdate.php"style="color:black">Update Player Data</a></div>

        <br><br>
     </div>
    
        <div class="tablecontent2"> 
            <h5 class="info">Manager Information</h5>
            <div class="item">  <a href="displaymanager.php"style="color:black">Manager Table</a></div>
            <div  class="item">    <a href="managerinput.php"style="color:black">Insert Manager</a></div>
            <div  class="item"><a href="managerupdate.php"style="color:black">Update Manager Data</a></div>
            
        </div>
          
          <div class="tablecontent3"> 
              <h5 class="info">Next Match</h5>
            <div class="item">  <a href="matchdetails.php"style="color:black">Match Details</a></div>
            <div  class="item">    <a href="uiu11.php"style="color:black">UIU Eleven</a></div>
            <div  class="item"><a href="oppo11.php"style="color:black">Opponent Eleven</a></div>
            <div  class="item"><a href="matchresults.php"style="color:black">Match Results</a></div>
            <div  class="item"><a href="updatematchresults.php"style="color:black">Update Match Results</a></div>
            
        </div>
    </div>
      <div class="fan"><a href="displayuser.php"style="color:black"><h3>Fan Information</h3></a></div>
  </body>
</html>
