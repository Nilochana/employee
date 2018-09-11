<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<style>

body{
  background: #f5f5f5;
  font-size: 14px;
}
  .register{
    margin: auto;
    padding: 25px;
    padding-bottom: 10px;
    padding-top: 5px;
    width: 400px;
    font-family: sans-serif;
    background: #47D98B;
    box-shadow: 0px 2px 2px 0px #b2b5b4;
    color: #f5f5f5;
  }
  input[type=text],input[type=email], input[type=date]{
    display: block;
    width: 100%;
    height: 30px;
    margin-top: 10px;
    border-style: none;
    border-bottom: 2px solid #FFFF3D;
    outline: 0;
    color: #fff;
    background: #47D98B;
  }
  input[type=password], #name, #surname{
    display: inline;
    width: 45%;
    height: 30px;
    margin-top: 10px;
    border-style: none;
    border-bottom: 2px solid #FFFF3D;
    outline: 0;
    color: #fff;
    background: #47D98B;

  }
  select{
  display: block;
  width: 100%;
  height: 20px;
  border-style: none;
  border-bottom: 2px solid #FFFF3D;
  outline: 0;
  color: #fff;
  background: #47D98B;
}
.check{
  width: 45%;
  float: left;
}
.select{
  width: 45%;
  float: right;
}

  .left{
    margin-left: 30px;
  }
  input[type="date"]::-webkit-inner-spin-button {
display: none;
}
  ::placeholder{
    font-family: sans-serif;
    font-size: 14px;
    color: #fff;
  }
  :-ms-input-placeholder{
    font-family: sans-serif;
    font-size: 14px;
    color: #fff;
  }
  textarea{
    width:100%;
    outline: 0;
    margin-top: -10px;
  }
  input[type=submit]{
    background: #47D98B;
    border-style: none;
    padding: 10px;
    color: #fff;
    font-size: 18px;
    outline: 0;
    width: 40%;
    box-shadow: 0px 0px 1px 1px #f5f5f5;
  }
  input[type=reset]{
    background: #47D98B;
    border-style: none;
    padding: 10px;
    color: #fff;
    font-size: 18px;
    outline: 0;
    width: 40%;
    box-shadow: 0px 0px 1px 1px #f5f5f5;
    margin-left: 20px;
  }
  .button{
    text-align: center;
    margin-top: 10px;
  }

  </style>

      <form action="test.php" method="POST"><br><br>
      <div class="register">
      <h1>User Details</h1>
        <input id="username" type="text" name="username" placeholder="Username">
        <input id="password" name="password" type="password" placeholder="Password"><br>
        <input id="name" type="text" name="name" placeholder="Name">
        
      <div class="button">
        <input type="submit" name="submit" value="submit">
    
      </div>
      </div>
      </form>


<?php
    //  define('db_user','root');
    //  define('db_pswd','');
    //  define('db_host','localhost');
    //  define('db_name','employee');
    //  $dbcon=mysqli_connect(db_host, db_user, db_pswd, db_name);
    //  if(!$dbcon){
    //    die('error connecting to database');
    //  }
    //  echo 'you have connected successfully';

      if($_POST)
      {
        $user=$_POST["username"];
        $pass=$_POST["password"];
        $nam=$_POST["name"];
        
      // echo $user;
      // echo $pass;
      // echo $cpass;
      // echo $nam;
      // echo $sname;
      // echo $dob;
      // echo $mail;
      // echo $adrs;
      // echo $acc;
      // echo $type123;
      // echo $gend;

        $link=mysqli_connect("localhost","root","","employee");

        $sql="INSERT INTO test(usrnm, psw, nm) values ('$user','$pass','$nam')";
        $result = mysqli_query($link,$sql);
        if(!$result)
        {
         echo "ERROR! Please re-check the details entered.";
        }
        else
        {
         echo "Submit.";
        }
        mysqli_close($link);
      }
    ?>


    