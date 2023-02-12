<?php
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script type="text/javascript" src="javascript.js"></script> -->
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>

<!-- phpvalidation -->
   <?php
   include "loginconnection.php";
   ?>

<div class="container">
    <h1>login</h1>
    <?php if(isset($_GET['error'])){?>
  <p class="danger"><?php echo $_GET['error'];?> </p>
  <?php
  
}
  ?>
     <?php
      if(isset($message)){
        echo '<label>'. $message .'</label>';

      }

      ?>
   
 
   
    <form action="#" method="post" name="form" onsubmit="return vali()">
    
        <input  type="text" placeholder="Username" class="textbox" name="user"></br> </br>
        <span id="name1" class="danger"> </span></br>
      
      <input type="password" placeholder="password" class="textbox" name="password" > </br></br>
      <span id="password1" class="danger"> </span></br>
      <button name="login">submit</button>


    </form>
    </div>

</body>
</html>
