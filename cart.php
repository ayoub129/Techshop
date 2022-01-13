<!-- cart page -->
<?php 
    // require the config for db
    require_once("config/config.php");
    // require the header 
    require_once("includes/header.php");
?>
<!-- breadcumps -->
<section class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="index.php" class="text-primary">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </nav>
</section>

<!-- shopping cart summary -->
<section class="container mt-5">
    <div class="row">
        <div class="col-md-9">
            <h2 class="fs-1 fw-bold text-dark">Shopping Cart</h2>
            <div class="text-dark">
                <span class="fw-bold">1</span>
                <span>item | </span>
                <span class="fw-bold"> $450.90</span>
            </div>
            <table class="table text-dark mt-4">
                <thead>
                    <tr >
                        <th scope="col">Item</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody >
                    <tr class="ms-4">
                        <td scope="row" class="row ">
                            <div class="col-md-6">
                                <img src="assets/images/all.jpg" class="img-fluid ms-2" alt="">
                            </div>
                            <div class="col-md-6  text-muted">
                                <p class="w-75 ms-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error harum tempore atque corporis nobis </p>
                            </div>
                        </td>
                        <td scope="row" class="fw-bold w-15">$226</td>
                        <td scope="row" class="w-15">
                            <a href="#" class="text-dark">-</a>
                                <span class="mx-2 fw-bold">1</span>
                            <a href="#" class="text-dark">+</a>
                        </td>
                        <td scope="row" class="w-15">
                            <a href="#" class=" text-primary">Remove</a>    
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
        <h2 class="fs-1 fw-bold text-dark ">Summary</h2>
        <div class="d-flex align-items-center justify-content-between mb-5">
            <p class="text-dark">
                Subtotal Price
            </p>
            <p class="text-dark">
                $450.90
            </p>
        </div>
        <div class="line bg-secondary w-100"></div>
         <p class="text-muted fs-12">Shipping, taxes, and discount codes calculated at checkout.</p>
         <a href="info.php" class="mt-3 btn w-100 btn-outline-primary fw-bold">
            Go To Checkout
         </a>
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