<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>
     <header>
         <nav>
             <a href="#">
                 Logo
             </a>
             <ul>
                 <li><a href="index.php">Home</a></li>
                 <li><a href="#">Portfolio</a></li>
                 <li><a href="#">About</a></li>
                 <li><a href="#">Contact</a></li>
             </ul>

             <div>
                 <h1>LOG IN</h1>
                 <form action="includes/login.inc.php" method="post">
                    <p>Email:</p>
                    <input type="text" name="mailuid" placeholder="Enter your Email">
                    <br>
                    <p>Password:</p>
                    <input type="password" name="pwd" placeholder="Enter your Password">
                    <button type="submit" name="login-submit">login</button>
                 </form>
                 <a href="signup.php">Signup</a>
                 <br>
                 <form action="includes/login.inc.php" method="post">
                    <button type="submit" name="logout-submit">logout</button>
                 </form>
             </div>
         </nav>
     </header>

