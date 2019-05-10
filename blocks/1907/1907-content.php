<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1907">
    <div class="new-form">
        <div class="container">
            <div class="newsletter-form">
                <h2 class="newsletter">newsletter</h2>
                <form class="wp-form-email" method="post" data-name="MailChimlp">
                    <div class="wp-form-fields">
                        <input type="text" name="EMAIL" placeholder="Enter Your Email..." required="">
                        <input type="submit" value="SUBSCRIBE">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-before">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="wpb_wrapper">
                        <div class="footer-box">
                            <h2>INFORMATION</h2>
                            <ul class="footer-menu-box">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Template Settings</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Search Terms</a></li>
                                <li><a href="#">Advanced Search</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wpb_wrapper buyfrom">
                        <div class="footer-box">
                            <h2>WHY BUY FROM US</h2>
                            <ul class="footer-menu-box">
                                <li><a href="#">Shipping &amp; Returns</a></li>
                                <li><a href="#">Secure Shopping</a></li>
                                <li><a href="#">International Shipping</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Group Sales</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wpb_wrapper">
                        <div class="footer-box">
                            <h2>MY ACCOUNT</h2>
                            <ul class="footer-menu-box">
                                <li><a href="#">Sign In</a></li>
                                <li><a href="#">View Cart</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">My Compare</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="column-inner">
                        <div class="footer-box">
                            <h2>Contact Us</h2>
                            <ul class="footer-box-contact">
                                <li>
                                    <i class="fa fa-home"></i> <a href="#"> Our business address is 1063 Free></a>
                                </li>
                                <li>
                                    <i class="fa fa-mobile"></i> <a href="#">+ 020.566.8866</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i> 
                                    <a href="mailto:support@7-Up.com">support@7-Up.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-footer">
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
    </div>
    <br>
    <br>
    <div class="footer-after">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="footer_column-inner-before">
                        <p class="copyrigh">©2018 
                            <a href="http://7uptheme.com">7uptheme.com</a>
                        </p>
                        <div class="policy">
                            <label>Policies: </label>
                            <a href="#">Terms of use</a>
                            <a href="#">Security</a>
                            <a href="#">Privacy</a>
                            <a href="#">Infringement</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="footer-column-inner-after ">
                        <div class="payment-method">
                            <label>PAYMENT METHOD</label>
                            <a href="#">
                                <img width="48" height="30" src="<?php echo $url_path ?>/images/measter.png" alt="a">
                            </a>
                            <a href="#">
                                <img width="48" height="30" src="<?php echo $url_path ?>/images/america.png" alt="a">
                            </a>
                            <a href="#">
                                <img width="48" height="30" src="<?php echo $url_path ?>/images/paypal.png" alt="a">
                            </a>
                            <a href="#">
                                <img width="48" height="30" src="<?php echo $url_path ?>/images/visa.png" alt="a">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
