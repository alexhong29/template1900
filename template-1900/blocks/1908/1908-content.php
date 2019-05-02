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
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="type-1908">
                <div id="sv_product_fillter-2" class="widget">
                    <div class="sidebar-shop">
                        <div class="widget widget-filter">
                            <div class="box-filter">
                                <h2 class="widget-title">CATEGORY <i id="texti" data-toggle="collapse" data-parent="#accordion" href="#collapse1">-</i></h2>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a data-cat="electronis" href="#"> Electronics (20)</a></li>
                                            <li><a data-cat="fashion" href="#"> Fashion (10)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box-filter">
                                <h2 class="widget-title">price <i data-toggle="collapse" data-parent="#accordion" href="#collapse2">-</i></h2>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="range-filter">
                                            <label>$</label>
                                            <input type="text" id="amount" readonly>

                                            <button class="btn-filter">Filter</button>
                                            <div id="slider-range" class="ui-slider"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="box-filter">
                                <h2 class="widget-title">brand <i data-toggle="collapse" data-parent="#accordion" href="#collapse3">-</i></h2>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a data-attribute="pa_brand" data-term="apple"href="#">Apple <span>(2)</span></a></li>
                                            <li><a data-attribute="pa_brand" data-term="canifa" href="#">Canifa <span>(2)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box-filter color-filter">
                                <h2 class="widget-title">color <i data-toggle="collapse" data-parent="#accordion" href="#collapse4">-</i></h2>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="list-color-filter"><a data-attribute="pa_color" data-term="black" class="color-black" href="#"></a>
                                            <a data-attribute="pa_color" data-term="blue" class="color-blue" href="#"></a>
                                            <a data-attribute="pa_color" data-term="blue-sky" class="color-blue-sky" href="#"></a>
                                            <a data-attribute="pa_color" data-term="brown" class="color-brown" href="#"></a>
                                            <a data-attribute="pa_color" data-term="gray" class="color-gray" href="#"></a>
                                            <a data-attribute="pa_color" data-term="green" class="color-green" href="#"></a>
                                            <a data-attribute="pa_color" data-term="orange" class="color-orange" href="#"></a>
                                            <a data-attribute="pa_color" data-term="pink" class="color-pink" href="#"></a>
                                            <a data-attribute="pa_color" data-term="red" class=" color-red" href="#"></a>
                                            <a data-attribute="pa_color" data-term="red-blood" class="color-red-blood" href="#"></a>
                                            <a data-attribute="pa_color" data-term="violet" class="color-violet" href="#"></a>
                                            <a data-attribute="pa_color" data-term="white" class="color-white" href="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-filter">
                                <h2 class="widget-title">size <i data-toggle="collapse" data-parent="#accordion" href="#collapse5">-</i></h2>
                                <div id="collapse5" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a data-attribute="pa_size" data-term="l" href="#">L <span>(3)</span></a></li>
                                            <li><a data-attribute="pa_size" data-term="m" href="#">M <span>(3)</span></a></li>
                                            <li><a data-attribute="pa_size" data-term="s" href="#">S <span>(3)</span></a></li>
                                            <li><a data-attribute="pa_size" data-term="xl" href="#">XL <span>(3)</span></a></li>
                                            <li><a data-attribute="pa_size" data-term="xxl" href="#">XXL <span>(3)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

