<nav class="top-bar" style="position:fixed;top:0;left:0;right:0;z-index:1030">
	<? 
	include 'include/mysql.php';
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
	
	$user = $_SESSION['user'];
	$query1 = mysql_query("SELECT gold FROM tb_user WHERE nama = '$user'") or die("query eror");
	$result1 = mysql_result ( $query1,0);
	
	$query2 = mysql_query("SELECT experience FROM tb_user WHERE nama = '$user'") or die("query eror");
	$result2 = mysql_result ( $query2,0);
	
	
	if ($_SESSION['user']) {?>
	<ul class="title-area">
		<li class="name">
			<h1>&nbsp;&nbsp;&nbsp;<img src="img/example.png" alt="Logo" style="width:60px;height:31px;">&nbsp;Example Logo</h1>
		</li>
    </ul>
	<?}?>
	<section class="top-bar-section">
		<ul class="right">
			<li class="divider hide-for-small"></li>
			<?error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
			if ((!isset($_SESSION['user']))){?><li><a>Hello Guest!</a></li><? } ?>
			<? if (($_SESSION['user'])){?><li><a>Gold: <?echo $result1;?></a></li><? } ?>
			<? if (($_SESSION['user'])){?><li><a>Experience: <?echo $result2;?></a></li><? } ?>
			<li class="divider hide-for-small"></li>
			<? if ((!isset($_SESSION['user']))){?>
			<li><a href="index.php?act=main">Login</a></li>
			<li><a href="index.php?act=register">Register</a></li>
			<?}?>
			<? if ($_SESSION['user']) {?>
			<li><a href="index.php?act=dashboard">Home</a></li>
			<?}?>
			<? if (($_SESSION['user'])){?>	
			<li><a href="index.php?act=logout">Log Out</a></li>
			<?}?>
			<!-- dropdown
			<li class="has-dropdown"><a href="#">Register</a>
				 <ul class="dropdown">
					<li><a href="index.php?act=register">Register</a></li>
					<li><a href="index.php?act=forget">Forget Password</a></li>
					
				</ul> 
			</li> -->
			
		
			</ul>
	  
	</section>
</nav>