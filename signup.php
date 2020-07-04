<?php
require "header.php"
?>
    <main>
        <h1 class='text-center mt-3'>Sign Up</h1>

        <?php

            if (isset($_GET['error'])) {
                if($_GET['error']=="emptyfields"){
                    echo '<p class="container w-25 text-center alert alert-danger" role="alert">Fill in all fields!!</p>';
                }
                else if($_GET['error']=="sqlerror"){
                    echo '<p class="container w-25 text-center alert alert-danger">DataBase Error!!</p>';
                }
                else if($_GET['error']=="wrongpassword"){
                    echo '<p class="container w-25 text-center alert alert-danger">Wrong Password!!</p>';
                }
                else if($_GET['error']=="nouser"){
                    echo '<p class="container w-25 text-center alert alert-danger">No Such User, Please Sign Up!!</p>';
                }
                else if($_GET['error']=="passwordcheck"){
                    echo '<p class="container w-25 text-center alert alert-danger">Password not matching!!</p>';
                }
                else if($_GET['error']=="usertaken"){
                    echo '<p class="container w-25 text-center alert alert-danger">Username Taken, Try another username!!</p>';
                }
            }else if(isset($_GET['signup'])){
                if($_GET['signup']=="success"){
                    echo '<p class="container w-25 text-center alert alert-success">Sign up Successful, Login!</p>';
                }
            }
            
            
        ?>
        <div class='container w-50'>
            <form action="includes/signup.inc.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username:</label>
                    <input class="form-control" type="text" name="uid" placeholder="Enter Username">  
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" placeholder="Enter your Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password:</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" placeholder="Enter your Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password:</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pwd-repeat" placeholder="Confirm Password">
                </div>
                
                <button type="submit" class="btn btn-primary" name="signup-submit">Sign Up</button>
            </form>
        </div>

<?php
require "footer.php"
?>

