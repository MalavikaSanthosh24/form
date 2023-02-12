function vali(){
  var x=document.forms["form"]["user"].value;
  // let passwo= document.getElementById('password').value;
  let passwo= document.forms["form"]["password"].value;

  if(x==null || x=="" )
  {
      document.getElementById('name1').innerHTML =" * please enter the value";
      return false;
  }

  else if(!isNaN(x)){
      document.getElementById('name1').innerHTML =" * only character are allowed";
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
}

