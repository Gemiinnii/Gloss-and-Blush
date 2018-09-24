<?php 
include "./includes/header.php"; 
include "./functions/functions.php";
if(isset($_GET['id'])){
  $id = $_GET['id'];
}else{
  $id = 0;
}
?>

<!--Single Page starts Here-->
<div class="product-main">
	 <div class="container">
		 <div class="ctnt-bar cntnt">
			 <div class="content-bar">
				 <div class="single-page">					 
					 <!--Include the Etalage files-->
						<link rel="stylesheet" href="css/etalage.css">
						<script src="js/jquery.etalage.min.js"></script>
					 <!-- Include the Etalage files -->
					 <script>
							jQuery(document).ready(function($){
					
								$('#etalage').etalage({
									thumb_image_width: 300,
									thumb_image_height: 400,
									source_image_width: 700,
									source_image_height: 800,
									show_hint: true,
									click_callback: function(image_anchor, instance_id){
										alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
									}
								});
								// This is for the dropdown list example:
								$('.dropdownlist').change(function(){
									etalage_show( $(this).find('option:selected').attr('class') );
								});
					
							});
						</script>
						<!--//details-product-slider-->
					 <div class="details-left-slider">
						  <ul id="etalage">
							 <li>
								<a href="optionallink.html">
								<img class="etalage_thumb_image" src="images/s1.jpg" />
								<img class="etalage_source_image" src="images/s1.jpg" />
								</a>
							 </li>
							 
							 <div class="clearfix"></div>
						 </ul>
					 </div>
					 <div class="details-left-info">
							<h3>Belle Fille Grey & Black</h3>
								<h4>Pellentesque pretium </h4>							
							<p>$ 180 <a href="#">Click for offer</a></p>
							<p class="qty">Qty ::</p><input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
							<div class="btn_form">
								<a href="cart.html">Add to cart</a>
							</div>
							<div class="flower-type">
							<p>Mobel  ::<a href="#">Dress</a></p>
							<p>Brand  ::<a href="#">Pellentesque</a></p>
							</div>
							<h5>Description  ::</h5>
							<p class="desc">Proin vestibulum scelerisque tempus. Phasellus at fermentum erat. Pellentesque mattis velit eget elit condimentum gravida. Donec vehicula mollis velit, a eleifend est hendrerit quis. Etiam pulvinar at ex eget cursus. Etiam luctus orci ut tortor rhoncus, sit amet faucibus lorem finibus. Nulla id ornare arcu. or lowest node and working upwards) are as follows:</p>
					 </div>
					 <div class="clearfix"></div>				 	
				 </div>
			 </div>
		 </div>		 
		 <div class="clearfix"></div>
		 <div class="single-bottom2">
			 <h6>Related Products</h6>
				<div class="rltd-posts">
					 <div class="col-md-3 pst1">
						 <img src="images/ab3.jpg" alt=""/>
						 <h4><a href="products.html">NEWLOOK</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="col-md-3 pst1">
						 <img src="images/c1.jpg" alt=""/>
						 <h4><a href="products.html">NEWLOOK</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="col-md-3 pst1">
						 <img src="images/ab4.jpg" alt=""/>
						 <h4><a href="products.html">SAREES</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="col-md-3 pst1">
						 <img src="images/c5.jpg" alt=""/>
						 <h4><a href="products.html">MANGO</a></h4>
						 <a class="pst-crt" href="cart.html">ADD TO CART</a>
					 </div>
					 <div class="clearfix"></div>
				</div>
		 </div>	
	 </div>
</div>
<!--fotter-->
<div class="fotter-logo">
	 <div class="container">
	 <div class="ftr-logo"><h3><a href="index.html">NEW FASHIONS</a></h3></div>
	 <div class="ftr-info">
	 <p>&copy; 2015 All Rights Reseverd Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
	</div>
	 <div class="clearfix"></div>
	 </div>
</div>
<!--fotter//-->

</body>
</html>