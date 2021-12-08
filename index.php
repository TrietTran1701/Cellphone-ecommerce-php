<?php include('./processDB/createDB.php'); ?>

<?php
  require_once('./Utils/utility.php');
  require_once('./processDB/dbhelper.php');

  require_once('./layouts/header.php');


  $sql = "select _Product.*, _Category.name as category_name from _Product left join _Category on _Product.category_id = _Category.id order by _Product.updated_at desc limit 0,8";
  $lastestItems = executeResult($sql);
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="https://gokisoft.com/uploads/2021/03/s-568-ico-web.jpg" />
    <title>ATrietShop</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- app css -->
    <link rel="stylesheet" href="./assets/css/grid.css" />
    <link rel="stylesheet" href="./assets/css/app.css" />
  </head>

<body>
    <!-- hero section -->
  <div class="hero">
      <div class="slider">
          <div class="container">
              <!-- slide item -->
              <div class="slide active">
                  <div class="info">
                      <div class="info-content">
                          <h3 class="top-down">
                              IPHONE 12 PRO MAX
                          </h3>
                          <h2 class="top-down trans-delay-0-2">
                              Next-gen design
                          </h2>
                          <p class="top-down trans-delay-0-4">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolor commodi dignissimos culpa, eaque eos necessitatibus possimus veniam, cupiditate rerum deleniti? Libero, ducimus error? Beatae velit dolore sint explicabo! Fugit.
                          </p>
                          <div class="top-down trans-delay-0-6">
                              <button class="btn-flat btn-hover">
                                  <span>shop now</span>
                              </button>
                          </div>
                      </div>
                  </div>
                  <div class="img top-down">
                      <img src="https://images.fpt.shop/unsafe/fit-in/585x390/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2020/10/14/637382726336418025_ip-12-pro-max-xanh-1.png" alt="">
                  </div>
              </div>
              <!-- end slide item -->
              <!-- slide item -->
              <div class="slide">
                  <div class="info">
                      <div class="info-content">
                          <h3 class="top-down">
                              XIAOMI MI 10  
                          </h3>
                          <h2 class="top-down trans-delay-0-2">
                              Ipsum dolor
                          </h2>
                          <p class="top-down trans-delay-0-4">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. A optio, voluptatum aperiam nobis quis maxime corporis porro alias soluta sunt quae consectetur aliquid blanditiis perspiciatis labore cumque, ullam, quam eligendi!
                          </p>
                          <div class="top-down trans-delay-0-6">
                              <button class="btn-flat btn-hover">
                                  <span>shop now</span>
                              </button>
                          </div>
                      </div>
                  </div>
                  <div class="img right-left">
                      <img src="https://24hstore.vn/images/products/2020/02/17/large/xiaomi-mi-10-peach-gold_1581933045_1.jpg" alt="">
                  </div>
              </div>
              <!-- end slide item -->
              <!-- slide item -->
              <div class="slide">
                  <div class="info">
                      <div class="info-content">
                          <h3 class="top-down">
                              SAMSUNG GALAXY FOLD
                          </h3>
                          <h2 class="top-down trans-delay-0-2">
                              Consectetur Elit
                          </h2>
                          <p class="top-down trans-delay-0-4">
                              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo aut fugiat, libero magnam nemo inventore in tempora beatae officiis temporibus odit deserunt molestiae amet quam, asperiores, iure recusandae nulla labore!
                          </p>
                          <div class="top-down trans-delay-0-6">
                              <button class="btn-flat btn-hover">
                                  <span>shop now</span>
                              </button>
                          </div>
                      </div>
                  </div>
                  <div class="img left-right">
                      <img src="https://cdn1.viettelstore.vn/images/Product/ProductImage/medium/742587281.jpeg" alt="">
                  </div>
              </div>
              <!-- end slide item -->
          </div>
          <!-- slider controller -->
          <button class="slide-controll slide-next">
              <i class='bx bxs-chevron-right'></i>
          </button>
          <button class="slide-controll slide-prev">
              <i class='bx bxs-chevron-left'></i>
          </button>
          <!-- end slider controller -->
      </div>
  </div>
  <!-- end hero section -->

  <!-- promotion section -->
  <div class="promotion">
        <div class="row">
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>iPhone series</h3>
                        <!-- <button class="btn-flat btn-hover"><span>shop collection</span></button> -->
                    </div>
                    <img src="./assets/photos/iphone-13-pro-silver-600x600.jpg" alt="">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>Samsung series</h3>
                        <!-- <button class="btn-flat btn-hover"><span>shop collection</span></button> -->
                    </div>
                    <img src="./assets/photos/samsung-galaxy-a32-4g-thumb-tim-600x600-600x600.jpg" alt="">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>Xiaomi note series</h3>
                        <!-- <button class="btn-flat btn-hover"><span>shop collection</span></button> -->
                    </div>
                    <img src="./assets/photos/xiaomi-redmi-note-10-thumb-xam-200x200.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end promotion section -->


  <!-- latest product -->
