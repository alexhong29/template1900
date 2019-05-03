<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1908">
    <div id="sv_product_fillter-2" class="widget">
        <div class="sidebar-shop">
            <div class="widget widget-filter">
                <div class="box-filter">
                    <h2 class="widget-title">CATEGORY <i id="texti" data-toggle="collapse" data-parent="#accordion" href="#collapse1">-</i></h2>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <label class="input-check">
                                        <input type="checkbox">
                                        <a>Electronics (20)</a>
                                    </label>
                                </li>
                                <li>
                                    <label class="input-check">
                                        <input type="checkbox">
                                        <a>Fashion (10)</a>
                                    </label>
                                </li>
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
                                <input class="vlput" type="text" id="amount" readonly>

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
                                <li>
                                    <label class="input-check">
                                        <input type="checkbox">
                                        <a>Apple <span>(2)</span></a> 
                                    </label>
                                </li>
                                <li>
                                    <label class="input-check">
                                        <input type="checkbox">
                                        <a>Canifa <span>(2)</span></a> 
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box-filter color-filter">
                    <h2 class="widget-title">color <i data-toggle="collapse" data-parent="#accordion" href="#collapse4">-</i></h2>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="list-color-filter"><a data-attribute="pa_color" data-term="black" class="color-black" href="#"></a>
                                <a class="color-blue" href="#"></a>
                                <a class="color-blue-sky" href="#"></a>
                                <a class="color-brown" href="#"></a>
                                <a class="color-gray" href="#"></a>
                                <a class="color-green" href="#"></a>
                                <a class="color-orange" href="#"></a>
                                <a class="color-pink" href="#"></a>
                                <a class=" color-red" href="#"></a>
                                <a class="color-red-blood" href="#"></a>
                                <a class="color-violet" href="#"></a>
                                <a class="color-white" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-filter">
                    <h2 class="widget-title">size <i data-toggle="collapse" data-parent="#accordion" href="#collapse5">-</i></h2>
                    <div id="collapse5" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <ul>
                                <li>
                                    <label class="input-check">
                                        <input type="checkbox">
                                        <a>L <span>(3)</span></a> 
                                    </label>
                                </li>
                                <li>
                                    <label class="input-check">
                                        <input type="checkbox">
                                        <a>M <span>(3)</span></a> 
                                    </label>
                                </li>
                                <li>
                                    <label class="input-check">
                                        <input type="checkbox">
                                        <a>XL <span>(3)</span></a> 
                                    </label>
                                </li>
                                <li>
                                    <label class="input-check">
                                        <input type="checkbox">
                                        <a>XXL <span>(3)</span></a> 
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

