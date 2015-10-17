<!-- 
this page used to show all item that can be purchased by user
-->
<?
ini_set('session.bug_compat_warn',0);
ini_set('session.bug_compat_42',0);

session_start();
include 'include/mysql.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
//init array & testing if result is worked
$namaitem = array("satu","dua","tiga","empat","lima","enam","tujuh");
$harga = array("satu","dua","tiga","empat","lima","enam","tujuh");
$deskripsi = array("satu","dua","tiga","empat","lima","enam","tujuh");
$imgsrc = array("satu","dua","tiga","empat","lima","enam","tujuh");

//sql query
$query = mysql_query("SELECT * FROM tb_store") or die();
$num = mysql_num_rows($query);


    // output data of each row
    while($row = mysql_fetch_array($query)) {
		$x = $row['id_item'];
		$iditem = $x;
        $namaitem[$x] = $row['nama_item'];
		$harga[$x] = $row['harga_item'];
		$deskripsi[$x] = $row['deskripsi'];
		$imgsrc[$x] = $row['imagesrc'];
	}
?>
<center style="font-size:80px;color:808080;"><b>Store</b></center>
<br><hr>
<table align="center" width="100%">
<tr>
<td>
<!-- HTML code for store page, showing item that can be purchased by user and its information of each item -->
<table align="center" width="100%">
	<tr width="100%">
		<td width="40%">
			<center><img src="<?echo $imgsrc[1];?>" alt="Logo" style="width:100px;height:100px;"></center>
			<form action="index.php?act=buycheck" method="post" >
			<input type="hidden" name="harga" value="<?echo $harga[1];?>">
			<input type="hidden" name="imgsrc" value="<?echo $imgsrc[1];?>">
			<input type="hidden" name="namaitem" value="<?echo $namaitem[1];?>">
			<input type="hidden" name="harga" value="<?echo $harga[1];?>">
			<input type="hidden" name="type" value="class">
			<input type="hidden" name="klass" value="2">
			<input type="hidden" name="currency" value="experience">
			<input type="hidden" name="iditem" value="<?$iditem[1];?>">
			<center><input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="button small" type="submit" name="Submit" value="Buy"></center>
		
			</form>
		</td>
		<td width="60%">
		<table align="center" width="100%">
			<tr><td width="20%">Nama Item:</td><td><?echo $namaitem[1];?></td></tr>
			<tr><td width="20%">Harga :</td><td><?echo $harga[1];?> EXP</td></tr>
			<tr><td width="20%">Deskripsi Item:</td><td><?echo $deskripsi[1];?></td></tr>
		</table>
		</td>
	</tr>
	<tr width="100%">
		<td width="40%">
			<center><img src="<?echo $imgsrc[2];?>" alt="Logo" style="width:100px;height:100px;"></center>
			<form action="index.php?act=buycheck" method="post" >
			<input type="hidden" name="harga" value="<?echo $harga[2];?>">
			<input type="hidden" name="imgsrc" value="<?echo $imgsrc[2];?>">
			<input type="hidden" name="namaitem" value="<?echo $namaitem[2];?>">
			<input type="hidden" name="harga" value="<?echo $harga[2];?>">
			<input type="hidden" name="type" value="class">
			<input type="hidden" name="klass" value="3">
			<input type="hidden" name="currency" value="experience">
			<input type="hidden" name="iditem" value="<?$iditem[2];?>">
			<center><input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="button small" type="submit" name="Submit" value="Buy"></center>
		
			</form>
		</td>
		<td width="60%">
		<table align="center" width="100%">
			<tr><td width="20%">Nama Item:</td><td><?echo $namaitem[2];?></td></tr>
			<tr><td width="20%">Harga :</td><td><?echo $harga[2];?> EXP</td></tr>
			<tr><td width="20%">Deskripsi Item:</td><td><?echo $deskripsi[2];?></td></tr>
		</table>
		</td>
	</tr>
	<tr width="100%">
		<td width="40%">
			<center><img src="<?echo $imgsrc[3];?>" alt="Logo" style="width:100px;height:100px;"></center>
			<form action="index.php?act=buycheck" method="post" >
			<input type="hidden" name="harga" value="<?echo $harga[3];?>">
			<input type="hidden" name="imgsrc" value="<?echo $imgsrc[3];?>">
			<input type="hidden" name="namaitem" value="<?echo $namaitem[3];?>">
			<input type="hidden" name="harga" value="<?echo $harga[3];?>">
			<input type="hidden" name="type" value="class">
			<input type="hidden" name="klass" value="4">
			<input type="hidden" name="currency" value="experience">
			<input type="hidden" name="iditem" value="<?$iditem[3];?>">
			<center><input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="button small" type="submit" name="Submit" value="Buy"></center>		
			</form>
		</td>
		<td width="60%">
		<table align="center" width="100%">
			<tr><td width="20%">Nama Item:</td><td><?echo $namaitem[3];?></td></tr>
			<tr><td width="20%">Harga :</td><td><?echo $harga[3];?> EXP</td></tr>
			<tr><td width="20%">Deskripsi Item:</td><td><?echo $deskripsi[3];?></td></tr>
		</table>
		</td>
	</tr>
