<?php 
// require the config
require_once("data/db.php");
// require header
require_once("includes/header.php");
?>

<!-- Hero -->
<div class="container">
    <div class="rounded  py-5  row align-items-center ">
        <div class="col-5 bg-light bg-gradient">
            <img src="assets/images/favicon.png" alt="" class="img-fluid">
        </div>
        <div class="col-6 ms-5">
            <h1 class="fs-big fw-bold">Get All Original Products</h1>
            <p class="fs-14 my-4 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sint pariatur architecto numquam nemo laudantium, magni non tenetur explicabo dolorum est error voluptatum quibusdam, libero, modi quis id ducimus aliquam?</p>
            <a href="shop.php" class="btn btn-danger">Shop Now</a>
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
                    <a href="category.php?id=<?php echo $row['id'] ?>" class="card-text decoration-none fw-bold text-white text-uppercase mx-5 my-3">
                        go shop <i class="fas fa-long-arrow-alt-right ms-2 "></i>
                    </a>
                </div>
            </div>
        </div>
        <?php }?>
    </section>
     <!-- benefits -->
    <section class="row align-items-center justify-content-between mt-5">
       <div class="col-4">
            <div class="card w-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-wallet"></i>
                        <span class="ms-2">100% Money Back</span>
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card w-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-box"></i>
                        <span class="ms-2">Non-contact Shipping</span>
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card w-100">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-truck"></i>
                        <span class="ms-2">Free Delivery Order Over $200</span>
                    </h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Weekly Best  -->
    <section class="mt-5">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="fs-1 fw-bold">Weekly Best Deals</h2>
                <a href="category.php?id=3" class="text-danger fs-14">View More</a>
            </div>
            <div class="row align-items-center">
            <?php 
                $sql = "SELECT * FROM `category` WHERE `name` = 'weekly-best'";
                $result = mysqli_query($conn , $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id =  $row['id']  ;
                    $sql2 = "SELECT * FROM `product` WHERE `category_id` = '$id'";
                    $result2 = mysqli_query($conn , $sql2);
                    while ($row2 = mysqli_fetch_assoc($result2)) {    ?>
                            <div class="col-4">
                                <div class="card p-2 position-relative">
                                    <img src=" <?php echo $row2["src"] ?>" alt=" <?php echo $row2["name"] ?>" 
                                    class="card-img bg-light ">
                                    <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center position-absolute promo text-white fs-5">
                                        <?php echo (int) round((100 - ($row2["price"] / $row2["old-price"] * 100)), 0); ?> % <br> Off
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                          <a class="text-dark decoration-none" href="product.php?id=<?php echo $row2["id"];?>">  <?php echo $row2["name"];  ?></a>
                                        </div>
                                        <div class="card-text d-flex align-items-center">
                                             <del class="fs-14 text-muted fs-5">  $<?php echo $row2["old-price"] ?> </del>
                                              <p class="ms-3 mb-0 fs-2">  $<?php echo $row2["price"] ?> </p>
                                        </div>
                                    </div>

                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <p class="text-muted fs-14">Sold: <?php echo $row2["sold"] ?></p>
                                        <p class="text-muted fs-14">Available: <?php echo $row2["stock"] ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } }?>
                        </div>
             </section>
    <!-- promotion -->
    <section class="mt-5">
    <!-- <?php 
      $sql = "SELECT * FROM promotion  WHERE `show-home` = 'true'";
      $result = mysqli_query($conn , $sql);
      while ($row = mysqli_fetch_assoc($result)) {?>
        <div class="w-100 bg-blue p-4 row">
            <div class="col-4">
                <img src="<?php echo $row["src"] ?>" alt="<?php echo $row["promote"] ?>" class="img-fluid">
            </div>
            <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                <h2 class="fs-big text-white"><?php echo $row["promote"] ?></h2>
                <p class="fs-5 text-white"><?php echo $row["date"] ?></p>
            </div>
            <div class="col-2"></div>
        </div>
        <?php }?> -->
        <div class="w-100">
            <img src="assets/images/promotion.png" alt="" class="img-fluid">
        </div>
    </section>
     <!-- Resently add  -->
     <section class="mt-5">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="fs-1 fw-bold">Resent Products</h2>
                <a href="shop.php" class="text-danger fs-14">View More</a>
            </div>
            <div class="row align-items-center">
            <?php 
                $sql = "SELECT * FROM product ORDER BY id DESC LIMIT 0,5";
                $result = mysqli_query($conn , $sql);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-4">
                    <div class="card p-2 position-relative">
                        <img src=" <?php echo $row["src"] ?>" alt=" <?php echo $row["name"] ?>" class="card-img bg-light ">
                        <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center position-absolute promo text-white fs-5">
                            <?php echo (int) round((100 - ($row["price"] / $row["old-price"] * 100)), 0); ?> % <br> Off
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                            <a class="text-dark decoration-none" href="product.php?id=<?php echo $row["id"];?>">  <?php echo $row["name"];  ?></a>
                            </div>
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
    </section>
<?php require_once("includes/footer.php")?>