 <!-- footer -->

 <style>
     a{
         text-decoration: none;!important
     }
 </style>
 <footer class="bg-second">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">Products</h3>
                    <ul class="menu">
                        <li><a href="#" style="text-decoration: none; color: #000000;">Help center</a></li>
                        <li><a href="#" style="text-decoration: none; color: #000000;">Contact us</a></li>
                        <li><a href="#" style="text-decoration: none; color: #000000;">product help</a></li>
                        <li><a href="#" style="text-decoration: none; color: #000000;">warranty</a></li>
                        <li><a href="#" style="text-decoration: none; color: #000000;">order status</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">services</h3>
                    <ul class="menu">
                        <li><a href="#" style="text-decoration: none; color: #000000;">Help center</a></li>
                        <li><a href="#" style="text-decoration: none; color: #000000;">Contact us</a></li>
                        <li><a href="#" style="text-decoration: none; color: #000000;">product help</a></li>
                        <li><a href="#" style="text-decoration: none; color: #000000;">warranty</a></li>
                        <li><a href="#" style="text-decoration: none; color: #000000;">order status</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">support</h3>
                    <ul class="menu">
                        <li><a href="#" style="text-decoration: none; color: #000000;">Help center</a></li>
                        <li><a href="#" style="text-decoration: none; color: #000000;">Contact us</a></li>
                        <li><a href="#" style="text-decoration: none; color: #000000;">product help</a></li>
                        <li><a href="#" style="text-decoration: none; color: #000000;">warranty</a></li>
                        <li><a href="#" style="text-decoration: none; color: #000000;">order status</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3 class="contact-header">
                            Group3Shop
                        </h3>
                        <ul class="contact-socials">
                            <li><a href="#"  style="color: #000000;">
                                    <i class='bx bxl-facebook-circle'></i>
                                </a></li>
                            <li><a href="#"  style="color: #000000;">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a></li>
                            <li><a href="#"  style="color: #000000;">
                                    <i class='bx bxl-youtube'></i>
                                </a></li>
                            <li><a href="#"  style="color: #000000;">
                                    <i class='bx bxl-twitter'></i>
                                </a></li>
                        </ul>
                    </div>
                    <div class="subscribe">
                        <input type="email" placeholder="ENTER YOUR EMAIL">
                        <button>subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <?php
if(!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = [];
}
$count = 0;
// var_dump($_SESSION['cart']);
foreach($_SESSION['cart'] as $item) {
	$count += $item['num'];
}
?>
<script type="text/javascript">
	function addCart(productId, num) {
		$.post('./ajax_request.php', {
			'action': 'cart',
			'id': productId,
			'num': num
		}, function(data) {
			location.reload()
		})
	}
</script>
<!-- Cart start -->
<span class="cart_icon">
	<span class="cart_count" style="color: #ffffff;"><?=$count?></span>
	<a href="cart.php"><img src="assets/photos/cart.png"></a>
</span>
<!-- Cart stop -->

</body>
</html>