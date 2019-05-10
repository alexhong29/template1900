<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1910">
    <div class="home-title-wrapper">
        <div class="view-shop">
            <div class="title_text">
                <h2>shop</h2>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6 view-sp">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="<?php echo $url_path ?>/images/img_1.1.jpg" alt="#">
                            <figcaption class="image-hover">
                                <img src="<?php echo $url_path ?>/images/img_1.1.jpg" alt="#">
                                <div class="bor_img">
                                    <div class="like">
                                        <a href="#">
                                            <div class="search">
                                                <i class="fa fa-heart"></i>
                                                <i class="fa fa-toggle-on"></i>
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="cart">
                                                <div class="add">
                                                    <i class="fa fa-shopping-basket"></i>
                                                    <span>Add to cart</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- texxt -->
                        <div class="product-info">
                            <h3 class="title-product">
                                <a href="#">Acer A510</a>
                            </h3>
                            <div class="info-price">
                                <span class="Price-amount">
                                    <span>$</span>128.00
                                </span>
                            </div>
                            <div class="product-rating">
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="value-s">(0s)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 view-sp">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="<?php echo $url_path ?>/images/img_2.0.jpg" alt="#">
                            <figcaption class="image-hover">
                                <img src="<?php echo $url_path ?>/images/img_2.1.jpg" alt="#">
                                <div class="bor_img">
                                    <div class="like">
                                        <a href="#">
                                            <div class="search">
                                                <i class="fa fa-heart"></i>
                                                <i class="fa fa-toggle-on"></i>
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="cart">
                                                <div class="add">
                                                    <i class="fa fa-shopping-basket"></i>
                                                    <span>Add to cart</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- texxt -->
                        <div class="product-info">
                            <h3 class="title-product">
                                <a href="#">Acer A510</a>
                            </h3>
                            <div class="info-price">
                                <span class="Price-amount">
                                    <span>$</span>128.00
                                </span>
                            </div>
                            <div class="product-rating">
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="value-s">(0s)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 view-sp">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="<?php echo $url_path ?>/images/img_3.0.jpg" alt="#">
                            <figcaption class="image-hover">
                                <img src="<?php echo $url_path ?>/images/img_3.1.jpg" alt="#">
                                <div class="bor_img">
                                    <div class="like">
                                        <a href="#">
                                            <div class="search">
                                                <i class="fa fa-heart"></i>
                                                <i class="fa fa-toggle-on"></i>
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="cart">
                                                <div class="add">
                                                    <i class="fa fa-shopping-basket"></i>
                                                    <span>Add to cart</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- texxt -->
                        <div class="product-info">
                            <h3 class="title-product">
                                <a href="#">Acer A510</a>
                            </h3>
                            <div class="info-price">
                                <span class="Price-amount">
                                    <span>$</span>128.00
                                </span>
                            </div>
                            <div class="product-rating">
                                <span class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span class="value-s">(0s)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 view-shopp">
            <div class="sort-pagi-bar">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="product-order">
                        <form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                            <span><img class="icon-img" src="<?php echo $url_path ?>/images/img1.PNG" alt="#"></span>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="product-per-page">
                        <select name="orderby" class="orderby">
                            <option value="menu_order" selected="selected">show 12</option>
                            <option value="popularity">6</option>
                            <option value="rating">9</option>
                            <option value="date">12</option>
                            <option value="price">18</option>
                            <option value="price-desc">24</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="product-pagi-nav">
                        <span aria-current="page" class="page-numbers-1">1</span>
                        <a class="page-numbers-2" href="#">2</a>
                        <span class="page-numbers-dots">…</span>
                        <a class="page-numbers-5" href="#">5</a>
                        <a class="page-numbers-6" href="#">6</a>
                        <a class="page-numbers-next" href="#">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
