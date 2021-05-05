<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CounterApp - Login </title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/kissa.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">CounterApp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      
    
  </ul>

  </div>
  <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" id="back" class="btn btn-secondary" onClick="location.href='register.php'">Register</button>
      </div>
</nav>

</script>
<div class="jumbotron">
    <h1> Login to CounterApp </h1>
    </div>

    <div class="container">

    <form action="check_login.php" method="post">
    <div class="form-group">
    
    <label for="username"> Username</label>
    <input class="form-control" type="text" name="username">

    <label for="passwd"> Password </label>
    <input class="form-control" type="password" name="passwd">

    </div>

    <input type="submit" class="btn btn-primary" value="Login" >

    
    </form>

<script src=".js/common.js"></script>
<script src=".js/jquery.min.js"></script>
<script src=".js/bootstrap.min.css"></script>
</body>
</html>