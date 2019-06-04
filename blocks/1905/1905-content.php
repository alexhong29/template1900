<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1905">
    <div class="container">
        <div class="row top_title">
            <div class="col-md-12 new_product">
                <div class="col-md-4 col-sm-5 col-xs-5 productnew">
                    <span>NEW PRODUCT</span>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-7 filter">
                    <i class="fa fa-filter"></i>
                    <span>FILTER</span>
                </div>
                <!-- Tab links -->
                <div class="tab1905">
                    <a class="tablinks1905 active" onclick="open1905(event, 'Computer1905')">COMPUTER</a>
                    <a class="tablinks1905 " onclick="open1905(event, 'Electroniss1905')">ELECTRONIS</a>
                    <a class="tablinks1905 " onclick="open1905(event, 'Fashionss1905')">FASHIONS</a>
                    <a class="tablinks1905 " onclick="open1905(event, 'Foods1905')">FOODS</a>
                </div>
            </div>
        </div>
        <!-- Tab content -->
        <div class="row gallery">

            <div id="Computer1905" class="tabcontents" style="display: flex; flex-wrap: wrap;">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="<?php echo $url_path ?>/images/computer2.jpg" alt="#" class="img-responsive">
                            <figcaption class="image-hover">
                                <img src="<?php echo $url_path ?>/images/computer1.jpg" alt="#" class="img-responsive">
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
                        <div class="product">
                            <a href="#">Phone 1</a>
                            <div class="price">
                                <span class="new_price">$868.00</span>
                                <span class="old_price">$968.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="<?php echo $url_path ?>/images/computer2.jpg" alt="#" class="img-responsive">
                            <figcaption class="image-hover">
                                <img src="<?php echo $url_path ?>/images/computer1.jpg" alt="#" class="img-responsive">
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
                        <div class="product">
                            <a href="#">Phone 1</a>
                            <div class="price">
                                <span class="new_price">$868.00</span>
                                <span class="old_price">$968.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="<?php echo $url_path ?>/images/computer2.jpg" alt="#" class="img-responsive">
                            <figcaption class="image-hover">
                                <img src="<?php echo $url_path ?>/images/computer1.jpg" alt="#" class="img-responsive">
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
                        <div class="product">
                            <a href="#">Phone 1</a>
                            <div class="price">
                                <span class="new_price">$868.00</span>
                                <span class="old_price">$968.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="<?php echo $url_path ?>/images/computer2.jpg" alt="#" class="img-responsive">
                            <figcaption class="image-hover">
                                <img src="<?php echo $url_path ?>/images/computer1.jpg" alt="#" class="img-responsive">
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
                        <div class="product">
                            <a href="#">Phone 1</a>
                            <div class="price">
                                <span class="new_price">$868.00</span>
                                <span class="old_price">$968.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="<?php echo $url_path ?>/images/computer2.jpg" alt="#" class="img-responsive">
                            <figcaption class="image-hover">
                                <img src="<?php echo $url_path ?>/images/computer1.jpg" alt="#" class="img-responsive">
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
                        <div class="product">
                            <a href="#">Phone 1</a>
                            <div class="price">
                                <span class="new_price">$868.00</span>
                                <span class="old_price">$968.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Electroniss1905" class="tabcontents" style="display: none;flex-wrap: wrap;">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="<?php echo $url_path ?>/images/computer2.jpg" alt="#" class="img-responsive">
                            <figcaption class="image-hover">
                                <img src="<?php echo $url_path ?>/images/computer1.jpg" alt="#" class="img-responsive">
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
                                                </div>                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- texxt -->
                        <div class="product">
                            <a href="#">Phone 1</a>
                            <div class="price">
                                <span class="new_price">$868.00</span>
                                <span class="old_price">$968.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Fashionss1905" class="tabcontents" style="display: none; flex-wrap: wrap;">

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="<?php echo $url_path ?>/images/computer1.jpg" alt="#" class="img-responsive">
                            <figcaption class="image-hover">
                                <img src="<?php echo $url_path ?>/images/fas2.png" alt="#" class="img-responsive">
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
                        <div class="product">
                            <a href="#">Phone 1</a>
                            <div class="price">
                                <span class="new_price">$868.00</span>
                                <span class="old_price">$968.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Foods1905" class="tabcontents" style="display: none; flex-wrap: wrap;">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="<?php echo $url_path ?>/images/fas1.png" alt="#" class="img-responsive">
                            <figcaption class="image-hover">
                                <img src="<?php echo $url_path ?>/images/fas2.png" alt="#" class="img-responsive">
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
                        <div class="product">
                            <a href="#">Phone 1</a>
                            <div class="price">
                                <span class="new_price">$868.00</span>
                                <span class="old_price">$968.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row load">
            <div class="load_more">
                <a href="#">
                    Load More Items
                </a>
            </div>
        </div>

    </div>
</div>  