<div class="section">
  <div class="container">
      <div class="section-header">
          <h2>Latest product</h2>
            </div>
            <div class="row" id="best-products">
                <?php
                        $count = 0;
                		foreach($lastestItems as $item) {
                            
                                echo '               
                      <div class="col-3 col-md-6 col-sm-12">
                      <div class="product-card">
                          <div class="product-card-img">
                          <a href="detail.php?id='.$item['id'].'">
                          <img src="'.$item['thumbnail'].'" alt="">
                          <img src="'.$item['thumbnail'].'" alt="">
                          </a>
                    
                          </div>
                          <div class="product-card-info">
                              <div class="product-btn">
                                  <a class="btn-flat btn-hover btn-shop-now " href="detail.php?id='.$item['id'].'">shop now</a>
                                  <button class="btn-flat btn-hover btn-cart-add" onclick="addCart1('.$item['id'].', 1)">
                                      <i class="bx bxs-cart-add"></i>
                                  </button>
                              </div>
                              <div class="product-card-name">
                              <a href="detail.php?id='.$item['id'].'"><p style="font-weight: bold;">'.$item['title'].'</p></a>
                              </div>
                              <div class="product-card-price">
                              <p style="color: red; font-weight: bold;">'.number_format($item['discount']).' VND</p>
                              </div>
                          </div>
                      </div>
                  </div>';
    

                            
                			$count++;
                		}
                	?>

                  
            </div>
        <div class="section-footer">
                <a href="./category.php" class="btn-flat btn-hover">view all</a>
        </div>
  </div>
</div>
<!-- end latest product -->

<!-- best selling -->








<?php
$countItem = 0;
$temp_id;
foreach($menuItems as $item) {
    $countItem++;
	$sql = "select _Product.*, _Category.name as category_name from _Product left join _Category on _Product.category_id = _Category.id where _Product.category_id = ".$item['id']." order by _Product.updated_at desc limit 0,4";
	$items = executeResult($sql);
	if($countItem > 4) break;
    $temp_id = $item['id'];

?>
<div class="section">
  <div class="container">
      <div class="section-header">
          <h2><?=$item['name']?></h2>
            </div>
            <div class="row" id="best-products">


            <?php
                        $count = 0;
                		foreach($items as $pItem) {

                            if($count<4)
                            {

                                echo '               
                                <div class="col-3 col-md-6 col-sm-12">
                                <div class="product-card">
                                    <div class="product-card-img card-scroll">
                                    <a href="detail.php?id='.$pItem['id'].'">
                                    <img src="'.$pItem['thumbnail'].'" alt="">
                                    <img src="'.$pItem['thumbnail'].'" alt="">
                                    </a>
                              
                                    </div>
                                    <div class="product-card-info">
                                        <div class="product-btn">
                                            <a class="btn-flat btn-hover btn-shop-now " href="detail.php?id='.$pItem['id'].'">shop now</a>
                                            <button class="btn-flat btn-hover btn-cart-add" onclick="addCart1('.$pItem['id'].', 1)">
                                            <i class="bx bxs-cart-add"></i>
                                        </button>
                                        </div>
                                        <div class="product-card-name">
                                        <a href="detail.php?id='.$pItem['id'].'"><p style="font-weight: bold;">'.$pItem['title'].'</p></a>
                                        </div>
                                        <div class="product-card-price">
                                        <p style="color: red; font-weight: bold;">'.number_format($pItem['discount']).' VND</p>
                                        </div>
                                    </div>
                                </div>
                            </div>';

                            }
                           
                            $count++;
                		}
                	?>
                </div>
        </div>
</div>

<?php
echo'
<div class="section-footer">
<a  href="category.php?id='.$temp_id.'" class="btn-flat btn-hover">view all</a>
</div>';
}

?>
                
   <!-- app js -->
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/index.js"></script>
    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="./assets/js/scroll.js"></script>

  </body>
</html>

<script type="text/javascript">
	function addCart1(productId, num) {
		$.post('./ajax_request.php', {
			'action': 'cart',
			'id': productId,
			'num': num
		}, function(data) {
			location.reload()
		})
	}
</script>

<?php
require_once('layouts/footer.php');
?>