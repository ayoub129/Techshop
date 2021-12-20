<?php 
// require the config
require_once("data/db.php");
// require header
require_once("includes/header.php");
?>

<div class="container">

<div class="row">
    <div class="col-6 mt-5">
        <?php
         $id = $_GET['id'];
         $sql = "SELECT * FROM `product` WHERE id = '$id'";
         $result = mysqli_query($conn , $sql);
         while ($row = mysqli_fetch_assoc($result)) { ?>
            <img id="big" src="<?php echo $row['src'] ?>" class="img-fluid w-100" >
            <div id="thumbnails" class="d-flex align-items-center mt-5">
                <?php 
                    $sql2 = "SELECT * FROM `variation` WHERE `product_id` = '$id'";
                    $result2 = mysqli_query($conn , $sql2);
                    while ($row2 = mysqli_fetch_assoc($result2)) { ?>
                         <a class="me-5" href="<?php echo  $row2['src'] ?>"><img src="<?php  echo $row2['src'] ?>" class="img-thumbnail w-80" alt="<?php  echo $row2['id'] ?>"></a>
                <?php  } }?>
            </div>
    </div>
    <div class="col-6 mt-5">
        <?php
             $id = $_GET['id'];
             $sql = "SELECT * FROM `product` WHERE id = '$id'";
             $result = mysqli_query($conn , $sql);
             while ($row = mysqli_fetch_assoc($result)) { 
        ?>
            <h1 class="fs-1 fw-bold text-dark"><?php echo $row['name'] ?></h1>
            <div class="mt-3">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <span class="ms-2 fs-5">5/5</span>
                <span class="ms-3 fs-4">(1084 reviews)</span>
            </div>
            <div class="d-flex align-items-center">
                <h3 class="fs-2 fw-bold mt-3 ">
                    <?php echo $row['price'] ?>
                </h3> 
                <del class="ms-3 fs-5 text-muted mt-2">
                    <?php echo $row['old-price'] ?>
                </del>
            </div>
            <div class="row mt-4">
                <div class="col-3">
                    <p class="fs-5 fw-bold">Colors</p>
                    <div class="d-flex align-items-center mt-2">
                        <?php 
                            $sql2 = "SELECT * FROM `variation` WHERE `product_id` = '$id'";     
                            $result2 = mysqli_query($conn , $sql2);
                            while ($row2 = mysqli_fetch_assoc($result2)) { ?>
                               <div class="rounded-circle colors p-2 me-3 cursor" style="background-color: <?php echo $row2['colors'] ?>;"></div>
                      <?php  } }?>
                 </div>
              </div>
              <div class="col-3">
                <p class="fs-5 fw-bold">Quantity</p>
                <div class="d-flex align-items-center ">
                    <button class="btn box-shadow-0">-</button>
                        <span>1</span>
                    <button class="btn box-shadow-0">+</button>
                </div>
              </div>
           </div>
            <div class="d-flex align-items-center mt-5 my-3">
                <button class="btn btn-danger w-25">Buy Now</button>
                <button class="btn btn-outline-danger w-25 ms-2">Add To Cart</button>
            </div>
    </div>
</div>
<?php 

require_once("includes/footer.php")

?>