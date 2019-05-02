<?php
$url_host = $_SERVER['HTTP_HOST'];
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
                <div class="tab">
                    <a class="tablinks" onclick="openCity(event, 'Computer')">COMPUTER</a>
                    <a class="tablinks" onclick="openCity(event, 'Electronis')">ELECTRONIS</a>
                    <a class="tablinks" onclick="openCity(event, 'Fashions')">FASHIONS</a>
                    <a class="tablinks" onclick="openCity(event, 'Foods')">FOODS</a>
                </div>
            </div>
        </div>
        <!-- Tab content -->
        <div class="row gallery">
            <div id="Computer" class="tabcontent">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="images/fas1.png" alt="#" class="img-responsive">
                            <figcaption class="image-hover">
                                <img src="images/fas2.png" alt="#" class="img-responsive">
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
                                                <i class="fa fa-shopping-basket"></i> Add to cart
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
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="images/fas2.png" alt="#" class="img-responsive">
                            <figcaption class="image-hover">
                                <img src="images/fas1.png" alt="#" class="img-responsive">
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
                                                <i class="fa fa-shopping-basket"></i> Add to cart
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
            <div id="Electronis" class="tabcontent">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="images/computer1.jpg" alt="#" class="img-responsive">
                            <figcaption class="image-hover">
                                <img src="images/computer2.jpg" alt="#" class="img-responsive">
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
                                                <i class="fa fa-shopping-basket"></i> Add to cart
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
            <div id="Fashions" class="tabcontent">

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="images/computer1.jpg" alt="#" class="img-responsive">
                            <figcaption class="image-hover">
                                <img src="images/fas2.png" alt="#" class="img-responsive">
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
                                                <i class="fa fa-shopping-basket"></i> Add to cart
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
            <div id="Foods" class="tabcontent">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="circle-info-wrapper">
                        <figure class="imghvr-push-up">
                            <img src="images/fas1.png" alt="#" class="img-responsive">
                            <figcaption class="image-hover">
                                <img src="images/fas2.png" alt="#" class="img-responsive">
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
                                                <i class="fa fa-shopping-basket"></i> Add to cart
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
