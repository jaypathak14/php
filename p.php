<?php
$name = $email = $password = "";
$name =$_POST["name"];
$email =$_POST["email"];
$password =$_POST["password"];

if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed";
  echo "<br>".$nameErr;
}
else
{
    echo "<br>".$name;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{    
    $eErr = "       email not corrct";
    echo "<br>".$eErr;
    
}
  else
  {
      echo "<br>".$email;
  }
  echo "password is: ".$password."</br>";
?>

money 
emotional 
aggrasive
liking and disliking

