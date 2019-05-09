<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="container">
    <div class="row">
        <div class="type-1919">
            <div class="protect-video">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="about-full-protec">
                        <h2>To get full protection</h2>
                        <ul>
                            <li>
                                <span>1</span>
                                <p>CONFIRM your order online with a Trade Assurance supplier</p>
                            </li>
                            <li class="afterstraight">
                                <span>2</span>
                                <p>PAY to the supplier’s CITIBANK account designated by Aloshop with credit card or bank transfer</p>
                            </li>
                        </ul>
                        <p>
                            <a href="#">View New User Guide</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-6 col-xs-12">
                    <div class="imagemodule">
                        <figure>
                            <a href="#">
                                <img src="<?php echo $url_path ?>/images/about-video.jpg" alt="a" vc_single_image-imgsrcset="<?php echo $url_path ?>/images/about-video.jpg">
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>