
<?php
use app\database\models\Category;
use app\database\models\Subcategory;
 // call object of class subcategories
 $subObject = new Subcategory;
// call object of class categories
$catObject = new Category;
$result = $catObject->all("id,name_en");
if($result->num_rows  >=1){
    $categories = $result->fetch_all(MYSQLI_ASSOC);
}else
{
    $categories =[];
}


?>

 <!-- header start -->
   <header class="header-area gray-bg clearfix">
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="logo">
                                <a href="index.php">
                                    <img alt="" src="assets/img/logo/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-6">
                            <div class="header-bottom-right">
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li class="top-hover"><a href="index.php">home</a>       </li>
                                            <li><a href="about-us.php">about</a></li>
                                            <li class="mega-menu-position top-hover"><a href="shop.php">shop</a>
                                                <ul class="mega-menu">
                                                            <?php foreach($categories As $category) {  
                                                                            $subObject->setCategory_id($category['id']);
                                                                            $subResult = $subObject->getSubcategory();

                                                                            if($subResult->num_rows  >=1){
                                                                                $subcategories = $subResult->fetch_all(MYSQLI_ASSOC);
                                                                            }else
                                                                            {
                                                                                $subcategories =[];
                                                                            }     
                                                                        

                                                                ?> 
                                                                <li>
                                                                <ul>
                                                            <li ><a class="mega-menu-title" href="shop.php?cat=<?= $category['id'] ?>"><?= $category['name_en'] ?></a></li>
                                                            <?php foreach($subcategories As $subcategory) {?> 
                                                            <li><a href="shop.php?subcat=<?= $subcategory['id'] ?>"><?= $subcategory['name_en'] ?></a></li>
                                                            <?php }?>
                                                        </ul>
                                                    </li> 
                                                    <?php }?>
                                                   
                                                </ul>
                                            </li>
                                          
                                           
                                            <li><a href="contact.php">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
								<div class="header-currency">
									<span class="digit">Hello <i class="ti-angle-down"></i></span>
									<div class="dollar-submenu">
										<ul>
											<li><a href="login.php">Login</a></li>
											<li><a href="register.php">Register</a></li>
										
										</ul>
									</div>
								</div>
                                <div class="header-cart">
                                    <a href="#">
                                        <div class="cart-icon">
                                            <i class="ti-shopping-cart"></i>
                                        </div>
                                    </a>
                                    <div class="shopping-cart-content">
                                        <ul>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="assets/img/cart/cart-1.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Phantom Remote </a></h4>
                                                    <h6>Qty: 02</h6>
                                                    <span>$260.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="ion ion-close"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="assets/img/cart/cart-2.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Phantom Remote</a></h4>
                                                    <h6>Qty: 02</h6>
                                                    <span>$260.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="ion ion-close"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-total">
                                            <h4>Shipping : <span>$20.00</span></h4>
                                            <h4>Total : <span class="shop-total">$260.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            <a href="cart-page.php">view cart</a>
                                            <a href="checkout.php">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="menu-overflow">
                                    <li><a href="#">HOME</a> </li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="about-us.php">about us </a></li>
                                            <li><a href="shop.php">shop Grid</a></li>
                                            <li><a href="shop-list.php">shop list</a></li>
                                            <li><a href="product-details.php">product details</a></li>
                                            <li><a href="cart-page.php">cart page</a></li>
                                            <li><a href="checkout.php">checkout</a></li>
                                            <li><a href="wishlist.php">wishlist</a></li>
                                            <li><a href="my-account.php">my account</a></li>
                                            <li><a href="login-register.php">login / register</a></li>
                                            <li><a href="contact.php">contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.php"> Shop </a>
                                        <ul>
                                            <li><a href="#">Categories 01</a>
                                                <ul>
                                                    <li><a href="shop.php">Aconite</a></li>
                                                    <li><a href="shop.php">Ageratum</a></li>
                                                    <li><a href="shop.php">Allium</a></li>
                                                    <li><a href="shop.php">Anemone</a></li>
                                                    <li><a href="shop.php">Angelica</a></li>
                                                    <li><a href="shop.php">Angelonia</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Categories 02</a>
                                                <ul>
                                                    <li><a href="shop.php">Balsam</a></li>
                                                    <li><a href="shop.php">Baneberry</a></li>
                                                    <li><a href="shop.php">Bee Balm</a></li>
                                                    <li><a href="shop.php">Begonia</a></li>
                                                    <li><a href="shop.php">Bellflower</a></li>
                                                    <li><a href="shop.php">Bergenia</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Categories 03</a>
                                                <ul>
                                                    <li><a href="shop.php">Caladium</a></li>
                                                    <li><a href="shop.php">Calendula</a></li>
                                                    <li><a href="shop.php">Carnation</a></li>
                                                    <li><a href="shop.php">Catmint</a></li>
                                                    <li><a href="shop.php">Celosia</a></li>
                                                    <li><a href="shop.php">Chives</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Categories 04</a>
                                                <ul>
                                                    <li><a href="shop.php">Daffodil</a></li>
                                                    <li><a href="shop.php">Dahlia</a></li>
                                                    <li><a href="shop.php">Daisy</a></li>
                                                    <li><a href="shop.php">Diascia</a></li>
                                                    <li><a href="shop.php">Dusty Miller</a></li>
                                                    <li><a href="shop.php">Dame’s Rocket</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                 
                                    <li><a href="contact.php"> Contact us </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		<!-- header end -->