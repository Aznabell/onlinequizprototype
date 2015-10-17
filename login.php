<!-- 
this page used to show the login form and
the data will passed to login_check.php for login process
and in this page also will show the alert box if trigerred by login_check.php
-->
<h6>Login</h6><hr>
<?
$message = isset($_GET['msg']) ? $_GET['msg'] : "";
//alert box notification while login
if ($message == 'wrong_account') {
echo '<div class="alert-box alert">Akun Salah atau Tidak Terdaftar.</div>';
} 

else if ($message == 'wrong_password') {
echo '<div class="alert-box alert">Password Salah.</div>';
}

else if ($message == 'empty_field') {
echo '<div class="alert-box alert">Harap Isi Semua Form.</div>';
} 

else if ($message == 'logout') {
echo '<div class="alert-box alert">Log Out.</div>';
}

?>

<table align="center" width="100%">
	<form action="login_check.php" method="post" >
		<tr>
			<td>Username <span class="right">4-10 Characters</span></td>
		</tr>
		<tr>
			<td><input style="width:100%;height:30px;margin:1px 1px 1px 1px" name="username" type="text" id="username" maxlength="10" placeholder="Type Your Username"></td>
		</tr>
		
		<tr>
			<td>Password <span class="right">4-10 Characters</span></td>
		</tr>
		<tr>
			<td><input style="width:100%;height:30px;margin:1px 1px 1px 1px" name="password" type="password" id="password" maxlength="10" placeholder="Type Your Password"></td>
		</tr>
		
		<tr>
			<td><input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="right button small" type="submit" name="Submit" value="Login"></td>
		</tr>
	</form>	
</table>