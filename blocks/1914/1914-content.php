<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1914">
    <div class="sidebar-post">
        <div id="categories-2" class="widget widget_categories">
            <h3 class="widget-title">Categories</h3>
            <ul class="category1">
                <li><a href="#">Audio</a> (6)</li>
                <li><a href="#">Electronics</a> (6)</li>
                <li><a href="#">Fashion</a> (5)</li>
                <li><a href="#">Headphone</a> (5)</li>
                <li><a href="#">Mobile</a> (5)</li>
                <li><a href="#">Technology</a> (5)</li>
            </ul>
        </div>
        <div id="sv_post_tab_widget-2" class="widget">
            <div class="title-post-tab">
                <ul>
                    <li class="active"><a data-toggle="tab" href="#popular" aria-expanded="true">Popular</a></li>
                    <li class=""><a data-toggle="tab" href="#recent" aria-expanded="false">Recent</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="popular" class="tab-pane fade active in" role="tabpanel">
                    <ul class="list-post-tab">
                        <li>
                            <div class="zoom-image-thumb">
                                <a href=""><img src="<?php echo $url_path ?>/images/7-100x67.jpg" alt="#"></a>
                            </div>
                            <div class="post-tab-info">
                                <a href="#">Lorem Khaled Ipsum is a major key to</a><br/>
                                <span>March 29 2016</span>
                            </div>
                        </li>
                        <li>
                            <div class="zoom-image-thumb">
                                <a href=""><img src="<?php echo $url_path ?>/images/b3-100x67.jpg" alt="#"></a>
                            </div>
                            <div class="post-tab-info">
                                <a href="#">Lorem Khaled Ipsum is a major key to</a><br/>
                                <span>March 29 2016</span>
                            </div>
                        </li>
                        <li>
                            <div class="zoom-image-thumb">
                                <a href=""><img src="<?php echo $url_path ?>/images/slide2-1-1-100x67.jpg" alt="#"></a>
                            </div>
                            <div class="post-tab-info">
                                <a href="#">Lorem Khaled Ipsum is a major key to</a><br/>
                                <span>March 29 2016</span>
                            </div>
                        </li>
                        <li>
                            <div class="zoom-image-thumb">
                                <a href=""><img src="<?php echo $url_path ?>/images/8-100x67.jpg" alt="#"></a>
                            </div>
                            <div class="post-tab-info">
                                <a href="#">Lorem Khaled Ipsum is a major key to</a><br/>
                                <span>March 29 2016</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="recent" class="tab-pane fade" role="tabpanel">
                    <ul class="list-post-tab">

                        <li>
                            <div class="zoom-image-thumb">
                                <a href=""><img src="<?php echo $url_path ?>/images/2-100x67.jpg" alt="#"></a>
                            </div>
                            <div class="post-tab-info">
                                <a href="#">Lorem Khaled Ipsum is a major key to</a><br/>
                                <span>March 29 2016</span>
                            </div>
                        </li>
                        <li>
                            <div class="zoom-image-thumb">
                                <a href=""><img src="<?php echo $url_path ?>/images/b3-100x67.jpg" alt="#"></a>
                            </div>
                            <div class="post-tab-info">
                                <a href="#">Lorem Khaled Ipsum is a major key to</a><br/>
                                <span>March 29 2016</span>
                            </div>
                        </li>
                        <li>
                            <div class="zoom-image-thumb">
                                <a href=""><img src="<?php echo $url_path ?>/images/slide2-1-1-100x67.jpg" alt="#"></a>
                            </div>
                            <div class="post-tab-info">
                                <a href="#">Lorem Khaled Ipsum is a major key to</a><br/>
                                <span>March 29 2016</span>
                            </div>
                        </li>
                        <li>
                            <div class="zoom-image-thumb">
                                <a href=""><img src="<?php echo $url_path ?>/images/7-100x67.jpg" alt="#"></a>
                            </div>
                            <div class="post-tab-info">
                                <a href="#">Lorem Khaled Ipsum is a major key to</a><br/>
                                <span>March 29 2016</span>
                            </div>
                        </li>
                        <li>
                            <div class="zoom-image-thumb">
                                <a href=""><img src="<?php echo $url_path ?>/images/8-100x67.jpg" alt="#"></a>
                            </div>
                            <div class="post-tab-info">
                                <a href="#">Lorem Khaled Ipsum is a major key to</a><br/>
                                <span>March 29 2016</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
