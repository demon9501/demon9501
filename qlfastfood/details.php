<?php
require_once ('D:/xampp/htdocs/webbanhang/admin/db/dbhelper.php');
?>  
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="trangtru.php">
    <title>
      Welcome to FlatShop
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>
<![endif]-->
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-sm-2">
              <div class="logo">
                <a href="trangtru.php">
                  <img src="images/logo.png" alt="FlatShop">
                </a>
              </div>
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
              <div class="clearfix">
              </div>
              <div class="header_bottom">
                <ul class="option">
                  <li id="search" class="search">
                    <form>
                      <input class="search-submit" type="submit" value="">
                      <input class="search-input" placeholder="Enter your search term..." type="text" value="" name="search">
                    </form>
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
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">
                      Toggle navigation
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                  </button>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li class="active dropdown">
                      <a href="trangtru.php">
                        Home
                      </a>
                      
                    </li>
                    <li>
                      <a href="productgird.html">
                        men
                      </a>
                    </li>
                    <li>
                      <a href="productlitst.html">
                        women
                      </a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        combo
                      </a>
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
                          
                        </div>
                      </div>
                    </li>
                    <li>
                      <a href="productgird.html">
                        gift
                      </a>
                    </li>
                    <li>
                      <a href="productgird.html">
                        kids
                      </a>
                    </li>
                    <li>
                      <a href="contact.html">
                        contact us
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="page-index">
          
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
                <?php
        
  
       $sql     = 'SELECT price,product.id,thumbnail,title,category.name category_name FROM product left join category on product.id_category = category.id WHERE product.id = '.$_GET['id'].'';
          $thumbnail = executeResult($sql);
     foreach ($thumbnail as $item) {
         echo '<tr> 
                <div class="preview_image">
                  <div class="preview-small">
                    <img src="'.$item['thumbnail'].'" />
                  </div>                
                </div>
                 

                <div class="products-description">
                  <h5 class="name">
                   <a> '.$item['category_name'].'</a>
                  </h5>
                  <p>
                    <img alt="" src="images/star.png">
                    <a class="review_num" href="#">
                      02 Review(s)
                    </a>
                  </p>
                  <p>
                    Availability: 
                    <span class=" light-red">
                      In Stock
                    </span>
                  </p>
                  <p>
                    '.$item['title'].'
                  </p>
                  <hr class="border">
                  <div class="price">
                    Price : 
                    <span class="new_price">
                     <a> '.$item['price'].'</a>
                      <sup>
                        $
                      </sup>
                    </span>
                     </tr>';
                                          }
                                        ?>  
                  </div>
                  <hr class="border">
                  <div class="wided">
                    <div class="qty">
                      Qty &nbsp;&nbsp;: 
                      <select>
                        <option>
                          1
                        </option>
                      </select>
                    </div>
                    <div class="button_group">
                    <form  id="add-to-cart-form" action="cart.php?action=add" method="POST">
                        <input type="text" value="1" name="quantity[<?=$product['id']?>]" size="2" /><br/>
                        <input class ="button" type="submit" value="Mua sản phẩm" />
                    </form>

                      <button class="button compare">
                        <i class="fa fa-exchange">
                        </i>
                      </button>
                      <button class="button favorite">
                        <i class="fa fa-heart-o">
                        </i>
                      </button>
                      <button class="button favorite">
                        <i class="fa fa-envelope-o">
                        </i>
                      </button>
                    </div>
                  </div>
                  
                  <hr class="border">
                 
                </div>
                 
              </div>

             
                
                  
              
                 
                </div>
              </div>
              
    
            <ul id="braldLogo">
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="footer">
        <div class="footer-info">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="footer-logo">
                  <a href="#">
                    <img src="images/logo.png" alt="">
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <h4 class="title">
                  Contact 
                  <strong>
                    Info
                  </strong>
                </h4>
                <p>
                  No. 08, Nguyen Trai, Hanoi , Vietnam
                </p>
                <p>
                  Call Us : (084) 1900 1008
                </p>
                <p>
                  Email : michael@leebros.us
                </p>
              </div>
              <div class="col-md-3 col-sm-6">
                <h4 class="title">
                  Customer
                  <strong>
                    Support
                  </strong>
                </h4>
                <ul class="support">
                  <li>
                    <a href="#">
                      FAQ
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Payment Option
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Booking Tips
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Infomation
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-3">
                <h4 class="title">
                  Get Our 
                  <strong>
                    Newsletter 
                  </strong>
                </h4>
                <p>
                  Lorem ipsum dolor ipsum dolor.
                </p>
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
                <p>
                  Copyright © 2012. Designed by 
                  <a href="#">
                    Michael Lee
                  </a>
                  . All rights reseved
                </p>
              </div>
              <div class="col-md-6">
                <ul class="social-icon">
                  <li>
                    <a href="#" class="linkedin">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="google-plus">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="facebook">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript==================================================-->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js">
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js">
    </script>
    <script type="text/javascript" src='js/jquery.elevatezoom.js'>
    </script>
    <script type="text/javascript" src="js/script.min.js" >
    </script>
  </body>
</html>