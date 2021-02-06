<?php
include("Database/config.php");

?>

<?php 
include("include/head.php");
?>

        <!-----Login & Reg form---->

        <div class="account">


            <div class="login">


                <form action="signin.php" method="POST">
                    <h2>বিক্রির জন্য লগইন করুন</h2>

                    <input type="text" name="username" placeholder="সরকার প্রদত্ত  আইডি "required>
                    <input type="password" name="password" placeholder="আপনার পাসওয়ার্ড" required>
                    <button type="submit" name="admin_log"><b>প্রবেশ করুন </b></button>
                    <a href="./signin.php">কেনার জন্য লগইন করুন</a>
                </form>
            </div>
        </div>

        <!---------footer--->
        <?php 
include("include/foot.php")
?>