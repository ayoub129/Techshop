<?php
    require_once('includes/PHPMailer/src/PHPMailer.php');
    require_once("config/config.php"); 
    require_once("includes/header.php");
    use PHPMailer\PHPMailer\PHPMailer;
    
    if(isset($_POST['forgote']) && $_POST['email']) {
        $email = $_POST["email"];
        $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
        $result = mysqli_query($conn , $sql);
        $count = mysqli_num_rows($result);
      if( $count==1)
      {
        while($row=mysqli_fetch_array($result))
        {
          $email=md5($row['email']);
          $pass=md5($row['password']);
        }
        $link="<a href='reset.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
        $mail = new PHPMailer();
        $mail->CharSet =  "utf-8";
        $mail->IsSMTP();
        // enable SMTP authentication
        $mail->SMTPAuth = true;                  
        // GMAIL username
        $mail->Username = "techshop000.store@gmail.com";
        // GMAIL password
        $mail->Password = "0699272311aA@";
        $mail->SMTPSecure = "ssl";  
        // sets GMAIL as the SMTP server
        $mail->Host = "smtp.gmail.com";
        // set the SMTP port for the GMAIL server
        $mail->Port = "465";
        $mail->From='techshop000.store@gmail.com';
        $mail->FromName='Techshop';
        $mail->AddAddress('$email', '');
        $mail->Subject  =  'Reset Password';
        $mail->IsHTML(true);
        $mail->Body    = 'Click On This Link to Reset Password '.$pass.'';
        if($mail->Send())
        {
          echo "Check Your Email and Click on the link sent to your email";
        }
        else
        {
          echo "Mail Error - >".$mail->ErrorInfo;
        }
      }	
    }
?>

<section class="mt-5 container">
    <div class="row">
        <div class="col-md-4 col-0"></div>
        <div class="col-md-4 col-12 bg-light p-5"> 
        <!-- <?php 
        // if($result) {?>
            <div class="card" style="width: 18em;">
                 We Will Send You An Email To reset  Your Password <br>
                All Love From <a class="fw-bold text-white" href="index.php"> <span class="text-primary">T</span>echShop</a>
            </div>
        <?php 
    // } else { ?> -->
            <form  method="post" class="text-dark">
                <div class="text-center mb-5">
                    <a class="fw-bold text-dark fs-3" href="index.php"> <span class="text-primary">T</span>echShop</a>
                    <h3 class="fs-5 fw-bold text-capitalize mt-4"> Reset Your Password</h3> 
                    <p class="mt-4">We will send you an email to reset your password.</p>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <button type="submit" name="forgote" class="btn btn-outline-primary w-48">Submit</button>
                    <a href="login.php" class="w-48"><button type="button" class="btn btn-outline-primary w-100 ">Cancel</button></a> 
                </div>
           
            </form>
            <?php  
        // } ?>
        </div>
        <div class="col-md-4 col-0"></div>
    </div>
</section>

<?php
    require_once("includes/footer.php") 
?>