<!DOCTYPE html>
<html>

<head>
  <title>Contact Us</title>

<?php include("header.php"); ?>


<section class="py-5">
  <div class="container">
    <div class="row justify-content-center pb-3">
      <div class="col-sm-12 col-md-12">
        <h2 class="wrap-hding text-center pb-3">Have a Question or Need Help? </h2> 
        <p class="wrap-prgh text-center mb-5">
          Geteway Reservation Executives are here for you 24/7. Reach us online, over the phone or at a branch
        </p>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="contact-box">
          <img src="images/office.png" alt="" class="contact-img">
          <h2 class="contact-hding text-center">Reach Us <br> Geteaway Reservation</h2>
          <p class="wrap-prgh  text-center"> 3612 Windshire Dr Springfield, IL 62704, USA </p>
        </div>  
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="contact-box">
          <img src="images/phone.png" alt="" class="contact-img">
          <h2 class="contact-hding text-center">Phone <br> <?php echo $phone; ?></h2>
          <p class="wrap-prgh  text-center">Executives are here for help over the phone</p>
        </div>  
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="contact-box">
          <img src="images/mail.png" alt="" class="contact-img">
          <h2 class="contact-hding text-center">Email <br> <?php echo $email; ?></h2>
          <p class="wrap-prgh  text-center">For Travel related queries</p>
        </div>  
      </div>
    </div>
    <div class="row justify-content-center pb-5"> 
      <div class="col-sm-6">
        <div class="contact-box">
          <h2 class="wrap-hding pb-2">Got Any Product Related Queries? </h2> 
          <p class="wrap-prgh pb-4">We have dedicated teams to help you find the best offers. 
          </p>
          <form action="">
            <div class="form-group">
              <input type="text" name="" class="form-field" placeholder="Name*" >
            </div>
            <div class="form-group">
              <input type="email" name="" class="form-field" placeholder="Email*">
            </div>
            <div class="form-group">
              <input type="tel" name="" class="form-field" placeholder="Phone*">
            </div>
            <div class="form-group">
              <input type="text" name="" class="form-field" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" rows="4" class="form-field" placeholder="Message"></textarea>
            </div>
            <div class="form-group d-flex justify-content-end mt-2">
              <button type="submit" class="form-btn">Send Message</button>
            </div>
          </form>
        </div>  
      </div>
      <div class="col-sm-6">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3067.660642795187!2d-89.6963805247957!3d39.74727317155502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x887538a451072499%3A0x43c04ed97b0ae4d1!2s3612%20Windshire%20Dr%2C%20Springfield%2C%20IL%2062704%2C%20USA!5e0!3m2!1sen!2sin!4v1753790830288!5m2!1sen!2sin" width="600" height="450" style="border:0; width:100%; height:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
    </div>
  </div>
</section>
<?php include("footer.php"); ?>

 