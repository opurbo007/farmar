<?php
include("./Database/config.php");

?>



<?php
include("./include/head.php")
?>


<?php

$id=$_GET["id"];

?>
        <!------ to add more product--->

        <?php
$res =mysqli_query($db,"SELECT *from product WHERE Product_ID=$id");
while($row=mysqli_fetch_array($res))
{
?>
<div class="name">
    <h5>পণ্যটি সম্পর্কে বিস্তারিত </h5>
</div>
<div class="single-product clearfix">

<div class="productpage-1 clearfix">
    <img src="./<?php echo $row["Product_Image"];?>">

</div>

<div>
    <div class="productpage-2 clearfix">
        <h1> <?php echo $row["Product_NAME"];?></h1>

        <h3>৳<?php echo $row["Product_Price"];?></h3>

        <div class="card-footer">
            <form action="" class="form" data-pure-form>
            
                <!-- <input type="number" value="1"> -->
                <!-- <div class="form-group"> -->
                <input type="number" min="1" value="1" class="form-control" name="quantity" data-pure-attribute placeholder="Quantity">
                <!-- </div> -->

                <div class="button">
                    <!-- <a href="../cart.php" class="btn">Add To Cart</a> -->
                    <input type="hidden" value="<?php echo $row["Product_NAME"];?> " name="product_name" data-pure-attribute="">
                    <input type="hidden" value="<?php echo $row["Product_Price"];?>" name="unity_price" data-pure-attribute>
                    <input type="hidden" value="shirt" name="item_type" data-pure-attribute>
                    <input type="hidden" value="<?php echo $row["Product_Image"];?>" data-pure-item-id >

                    <input type="submit" class="btn btn-primary" value="ঝুড়িতে রাখুন ">
                </div>
            </form>

            <h4>পণ্যের বিবরণ </h4>
            &ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;
            <p class="p-dis"><?php echo $row["Product_DEC"];?></p>
            <div class="review">
                <h4> Review:</h4>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star checked"></span>
             <span class="fa fa-star "></span>
         </div>
        </div>
    </div>
</div>
</div>

<?php
}
?>


        <!---------footer--->
        <?php
include("./include/foot.php")
?>
<!-- js for cart  & single product -->
 <script src="./js/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jStorage/0.4.12/jstorage.min.js"></script>
<script src="./js/main.js"></script>
<script type="application/javascript">
    $(document).ready(function() {
        $.Purefashion({
            debug: false,
            onItemAdded: function(item) {
                console.log(item);
            },
            onItemUpdated: function(item) {
                console.log(item);
            }
        });
    });
</script>
