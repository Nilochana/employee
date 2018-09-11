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

      <form action="userdetails.php" method="POST"><br><br>
      <div class="register">
      <h1>User Details</h1>
        <input id="username" type="text" name="username" placeholder="Username">
        <input id="password" name="password" type="password" placeholder="Password">
        <input class="left" type="password" name="cpassword" type="password" placeholder="Confirm The Password">
        <input id="name" type="text" name="name" placeholder="Name">
        <input class="left" id="surname" type="text" name="surname" placeholder="Surname">
        <label for="date"><br>Date Of Birth</label>
        <input id="date" type="date" name="date">
        <br><p>Gender</p>
        <input type="radio" name="gender" value="male" id="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">Female</label>
        <input id="email" type="email" name="email" placeholder="Email Address">
        <input id="address" type="text" name="address" placeholder="Address">
        <div class="check">
          <br><p>Occupation</p>
          <input type="radio" name="type123" value="worker">
          <label>Worker</label>
          <input type="radio" name="type123" value="student">
          <label>Student
          </label>
        </div>
        <div class="select">
         <br><p>Account Type</p>
          <select name="account">
            <option value="normal">Normal</option>
            <option value="student">Student</option>
            <option value="business">Business</option>
          </select>
        </div>

       <p style="float: left"><br>Let us know more of you</p>
        <textarea rows="2"></textarea>
      <div class="button">
        <input type="submit" value="submit">
        <input type="reset" value="Clear">
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

      if($_POST && !empty($_POST['type123']) && !empty($_POST['gender']))
      {
        $user=$_POST["username"];
        $pass=$_POST["password"];
        $cpass=$_POST["cpassword"];
        $nam=$_POST["name"];
        $sname=$_POST["surname"];
        $dob=$_POST["date"];
        $gend=$_POST["gender"];
        $mail=$_POST["email"];
        $adrs=$_POST["address"];
        $type123=$_POST["type123"];
        $acc=$_POST["account"];
        
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

        $sql="INSERT INTO user(usrnm, psw, cpsw, nm, snm, dt, gen, email, addr, typ, account) 
                        values ('$user','$pass','$cpass','$nam','$sname','$dob','$gend','$mail','$adrs','$type123','$acc')";
        $result = mysqli_query($link,$sql);
        
      
        if(!$result)
        {
          echo $result;
        //  echo "ERROR! Please re-check the details entered.";
        }
        else
        {
         echo "Submit";
        }
        mysqli_close($link);
      }
    ?>


    