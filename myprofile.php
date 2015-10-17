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

		// output data for image source
			while($row = mysql_fetch_array($query1)) {
				$imgsrc = $row['imgsrc'];
			}
		mysql_close($conn);
		?>
			<center><img src="<?echo $imgsrc;?>" alt="Logo" style="width:275px;height:280px;"></center>
		</td>
		<td>
		<table align="center" width="100%">
		<form action="myprofile_update.php" method="post" >
			<tr><td width= "20%">nama	   :</td><td><input style="width:100%;height:30px;margin:1px 1px 1px 1px" name="username" type="text" id="username" placeholder="<?=$_SESSION['user']?>"></td></tr>
			<tr><td width= "20%">pekerjaan :</td><td><input style="width:100%;height:30px;margin:1px 1px 1px 1px" name="pekerjaan" type="text" id="pekerjaan" placeholder="pekerjaan"></td></tr>
			<tr><td width= "20%">telp	   :</td><td><input style="width:100%;height:30px;margin:1px 1px 1px 1px" name="telp" type="text" id="telp" placeholder="telp"></td></tr>
			<tr><td width= "20%">e-mail	   :</td><td><input style="width:100%;height:30px;margin:1px 1px 1px 1px" name="e-mail" type="text" id="e-mail" placeholder="e-mail"></td></tr>
			<tr><td width= "20%">alamat	   :</td><td><input style="width:100%;height:30px;margin:1px 1px 1px 1px" name="alamat" type="text" id="alamat" placeholder="alamat"></td></tr>
			<tr><td></td><td><input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="right button small" type="submit" name="Submit" value="Save"></td></tr>
		</form>
		</table>
		</td>
		
	</tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
</table>