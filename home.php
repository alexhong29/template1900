<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/1900.less', 'css/1900.css');
$less->compileFile('less/1902.less', 'css/1902.css');
$less->compileFile('less/1903.less', 'css/1903.css');
$less->compileFile('less/1904.less', 'css/1904.css');
$less->compileFile('less/1905.less', 'css/1905.css');
$less->compileFile('less/1906.less', 'css/1906.css');
$less->compileFile('less/1907.less', 'css/1907.css');
$less->compileFile('less/1921.less', 'css/1921.css');
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

        <link rel="stylesheet" href="<?php echo $url_path ?>/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="<?php echo $url_path ?>/css/font-awesome.min.css">-->
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/swiper.min.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/imagehover.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <link href="css/all.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1900.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1902.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1903.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1904.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1905.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1906.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1907.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1921.css">


        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $url_path ?>/js/owl.carousel.min.js"></script>
        <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>
        <script src="<?php echo $url_path ?>/js/jquery.final-countdown.js"></script>
        <script src="<?php echo $url_path ?>/js/kinetic.js"></script>

        <script src="<?php echo $url_path ?>/js/1900.js"></script>
        <script src="<?php echo $url_path ?>/js/1902.js"></script>
        <script src="<?php echo $url_path ?>/js/1903.js"></script>
        <script src="<?php echo $url_path ?>/js/1905.js"></script>
        <script src="<?php echo $url_path ?>/js/1906.js"></script>
        <script src="<?php echo $url_path ?>/js/1921.js"></script>

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
        <?php include $dir_block . '/blocks/1903/1903-content.php'; ?>
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