<?
	ini_set('session.bug_compat_warn',0);
	ini_set('session.bug_compat_42',0);

	session_start();
	include 'include/mysql.php';
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$userid = $_SESSION['user_id'];
	$query1 = mysql_query("SELECT * FROM user_activity WHERE user_id = '$userid'")or die();

	
?>

<center style="font-size:80px;color:808080;"><b>Profile</b></center><br>
<table align="center" width="100%">
	<tr>
	<form action="index.php?act=myprofile" method="post" >
		
			<input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="right button small" type="submit" name="Submit" value="Edit Profile">
		
	</form>
	<form action="index.php?act=myactivity" method="post" >
		
			<input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="right button small" type="submit" name="Submit" value="My Activity">
		
	</form>
	
	<form action="index.php?act=profile" method="post" >
		
			<input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="right button small" type="submit" name="Submit" value="My Profile">
		
	</form>
	</tr>
	<tr>
		<td width= "30%">
			<?=$_SESSION['user']?> Activity:
		</td>
	</tr>
	<?
	// output data of each row
		while($row = mysql_fetch_array($query1)) {
			$activity = $row['activity'];
			?><tr><td width= "30%"><?echo $activity;?></td></tr><?
		}
		
	?>
</table>
<?
	mysql_close($conn);
?>