<?php
use app\database\models\User;
use app\database\models\Product;
use app\database\models\Review;


            $title = 'product-details';
            $links = "<link rel='stylesheet' href='assets/css/rating.css'>";
         include_once "layouts/header.php";
         include_once "layouts/nav.php";
         include_once "layouts/bread-crump.php";

        //  code for insert review 
        
        //note that review add for all user (!authentication) because user's bage isn't complete 
       
        //  $objUser = new User;
        //  $objUser->setId($_post['user']); 
        //  $productObject->setId($_GET['product']); 
        //  $objReview = new Review ;
        // $findReviews = $objReview->insertReview();
        // print_r($findReviews);die;
        // if( $findReviews ){}



    if(isset($_GET['product']))
    {
        if(is_numeric($_GET['product']))
        {   $productObject= new Product; 
               $productObject->setId($_GET['product']); 
            $findproductResult = $productObject->allProducts("WHERE `products`.`status` = 1 AND `products`.`id` = {$_GET['product']}");
                if($findproductResult->num_rows ==1)
                {

                   $product = $findproductResult->fetch_object();
                    
                }else{
                  
            header('location:errors/404.php');die;
        }
       
        }else{
            header('location:errors/404.php');die;
        }
    }else
    {
        header('location:errors/404.php');die;
    }
     ?>
		<!-- Product Deatils Area Start -->
        <div class="-details pt-100 pb-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="product-details-img">
                            <img class="zoompro" src="assets/img/product/<?= $product->image ?>" data-zoom-image="assets/img/product/<?= $product->image ?>" alt="zoom"/>
                            
                            <span>-29%</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="product-details-content">
                            <h4><?= $product->name_en?></h4>
                            <div class="rating-review">
                            <div class="pro-dec-rating">
                            <?php for ($i =1; $i <= $product->reviews_avg; $i++) { ?>
                                <i class="ion-android-star-outline theme-star"></i>
                            <?php }
                            for ($i = 1; $i <= (5 - $product->reviews_avg); $i++) { ?>
                                <i class="ion-android-star-outline"></i>
                            <?php } ?>
                        </div>
                                <div class="pro-dec-review">
                                    <ul>
                                        <li><?= $product->reviews_count ?></li>
                                        <li> Add Your Reviews</li>
                                    </ul>
                                </div>
                            </div>
                            <span><?= $product->price?></span>
                            <div class="in-stock">
                                <?php
                                        if($product->quantity >=1 && $product->quantity <=10)
                                        {
                                            $message = "In stock ((Exists only { $product->quantity} of pieces))";
                                            $color = "warning";
                                        }else if($product->quantity >10)
                                        {
                                            $message = "In stock  ((Exists  { $product->quantity} of pieces ))";
                                            $color = "success";
                                        }else{
                                            $message = "Out of stock" ; 
                                            $color = "danger";
                                        }
                                ?>
                                <p>Available: <span class="text-<?= $color ?>"><?= $message ?></span></p>
                            </div>
                            <p> <?= $product->des_en ?></p>
                         
                          <?php if($product->quantity >=1){?>
                        
                            <div class="quality-add-to-cart">
                                <div class="quality">
                                    <label>Qty:</label>
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                </div>
                                <div class="shop-list-cart-wishlist">
                                    <a title="Add To Cart" href="#">
                                        <i class="icon-handbag"></i>
                                    </a>
                                    <a title="Wishlist" href="#">
                                        <i class="icon-heart"></i>
                                    </a>
                                </div>
                            </div>
                        <?php }?>
                          
                        
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Product Deatils Area End -->
        <div class="description-review-area pb-70">
            <div class="container">
                <div class="description-review-wrapper">
                    <div class="description-review-topbar nav text-center">
                        <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                        <a data-toggle="tab" href="#des-details2">Tags</a>
                        <a data-toggle="tab" href="#des-details3">Review</a>
                    </div>
                    <div class="tab-content description-review-bottom">
                        <div id="des-details1" class="tab-pane active">
                            <div class="product-description-wrapper">
                            <p> <?= $product->des_en ?> </p>
                            </div>
                        </div>
                        <div id="des-details2" class="tab-pane">
                            <div class="product-anotherinfo-wrapper">
                                <ul>
                                    <!-- <li><span>Tags:</span></li> -->
                                    
                        <span style="color:#649;">Category of Product is :-  </span>  <li><a href="shop.php?cat=<?= $product->category_id ?>">  <?= $product->category_name_en ?></a></li>  
                          <br><span style="color:#649;"> Name of product is :- </span> <li><a href="shop.php?subcat=<?= $product->sub_category_id ?>"><?= $product->subcategory_name_en ?> </a></li>
                          <br><span style="color:#649;"> Brand of product is :-  </span> <li><a href="shop.php?brand=<?= $product->brand_id ?>"><?php echo $product->brand_name_en;  if(empty($product->brand_name_en)) { echo 'Sorry this product with out brand'; }?> </a></li>
                      
                                </ul>
                            </div>


                        </div>
                        <div id="des-details3" class="tab-pane">
                            <div class="rattings-wrapper">
                                <?php 
                                 $resultReview= $productObject->getReview();
                                if($resultReview->num_rows >=1 ){
                                     $reviews= $resultReview->fetch_all(MYSQLI_ASSOC);
                                 foreach($reviews AS $review)
                                 { ?>
                                    <div class="sin-rattings">
                                    <div class="star-author-all">
                                        <div class="ratting-star f-left">
                                            <?php for($i=1 ; $i<6 ;$i++){
                                                if($i<= $review['value']){
                                                 echo' <i class="ion-star theme-color"></i>';
                                                }else{      echo' <i class="ion-android-star-outline"></i>';}
                                            } ?>
                           
                                            <span><?= $review['value'] ?></span>
                                        </div>
                                        <div class="ratting-author f-right">
                                            <h3 style="color: green;"><?= $review['full_name']?></h3>
                                            <span class="text-secondary"><?= $review['created_at']?></span>
                                            
                                        </div>
                                    </div>
                                        <p> <?= $review['comment']?></p>
                                </div>
                               <?php   }
                                
                               
                               }else{
                                $review =[];
                                   echo '<div class="alert alert-warning w-75 m-auto"> Sorry! no review found for this product</div>';
                               }?>
                               
                            </div>
                            <div class="ratting-form-wrapper">
                                <h3>Add your Comments :</h3>
                                <div class="ratting-form">
                           
                            
                                    <form action="" method="post">
                                    <div class="star-box">
                                   
                                        <h4> Rating:- </h4>
                                        <div class="ratting-star rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                        
                                  
                                             
                                            <div class="col-md-12">
                                                <div class="rating-form-style form-submit">
                                                    <textarea name="message" placeholder="Message"></textarea>
                                                    <input type="submit" name="reviews" value="add review">
                                                </div>
                                              
                                            </div>
                                           

                                    </form>
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-100">
            <div class="container">
                <div class="product-top-bar section-border mb-35">
                    <div class="section-title-wrap">
                        <h3 class="section-title section-bg-white">Related Products</h3>
                    </div>
                </div>
                <div class="featured-product-active hot-flower owl-carousel product-nav">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.php">
                                <img alt="" src="assets/img/product/product-1.jpg">
                            </a>
                            <span>-30%</span>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
									<i class="ion-android-favorite-outline"></i>
								</a>
								<a class="action-cart" href="#" title="Add To Cart">
									<i class="ion-ios-shuffle-strong"></i>
								</a>
								<a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
									<i class="ion-ios-search-strong"></i>
								</a>
                            </div>
                        </div>
                        <div class="product-content text-left">
							<div class="product-hover-style">
								<div class="product-title">
									<h4>
										<a href="product-details.php">Le Bongai Tea</a>
									</h4>
								</div>
								<div class="cart-hover">
									<h4><a href="product-details.php">+ Add to cart</a></h4>
								</div>
							</div>
							<div class="product-price-wrapper">
								<span>$100.00 -</span>
								<span class="product-price-old">$120.00 </span>
							</div>
						</div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.php">
                                <img alt="" src="assets/img/product/product-2.jpg">
                            </a>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
									<i class="ion-android-favorite-outline"></i>
								</a>
								<a class="action-cart" href="#" title="Add To Cart">
									<i class="ion-ios-shuffle-strong"></i>
								</a>
								<a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
									<i class="ion-ios-search-strong"></i>
								</a>
                            </div>
                        </div>
                        <div class="product-content text-left">
							<div class="product-hover-style">
								<div class="product-title">
									<h4>
										<a href="product-details.php">Society Ice Tea</a>
									</h4>
								</div>
								<div class="cart-hover">
									<h4><a href="product-details.php">+ Add to cart</a></h4>
								</div>
							</div>
							<div class="product-price-wrapper">
								<span>$100.00 -</span>
								<span class="product-price-old">$120.00 </span>
							</div>
						</div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.php">
                                <img alt="" src="assets/img/product/product-3.jpg">
                            </a>
                            <span>-30%</span>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
									<i class="ion-android-favorite-outline"></i>
								</a>
								<a class="action-cart" href="#" title="Add To Cart">
									<i class="ion-ios-shuffle-strong"></i>
								</a>
								<a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
									<i class="ion-ios-search-strong"></i>
								</a>
                            </div>
                        </div>
                        <div class="product-content text-left">
							<div class="product-hover-style">
								<div class="product-title">
									<h4>
										<a href="product-details.php">Green Tea Tulsi</a>
									</h4>
								</div>
								<div class="cart-hover">
									<h4><a href="product-details.php">+ Add to cart</a></h4>
								</div>
							</div>
							<div class="product-price-wrapper">
								<span>$100.00 -</span>
								<span class="product-price-old">$120.00 </span>
							</div>
						</div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.php">
                                <img alt="" src="assets/img/product/product-4.jpg">
                            </a>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
									<i class="ion-android-favorite-outline"></i>
								</a>
								<a class="action-cart" href="#" title="Add To Cart">
									<i class="ion-ios-shuffle-strong"></i>
								</a>
								<a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
									<i class="ion-ios-search-strong"></i>
								</a>
                            </div>
                        </div>
                        <div class="product-content text-left">
							<div class="product-hover-style">
								<div class="product-title">
									<h4>
										<a href="product-details.php">Best Friends Tea</a>
									</h4>
								</div>
								<div class="cart-hover">
									<h4><a href="product-details.php">+ Add to cart</a></h4>
								</div>
							</div>
							<div class="product-price-wrapper">
								<span>$100.00 -</span>
								<span class="product-price-old">$120.00 </span>
							</div>
						</div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.php">
                                <img alt="" src="assets/img/product/product-5.jpg">
                            </a>
                            <span>-30%</span>
                            <div class="product-action">
                                <a class="action-wishlist" href="#" title="Wishlist">
									<i class="ion-android-favorite-outline"></i>
								</a>
								<a class="action-cart" href="#" title="Add To Cart">
									<i class="ion-ios-shuffle-strong"></i>
								</a>
								<a class="action-compare" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
									<i class="ion-ios-search-strong"></i>
								</a>
                            </div>
                        </div>
                        <div class="product-content text-left">
							<div class="product-hover-style">
								<div class="product-title">
									<h4>
										<a href="product-details.php">Instant Tea Premix</a>
									</h4>
								</div>
								<div class="cart-hover">
									<h4><a href="product-details.php">+ Add to cart</a></h4>
								</div>
							</div>
							<div class="product-price-wrapper">
								<span>$100.00 -</span>
								<span class="product-price-old">$120.00 </span>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include_once "layouts/footer.php";
        include_once "layouts/scripts.php";
        ?>