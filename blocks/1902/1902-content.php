<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="col-md-8">
    <div class="type-1902">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo $url_path ?>/images/demo1.jpg" alt="error" class="img-responsive"/>
                    <div class="promotion">
                        <h3>New Collection </h3>
                        <h2><span>from</span> 40% off</h2>
                        <button class="button d1">
                            <span>Shop Now</span>
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo $url_path ?>/images/demo2.jpg" alt="error" class="img-responsive"/>
                    <div class="promotion-2">
                        <h3>Iphone 6 Plus</h3>
                        <h2><span>from</span> 40% off</h2>
                        <button class="button d2">
                            <span>Shop Now</span>
                        </button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo $url_path ?>/images/demo3.jpg" alt="error" class="img-responsive"/>
                    <div class="promotion-3">
                        <h3>Laptop Acer</h3>
                        <h2><span>from</span> 40% off</h2>
                        <button class="button d3">
                            <span>Shop Now</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>