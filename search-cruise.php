<?php
// Check if form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destination = htmlspecialchars($_POST['destination']);
    $departure_port = htmlspecialchars($_POST['departure_port']);
    $departure_month = htmlspecialchars($_POST['departure_month']);
    $length = htmlspecialchars($_POST['length']);
    $cruise_line = htmlspecialchars($_POST['cruise_line']);
} else {
    // Redirect back if page is accessed directly
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Search Cruise</title>

  <?php include("header.php"); ?>





<section class="search-form-bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-8">
        <div class="search-form-box">
          <div class="d-flex justify-content-center align-items-center gap-4 pb-4">
            <div class="w-50">
              <p class="search-form-title text-center">Destination</p>
              <h1 class="search-form-name text-center"><?php echo $destination; ?></h1>
            </div>  
            <h1 class="search-form-to text-center"> TO</h1>
            <div class="w-50">
              <p class="search-form-title text-center">Departure Port</p>
              <h1 class="search-form-name text-center"><?php echo $departure_port; ?></h1>
            </div>  
          </div>
          <h2 class="search-form-hding"><?php echo $cruise_line; ?></h2>
          <ul class="search-form-list">
            <li>Month: <?php echo $departure_month; ?></li>
            <li>Length: <?php echo $length; ?></li>
          </ul>
          <p class="wrap-prgh text-center pt-2">Prices shown are per guest, inclusive of taxes and port fees. Additional baggage fees may apply.</p>
          <h2 class="wait-hding pt-4">Please Wait...</h2>
          <p class="wrap-prgh text-center fw-bold">Search and compare the best cruise deals from top cruise lines—all in one place.</p>

          <img src="images/loader.gif" alt="loader" class="search-form-loader">
          <p class="wrap-prgh text-center">Still searching... Have questions? Our experts are just a call away</p>
          <a href="tel:<?php echo $phone; ?>" class="search-form-callbtn"><i class="fa-solid fa-phone-volume"></i> Call Us <?php echo $phone; ?></a>
        </div>
        
      </div>
    </div>
  </div>  
</section>


<?php include("footer.php"); ?>

 