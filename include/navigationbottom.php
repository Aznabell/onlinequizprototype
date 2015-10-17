<nav class="top-bar" style="position:fixed;bottom:0;left:0;right:0;z-index:1030">
	
	

	<section class="top-bar-section" >
		<?error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
			if ((!isset($_SESSION['user']))){?><ul class="left">
			<li class="divider hide-for-small"></li>
			<li><a>&copy; 2015</a></li>
		</ul><? } ?>
		<? if (($_SESSION['user'])){?>
		<ul class="right">
			<li class="divider hide-for-small"></li>
			<li><a href="index.php?act=profile">Profile</a></li>
			<li class="divider hide-for-small"></li>
			<li><a href="index.php?act=store&msg=3">Store</a></li>
			<li class="divider hide-for-small"></li>
			<li><a href="index.php?act=class">Class</a></li>
		</ul>
		<? } ?>
		
	  
	</section>
</nav>