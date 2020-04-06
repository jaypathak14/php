<html>
    <body>
<?php 
$name=$email=$password=$username="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $username=$_POST["username"];

}
?>
        <form method="post" action="">
            Name : <input type="text" name="name" required><br>
            Email:<input type="email" name="email" required><br>
            Username:<input type="text" name="username" required><br>
            Password: <input type="password" name="password" required><br>
            <input type="submit" name="submit" value="submit">

</form>
<?php 
echo "name is: ".$name."</br>";
echo "email is: ".$email."</br>";
echo "password is: ".$password."</br>";
echo "username is: ".$username."</br>";


?>
</body>
</html>