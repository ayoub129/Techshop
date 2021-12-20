<?php 
// require the config
require_once("data/db.php");
// require header
require_once("includes/header.php");
?>

<div class="container">

<div class="row">
    <!-- sidebar -->
    <div class="col-3">
        <!-- category -->
        <section>
            <?php
                $sql = "SELECT * FROM `category`";
                $result = mysqli_query($conn , $sql);
                while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="card border-rad-0 w-100">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <i class="fa fa-<?php echo $row['icon'] ?>"></i>
                        <a href="" class="text-muted decoration-none ms-2"><?php  echo $row['name'] ?></a>
                    </div>
                    <a href="" class="text-muted decoration-none ms-2">  <i class="fas fa-chevron-right"></i> </a>
                </div>
            </div>
            <?php } ?>
        </section>



      <!-- benefits -->
    <section class="d-flex flex-column align-items-center justify-content-center mt-4">
       <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title d-flex align-items-center">
                         <i class="fas fa-wallet"></i>
                        <span class="ms-2 fs-14 ms-3">100% Money Back</span>
                    </h5>
                </div>
            </div>
        </div>
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title d-flex align-items-center">
                         <i class="fas fa-box"></i>
                        <span class="ms-2 fs-14 ms-3">Non-contact Shipping</span>
                    </h5>
                </div>
            </div>
        </div>
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title d-flex align-items-center">
                        <i class="fas fa-truck"></i>
                        <span class="ms-2 fs-14 ms-2">Free Delivery Order Over $200</span>
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <!-- slider deals -->
    <div class="row align-items-center mt-4">
        <p class="fs-6 text-dark"> Deals Of The Week</p>
         <?php 
                $sql = "SELECT * FROM `category` WHERE `name` = 'weekly-best'";
                $result = mysqli_query($conn , $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id =  $row['id']  ;
                    $sql2 = "SELECT * FROM `product` WHERE `category_id` = '$id'";
                    $result2 = mysqli_query($conn , $sql2);
                    while ($row2 = mysqli_fetch_assoc($result2)) {    ?>
                            <div class="col-12">
                                <div class="card p-2 position-relative">
                                    <img src=" <?php echo $row2["src"] ?>" alt=" <?php echo $row2["name"] ?>" 
                                    class="card-img bg-light ">
                                    <div class="card-body text-center">
                                      <a href="product.php?id=<?php echo $row['id'] ?>" class="card-title  decoration-none text-dark ">
                                            <?php echo $row2["name"];  ?>
                                      </a>
                                        <div class="card-text d-flex align-items-center justify-content-center">
                                            <p class=" mb-0 fs-2 text-danger">  $<?php echo $row2["price"] ?> </p>
                                            <del class=" ms-3 fs-14 text-muted fs-5">  $<?php echo $row2["old-price"] ?> </del>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex align-items-center justify-content-center my-3">
                                        <button class="btn btn-danger">Buy Now</button>
                                        <button class="btn btn-outline-danger ms-2">Add To Cart</button>
                                    </div>

                                </div>
                            </div>
                <?php } }?>
        </div>

         <!-- Resently add  -->
        <section class="mt-5">
              <p class="fs-6 text-dark"> Recently add</p>
                <?php 
                    $sql = "SELECT * FROM product ORDER BY sold ASC LIMIT 0,6";
                    $result = mysqli_query($conn , $sql);
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="mt-2">
                        <div class="card p-2 border-0">
                            <div class="d-flex align-items-center justify-space-between">
                                <img src=" <?php echo $row["src"] ?>" alt=" <?php echo $row["name"] ?>" class="card-img w-25">
                                <div class="card-body w-75">
                                  <a href="product.php?id=<?php echo $row['id'] ?>" class="card-title decoration-none text-dark">
                                        <?php echo $row["name"];  ?>
                                   </a>
                                    <div class="card-text d-flex align-items-center">
                                        <p class=" mb-0 text-danger">  $<?php echo $row["price"] ?> </p>
                                        <del class="fs-14 ms-2 text-muted">  $<?php echo $row["old-price"] ?> </del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                <?php } ?>
        </section>
    </div>
    <!-- products -->
    <div class="col-9 mt-4">
        <div class="d-flex align-items-center justify-content-between">
            <h4> Products </h4>
            <select>
                <option value="Latest" selected> Latest Products</option>
                <option value="ASQ"> Sort By Alphabite A-Z</option>
                <option value="DESQ"> Sort By Alphabite Z-A</option>
                <option value="best"> Best Seller</option>
                <option value="discount"> Discount</option>
            </select>
        </div>
        <div class="row align-items-center mt-2">
            <?php 
                $sql = "SELECT * FROM product ORDER BY id DESC LIMIT 0,16";
                $result = mysqli_query($conn , $sql);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-4">
                    <div class="card p-2 position-relative">
                        <img src=" <?php echo $row["src"] ?>" alt=" <?php echo $row["name"] ?>" class="card-img bg-light ">
                        <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center position-absolute promo-3  fs-5">
                            <?php echo (int) round((100 - ($row["price"] / $row["old-price"] * 100)), 0); ?> % <br> Off
                        </div>
                        <div class="rounded-circle bg-white p-2 cursor text-danger d-flex align-items-center justify-content-center position-absolute cart-abs">
                            <i class="fas fa-shopping-cart"></i>
                         </div>
                         <div class="rounded-circle bg-white p-2 cursor text-danger d-flex align-items-center justify-content-center position-absolute wish-abs">
                            <i class="fas fa-heart"></i>
                         </div>
                        <div class="card-body">
                            <a href="product.php?id=<?php echo $row['id'] ?>" class="card-title decoration-none text-dark">
                                <?php echo $row["name"];  ?>
                            </a>
                            <div class="card-text d-flex align-items-center">
                                <del class="fs-14 text-muted fs-5">  $<?php echo $row["old-price"] ?> </del>
                                <p class="ms-3 mb-0 fs-2">  $<?php echo $row["price"] ?> </p>
                            </div>
                           
                        </div>

                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <p class="text-muted fs-14">Sold: <?php echo $row["sold"] ?></p>
                            <p class="text-muted fs-14">Available: <?php echo $row["stock"] ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
        </div>
        <!-- pagination -->
    </div>
</div>

    <!-- categories sect -->
    <section class="row align-items-center justify-content-between mt-5">
         <?php   
        $sql = "SELECT * FROM `category` WHERE `show-home` = 'true'";
        $result = mysqli_query($conn , $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-4">
            <div class="card text-white w-100 ">
                <img src="<?php echo $row["src"]?>" class="card-img" alt="<?php echo $row["name"]?>">
                <div class="card-img-overlay bg-danger-opacity-8 ">
                    <p class="card-text mx-5 my-3">Feel Better</p>
                    <h5 class="card-title mx-5 my-3 fs-3 fw-bold"><?php echo $row["name"]?> <br> From $500</h5>
                    <a href="category.php?id=3" class="card-text decoration-none fw-bold text-white text-uppercase mx-5 my-3">
                        go shop <i class="fas fa-long-arrow-alt-right ms-2 "></i>
                    </a>
                </div>
            </div>
        </div>
        <?php }?>
    </section>

<?php 

require_once("includes/footer.php")

?>