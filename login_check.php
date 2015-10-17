<!-- 
this page used to check the login process of user
whether they are able to log in or not
if user is able to login, the user will be directed to the dashboard
else website will trigger the alert box message
-->
<?
ini_set('session.bug_compat_warn',0);
ini_set('session.bug_compat_42',0);

session_start();
include 'include/mysql.php';

$username = $_POST['username'];
$password = $_POST['password'];
//fetch username and password from database
$check_id = mysql_query("SELECT 'nama' FROM tb_user WHERE nama = '$username'") or die();
$num1 = mysql_num_rows($check_id);
$check_pw = mysql_query("SELECT 'password' FROM tb_user WHERE password = '$password'") or die();
$num2 = mysql_num_rows($check_pw);
//fetch username and save to session for later used by website
$query1 = mysql_query("SELECT * FROM tb_user WHERE nama = '$username'");
while($result = mysql_fetch_array ( $query1)){
					$user_id = $result['id_user'];
					$_SESSION['user_id'] = $user_id;
				}
//fetch user data for later use by website				
$query1 = mysql_query("SELECT * FROM user_data WHERE user_id = '$user_id'");
while($result = mysql_fetch_array ( $query1)){
					$_SESSION['pekerjaan'] = $result['pekerjaan'];
					$_SESSION['telp'] = $result['telp'];
					$_SESSION['email'] = $result['email'];
					$_SESSION['alamat'] = $result['alamat'];
					$_SESSION['current_class'] = $result['current_class'];
					$_SESSION['imgsrc'] = $result['imgsrc'];
				}
//checking the username and password to be match with user input
if (empty($username) || (empty($password))){
header('location:index.php?act=main&msg=empty_field');
} 
elseif($num1 ==  0){
header('location:index.php?act=main&msg=wrong_account');
}
elseif($num2 ==  0){
header('location:index.php?act=main&msg=wrong_password');
}
else{
session_start();
$_SESSION['user'] = $_POST['username'];
header('location:index.php?act=dashboard&msg=success');
exit();
}
mysql_close($conn);
?>