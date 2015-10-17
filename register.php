<!-- 
this page used to show the register form
and show the alert box when there are error triggered
-->
<h6>Register</h6><hr>

<?
$message = isset($_GET['msg']) ? $_GET['msg'] : "";
$id = isset($_GET['id']) ? $_GET['id'] : "";
//error or success message when register
if ($message == 'success') {
echo '<div class="alert-box success">Account <font color="gold">' .$id. '</font> Berhasil dibuat.</div>';
} 

else if ($message == 'account_in_use') {
echo '<div class="alert-box alert">Account Telah digunakan.</div>';
} 

else if ($message == 'disallow_string') {
echo '<div class="alert-box alert">Input Form Hanya boleh Alphabet/Numeric Saja.</div>';
} 

else if ($message == 'too_short') {
echo '<div class="alert-box alert">Input Form Hanya Boleh Paling Sedikit 4 Digits.</div>';
}

else if ($message == 'empty_field') {
echo '<div class="alert-box alert">Harap Isi Field Yang Kosong.</div>';
} 

else if ($message == 'not_same') {
echo '<div class="alert-box alert">Password Tidak Cocok, Pastikan Password Sama.</div>';
} 


?>

<table align="center" width="100%">
	<form action="register_check.php" method="post" >
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
			<td>Confirm Password <span class="right">4-10 Characters</span></td>
		</tr>
		<tr>
			<td><input style="width:100%;height:30px;margin:1px 1px 1px 1px" name="cpassword" type="password" id="cpassword" maxlength="10" placeholder="Re-Type Your Password"></td>
		</tr>
		
		<tr>
			<td><input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="right button small" type="submit" name="Submit" value="Register"></td>
		</tr>
	</form>	
</table>