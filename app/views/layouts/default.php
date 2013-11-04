<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>theAlScott.com</title>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700,400italic,700italic|Press+Start+2P' rel='stylesheet' type='text/css'>
    <link href='/css/styles.css' rel='stylesheet' />
</head>
<body id="<?php echo $page_id; ?>">

	<?php for ($n = 0; $n < rand(4, 8); ++$n) :?>
	<div class="cloud" 
		style="
			top:<?php echo rand(0, 80);?>%;
			left:<?php echo rand(0, 80);?>%;
		">
		<?php for ($i = 0; $i < rand(3, 5); ++$i) :?>
		<div style="
				width:<?php echo rand(50, 150);?>px;
				height:<?php echo rand(20, 60);?>px;
				top:<?php echo rand(0, 50);?>px;
				left:<?php echo rand(0, 50);?>px;
			">
		</div>
		<?php endfor;?>
	</div>
	<?php endfor; ?>


    <div class="wrapper">
    	<header>
    		<h1 id="logo" title="This is a surprisingly accurate rendering of me">
				<a href="/" title="Head on back to the home page">theAlScott</a>
			</h1>
    	</header>
        <?php echo $content; ?>
    </div>

	<footer>
		<div class="copyright">
			<span class="copyright_symbol">&copy;</span> 2013 Al Scott
		</div>
	</footer>
</body>
</html>