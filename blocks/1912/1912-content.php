<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1912">
    <div id="footer" class="footer-page">
        <div class="container">
            <div class="row logo-menu-footer" >
                <div class=" col-sm-12">
                    <div class="logo-inner">
                        <div class="logo-footer">
                            <figure class="figure-image">
                                <a href="#" target="_self" class="vc_single_image-wrapper">
                                    <img src="<?php echo $url_path ?>/images/logo-footer.png" alt="#" class="vc_single_image-img attachment-thumbnail">
                                </a>
                            </figure>
                        </div>

                        <div class="wpb_text_column wpb_content_element  menu-footer">
                            <div class="wpb_wrapper">
                                <ul>
                                    <li><a href="#">Online Shopping</a></li>
                                    <li><a href="#">Buy</a></li>
                                    <li><a href="#">Sell</a></li>
                                    <li><a href="#">All Promotions</a></li>
                                    <li><a href="#">My Orders </a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="#">Customer Service</a></li>
                                    <li><a href="#">About </a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100 clearfix"></div>

            <div class="row option-contact">
                <div class="col-sm-3 col-md-3 col-xs-6">
                    <div class="footer-box">
                        <h2>My Account</h2>
                        <ul class="footer-menu-box">
                            <li><a href="#">My orders</a></li>
                            <li><a href="#">My credit slips</a></li>
                            <li><a href="#">My addresses</a></li>
                            <li><a href="#">My personal info</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-xs-6">
                    <div class="footer-box">
                        <h2>Help</h2>
                        <ul class="footer-menu-box">
                            <li><a href="#">Where's my order?</a></li>
                            <li><a href="#">Payments</a></li>
                            <li><a href="#">Redeem a gift voucher</a></li>
                            <li><a href="#">Delivery &amp; returns</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-xs-6">
                    <div class="footer-box">
                        <h2>Further information</h2>
                        <ul class="footer-menu-box">
                            <li><a href="#">Drop Everything</a></li>
                            <li><a href="#">Affiliate programme</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms &amp; conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-xs-6">
                    <div class="footer-box">
                        <h2>Contact Us</h2>
                        <ul class="footer-box-contact">
                            <li><i class="fa fa-home"><span class="hidden">icon</span></i> <a>Our business address is 1063 Free</a></li>
                            <li><i class="fa fa-mobile"><span class="hidden">icon</span></i><a> + 020.566.8866</a></li>
                            <li><i class="fa fa-envelope"><span class="hidden">icon</span></i> <a href="mailto:support@7-Up.com">support@7-Up.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="row form-contact ">
                <div class="col-sm-12">
                    <div class="border1912">
                        <div class="col-sm-6">
                            <div class="newsletter-footer" placeholder="Enter Your Email..." >
                                <label>Newsletter</label>
                                <form class="form-group " method="post" data-name="MailChimlp">
                                    <input type="text" name="EMAIL" placeholder="Enter Your Email..." required="">
                                    <input type="submit" value="">
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-footer">
                                <label>Follow Us</label>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row category">
                <div class="col-sm-12">
                    <div class="footer-category">
                        <div class="item-tags-category">
                            <h2>
                                <span class="red">Fashion</span>
                            </h2>
                            <ul>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">T shirts</a></li>
                                <li><a href="#">Kurtis</a></li>
                                <li><a href="#">Sarees</a></li>
                                <li><a href="#">Levis Jeans</a></li>
                                <li><a href="#">Killer Jeans</a></li>
                                <li><a href="#">Pepe Jeans</a></li>
                                <li><a href="#">Arrow Shirts</a></li>
                                <li><a href="#">Ethnic Wear</a></li>
                                <li><a href="#">Formal Shirts</a></li>
                                <li><a href="#">Peter England Shirts</a></li>
                                <li><a href="#">View all</a></li>
                            </ul>
                        </div>
                        <div class=" item-tags-category">
                            <h2><span class="yellow">furniture</span></h2>
                            <ul>
                                <li><a href="#">Living rooms</a></li>
                                <li><a href="#">Sofa &amp; Couches</a></li>
                                <li><a href="#">Beds</a></li>
                                <li><a href="#">Chair</a></li>
                                <li><a href="#">Coffee Tables</a></li>
                                <li><a href="#">Kitchen &amp; Dining Room</a></li>
                                <li><a href="#">Small Bench</a></li>
                                <li><a href="#">library</a></li>
                                <li><a href="#">Wayfarer</a></li>
                                <li><a href="#">Shield-Oval</a></li>
                                <li><a href="#">Round</a></li>
                                <li><a href="#">View all</a></li>
                            </ul>
                        </div>
                        <div class=" item-tags-category">

                            <h2><span class="blue">electronic</span></h2>
                            <ul>
                                <li><a href="#">Mobile</a></li>
                                <li><a class="active" href="#">Iphone</a></li>
                                <li><a href="#">Glassxy</a></li>
                                <li><a href="#">Lumia</a></li>
                                <li><a class="active" href="#">Laptop</a></li>
                                <li><a href="#">XPS Dell</a></li>
                                <li><a href="#">Maxbook</a></li>
                                <li><a href="#">Samsung</a></li>
                                <li><a href="#">Sony</a></li>
                                <li><a href="#">Acer</a></li>
                                <li><a class="active" href="#">Tablets</a></li>
                                <li><a href="#">Apple</a></li>
                                <li><a href="#">Samsung</a></li>
                                <li><a href="#">Sony</a></li>
                                <li><a href="#">View all</a></li>
                            </ul>
                        </div>
                        <div class="item-tags-category">

                            <h2><span class="red2">food</span></h2>
                            <ul>
                                <li><a href="#">Food Blogs</a></li>
                                <li><a href="#">Foodies</a></li>
                                <li><a href="#">Food Culture</a></li>
                                <li><a href="#">Hashtags</a></li>
                                <li><a href="#">Food Porn</a></li>
                                <li><a href="#">Piza</a></li>
                                <li><a href="#">BBQ</a></li>
                                <li><a href="#">Salat</a></li>
                                <li><a href="#">Socola</a></li>
                                <li><a href="#">Pate</a></li>
                                <li><a href="#">Doner</a></li>
                                <li><a href="#">View all</a></li>
                            </ul>
                        </div>
                        <div class="item-tags-category">
                            <h2><span class="green">sport</span></h2>
                            <ul>
                                <li><a href="#">Football</a></li>
                                <li><a href="#">Bikes</a></li>
                                <li><a href="#">Golf</a></li>
                                <li><a href="#">Tennis</a></li>
                                <li><a href="#">Karatedor</a></li>
                                <li><a href="#">Yoga</a></li>
                                <li><a href="#">Pencatsilat</a></li>
                                <li><a href="#">Wushu</a></li>
                                <li><a href="#">Runmeters</a></li>
                                <li><a href="#">Boxing</a></li>
                                <li><a href="#">Bowling</a></li>
                                <li><a href="#">Gymnastics</a></li>
                                <li><a href="#">Olympics</a></li>
                                <li><a href="#">View all</a></li>
                            </ul>
                        </div>
                        <div class="item-tags-category">

                            <h2><span class="pink">jewelry</span></h2>
                            <ul>
                                <li><a href="#">Australian Opal</a></li>
                                <li><a href="#">Ammolite</a></li>
                                <li><a href="#">Meteorite Campo Del Cielo</a></li>
                                <li><a href="#">Sun Pyrite</a></li>
                                <li><a href="#">Faceted Carnelian</a></li>
                                <li><a href="#">Round</a></li>
                                <li><a href="#">View all</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pay-card">
                <div class=" col-sm-6 col-md-8">
                    <div class="copyright">			
                        <p>© 2018 7uptheme Demo Store. All Rights Reserved. Designed by <a href="http://7uptheme.com">7uptheme.com</a></p>			
                    </div>
                </div>
                <div class=" col-sm-6 col-md-4">
                    <div class="payment-method clearfix">
                        <a href="#">
                            <img width="49" height="27" src="<?php echo $url_path ?>/images/p1.png" alt="#" class="attachment-full size-full">
                        </a>
                        <a href="#">
                            <img width="49" height="27" src="<?php echo $url_path ?>/images/p4.png" alt="#" class="attachment-full size-full">
                        </a>
                        <a href="#">
                            <img width="49" height="27" src="<?php echo $url_path ?>/images/p3.png" alt="#" class="attachment-full size-full">
                            
                        </a>
                        <a href="#">
                            <img width="49" height="27" src="<?php echo $url_path ?>/images/p2.png" alt="a" class="attachment-full size-full">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>