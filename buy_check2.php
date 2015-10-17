<!-- 
this page used for check out when user buy an item
this page used when user buy item using gold
if the amount of gold is sufficient user will be able to buy the item
else the alert box will be prompted
-->
<?
ini_set('session.bug_compat_warn',0);
ini_set('session.bug_compat_42',0);

session_start();
include 'include/mysql.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
//load the data of user id and name and item properties
$userid = $_SESSION['user_id'];
$username = $_SESSION['user'];
$harga = $_POST['harga'];
$type = $_POST['type'];
$currency = $_POST['currency'];
$imgsrc = $_POST['imgsrc'];
$iditem = $_POST['id_item'];
$namaitem = $_POST['namaitem'];
$klass = $_POST['klass'];
$date = date("Y-m-d");
//query to fetch user data
$query1 = mysql_query("SELECT * FROM tb_user WHERE id_user = '$userid'")or die();

//get the data from database
    while($row = mysql_fetch_array($query1)) {
		$experience = $row['experience'];
        $gold = $row['gold'];
		$class = $row['class'];
	}

if(isset($_POST['masuk'])){
//check if user able to purchase the item
			if ($harga > $gold){
			//alert box when user have insufficient gold to purchase item
			echo '<div class="alert-box alert">insufficient gold.</div>';	
			}else{
			//if the gold is sufficient to purchase item
			//substract the gold with item price
			$gold = $gold - $harga;
			//save data into database
			$query2 = mysql_query("UPDATE tb_user SET gold = '$gold' WHERE id_user = '$userid'")or die();
			$query4 = mysql_query("UPDATE user_data SET imgsrc = '$klass' WHERE user_id = '$userid'")or die();
			$query5 = mysql_query("INSERT INTO  user_activity (id ,user_id, user_name,activity) VALUES (NULL ,  '$userid', '$username', 'Obtained profile Picture Puppy')")or die();
			$query3 = mysql_query("INSERT INTO tb_transaksi (id_user, id_item, waktu_transaksi) VALUES ('$userid', '$iditem', '$date')")or die();
			header("location:index.php?act=store");			
			}
		}else if(isset($_POST['cancel'])){
		header("location:index.php?act=store");	
		}	
?>
<table align="center" width="100%">
<tr>
		<td width= "30%">
		<center><img src="<?echo $imgsrc;?>" alt="Logo" style="width:200px;height:200px;"></center>
		</td>
		<td>
		<table align="center" width="100%">
			<tr><td width= "20%">Nama Item	   :</td><td><?echo $namaitem;?></td></tr>
			<tr><td width= "20%">Harga :</td><td><?echo $harga;?></td></tr>
			<tr><td width= "20%">Payment Type	   :</td><td><?echo $currency;?></td></tr>
			<form action="index.php?act=buycheck2" method="post">
			<input type="hidden" name="imgsrc" value="<?echo $imgsrc;?>">
			<input type="hidden" name="namaitem" value="<?echo $namaitem;?>">
			<input type="hidden" name="harga" value="<?echo $harga;?>">
			<input type="hidden" name="currency" value="<?echo $currency;?>">
			<input type="hidden" name="type" value="<?echo $type;?>">
			<input type="hidden" name="id_item" value="<?echo $iditem;?>">
			<input type="hidden" name="klass" value="<?echo $klass;?>">
			<tr><td></td>
			<td><input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="right button small" type="submit" name="cancel" value="Cancel">
			<input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="right button small" type="submit" name="masuk" value="Buy"></td>
			</tr>
			
			</form>
		</table>
		</td>
		
	</tr>
</table>
<?

mysql_close($conn);
?>