


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Login successfull, welcome to home page <?php  echo $_SESSION["username"];?></h1> -->
<?php
session_start();
if(isset($_SESSION["username"])){
  echo "<h1><center>welcome </center></h1></br>" . $_SESSION["username"] ;
  
}
else{
  header("location:loginmain.php");
}

?>
</br><a href="logout.php">logout</a></br>
    <?php
    include('connection.php');
    $name =$_SESSION["username"];
    $query = "select * from register where user= :name";
    $statement=$pdodbcon->prepare($query);
    
    $data=[':name' => $name];
    $statement->execute($data);
     $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    if($result)
    {
      foreach($result as $row){

      ?>
      
       <table>
        <h4>Your details are given below </h4>
       <tr><td> <p>Name :<?php echo $row['name'];?></p></td></tr>
        <tr><td><p>Emailild:<?php echo $row['emailid'];?></p></td></tr>
        <tr><td><p>Phone Number<?php echo $row['phone'];?></p></td></tr>
        <tr><td><p>User<?php echo $row['user'];?></p></td></tr>
        <tr><td><p>Password<?php echo $row['password'];?></p></tr></td>
       </table>
      
     
  
       
        <?php
        
         
         }  
    }
     
     
      ?>
</body>
</html>