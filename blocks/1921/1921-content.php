<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="col-md-4">
    <div class="type-1921">
        <div class="img">
            <div class="slide-band6">
                <div class="img2">
                    <div class="wrapper">
                        <div class="single-img item-adv-simple item1">
                            <div class="wrapper item-adv-simple">
                                <h3>
                                    <a class="hoverprd" href="#"> LG 8803 </a>
                                    <p>Aliquam tempus rutum</p>
                                    <span class="money">
                                        <span class="icon">$</span>
                                        350.00
                                    </span>
                                </h3>
                                <a class="hoverimg" href="#">
                                    <img width="372" height="190" src="<?php echo $url_path ?>/images/ad1-2.jpg" alt="#" class="img-responsive">
                                </a>
                            </div>
                        </div>

                        <div class="single-img item-adv-simple item2">
                            <div class="wrapper item-adv-simple ">
                                <h3>
                                    <a class="hoverimg2" href="#">iPOD APPLE</a> 
                                    <p>Aliquam tempus rutum</p>
                                    <span class="money">
                                        <span class="icon">$</span>
                                        170.00
                                    </span>
                                </h3>
                                <a class="hoverimg" href="#">
                                    <img width="372" height="190" src="<?php echo $url_path ?>/images/ad2-2.jpg" alt="#"class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>