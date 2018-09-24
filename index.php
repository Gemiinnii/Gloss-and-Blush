<?php 
include "./includes/header.php"; 
include "./functions/functions.php";

if(isset($_GET['id'])){
  $id = $_GET['id'];
}else{
  $id = 0;
}

?>
<!---->
<div class="features" id="features">
   <div class="container">
     <div class="tabs-box">
      <ul class="tabs-menu">
        <li><a href="#tab1">Featured</a></li>
        <li><a href="#tab2">Popular</a></li>
        <li><a href="#tab3">New Arrivals</a></li>
      </ul>
      <div class="clearfix"> </div>
     <div class="tab-grids">
       <div id="tab1" class="tab-grid1"> 
          <?php 
            $featured = fetchFeatured($con,$id);
            if ($featured->num_rows > 0) {
                while($row = $featured->fetch_assoc()) { ?>
          <!-- Yaha dekhi -->                 
         <a href="./item.php?id=<?php echo $row["id"]?>"><div class="product-grid">      
            <div class="more-product-info"><span><?php echo $row['category_name']; ?></span></div>      
            <!-- <div class="more-product-info"><span>NEW</span></div>            -->
            <div class="product-img b-link-stripe b-animate-go  thickbox">               
              <img src="./images/uploads/<?php echo $row['image'] ?>" class="img-responsive" alt=""/>
              <div class="b-wrapper">
              <h4 class="b-animate b-from-left  b-delay03">             
              <button class="btns">ORDER NOW</button>
              </h4>
              </div>
            </div>
          </a>            
          <div class="product-info simpleCart_shelfItem">
            <div class="product-info-cust">
              <h4><?php echo $row['name']; ?></h4>
              <span class="item_price"><?php echo $row['price']; ?></span><br>
              <span><?php echo $row['quantity']; ?> items remaining</span>
              <input type="text" class="item_quantity" value="1" />
              <input type="button" class="item_add" value="ADD">
            </div>                          
            <div class="clearfix"> </div>
          </div>
          </div>      
          <!-- yaha samma -->
          <?php } }  ?>
       </div>       
        
       <div id="tab2" class="tab-grid2">
         <?php 
            $bestSeller = fetchPopular($con,$id);
            if ($bestSeller->num_rows > 0) {
                while($row = $bestSeller->fetch_assoc()) { ?>
          <!-- Yaha dekhi -->                 
         <a href="single.html"><div class="product-grid">           
            <!-- <div class="more-product-info"><span>NEW</span></div>            -->
            <div class="product-img b-link-stripe b-animate-go  thickbox">               
              <img src="./images/uploads/<?php echo $row['image'] ?>" class="img-responsive" alt=""/>
              <div class="b-wrapper">
              <h4 class="b-animate b-from-left  b-delay03">             
              <button class="btns">ORDER NOW</button>
              </h4>
              </div>
            </div>
          </a>            
          <div class="product-info simpleCart_shelfItem">
            <div class="product-info-cust">
              <h4><?php echo $row['name']; ?></h4>
              <span class="item_price"><?php echo $row['price']; ?></span><br>
              <span><?php echo $row['quantity']; ?> items remaining</span>
              <input type="text" class="item_quantity" value="1" />
              <input type="button" class="item_add" value="ADD">
            </div>                          
            <div class="clearfix"> </div>
          </div>
          </div>      
          <!-- yaha samma -->
          <?php } }  ?>
       </div>
     
       <div id="tab3" class="tab-grid3">
          <?php 
            $newArrivals = fetchNewArrivals($con,$id);
            if ($newArrivals->num_rows > 0) {
                while($row = $newArrivals->fetch_assoc()) { ?>
          <!-- Yaha dekhi -->                 
         <a href="single.html"><div class="product-grid">           
            <div class="more-product-info"><span><?php echo $row['category_name']; ?></span></div>           
            <div class="product-img b-link-stripe b-animate-go  thickbox">               
              <img src="./images/uploads/<?php echo $row['image'] ?>" class="img-responsive" alt=""/>
              <div class="b-wrapper">
              <h4 class="b-animate b-from-left  b-delay03">             
              <button class="btns">ORDER NOW</button>
              </h4>
              </div>
            </div>
          </a>            
          <div class="product-info simpleCart_shelfItem">
            <div class="product-info-cust">
              <h4><?php echo $row['name']; ?></h4>
              <span class="item_price"><?php echo $row['price']; ?></span><br>
              <span><?php echo $row['quantity']; ?> items remaining</span>
              <input type="text" class="item_quantity" value="1" />
              <input type="button" class="item_add" value="ADD">
            </div>                          
            <div class="clearfix"> </div>
          </div>
          </div>      
          <!-- yaha samma -->
          <?php } }  ?>       
       </div>

     </div>       
     </div>
      <!-- tabs-box -->
      <!-- Comman-js-files -->
      <script>
      $(document).ready(function() {
        $("#tab2").hide();
        $("#tab3").hide();
        $(".tabs-menu a").click(function(event){
          event.preventDefault();
          var tab=$(this).attr("href");
          $(".tab-grid1,.tab-grid2,.tab-grid3").not(tab).css("display","none");
          $(tab).fadeIn("slow");
        });
        $("ul.tabs-menu li a").click(function(){
          $(this).parent().addClass("active a");
          $(this).parent().siblings().removeClass("active a");
        });
      });
      </script>
      <!-- Comman-js-files -->
   </div>
</div>
<!--fotter-->
<div class="fotter">
   <div class="container">
   <div class="col-md-6 contact">
      <form>
       <input type="text" class="text" value="Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name...';}">
       <input type="text" class="text" value="Username..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}">
       <textarea onfocus="if(this.value == 'Message...') this.value='';" onblur="if(this.value == '') this.value='Message...';" >Message...</textarea>  
       <div class="clearfix"></div>
       <input type="submit" value="SUBMIT">
     </form>

   </div>
   <div class="col-md-6 ftr-left">
     <div class="ftr-list">
       <ul>
         <li><a href="#">Home</a></li>
         <li><a href="about.html">About</a></li>
         <li><a href="blog.html">Blog</a></li>
         <li><a href="products.html">Top Seller</a></li>
         <li><a href="shop.html">New Models</a></li>
         <li><a href="404.html">Combos</a></li>
         <li><a href="products.html">Collection</a></li>
         <li><a href="contact.html">Contact</a></li>
       </ul>
     </div>
     <div class="ftr-list2">
       <ul>        
         <li><a href="#">Combos</a></li>
         <li><a href="#">Trendy</a></li>
         <li><a href="#">Fashion</a></li>
         <li><a href="#">College</a></li>
         <li><a href="#">Party</a></li>
         <li><a href="#">Dress</a></li>
         <li><a href="#">Kurtas & kurtis</a></li>
       </ul>
     </div>
     <div class="clearfix"></div>
     <h4>FOLLOW US</h4>
     <div class="social-icons">
     <a href="#"><span class="in"> </span></a>
     <a href="#"><span class="you"> </span></a>
     <a href="#"><span class="be"> </span></a>
     <a href="#"><span class="twt"> </span></a>
     <a href="#"><span class="fb"> </span></a>
     </div>
   </div>  
   <div class="clearfix"></div>
   </div>
</div>
<?php 
include "./includes/footer.php";
?>
</body>
</html>