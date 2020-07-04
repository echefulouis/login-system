<?php
require "header.php"
?>
    <main>
        <?php
            if(isset($_SESSION["userUid"]))
            {
                echo '<div class="alert alert-success container w-25 mt-5" role="alert">
                You are Logged in!!
              </div>';
            }else{
                echo '<div class="alert alert-danger container w-25 mt-5" role="alert">
                You are Logged Out!!
              </div>';
            }
        ?>
    </main>

<?php
require "footer.php"
?>
