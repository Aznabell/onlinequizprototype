<!-- 
this page used to update the user profile
-->
<?
ini_set('session.bug_compat_warn',0);
ini_set('session.bug_compat_42',0);

session_start();
include 'include/mysql.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$user_id = $_SESSION['user_id'];
$username = $_POST['username'];
$pekerjaan = $_POST['pekerjaan'];
$telp = $_POST['telp'];
$email = $_POST['e-mail'];
$alamat = $_POST['alamat'];
//quesry for updating user profile
$query = mysql_query("UPDATE user_data SET pekerjaan = '$pekerjaan', telp='$telp',email='$email',alamat='$alamat' WHERE user_id = '$user_id'") or die();
$query = mysql_query("UPDATE tb_user SET nama = '$username' WHERE id_user = '$user_id'") or die();
//query for checking wheter the saved is mathced
if($query){
$_SESSION['user'] = $username;
$_SESSION['pekerjaan'] = $pekerjaan;
$_SESSION['telp'] = $telp;
$_SESSION['e-mail'] = $email;
$_SESSION['alamat'] = $alamat;
header('location:index.php?act=profile&msg=success');
exit();
} 	
mysql_close($conn);
?>