<?php 
    require_once("data/db.php");
    $sql = "SELECT * FROM `category`";
    $result = mysqli_query($conn , $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title>TechShop</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- custom style -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <!-- header -->
    <header>
        <!-- before navbar -->
        <div class="bg-white p-1 w-100 ">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                            <a href="login.php" class="text-muted text-hv-dark fs-14 decoration-none">Sign in</a>
                            <span class="mx-1">/</span>
                            <a href="register.php" class="text-muted text-hv-dark fs-14 decoration-none">Sign up</a>
                            <span class="mx-4"> <i class="fas fa-bullhorn fs-14 text-muted "></i> </span>
                            <a href="return.php" class="text-muted text-hv-dark fs-14 decoration-none">Return Policy</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <p class="mb-0 text-muted fs-14 me-4">Follow Us</p>
                        <a href="#" class="text-muted text-hv-dark decoration-none fs-14 me-4"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-muted text-hv-dark decoration-none fs-14 me-4"><i class="fab fa-tiktok"></i></a>
                        <a href="#" class="text-muted text-hv-dark decoration-none fs-14 me-4"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-muted text-hv-dark decoration-none fs-14 me-4"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar -->
        <div class=" bg-blue py-4 ">
            <div class="container d-flex align-items-center justify-content-between">
                <a class="text-white decoration-none fs-4" href="index.php"><span class="text-danger fw-bold">T</span>eachshop</a>
                    <form class="d-flex ms-5">
                        <div class="input-group ">
                            <input class="form-control border-rad-0 w-400" type="search" placeholder="find best products" aria-label="Search">
                           <select name="cat" id="cat" class="px-2">
                                <option value="All Categories">All Categories</option>
                               <?php 
                                 while ($row = mysqli_fetch_assoc($result)) {?>
                                    <option value="<?php echo $row['name'] ?>" ><?php echo $row['name'] ?></option>
                                    <?php ;} ?>
                           </select>
                            <a href="search.php" class="btn btn-danger border-rad-0" type="submit">
                                <i class="fas fa-search p-1"></i>
                            </a>
                        </div>
                    </form>
                    <ul class="d-flex list-unstyled ms-auto mb-2 mb-lg-0">
                        <li class="mx-4 ">
                            <a class="text-muted position-relative"  href="#">
                                <i class="fas fa-heart fa-2x"></i>
                                <div class="rounded-circle bg-white d-flex align-items-center justify-content-center text-dark  w-20">1</div>
                            </a>
                        </li>
                        <li class="mx-4 ">
                            <a class="text-muted position-relative" href="#">
                                <i class="fas fa-shopping-cart fa-2x"></i>
                                <div class="rounded-circle bg-danger d-flex align-items-center justify-content-center text-white w-20">4</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand fw-bold" href="shop.php">
                        <i class="fas fa-align-left"></i>    
                        <span class="ms-2">All Category</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-4">
                        <a class="nav-link active fw-bold"  href="index.php">Home</a>
                        </li>
                        <li class="nav-item mx-4">
                        <a class="nav-link active fw-bold" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item mx-4">
                        <a class="nav-link active fw-bold" href="about.php">About us</a>
                        </li>
                        <li class="nav-item mx-4">
                        <a class="nav-link active fw-bold" href="contact.php">Contact us</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a href="shop.php" class="btn btn-danger fw-bold" type="submit">SHOP NOW</a>
                    </form>
                    </div>
                </div>
                </nav>
    </header>