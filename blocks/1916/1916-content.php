<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1916">
	<div class="container">
		<div class="title-form">
			<h2>CONTACT FROM</h2>
		</div>
		<div class="form-contact ">
			<div class="row ">
				<div class="col-md-3 col-sm-4 col-xs-12">
					<input type="text" name="name"  size="40" class="contact-name" aria-required="true" aria-invalid="false" placeholder="Name *">
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<input type="text" name="email" value="" size="40" class="contact-email" aria-required="true" aria-invalid="false" placeholder="Email *">
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<input type="text" name="site" value="" size="40" class="contact-website" aria-invalid="false" placeholder="Website">
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<textarea name="message" cols="40" rows="10" class="textarea-contact" aria-required="true" aria-invalid="false"></textarea>
					<input type="submit" value="Send" class="send-info">
					<span class="ajax-loader"></span>
				</div>
			</div>
		</div>
	</div>
</div>