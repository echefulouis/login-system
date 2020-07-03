<?php
require "header.php"
?>
    <main>
        <?php
            if(isset($_SESSION["userId"]))
            {
                echo "<h1> You are login<h1>";
            }else{
                echo "<h1>You are logged out!</h1>";
            }
        ?>
    </main>

<?php
require "footer.php"
?>