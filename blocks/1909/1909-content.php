<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1909">
    <div class="swiper-container swiper1909">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo $url_path ?>/images/bn1.jpg" alt="error" class="img-responsive"/>
                <div class="promotion">
                    <h3>jewelry-bracelets</h3>
                    <h2>exta 35% off </h2>
                    <button class="button d1">
                        <span>Shop Now</span>
                    </button>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo $url_path ?>/images/bn2.jpg" alt="error" class="img-responsive"/>
                <div class="promotion">
                    <h3>New technology</h3>
                    <h2>exta 35% off </h2>
                    <button class="button d1">
                        <span>Shop Now</span>
                    </button>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo $url_path ?>/images/bn3.jpg" alt="error" class="img-responsive"/>
                <div class="promotion">
                    <h3>new fashion</h3>
                    <h2>exta 35% off </h2>
                    <button class="button d1">
                        <span>Shop Now</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="arrow">
            <div class="swiper-button-next next1909"></div>
            <div class="swiper-button-prev prev1909"></div>
        </div>
    </div>
    <div class="list-shop-cat">
        <ul>
            <li>
                <a href="#">Electronis <span>20</span></a>
            </li>
            <li>
                <a href="#">Fashion <span>10</span></a>
            </li>
            <li>
                <a href="#">Food <span>10</span></a>
            </li>
            <li>
                <a href="#">Furniture <span>10</span></a>
            </li>
            <li>
                <a href="#">Jewelry <span>10</span></a>
            </li>
            <li>
                <a href="#">Sports <span>8</span></a>
            </li>
        </ul>
    </div>
</div>
