<?php

require_once ('D:/xampp/htdocs/webbanhang/admin/db/dbhelper.php');

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
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
               
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container shopping-cart">
          <div class="row">
            <div class="col-md-12">
              <h3 class="title">
                Shopping Cart
              </h3>
              <div class="clearfix">
              </div>
              <table class="shop-table">
                <thead>
                  <tr>
                    <th>
                      Image
                    </th>
                    <th>
                      Dtails
                    </th>
                    <th>
                      Price
                    </th>
                    <th>
                      Quantity
                    </th>
                    <th>
                      Price
                    </th>
                    <th>
                      Delete
                    </th>
                  </tr>
                </thead>
                <tbody>
                  
                  
                  <tr>
                    <td>
                      <img src="images/products/small/products-05.png" alt="">
                    </td>
                    <td>
                      <div class="shop-details">
                        <div class="productname">
                          Lincoln Corner Unit Products
                        </div>
                        <p>
                          <img alt="" src="images/star.png">
                          <a class="review_num" href="#">
                            02 Review(s)
                          </a>
                        </p>
                        <div class="color-choser">
                          <span class="text">
                            Product Color : 
                          </span>
                          <ul>
                            <li>
                              <a class="red-bg" href="#">
                                light red
                              </a>
                            </li>
                            <li>
                              <a class=" yellow-bg" href="#">
                                yellow"
                              </a>
                            </li>
                            <li>
                              <a class="black-bg " href="#">
                                black
                              </a>
                            </li>
                            <li>
                              <a class="pink-bg" href="#">
                                pink
                              </a>
                            </li>
                          </ul>
                        </div>
                        <p>
                          Product Code : 
                          <strong class="pcode">
                            Dress 050
                          </strong>
                        </p>
                      </div>
                    </td>
                    <td>
                      <h5>
                        $200.00
                      </h5>
                    </td>
                    <td>
                      <select name="">
                        <option selected value="1">
                          1
                        </option>
                        <option value="2">
                          2
                        </option>
                        <option value="3">
                          3
                        </option>
                      </select>
                    </td>
                    <td>
                      <h5>
                        <strong class="red">
                          $200.00
                        </strong>
                      </h5>
                    </td>
                    <td>
                      <a href="#">
                        <img src="images/remove.png" alt="">
                      </a>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="6">
                      <button class="pull-left">
                        Continue Shopping
                      </button>
                      <button class=" pull-right">
                        Update Shopping Cart
                      </button>
                    </td>
                  </tr>
                </tfoot>
              </table>
              <div class="clearfix">
              </div>
              
                
                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    <div class="subtotal">
                      <h5>
                        Sub Total
                      </h5>
                      <span>
                        $1.000.00
                      </span>
                    </div>
                    <div class="grandtotal">
                      <h5>
                        GRAND TOTAL 
                      </h5>
                      <span>
                        $1.000.00
                      </span>
                    </div>
                    <button>
                      Process To Checkout
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
          <div class="our-brand">
            <h3 class="title">
              <strong>
                Our 
              </strong>
              Brands
            </h3>
            <div class="control">
              <a id="prev_brand" class="prev" href="#">
                &lt;
              </a>
              <a id="next_brand" class="next" href="#">
                &gt;
              </a>
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
    <script type="text/javascript" src="js/script.min.js" >
    </script>
  </body>
</html>