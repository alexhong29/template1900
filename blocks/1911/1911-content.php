<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1911">
    <div class="title_sale">
        <h2 class="title-widget-adv">
            <span>Week</span><br>
            <strong>big sale</strong>
        </h2>
    </div>
    <div class="swiper-container swiper1911">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo $url_path ?>/images/slide1.jpg" class="img-responsive">
                <div class="promotion">
                    <h3>Quality usinesswear </h3>
                    <h2><span>from</span> 30% off</h2>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo $url_path ?>/images/slide2.jpg" class="img-responsive">
                <div class="promotion">
                    <h3>New Collection </h3>
                    <h2><span>from</span> 40% off</h2>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo $url_path ?>/images/slide3.jpg" class="img-responsive">
                <div class="promotion">
                    <h3>QHanbags Style 2019</h3>
                    <h2><span>from</span> 20% off</h2>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

