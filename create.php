<?php
     /* $name= $email= $username= $password = $phno="";*/
      if($_POST)
      {
        $user=$_POST["username"];
        $pass=$_POST["password"];
        
        $link=mysqli_connect("localhost","root","","employee");
        $sql="INSERT INTO admin(username, password) values ('$user','$pass')";
        $result = mysqli_query($link,$sql);
        if(!$result)
        {
         echo "ERROR! Please re-check the details entered.";
        }
        else
        {
         echo "Sign Up complete.";
        }
        mysqli_close($link);
      }
    ?>