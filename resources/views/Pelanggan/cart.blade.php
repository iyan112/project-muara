<style>
	nav ul {
  display: flex;
  align-items: center;
  list-style: none;
  gap: 1rem;
  padding: 1rem;
}
nav ul li a {
  text-decoration: none;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #191919;
  font-weight: 600;
  padding: 5px 15px; /* Tambahkan padding horizontal untuk lebih lebar */
  transition: all 300ms, background-color 300ms;
  border-bottom: 1px solid rgba(0, 0, 0, 0);
  border-radius: 50px; /* Membuat bentuk oval */
}
nav ul li a:hover {
  color: orangered;
  background-color: #f2f2f2; /* Warna background saat hover */
  border-bottom: 1px solid white;
  border-radius: 60px; /* Tetapkan border-radius agar tetap oval saat hover */
}
/* Style khusus untuk dropdown item agar seragam */
nav ul li a.dropdown-toggle {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #191919 !important;
  font-weight: 600;
  padding: 5px 0;
  transition: all 300ms;
  border-bottom: 1px solid rgba(0, 0, 0, 0) !important;
}
nav ul li a.dropdown-toggle:hover {
  color: orangered !important;
  border-bottom: 1px solid white !important;
}
</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Minishop - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('Pelanggan/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="Pelanggan/css/animate.css">
    
    <link rel="stylesheet" href="Pelanggan/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Pelanggan/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="Pelanggan/css/magnific-popup.css">

    <link rel="stylesheet" href="Pelanggan/css/aos.css">

    <link rel="stylesheet" href="Pelanggan/css/ionicons.min.css">

    <link rel="stylesheet" href="Pelanggan/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="Pelanggan/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="Pelanggan/css/flaticon.css">
    <link rel="stylesheet" href="Pelanggan/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset ('Pelanggan/css/style.css') }}">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-black">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Minishop</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <nav>
              <ul>
                <li>
                  <a href="/">Home</a>
                </li>
                <li>
                  <a href="#">Cart</a>
                </li>
                <li>
                  <a href="#">Checkout</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle"href="#"id="dropdown04"data-toggle="dropdown"aria-haspopup="true"aria-expanded="false">Catalog</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="shop.blade.php">Shop</a>
                    <a class="dropdown-item" href="/product-single">Single Product</a>
                    <a class="dropdown-item" href="cart.blade.php">Cart</a>
                    <a class="dropdown-item" href="checkout.blade.php">Checkout</a>
                  </div>
                </li>
                <li>
                  <a href="/log">Blog</a>
                </li>
                <li>
                  <a href="/cart"><span class="icon-shopping_cart"></span>[0]</a>
                </li>
              </ul>
            </nav>
    		</div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(Pelanggan/images/product-3.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Nike Free RN 2019 iD</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$4.90</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$4.90</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(Pelanggan/images/product-4.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Nike Free RN 2019 iD</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$15.70</td>
						      </tr><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-start">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>$20.60</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>$3.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>$17.60</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="/checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>
		

    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Minishop</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
	                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
	                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contact</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="Pelanggan/js/jquery.min.js"></script>
  <script src="Pelanggan/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="Pelanggan/js/popper.min.js"></script>
  <script src="Pelanggan/js/bootstrap.min.js"></script>
  <script src="Pelanggan/js/jquery.easing.1.3.js"></script>
  <script src="Pelanggan/js/jquery.waypoints.min.js"></script>
  <script src="Pelanggan/js/jquery.stellar.min.js"></script>
  <script src="Pelanggan/js/owl.carousel.min.js"></script>
  <script src="Pelanggan/js/jquery.magnific-popup.min.js"></script>
  <script src="Pelanggan/js/aos.js"></script>
  <script src="Pelanggan/js/jquery.animateNumber.min.js"></script>
  <script src="Pelanggan/js/bootstrap-datepicker.js"></script>
  <script src="Pelanggan/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="Pelanggan/js/google-map.js"></script>
  <script src="Pelanggan/js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>