<!DOCTYPE html>
<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
if (!class_exists('lessc')) {
  $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);		
  require_once($dir_block.'/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/1916.less', 'css/1916.css');
?>
<html>
<head>
    <title> 1916 </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo $url_path ?>/css/1916.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/1900/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/1900/css/font-awesome.min.css" rel="stylesheet">

    <script src="<?php echo $url_path ?>/1900/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo $url_path ?>/1900/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include $dir_block.'/1916-content.php'; ?>
</body>
</html>