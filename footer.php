
<footer id="footer">
	<div class="container">
		<div class="row justify-content-between pb-5">
			<div class="col-12 col-md-3">
				<img src="images/logo.png" alt="" class="footer-logo_001">
				<ul class="socialicon_001">
					<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
				</ul>
			</div>
			<div class="col-6 col-md-3">
				<h2 class="footer-hding_001">Important Links</h2>
				<ul class="footer-list_001">
					<li><a href="#">Flights</a></li>
					<li><a href="#">Hotels</a></li>
					<li><a href="#">Car Rental</a></li>
					<li><a href="#">Cruise</a></li>
					<li><a href="#">Packages</a></li>
				</ul>
			</div>
			<div class="col-6 col-md-3">
				<h2 class="footer-hding_001">Main Links</h2>
				<ul class="footer-list_001">
					<li><a href="about-us.php">About Us</a></li>
					<li><a href="contact-us.php">Contact Us</a></li>
					<li><a href="privacy-policy.php">Privacy Policy</a></li>
					<li><a href="terms-and-conditions.php">Terms & Conditions</a></li>
				</ul>
			</div>
			
			<div class="col-sm-6 col-md-3">
				<div class="d-flex justify-content-md-end mt-4 mt-md-0 mt-sm-2">
					<div>
						<h2 class="footer-hding_001">Contact Us</h2>

						<address class="footer-address_001">
							<div class="d-flex gap-3 mb-3">
							 	<i class="fa-solid fa-house"></i> 3612 Windshire Dr Springfield, IL 62704, USA
							</div> 
							<div class="d-flex gap-3 mb-3">
							 	<i class="fa-solid fa-envelope"></i> <?php echo $email; ?>
							</div> 	
							<div class="d-flex gap-3">
							 	<i class="fa-solid fa-phone-volume"></i> <?php echo $phone; ?>
							</div> 
						</address>
						
					</div>
				</div>		
			</div>
			<div class="col-md-12">
				<p class="footer-desclaimer_001 text-center pt-3">
					<strong>Disclaimer</strong><br> Our platform connects you with flights, hotels, car rentals, and cruises offered by trusted third-party providers. We act only as an intermediary and do not supply these services directly. All reservations are subject to the terms, conditions, and policies of the respective providers. While we aim to present accurate and updated information, we cannot guarantee pricing, availability, or service accuracy and are not liable for any changes, cancellations, or service-related issues. Please review the provider’s terms and conditions carefully before completing your booking.
				</p>
			</div>
		</div>
	</div>	
	<div class="copyright-bg_001">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="copyright_001 text-center">Copyright © <script>document.write(new Date().getFullYear())</script> <?php echo $domainname; ?> All rights reserved</p>
				</div>
			</div>
		</div>
	</div>	
</footer>



<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script type="text/javascript">
	 $(document).ready(function(){
		 	// Show Mobile Menu
	    $('.mobile_menu_icon').click(function(){
		    $('.deskmobmenu').addClass('show-deskmobmenu').removeClass('close-deskmobmenu');
		  });
		  // Close Mobile Menu
		  $('.close-mobmenu').click(function(){
		    $('.deskmobmenu').removeClass('show-deskmobmenu').addClass('close-deskmobmenu');
		  });
		  // Contact Form loader
       $(".frmsend").submit(function(){
         $(".frmloader").show();
	   })
	})
</script>

<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript">

// partner-logo carousel
$('#partner-logo-carousel').owlCarousel({
	  //items: 1,
	  loop: true,
	  //center:true,
	  singleItem:true,
	  navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      dots: false,
      nav: true, // Show next and prev buttons
      navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
      responsiveClass:true,
	  slideBy: 1,
	  margin: 25,
	  animateIn: true,
	  animateOut: true,
	  merge: true,
	  lazyLoad: true,
	  autoplay: true,
	  autoplayTimeout: 3000,
	  autoplayHoverPause: true,
	   responsive:{
		  0:{
		  items:2
		  },
		  768:{
		  items:4
		  },
		  992:{
		  items:6
		  }
		}
});       
</script>




<!-- Hide travelpayout watermark -->
<script>

function hideTPPoweredByInAllShadowRoots(node = document) {
  const treeWalker = document.createTreeWalker(node, NodeFilter.SHOW_ELEMENT);
  while (treeWalker.nextNode()) {
    const el = treeWalker.currentNode;

    // Try to access open shadow root
    if (el.shadowRoot) {
      // Look for .tp_powered_by inside this shadow root
      const target = el.shadowRoot.querySelector('.tp_powered_by');
      if (target) {
        target.style.display = 'none';
        console.log('Hidden .tp_powered_by in shadowRoot of', el);
      }
      // Recurse deeper
      hideTPPoweredByInAllShadowRoots(el.shadowRoot);
    }

    // If we can't access closed shadow roots, we skip those (browser limitation)
  }
}

// Run now and then observe future changes (dynamic content)
hideTPPoweredByInAllShadowRoots();

// Watch for new elements being added
const observer = new MutationObserver(() => {
  hideTPPoweredByInAllShadowRoots();
});
observer.observe(document, { childList: true, subtree: true });

</script>
</body>
</html>