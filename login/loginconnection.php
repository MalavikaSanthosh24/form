<?php 
    include "../connection.php";


    if(isset($_POST["login"])){


      $name = $_POST['user'];
      $password =$_POST['password'];
      if($name==""){
        header("location:login.php ? error=username is required");
      }
      elseif($password==""){
        header("Location:login.php ? error=password is required");
      }
      else{

     
      
        $query = "SELECT * FROM register WHERE user= :user AND
      password=:password "; //database
            $text=  $pdodbcon->prepare($query);
            $text->execute(
                    
              array(
                'user' =>$_POST["user"],
                'password' =>$_POST['password']  //formnames
          
          
              )
      
                );
          $count= $text->rowCount();
                    if($count >0){
                      $_SESSION["username"]= $_POST["user"];
                      header("location:../mainpage.php");
                    }
                    else{
                      $message ='<label> username or password is wrong</label>';
      
                    }
                  }


    }?>



