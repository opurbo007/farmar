
 <!-- for footer  -->
 <footer class="footer">
      <div class="policy clearfix">
        <ul>
          <li><a href="terms.php">শর্তাবলী </a></li>
          <li><a href="signin.php"> একাউন্ট </a></li>
          <li><a href="about.php">আমাদের সম্পর্কে জানুন </a></li>
          <li><a href="contract.php">যোগাযোগ করুন </a></li>
        </ul>
      </div>
      <div class="foot">
        <hr />
        <span class="copy">
          All copyright reserved to &copy;আমার ফসল - 2021
        </span>
      </div>
    </footer>
  </body>
  <script>
    const navBar = document.getElementById("navbar");
    const navBtn = document.getElementById("nav-btn");
    const navClose = document.getElementById("nav-close");

    navBtn.addEventListener("click", () => {
      navbar.classList.add("showNav");
    });

    navClose.addEventListener("click", () => {
      navbar.classList.remove("showNav");
    });
  </script>
</html>
