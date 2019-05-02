<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1906">
    <section class="container client-says">
        <div class="row">
            <div class="col-md-12">
                <h2><span>FROM THE BLOG</span></h2>
                <!-- Qoutation slider -->
                <div class="swiper-controls qoutation-slider-controls">
                    <a class="prev-arrow" href="#"></a>
                    <a class="next-arrow" href="#"></a>
                </div>
                <div class="swiper-container qoutation-slider qoutation-slider--higher">
                    <div class="swiper-wrapper">
                        <!-- Client saying -->

                        <div class="swiper-slide">
                            <div class="col-md-6  col-sm-6 col-xs-12 slide-content">
                                <div class="col-md-6 col-sm-12 col-xs-6 ">
                                    <div class="pic-hover">
                                        <img src="images/user-photo-4.jpg" alt="hinh1" class="img-responsive">
                                        
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-6 caption-slider">
                                    <div class="info-pic">
                                        <h3 ><a href="">Lorem Khaled Ipsum is a major key to</a></h3>
                                        <div class="by">
                                            <h5>By : admin | 4 comment</h5>
                                        </div>
                                        <p class="post-desc">Porem ipsum dolor sit amet, consectetur adip isicing elit, sed
                                            do eiusmod tempor
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6  col-sm-6 col-xs-12 slide-content">
                                <div class="col-md-6 col-sm-12 col-xs-6 ">
                                    <div class="pic-hover">
                                        <img src="images/user-photo-5.jpg" alt="hinh1" class="img-responsive">
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-6 caption-slider">
                                    <div class="info-pic">
                                        <h3 ><a href="">Lorem Khaled Ipsum is a major key to</a></h3>
                                        <div class="by">
                                            <h5>By : admin | 4 comment</h5>
                                        </div>
                                        <p class="post-desc">Porem ipsum dolor sit amet, consectetur adip isicing elit, sed
                                            do eiusmod tempor
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-md-6  col-sm-6 col-xs-12 slide-content">
                                <div class="col-md-6 col-sm-12 col-xs-6 ">
                                    <div class="pic-hover">
                                        <img src="images/user-photo-6.jpg" alt="hinh1" class="img-responsive">
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-6 caption-slider">
                                    <div class="info-pic">
                                        <h3 ><a href="">Lorem Khaled Ipsum is a major key to</a></h3>
                                        <div class="by">
                                            <h5>By : admin | 4 comment</h5>
                                        </div>
                                        <p class="post-desc">Porem ipsum dolor sit amet, consectetur adip isicing elit, sed
                                            do eiusmod tempor
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6  col-sm-6 col-xs-12 slide-content">
                                <div class="col-md-6 col-sm-12 col-xs-6 ">
                                    <div class="pic-hover">
                                        <img src="images/user-photo-8.jpg" alt="hinh1" class="img-responsive">
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-6 caption-slider">
                                    <div class="info-pic">
                                        <h3 ><a href="">Lorem Khaled Ipsum is a major key to</a></h3>
                                        <div class="by">
                                            <h5>By : admin | 4 comment</h5>
                                        </div>
                                        <p class="post-desc">Porem ipsum dolor sit amet, consectetur adip isicing elit, sed
                                            do eiusmod tempor
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>