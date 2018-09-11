<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  <form action="create.php" method="POST">
  <div class="box">
  <h2>Login</h2>
    <div class="inputBox">
      <input type="text" name="username" required value="">
      <label>username</label>
    </div>
    <div class="inputBox">
      <input type="password" name="password" required value="">
      <label>password</label>
    </div>
    <input type="submit" name="sign-in" value="Sign In">
    </div>
  </form>
</body>
</html>