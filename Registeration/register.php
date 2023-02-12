<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- <script type="text/javacript" src="main.js"> </script> -->
 
</head>
<body>
  <!-- database connection -->
<?php
include 'database.php';
?>



<!-- databaseconnectionend -->
  <div class="container">
    <div class="main">
      <h1>Registeration </h1>

    </div>
<?php if(isset($_GET['error'])){?>
  <p class="danger"><?php echo $_GET['error'];?> </p>
  <?php
  
}
?>  
<!-- form start -->
     
    <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" name="form1" onsubmit="return  validateForm()">
  
      <table>
        <tr>
        <td><input type="text"  placeholder="Name" class="textbox"   name="fname" id="person"  
          value="<?php 
          
          if(isset($_GET['error'])) 
           {echo $_SESSION['fname'] ;
           } ?>"
        >
        
         
          <span id="name1" class="danger"> </span> </td>
        </tr>
        <tr>
          <td><input type="text" placeholder="Email" class="textbox"  id="email" name="mail" 
          value="<?php 
          
          if(isset($_GET['error'])) 
           {echo $_SESSION['mail'] ;
           } ?>"
        />
        <span id="emailid" class="danger"> </span>
        </td>
        
        </tr>
        <tr>
        <td>  
            <input type="text" placeholder="phone number" class="textbox"  id="phone" name="mob"
            value="<?php 
          
          if(isset($_GET['error'])) 
           {echo $_SESSION['mob'] ;
           } ?>" 
            >
            <span id="phone1" class="danger"> </span>
        </td>
        </tr>
        <tr>
          <td>
            <input type="text" placeholder="User name" class="textbox" id="username" name="personname"
            value="<?php 
          
          if(isset($_GET['error'])) 
           {echo $_SESSION['personname'] ;
           } ?>"
          >
        <span id="username1" class="danger"> </span>
        </td>
        </tr>
        <tr>
        <td>
            <input type="text" placeholder="Password" class="textbox" id="pass" name="word">
            <span id="password1" class="danger"> </span>
        </td>
        </tr>
        <tr>
        <td>    
            <input type="text" placeholder="conform password" class="textbox" name="conform"  id="conform">
            <span id="connf" class="danger"> </span>
        </td>
        </tr>
        <tr>
            <td class="g-recaptcha" data-sitekey="6Lfqz3QkAAAAAFWOt7Qu8lEdRG8-jnYTuYHajUkT"></td>

        </tr>
        <tr>
              <!-- <td><input type="submit" value="Log in" class="button"  name="dbbt"/></td> -->
        <td>
            <button type="submit" class="button" name="dbbt"  >login </button>
        </td>
          
        </tr>
      </table>
  <div class="main">
  <p>If you have already account? <a href="../login/login.php">signup</a></p>
  </div>
</form>
<!-- formend -->
</div>



<!-- javascript validation -->


<!-- <script> function validateForm() {
    // let x = document.forms["myForm"]["fname"].value;
    // let x=document.getElementById(person).value;  
      let x= document.getElementById('person').value;
      let emid= document.getElementById('email').value;
      let phonenumber= document.getElementById('phone').value;
      let user= document.getElementById('username').value;
      let passwo= document.getElementById('pass').value;
      let conformpassword= document.getElementById('conform').value;
      var atposition=emid.indexOf("@");  
      var dotposition=emid.lastIndexOf(".");  

    if (x == "") {
      document.getElementById('name1').innerHTML =" * please enter the value";
      return false;

    }
    else if(!isNaN(x)){
      document.getElementById('name1').innerHTML =" * only character are allowed";
      return false;
    }
    else if (emid =="" || atposition<1 || dotposition<atposition+2 || dotposition+2>=emid.length){
      document.getElementById('emailid').innerHTML =" *Please enter a valid e-mail address ";    
      return false;
      
    }

    else if (phonenumber =="" || phonenumber.length <=9 ||isNaN(phonenumber)) {
      document.getElementById('phone1').innerHTML =" *Phone number must be 10  digit  "; //phone number condition must be check   
      return false;
      
    }
    else if (user ==""){
      document.getElementById('username1').innerHTML =" *Please enter the value";
      return false;
    }
    else if (passwo ==""){
      document.getElementById('password1').innerHTML =" *Please fill the password field";
      return false;
    }
    else if((passwo.length<=5) || (passwo.length >20)){
      document.getElementById('password1').innerHTML =" *Password length must be between 5 and 20 ";
      return false;
    }
    if (passwo != conformpassword){
      document.getElementById('connf').innerHTML =" *Password are not matching";
      return false;
    }

  }
</script> -->
<!-- javascript validation end -->


</body>
</html>