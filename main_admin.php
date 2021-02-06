<?php
include("Database/config.php");

?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Cloth Store" />
    <title>আমার ফসল || আমার দেশ </title>
    <link rel="stylesheet" href="./s.css" />
    <link rel="stylesheet" href="./styletwo.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Atma:wght@400;600&family=Galada&display=swap"
      rel="stylesheet"
    />
    <!-- font-family: 'Atma', cursive; -->
    <!-- font-family: 'Galada', cursive; -->
  </head>

  <body>
    <!-- navbar  -->
    <span class="nav-btn" id="nav-btn">
      <i class="fas fa-bars"></i>
    </span>
    <nav class="navbar" id="navbar">
      <div class="nav-header">
        <span class="nav-close" id="nav-close">
          <i class="fas fa-times"></i>
        </span>
      </div>
      <ul class="nav-items">
      <li><a href="#" class="nav-link2"><i class="fas fa-user"></i></a></li>
        <li><a href="./index.php" class="nav-link2">Home </a></li>
        <li><a href="./main_admin.php" class="nav-link2">DashBoard </a></li>
      
        <!-- <li><a href="./about.php" class="nav-link">আমাদের সর্ম্পকে </a></li>
        <li><a href="./contract.php" class="nav-link">যোগাযোগ করুন </a></li>
        <li>
          <a
            class="nav-link cart-item-count"
            href="./Cart.php"
            data-pure-items-count
            > ক্রেতা ঝুড়ি <i class="fa fa-shopping-cart"></i
          ></a>
        </li> -->
      </ul>
    </nav>

<div class="main-admin">
<div>
      <h2 class="name2">Admin DashBoard </h2>
  </div>
  
  <?php
  
  $res = mysqli_query($db, "SELECT *from product");
  while ($row = mysqli_fetch_array($res)) {
  
  ?>
      <div class="row-sub-admin clearfix">
  
          <div class="write-2">
              <a href="./product.php?id=<?php echo $row["Product_ID"];?>">
                  <img src="<?php echo $row["Product_Image"];?>" >
                  <h2><?php echo $row["Product_NAME"];?></h2>
                  <p>প্রতি কেজি মূল্য : ৳ <?php echo $row["Product_Price"];?></p>
                  <p>পরিমাণ : <?php echo $row["product-qty"];?> কেজি  </p>
              </a>
              <div class="admin-ap">
                   <button type="submit" class="admin-aprove">Aprove</button>
                   <button type="submit" class="admin-delete">Delete</button>
               </div>
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
  

   </div>
 
<!---------footer--->
<?php
include("include/foot.php")
?>