<?php
include("Database/config.php");

?>

<?php
include("include/head.php");
?>

<div>
      <h2 class="name">সকল পণ্য </h2>
  </div>
  
  <?php
  
  $res = mysqli_query($db, "SELECT *from product");
  while ($row = mysqli_fetch_array($res)) {
  
  ?>
      <div class="row-sub clearfix">
  
          <div class="write-2">
              <a href="./product.php?id=<?php echo $row["Product_ID"];?>">
                  <img src="<?php echo $row["Product_Image"];?>" >
                  <h2><?php echo $row["Product_NAME"];?></h2>
                  <p>প্রতি কেজি মূল্য : ৳ <?php echo $row["Product_Price"];?></p>
                  <p>পরিমাণ : <?php echo $row["product-qty"];?> কেজি  </p>
              </a>
         
              <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
          </div>
  </div>
  <?php
  }
  ?>
  
  
  
   <div class="nxt clearfix">
  
       <ul>
          <li><a href="product.php">১ </a></li>
          <li><a href="more.php">২</a></li>
          <li><a href="more.php">৩ </a></li>
          <li><a href="more.php">&#10146;</a></li>
      </ul>
   </div>
  


 
<!---------footer--->
<?php
include("include/foot.php")
?>