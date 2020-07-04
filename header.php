<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login System</title>
</head>
<body>
     <header>
             <div class="container">
                 <?php
                    if(isset($_SESSION["userUid"]))
                    {
                        echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                          <a class="navbar-brand" href="#">PHP</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                              <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="https://github.com/echefulouis/login-system">GitHub</a>
                            </li>
                          </ul>
                          <form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="post">
                            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="logout-submit">logout</button>
                          </form>
                        </div>
                      </nav>';
                    }else{
                        echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                          <a class="navbar-brand" href="#">PHP</a>
                          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">GitHub</a>
                            </li>
                          </ul>
                          <form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="post">
                            <input class="form-control mr-sm-2" aria-label="Search" type="text" name="mailuid" placeholder="Enter your Email or Username">
                            <input class="form-control mr-sm-2" aria-label="Search" type="password" name="pwd" placeholder="Enter your Password">
                            <button class="btn btn-success my-2 my-sm-0 mr-2" name="login-submit" type="submit">Login</button>
                          </form>
                          <form class="form-inline my-2 my-lg-0" action="signup.php" method="post">
                            <button class="btn btn-outline-success my-2 my-sm-0" name="Signup" type="submit">Sign Up</button>
                          </form>
                        </div>
                      </nav>';
                    }
                ?>
                 
             </div>

     </header>

