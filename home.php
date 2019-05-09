<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/blocks/1900/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('blocks/1900/less/1900.less', 'blocks/1900/css/1900.css');
$less->compileFile('blocks/1902/less/1902.less', 'blocks/1902/css/1902.css');
$less->compileFile('blocks/1921/less/1921.less', 'blocks/1921/css/1921.css');
$less->compileFile('blocks/1903/less/1903.less', 'blocks/1903/css/1903.css');
$less->compileFile('blocks/1904/less/1904.less', 'blocks/1904/css/1904.css');
$less->compileFile('blocks/1905/less/1905.less', 'blocks/1905/css/1905.css');
$less->compileFile('blocks/1906/less/1906.less', 'blocks/1906/css/1906.css');
$less->compileFile('blocks/1907/less/1907.less', 'blocks/1907/css/1907.css');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--Meta, title, CSS, favicons, etc.--> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home - AloShop</title>

        <link rel="apple-touch-icon" sizes="180x180" href="/blocks/1900/images/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/blocks/1900/images/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/blocks/1900/images/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="/blocks/1900/images/favicon_io/site.webmanifest">

        <link rel="stylesheet" href="<?php echo $url_path ?>/blocks/1900/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/blocks/1900/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/blocks/1900/css/swiper.min.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/blocks/1900/css/imagehover.min.css">

        <link rel="stylesheet" href="<?php echo $url_path ?>/blocks/1900/css/1900.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/blocks/1902/css/1902.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/blocks/1921/css/1921.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/blocks/1903/css/1903.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/blocks/1904/css/1904.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/blocks/1905/css/1905.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/blocks/1906/css/1906.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/blocks/1907/css/1907.css">

        <script src="<?php echo $url_path ?>/blocks/1900/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo $url_path ?>/blocks/1900/js/bootstrap.min.js"></script>
        <script src="<?php echo $url_path ?>/blocks/1900/js/owl.carousel.min.js"></script>
        <script src="<?php echo $url_path ?>/blocks/1900/js/swiper.min.js"></script>
        <script src="<?php echo $url_path ?>/blocks/1900/js/jquery.final-countdown.js"></script>
        <script src="<?php echo $url_path ?>/blocks/1900/js/kinetic.js"></script>

        <script src="<?php echo $url_path ?>/blocks/1900/js/1900.js"></script>
        <script src="<?php echo $url_path ?>/blocks/1902/js/1902.js"></script>
        <script src="<?php echo $url_path ?>/blocks/1903/js/1903.js"></script>
        <script src="<?php echo $url_path ?>/blocks/1905/js/1905.js"></script>
        <script src="<?php echo $url_path ?>/blocks/1906/js/1906.js"></script>

    </head>

    <body>
        <?php include $dir_block . '/blocks/1900/1900-content.php'; ?>
        <div class="slider-home">
            <div class="container">
                <div class="row">
                    <?php include $dir_block . '/blocks/1902/1902-content.php'; ?>       
                    <?php include $dir_block . '/blocks/1921/1921-content.php'; ?>
                </div>
            </div>
        </div>
        <div class="slider-product">
            <div class="container">
                <div class="row">
                    <?php include $dir_block . '/blocks/1903/1903-content.php'; ?>
                </div>
            </div>
        </div>
        <div class="slider-promotion">
            <div class="container">
                <div class="row">
                    <?php include $dir_block . '/blocks/1904/1904-content.php'; ?>
                </div>
            </div>
        </div>

        <?php include $dir_block . '/blocks/1905/1905-content.php'; ?>

        <?php include $dir_block . '/blocks/1906/1906-content.php'; ?>

        <div class="clearfix"></div>

        <footer>
            <?php include $dir_block . '/blocks/1907/1907-content.php'; ?>
        </footer>

    </body>
</html>