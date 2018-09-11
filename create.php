<?php
      if($_POST)
      {
        
        $username=$_POST["username"];
        $password=$_POST["password"];
        $link=mysqli_connect("localhost","root","","employee");
        $sql = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($link,$sql);
        $count = mysqli_num_rows($result);
        if($count == 1)
        {
          echo "Login Successfull";
        }
        else if($count == 0)
        {
          echo "Login Failed";
        }
        mysqli_close($link);
      }
    ?>