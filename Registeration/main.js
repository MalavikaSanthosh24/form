function validateForm() {
    // let x = document.forms["myForm"]["fname"].value;
    // let x=document.getElementById(person).value;  
    //   let x= document.getElementById('person').value;
    //   let emid= document.getElementById('email').value;
    //   let phonenumber= document.getElementById('phone').value;
    //   let user= document.getElementById('username').value;
    //   let passwo= document.getElementById('pass').value;
    //   let conformpassword= document.getElementById('conform').value;
    //   var atposition=emid.indexOf("@");  
    //   var dotposition=emid.lastIndexOf(".");  
    //   var alphadigit=0;
    //   var alpha=/[a-zA-Z]/;
    //   var digit=/[0-9]/;
    let x= document.forms["form1"]["fname"].value;
    let emid= document.forms["form1"]["mail"].value;
    let phonenumber= document.forms["form1"]["mob"].value;
    let user= document.forms["form1"]["personname"].value;
    let conformpassword= document.forms["form1"]["conform"].value;
    let passwo= document.forms["form1"]["word"].value;
    var atposition=emid.indexOf("@");  
     var dotposition=emid.lastIndexOf(".")
    

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