</table>
</td>
<td>
<table align="center" width="100%">
	<tr width="100%">
		<td width="40%">
			<center><img src="<?echo $imgsrc[4];?>" alt="Logo" style="width:100px;height:100px;"></center>
			<form action="index.php?act=buycheck2" method="post" >
			<input type="hidden" name="harga" value="<?echo $harga[4];?>">
			<input type="hidden" name="imgsrc" value="<?echo $imgsrc[4];?>">
			<input type="hidden" name="namaitem" value="<?echo $namaitem[4];?>">
			<input type="hidden" name="harga" value="<?echo $harga[4];?>">
			<input type="hidden" name="type" value="profil">
			<input type="hidden" name="klass" value="img/puppy.gif">
			<input type="hidden" name="currency" value="gold">
			<input type="hidden" name="iditem" value="<?$iditem[4];?>">
			<center><input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="button small" type="submit" name="Submit" value="Buy"></center>
		
			</form>
		</td>
		<td width="60%">
		<table align="center" width="100%">
			<tr><td width="20%">Nama Item:</td><td><?echo $namaitem[4];?></td></tr>
			<tr><td width="20%">Harga :</td><td><?echo $harga[4];?> GOLD</td></tr>
			<tr><td width="20%">Deskripsi Item:</td><td><?echo $deskripsi[4];?></td></tr>
		</table>
		</td>
	</tr>
	<tr width="100%">
		<td width="40%">
			<center><img src="<?echo $imgsrc[5];?>" alt="Logo" style="width:100px;height:100px;"></center>
			<form action="index.php?act=store" method="post" >
		
			<center><input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="button small" type="submit" name="Submit" value="Buy"></center>
		
			</form>
		</td>
		<td width="60%">
		<table align="center" width="100%">
			<tr><td width="20%">Nama Item:</td><td><?echo $namaitem[5];?></td></tr>
			<tr><td width="20%">Harga :</td><td><?echo $harga[5];?></td></tr>
			<tr><td width="20%">Deskripsi Item:</td><td><?echo $deskripsi[5];?></td></tr>
		</table>
		</td>
	</tr>
	<tr width="100%">
		<td width="40%">
			<center><img src="<?echo $imgsrc[6];?>" alt="Logo" style="width:100px;height:100px;"></center>
			<form action="index.php?act=store" method="post" >
		
			<center><input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="button small" type="submit" name="Submit" value="Buy"></center>
		
			</form>
		</td>
		<td width="60%">
		<table align="center" width="100%">
			<tr><td width="20%">Nama Item:</td><td><?echo $namaitem[6];?></td></tr>
			<tr><td width="20%">Harga :</td><td><?echo $harga[6];?></td></tr>
			<tr><td width="20%">Deskripsi Item:</td><td><?echo $deskripsi[6];?></td></tr>
		</table>
		</td>
	</tr>
</table>
</td>
</tr>
</table>
<?
mysql_close($conn);
?>
<br><br><br>