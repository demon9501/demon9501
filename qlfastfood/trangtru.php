<?php

require_once ('../admin/db/dbhelper.php');
require_once("../admin/login1/Login_v1/1.php");

?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>Welcome to FlatShop</title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
      <link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="css/style.css" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="index.html"><img src="images/" alt="Fastfood"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                         <div class="row">
                           <div class="col-md-6"style="margin-right:200px">
                              <ul class="topmenu">
                                
                                 <li>
                                    <a> Wellcome
                                     <?php
                                    if(isset($_SESSION["username"])){
                                       echo strtoupper($_SESSION["username"]) ;
                                   }
                                    ?>
                                 </a>
                                 </li>
                                  
                                 <li><a href="logout.php?module=logout">Logout</a></li>
                              </ul>
                           </div>
                          
                                                        <div class="col-md-3">
                              <ul class="usermenu">
                                                 
                                                      
                                            
                                 <li><a href="../admin/login1/Login_v1/index.php" class="log">Đăng nhập</a></li>
                                        
                                 <li><a href="../admin/login1/Login_v1/dangky.php" class="reg">Đăng kí</a></li>
                              </ul>
                           </div>
                        
                                             </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Tìm sản phẩm" type="text" value="" name="search"></form>
                           </li>
                           <li class="option-cart">
                    <a href="#" class="cart-icon">
                      cart 
                      <span class="cart_no">
                        02
                      </span>
                    </a>
                    <ul class="option-cart-item">
                      <li>
                        <div class="cart-item">
                          <div class="image">
                            <img src="images/products/thum/products-01.png" alt="">
                          </div>
                          <div class="item-description">
                            <p class="name">
                              Lincoln chair
                            </p>
                            <p>
                              Size: 
                              <span class="light-red">
                                One size
                              </span>
                              <br>
                              Quantity: 
                              <span class="light-red">
                                01
                              </span>
                            </p>
                          </div>
                          <div class="right">
                            <p class="price">
                              $30.00
                            </p>
                            <a href="#" class="remove">
                              <img src="images/remove.png" alt="remove">
                            </a>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="cart-item">
                          <div class="image">
                            <img src="images/products/thum/products-02.png" alt="">
                          </div>
                          <div class="item-description">
                            <p class="name">
                              Lincoln chair
                            </p>
                            <p>
                              Size: 
                              <span class="light-red">
                                One size
                              </span>
                              <br>
                              Quantity: 
                              <span class="light-red">
                                01
                              </span>
                            </p>
                          </div>
                          <div class="right">
                            <p class="price">
                              $30.00
                            </p>
                            <a href="#" class="remove">
                              <img src="images/remove.png" alt="remove">
                            </a>
                          </div>
                        </div>
                      </li>
                      <li>
                        <span class="total">
                          Total 
                          <strong>
                            $60.00
                          </strong>
                        </span>
                        <button class="checkout" onClick="location.href='checkout.html'">
                          CheckOut
                        </button>
                      </li>
                    </ul>
                  </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="active dropdown">
                                
                                 <div class="dropdown-menu">
                                    <ul class="mega-menu-links">
                                    </ul>
                                 </div>
                              </li>
                              <li><a href="trangtru.php">HOME</a></li>
                              <li><a href="#">ĐỒ ĂN NHANH</a></li>
                              <li><a href="#">NƯỚC UỐNG</a></li>
                              <li class="dropdown">

                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">COMBO</a>
                                 <div class="dropdown-menu mega-menu">
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <?php
//Lay danh sach danh muc tu database
                                          $sql          = 'select *  from category ';
                                          $name = executeResult($sql);
                                        
                                          foreach ($name as $item) {
                                             echo '<tr>                                                    
                                                      <li><a href="listproduct.php?id= '.$item['id'].'"> '.$item['name'].'</a></li>                  
                                                      
                                                   </tr>';
                                          }
                                          ?>
                                             
                                            
                                          </ul>
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <li><a href="productgird.html"></a></li>
                                             <li><a href="productgird.html"></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li><a href="#">DỊCH VỤ</a>
                              <li><a href="cart.php">THANHT TOÁN</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">COMBO ĐẶC BIỆT</span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1></h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>.<br></p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">Xem chi tiết combo</a></div>
                        <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="images/thucannhanh.jpg" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400">
                           <h1>COMBO Mùa Đông </h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500">
                           <h2><br></h2>
                        </div>
                        <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">Đặt Món Ngay</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="images/bophomai.jpg" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Món Ăn Nên Trải Nghiệm</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Bò Phô Mai Siêu Kay. <br>Bò Phô Mai Phiên Bản Đặc Biệt</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">Đặt Món Ngay</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="images/bpm.jpg" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="promotion-banner">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="images/products/small1.jpg" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="images/products/small2.jpg" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="images/products/mall3.jpg" alt=""></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title">COMBO <strong>Special</strong> </h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>
                     </div>
                        <div class="row">
                           
                                  <?php
//Lay danh sach danh muc tu database
    $sql     = 'SELECT price,product.id,thumbnail,title,category.name category_name FROM product left join category on product.id_category = category.id ';
      $index = 1;
          $thumbnail = executeResult($sql);
     foreach ($thumbnail as $items) {
         echo '<tr>  
       <div class="col-md-3 col-sm-6"> 
    <div class="products">                                                                                            
           <div class="thumbnail"><a href="details.php?id= '.$items['id'].'"> <img src="'.$items['thumbnail'].'" /></a></div>   
          <div class="productname"><a href="details.php? '.$items['id'].'">'.$items['category_name'].'</a></div>  
           <h4 class="price">'.$items['price'].'$</h4>
           <div class="button_group"><button class="button add-cart" type="button">Đặt món</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                  </div>
                   </div>
                                                
                            </tr>';
                                          }
                                        ?>  
                             
                           
                          
                           </div>
                      
                     </li>
                     <li>
					
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>Featured </strong> Products</h3>
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                     </li>
                     <li>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="our-brand">
                  <h3 class="title">Cửa hàng của chúng tôi</h3>
                  <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
                  <ul id="braldLogo">
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="footer">
            <div class="footer-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="footer-logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Contact <strong>Info</strong></h4>
                        <p>No. 08, Nguyen Trai, Hanoi , Vietnam</p>
                        <p>Call Us : (084) 1900 1008</p>
                        <p>Email : michael@leebros.us</p>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Customer<strong> Support</strong></h4>
                        <ul class="support">
                           <li><a href="#">FAQ</a></li>
                           <li><a href="#">Payment Option</a></li>
                           <li><a href="#">Booking Tips</a></li>
                           <li><a href="#">Infomation</a></li>
                        </ul>
                     </div>
                     <div class="col-md-3">
                        <h4 class="title">Get Our <strong>Newsletter </strong></h4>
                        <p>Lorem ipsum dolor ipsum dolor.</p>
                        <form class="newsletter">
							<input type="text" name="" placeholder="Type your email....">
							<input type="submit" value="SignUp" class="button">
						</form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <p>Copyright © 2012. Designed by <a href="#">Michael Lee</a>. All rights reseved</p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social-icon">
                           <li><a href="#" class="linkedin"></a></li>
                           <li><a href="#" class="google-plus"></a></li>
                           <li><a href="#" class="twitter"></a></li>
                           <li><a href="#" class="facebook"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript==================================================-->
	  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/jquery.sequence-min.js"></script>
	  <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript" src="js/script.min.js" ></script>
   </body>
</html>