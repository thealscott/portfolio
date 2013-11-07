<?php for ($n = 0; $n < rand(4, 8); ++$n) :?>
<div class="cloud" 
	style="
		top:<?php echo rand(0, 80);?>%;
		left:<?php echo rand(0, 70);?>%;
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