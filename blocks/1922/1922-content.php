<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1922">
    <div class="form">
        <div class="form-radio">
            <h2>COMMUNITY POLL</h2>
            <p>What is your favorite color</p>
            <div class="radio">
                <label class="text">
                    <input type="radio" name="optradio"><span class="green">Green</span>
                </label>
            </div>
            <div class="radio">
                <label class="text red">
                    <input type="radio" name="optradio"><span class="red">Red</span>
                </label>
            </div>
            <div class="radio">
                <label class="text black">
                    <input type="radio" name="optradio"><span class="black">Black</span>
                </label>
            </div>
            <div class="radio">
                <label class="text man">
                    <input type="radio" name="optradio"><span class="man">Magenta</span>
                </label>
            </div>
            <button>Vote</button>
        </div>
    </div>
</div>
