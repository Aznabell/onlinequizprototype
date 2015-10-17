<!-- 
this page showing the information of user
-->
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
			<center><?=$_SESSION['user']?></center>
		</td>
		<td>	
		</td>
	</tr>
	<tr>
		<td width= "30%">
		<?
		ini_set('session.bug_compat_warn',0);
		ini_set('session.bug_compat_42',0);

		session_start();
		include 'include/mysql.php';
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		$userid = $_SESSION['user_id'];
		$query1 = mysql_query("SELECT * FROM user_data WHERE user_id = '$userid'")or die();

		// output data of image source location
			while($row = mysql_fetch_array($query1)) {
				$imgsrc = $row['imgsrc'];
			}
		mysql_close($conn);
		?>
			<center><img src="<?echo $imgsrc;?>" alt="Logo" style="width:200px;height:200px;"></center>
		</td>
		<td>
		<table align="center" width="100%">
			<tr><td width= "20%">nama	   :</td><td><?=$_SESSION['user']?></td></tr>
			<tr><td width= "20%">pekerjaan :</td><td><?=$_SESSION['pekerjaan']?></td></tr>
			<tr><td width= "20%">telp	   :</td><td><?=$_SESSION['telp']?></td></tr>
			<tr><td width= "20%">e-mail	   :</td><td><?=$_SESSION['e-mail']?></td></tr>
			<tr><td width= "20%">alamat	   :</td><td><?=$_SESSION['alamat']?></td></tr>
		</table>
		</td>
		
	</tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
</table>