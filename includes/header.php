<?php
    require 'server.php';
    require 'version.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name = "viewport" content = "user-scalable=yes, minimum-scale=.25, maximum-scale=1.0">
    <title><?php echo $custom_title; ?>TEST EMC World Languages</title>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo $server; ?>lib/img/favicon.ico" type="image/x-icon" >

	<!-- Typekit -->
	<script type="text/javascript" src="//use.typekit.net/tvi6hef.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!-- Add CSS -->
	<link href="<?php echo $server; ?>lib/css/style.css?v=<?php echo $version; ?>" rel="stylesheet">
    
    <!-- Add Modernizr -->
    <script src="<?php echo $server; ?>lib/js/modernizr.js"></script>
    
    <!-- Universal Analytics -->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-18649649-23']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

    <!-- Script -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="<?php echo $server; ?>lib/js/plugins.js"></script>
    <script src="<?php echo $server; ?>lib/js/sly.min.js"></script>
    <script src="<?php echo $server; ?>lib/js/custom.js?v=<?php echo $version; ?>"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-container ninesixty">
                <img src="<?php echo $server; ?>lib/img/emc-world-languages-logo.png" alt="EMC World Languages" />
                <div class="menu">
                    <ul>
                        <li><a href="http://www.emcp.com" class="transition">Home</a></li>
                        <li><a href="http://store.emcp.com" class="transition">Store</a></li>
                        <li><a href="http://support.emcp.com" class="transition">Technical Support</a></li>
                    </ul>
                </div>                
            </div>
        </div>