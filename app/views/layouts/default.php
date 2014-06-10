<!doctype html>
<!--[if IE 7 ]><html class="ie7 ie" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie8 ie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 ie" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	
	<meta charset="UTF-8">
    <meta name="description" content="Hi there! Welcome to my portfolio. Below you can see a few examples of cool things I've worked on. You can also find out a little more about me or get in touch, if you fancy&nbsp;it.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>theAlScott.co.uk - The Portfolio and Playground of Al Scott, Esq.</title>

    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700,400italic,700italic|Press+Start+2P' rel='stylesheet' type='text/css'>
    <link href='/css/sassquatch.css' rel='stylesheet' />

    <link rel="icon" type="image/png" href="/favicon.png">

    <script>
    // To prevent nasty popin, we add a loading class immediately.
    // When everything is loaded, we remove for a nice transition.
	var html = document.getElementsByTagName('html');
	html = html[0];
	html.classList.add('loading');
	</script>

</head>
<body id="<?php echo $page_id; ?>">

	<?php echo View::make('partials._clouds'); ?>

    <div class="wrapper">
    	<?php echo View::make('partials._header'); ?>
        <?php echo $content; ?>
    </div>

	<?php echo View::make('partials._footer'); ?>

	<?php echo View::make('partials._scripts'); ?>
</body>
</html>