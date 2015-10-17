<!-- 
this page use to check the user input when registering an account
-->
<?
session_start();
include 'include/mysql.php';

$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$username = trim($username);
$password = trim($password);
$cpassword = trim($cpassword);
//check if username is not the same with data inside database
$check_id = mysql_query("SELECT 'nama' FROM tb_user WHERE nama = '$username'") or die();
$num1 = mysql_num_rows($check_id);

//checking user input for username and password
if (empty($username) || (empty($password)) || (empty($cpassword))){
header('location:index.php?act=register&msg=empty_field');
} 
elseif(preg_match("/[^a-zA-Z0-9]/i", $username, $str)){
header('location:index.php?act=register&msg=disallow_string');
} 
elseif(preg_match("/[^a-zA-Z0-9]/i", $password, $str)){
header('location:index.php?act=register&msg=disallow_string');
} 
elseif (strlen($username) < 4){
header('location:index.php?act=register&msg=too_short');
}
elseif (strlen($password) < 4){
header('location:index.php?act=register&msg=too_short');
}
elseif ($password != $cpassword){
header('location:index.php?act=register&msg=not_same');
}	
elseif($num1 ==  1){
header('location:index.php?act=register&msg=account_in_use');
} 

// This is query for register
else {
$query = mysql_query("INSERT INTO tb_user( password, nama) VALUES ('$password','$username')"); 

$query1 = mysql_query("SELECT * FROM tb_user WHERE nama = '$username'");
while($result = mysql_fetch_array ( $query1)){
					$user_id = $result['id_user'];
				}

$query2 = mysql_query("INSERT INTO user_data( user_id) VALUES ('$user_id')");				
}


if($query){
header('location:index.php?act=register&msg=success&id=' .$username. '');
exit();
} 	
mysql_close($conn);	
?>