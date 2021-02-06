<?php 
include("include/head.php");
?>
        <!------ to add more product--->
        <div class="contract">
      <div class="login">
        <form action="signin.php" method="POST">
          <h2>আমাদের সাথে যোগাযোগ করুন </h2>

          <input
            type="text"
            name="username"
            placeholder="আপনার নাম "
            required
          />
          <input
            type="email"
            name=""
            placeholder="আপনার ইমেইল  "
            required
          />
          <textarea cols="20"rows="5" name="" type="text" placeholder="আপনার বার্তাটি লিখুন "></textarea>
          <button type="submit" name="log"><b> পাঠিয়ে দিন </b></button>
        </form>
      </div>
    </div>
          
 
        

</div>

        <!---------footer--->
        <?php 
include("include/foot.php")
?>