<?php
include("Database/config.php");

?>

<?php 
include("include/head.php");
?>

        <!-----Login & Reg form---->

        <div class="contract">


            <div class="login">


                <form action="signin.php" method="POST">
                    <h2>Main Admin</h2>

                    <input type="text" name="username_main" placeholder="Input Admin Username "required>
                    <input type="password" name="password_main" placeholder="Enter Your Password" required>
                    <button type="submit" name="main_admin_log"><b>Log In</b></button>
                </form>
            </div>
        </div>

        <!---------footer--->
        <?php 
include("include/foot.php")
?>