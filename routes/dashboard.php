<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: ../");
    }

    $userdata = $_SESSION['userdata'];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylesheet.css">
    <title>online-voting-system</title>
</head>
<body>

    <style>
        #backbtn{
            padding: 5px;
            border-radius: 5px;
            background-color: #3498db;
            color: white;
            font-size: 15px;
            float:left;
           }

           #logoutbtn{
            padding: 5px;
            border-radius: 5px;
            background-color: #3498db;
            color: white;
            font-size: 15px;
            float:right;
           }
    </style>

           <div id="mainsection">
               <div id="headersection">
               <button id="backbtn">Back</button>
               <button id="logoutbtn">logout</button>
               <h1>online voting system</h1>
               </div>
               <hr>

               <div id="profile">
                    <img src="../uploads/<?php echo $userdata['photo'] ?>" height="200" width="200" alt=""><br><br>
                    <b>Name:</b><br><br>
                    <b>Mobile:</b><br><br>
                    <b>Address:</b><br><br>
                    <b>Status:</b>
               </div>

               <div id="Group"></div>

           </div>

   

   
  
</body>


</html>