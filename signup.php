<?php
require "header.php"
?>
    <main>
        <h1>Sign Up</h1>
        <form action="includes/signup.inc.php" method="post">
            <p>User Name:</p>
            <input type="text" name="uid" placeholder="Enter your Username">
            <br>
            <p>Email:</p>
            <input type="email" name="mail" placeholder="Enter your Email">
            <p>Password:</p>
            <input type="password" name="pwd" placeholder="Enter your Password">
            <br>
            <p>Confirm Password:</p>
            <input type="password" name="pwd-repeat" placeholder="Confirm Password">
            <button type="submit" name="signup-submit">Signup</button>
        </form>
    </main>

<?php
require "footer.php"
?>