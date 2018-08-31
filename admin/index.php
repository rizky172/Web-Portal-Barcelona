<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login </title>
  
  
  <link rel='stylesheet prefetch' href='css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/login.css">

  
</head>

<body>
    <div class="wrapper">
    <form class="form-signin" action="login_act.php?&act=1" method="post">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>   
    </form>
  </div>
  
  
</body>
</html>
