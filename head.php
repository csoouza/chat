<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php wp_title('|', true, 'right'); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
<script type="text/javascript">
$(function(){

    var url = window.location.pathname,
        urlRegExp = new RegExp(url.replace(/\/$/,'')); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
    	x=0;
        // now grab every link from the navigation
        $('.menu a').each(function(){
            // and test its href against the url pathname regexp
            if(urlRegExp.test(this.href)){
            	if (url == "/") {
            		$(this).addClass('active');
            		x = 1;
            	}
            	if (x==1) {
            		return false;	
            	} else {
                $(this).addClass('active');
            	}
            } 
            else {
            	$(this).removeClass('active');
            }
        });

});
</script>
<script type="text/javascript" src="http://website.com.br/webchat/php/app.php?widget-init.js"></script>


</head>
