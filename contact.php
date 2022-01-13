<?php 
    require_once("config/config.php"); 
    require_once("includes/header.php");

    if(isset($_POST['contact'])) {
        $sql = "INSERT INTO Contacts (`name` , `email` , `message`) VALUES ('$name' , '$email' , '$msg')";
        $result = mysqli_query($conn , $sql);
    }
?>
   <div class="row mt-5">
       <div class="col-md-2 col-0"></div>
       <div class="col-md-8 col-12">
       <?php if($result) {?>
            <div class="card" style="width: 18em;">
                Thanks You For Your Message , We Will Soon Reach You On Your Email Address <br>
                All Love From <a class="fw-bold text-white" href="index.php"> <span class="text-primary">T</span>echShop</a>
            </div>
        <?php } else { ?>
             <div class="card p-3" >
                     <form method="POST" class="card-body">
                         <h5 class="card-title text-center mb-4">Contact Us</h5>
                         <div class="mb-3">
                                 <label for="Name" class="form-label">Name</label>
                                 <input type="text" class="form-control" id="Name" placeholder="Name" >
                         </div>
                         <div class="mb-3">
                                 <label for="email" class="form-label">Email</label>
                                 <input type="email" class="form-control" id="email" placeholder="Email Address" >
                         </div>
                         <div class="mb-3">
                                 <label for="msg" class="form-label">Message</label>
                                 <textarea rows="5" id="msg" class="form-control" placeholder="Message" ></textarea>
                         </div>
                         <button type="submit" name="contact" class="btn btn-primary w-100">Send</button>
                     </form>
             </div>
             <?php  } ?>
            </div>
       <div class="col-md-2 col-0"></div>
   </div>
<?php 
    require_once("includes/footer.php")
?>