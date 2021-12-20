<?php 
    require_once("data/db.php");
    if(isset($_POST["sub"])) {
        $email = $_POST['email'];
        $sql = "INSERT INTO `newsletter` (`email`) VALUE ('$email')";
        mysqli_query($conn , $sql);
    }
?>
</div>
  <!-- newsletter -->
  <section class="mt-5 bg-info">
      <div class="container  py-5 d-flex align-items-center justify-content-between">
          <div class="flex-35">
              <h2 class="fs-2 text-white">Newsletter and get updates</h2>
              <p class=" text-white fs-14">Sign upfor our newsletter and get regural update news</p>
          </div>
          <div class="flex-10"></div>
          <form name="newsletter" method="POST" class="flex-55">
          <div class="input-group ">
              <input class="form-control border-rad-0 w-400" type="text" name="email" placeholder="Subscribe">
              <button class="btn-danger btn" type="submit" name="sub"> Subscribe</button>
          </div>
          </form>
      </div>
    </section>

    <!-- footer -->
    <footer class="bg-blue py-3">
        <div class="container">
            <div class="row">
                <div class="col-4">
                <a class="text-white decoration-none fs-4" href="#"><span class="text-danger fw-bold">T</span>eachshop</a>
                <p class="fs-14 text-white mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, ea iusto tenetur rem deleniti commodi quis dolorem sint necessitatibus.</p>
                <div class="mt-4 d-flex align-items-center">
                   <a href="#"><i class="fab fa-facebook text-white fs-4 me-3"></i></a> 
                   <a href="#"><i class="fab fa-twitter text-white fs-4 me-3"></i></a> 
                   <a href="#"><i class="fab fa-tiktok text-danger fs-4 me-3"></i></a> 
                   <a href="#"><i class="fab fa-instagram text-white fs-4 me-3"></i></a> 
                </div>
                </div>
                <div class="col-2"></div>
                <div class="col-6">
                    <h4 class="text-white">Got Questions? Call Now</h4>
                    <h3 class="text-white">+212 635747467</h3>
                    <p class="mt-4 text-white fs-14">Tangier , Morrocco</p>
                    <button class="btn-danger btn w-25">Find Us</button>
                </div>
            </div>
            <hr class="bg-white">
            <div class="d-flex align-items-center justify-content-between">
                <p class="text-white">Design and Copyright &copy; 2010-2021 Abbravie. All Right Reserved</p>
                <div class="d-flex align-items-center">
                    <a href="#" class="text-white decoration-none me-3">Home</a>
                    <a href="#" class="text-white decoration-none me-3">About</a>
                    <a href="#" class="text-white decoration-none me-3">Contact</a>
                    <a href="#" class="text-white decoration-none me-3">Shop</a>
                </div>
            </div>
        </div>
    </footer>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- swiper -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom script -->
<script src="assets/js/main.js"></script>
</body>
</html>