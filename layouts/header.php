<?php
  session_start();
  require_once('./Utils/utility.php');
  require_once('./processDB/dbhelper.php');

	$sql = "select * from _Category";
	$menuItems = executeResult($sql);

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group3Shop</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- app css -->
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/app.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="./assets/js/index1.css">
    <link rel="stylesheet" href="./assets/js/app1.css">

</head>

<style>
  .cart_icon{
    position: fixed;
    z-index: 999999;
    right: 0px;
    top: 55%;
    display: flex;
  }
  .cart_icon img{
    width: 50px;
  }
  .cart_icon .cart_count{
    background-color: red;
    color: while;
    font-size: 16px;
    padding: 5px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 2px;
    padding-bottom: 3px;
    border-radius: 8px;
    font-weight: bold;
    /* position: relative;
    top: 0px;
    bottom: 0px; */
    position: fixed;
    right: 40px;
  }

  .s-box {
	width: 580px;
	margin: 0px auto;
	/* position: relative; */
	/* margin-top: -6px; */
  margin-bottom: 50px;
	text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
}
.s-box .s-input {
	display: block;
	border: 1px solid #ddd;
	color: rgba(0,0,0, 0.87);
	font-size: 16px;
	padding: 13px;
	padding-left: 45px;
	border-radius: 25px;
	width: 100%;
	transition: box-shadow 100ms;
	outline: none;
  margin-right: 30px;
}
.s-box  .s-input:focus {
	border: 1px solid #fff;
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
	box-shadow: 0 0 2px rgba(0, 0, 0, 0.05), 
				0 0 2px rgba(0, 0, 0, 0.05),
				0 0 3px rgba(0, 0, 0, 0.05),
				0 0 4px rgba(0, 0, 0, 0.05), 
				0 0 5px rgba(0, 0, 0, 0.05), 
				0 0 4px rgba(0, 0, 0, 0.05), 
				0 0 5px rgba(0, 0, 0, 0.05)
}
.s-box .search-icon {
  width: 20px;
  opacity: 0.4;
  position: absolute;
  top: 13px;
  left: 14px;
}

.s-btn {
	border: 1px solid transparent;
	padding: 9px 15px;
	color: #000;
	font-size: 14px;
	border-radius: 10px;
	display: inline-block;
	margin-right: 10px;
	margin-top: 8px;
	outline: none;
	cursor: pointer;
	transition: border-color 100ms;
}
.s-btn:hover {
	border: 1px solid #aaa;
}

.dropdown-search {
  display: none;
  background: #fff;
  position: absolute;
  width: 60%;
  top: 47px;
  border-radius: 30px;
  padding: 20px;
  margin-top: 18px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.05), 0 0 2px rgba(0, 0, 0, 0.05),
    0 0 3px rgba(0, 0, 0, 0.05), 0 0 4px rgba(0, 0, 0, 0.05),
    0 0 5px rgba(0, 0, 0, 0.05), 0 0 4px rgba(0, 0, 0, 0.05),
    0 0 5px rgba(0, 0, 0, 0.05);
    z-index: 2;
}
.dropdown-search li {
  list-style: none;
  text-align: left;
}
.dropdown-search li a {
  display: block;
  padding: 8px;
  text-decoration: none;
  color: #222;
  font-size: 18px;
  font-weight: bold;
}
.dropdown-search li a:hover {
  background: #eee;
}

</style>

<body>

  <!-- header -->
  <header>
        <div class="mobile-menu bg-second">
            <a href="index.php" class="mb-logo">Group3</a>
            <span class="mb-menu-toggle" id="mb-menu-toggle">
                <i class='bx bx-menu'></i>
            </span>
        </div>
        <!-- end mobile menu -->
      <!-- main header -->
      <div class="header-wrapper" id="header-wrapper">
        <span class="mb-menu-toggle mb-menu-close" id="mb-menu-close">
          <i class="bx bx-x"></i>
        </span>

        <!-- mid header -->
        <div class="bg-main">
          <div class="mid-header container">
            <a href="index.php" class="logo" style="text-decoration: none; 
                                color: #000000;" >Group3Shop</a>
      	  <form><br><br>
      		  <div class="s-box" >
            <input type="text" 
                               id="input" 
                               autocomplete="off"
                               class="s-input">

            
          

                <ul class="dropdown-search" id="dropdown-search"></ul>
      		  </div>
        	</form>
            <ul class="user-menu">
              <li>
                <a href="#"><i class="bx bx-bell" style="color: #000000;"></i></a>
              </li>
              <li>
                <a href="#"><i class="bx bx-user-circle" style="color: #000000;"></i></a>
              </li>
              <li>
                <a href="cart.php"><i class="bx bx-cart" style="color: #000000;"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <!-- end mid header -->
        <!-- bottom header -->
        <div class="bg-second">
          <div class="bottom-header container">
            <ul class="main-menu">
              <li><a href="index.php" style="text-decoration: none; color: #000000;">home</a></li>
              <!-- mega menu -->
              <li class="mega-dropdown">
                <a href="category.php" style="text-decoration: none; color: #000000;"
                  >Shop<i class="bx bxs-chevron-down"></i
                ></a>
                <div class="mega-content">
                  <div class="row">
                    <div class="col-3 col-md-12">
                      <div class="box">
                        <h3>Categories</h3>
                        <ul>
                     <?php
	  	                foreach($menuItems as $item) {
	  		                  echo '<li class="nav-item">
				                        <a class="nav-link" 
                                style="text-decoration: none; 
                                color: #000000;
                                "
                                href="category.php?id='.$item['id'].'">'.$item['name'].'</a>
				                          </li>';
	  	                    }
	                    ?>
                        </ul>
                      </div>

                      
                    </div>
                  </div>
                  
                </div>
              </li>
              <!-- end mega menu -->
              <li><a href="contact.php" style="text-decoration: none; color: #000000;">contact</a></li>
              <li><a href="./admin/authen/login.php" style="text-decoration: none; color: #000000;">login</a></li>
              <li><a href="./admin/authen/register.php" style="text-decoration: none; color: #000000;">sign-up</a></li>
            </ul>
          </div>
        </div>
        <!-- end bottom header -->
      </div>
      <!-- end main header -->
    </header>
    <!-- end header -->

</body>

<script>
  document.querySelectorAll('.dropdown > a').forEach(e => {
    e.addEventListener('click', (event) => event.preventDefault())
})

document.querySelectorAll('.mega-dropdown > a').forEach(e => {
    e.addEventListener('click', (event) => event.preventDefault())
})

document.querySelector('#mb-menu-toggle').addEventListener('click', () => document.querySelector('#header-wrapper').classList.add('active'))

document.querySelector('#mb-menu-close').addEventListener('click', () => document.querySelector('#header-wrapper').classList.remove('active'))


$(document).ready(function () {
        function fetchData() {
          var s = $("#input").val();

          if (s == "") {
            $("#dropdown-search").css("display", "none");
          }
          $.post(
            "./Utils/auto_complet.php",
            {
              s: s,
            },
            function (data, status) {
              if (data != "not found") {
                $("#dropdown-search").css("display", "block");
                $("#dropdown-search").html(data);
              }
            }
          );
        }
        $("#input").on("input", fetchData);
        $("body").on("click", () => {
          $("#dropdown-search").css("display", "none");
        });
        $("#input").on("click", fetchData);
      });


</script>