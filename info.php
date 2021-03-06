<!-- cart page -->
<?php 
    // require the config for db
    require_once("config/config.php");
    // require the header 
    require_once("includes/header.php");

   

    // get total price
    $price = $_GET['total'];
?>
<!-- breadcumps -->
<section class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="index.php" class="text-primary">Home</a></li>
            <li class="breadcrumb-item "><a href="cart.php" class="text-primary">Cart</a></li>
            <li class="breadcrumb-item active" aria-current="page">Information</li>
        </ol>
    </nav>
</section>

<!-- shopping cart summary -->
<section class="container mt-5">
    <div class="row">
        <div class="col-md-6 col-12">
            <h2 class="fs-1 fw-bold text-dark">Contact information</h2>
            <form method="POST">
                <?php if(isset($_SESSION['id'])) { ?>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email"  class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox" checked>
                    <label class="form-check-label" for="checkbox">
                        Email me with news and offers
                    </label>
               </div>
               <div class="line bg-secondary w-100 my-3 "></div>
               <div class="row">
                   <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="FirstName" class="form-label">FirstName</label>
                            <input type="text" class="form-control" id="FirstName" >
                        </div>
                   </div>
                   <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="LastName" class="form-label">LastName</label>
                            <input type="text" class="form-control" id="LastName" >
                        </div>
                   </div>
               </div>
               <?php } ?>
               <div class="row">
                   <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="Country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="Country" placeholder="ex: USA" >
                        </div>
                   </div>
                   <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="City" class="form-label">City</label>
                            <input type="text" class="form-control" id="City" >
                        </div>
                   </div>
               </div>
               <div class="row">
                    <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="PostalCode" class="form-label">Postal Code</label>
                                <input type="text" class="form-control" id="PostalCode"  >
                            </div>
                    </div>
                     <div class="col-sm-6">
                       <div class="mb-3">
                           <label for="Phone" class="form-label">Phone</label>
                           <input type="text" class="form-control" id="Phone" >
                       </div>
                     </div>
                </div>
                <div class="mb-3">
                        <label for="Address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="Address" >
               </div>
               <button type="submit" class="btn btn-primary my-3 w-50">Checkout</button>
            </form>
        </div>
        <div class="col-md-6 col-12">
        <h2 class="fs-1 fw-bold text-dark ">Summary</h2>
        <form method="POST" class="input-group my-4">
            <input type="text" id="discount" class="form-control" placeholder="discount Code" aria-label="discount Code" aria-describedby="btn">
            <button class="btn btn-outline-primary" type="submit" id="btn">Send</button>
        </form>
        <div class="d-flex align-items-center justify-content-between ">
            <p class="text-dark">
                Subtotal Price
            </p>
            <p class="text-dark">
                $<?php echo $price ?>
            </p>
        </div>
        <div class="d-flex align-items-center justify-content-between ">
            <p class="text-dark">
                Discount code
            </p>
            <p class="text-dark">
                $0
            </p>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-2">
            <p class="text-dark">
                 Shipping 
            </p>
            <p class="text-dark">
                $0
            </p>
        </div>
        <div class="line bg-secondary w-100"></div>
        <div class="d-flex align-items-center justify-content-between my-3">
            <p class="text-dark">
                 Total 
            </p>
            <p class="text-dark">
                $<?php echo $price ?>
            </p>
        </div>
      </div>
    </div>
</section>

<!-- descount and continue section -->

<!-- Email call -->
<section class="mt-5 justify-content-center text-center container d-flex">
    <address class="me-5">
        <p class="text-dark">
            Email us
        </p>
        <a href="mailto:techshop000.store@gmail.com" class="text-primary">
            techshop000.store@gmail.com
        </a>
    </address>
    <address>
        <p class="text-dark">
            Call us
        </p>
        <a href="tel:+212 635747467" class="text-primary">
            +212 635747467
        </a>
    </address>
</section>

<?php 
    // require the footer 
    require_once("includes/footer.php");
?>