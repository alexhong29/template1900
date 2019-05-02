<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


            <div class="col-md-9 col-sm-9 col-xs-7">
                <div class="type-1913">
                <div class="post">
                    <div class="blog">
                        <div class="date">
                            <strong>18</strong>
                            <span>April 2019</span>
                        </div>
                        <div class="pic">
                            <i class="fa fa-picture-o"></i>
                        </div>
                    </div>
                    <div class="avatar">
                        <img src="../1913/images/khaled.jpg" class="responsive">
                    </div>
                </div>

                <div class="content">
                    <a href="#">Lorem Khaled Ipsum is a major key to</a>
                    <p>Porem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam eiusmod tempor incid idunt ut labore. Porem ipsum dolor sit amet, consectetur adip isicing elit, sed do eius mod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam eiusmod tempor incid idunt ut labore. Porem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam eiusmod tempor incid idunt ut labore</p>
                </div>
                <div class="row blog_content">
                    <div class="author">
                        <div class="col-md-6 col-ms-6 col-xs-6">
                            <button>Read more</button>
                        </div>
                        <div class="col-md-6 col-ms-6 col-xs-6">
                            <div class="info">
                                <label>By: </label>
                                <a href="#">admin </a>
                                <label>In: </label>
                                <a href="#">Technology</a>
                                <a href="#"> 0 comment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row page_number">
                    <div class="page">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">Next <i class="fa fa-angle-double-right"></i></a>        
                    </div>
                </div>

            </div>
        </div>
