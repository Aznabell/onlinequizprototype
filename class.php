<!--
this page used to select the level of the question
if user is eligible for the question level user will be directed to the question page 
else the alert box will prompted
 -->
<center style="font-size:80px;color:808080;"><b>Class</b></center><br><br><br><br><br><br>
<?
	ini_set('session.bug_compat_warn',0);
	ini_set('session.bug_compat_42',0);

	session_start();
	include 'include/mysql.php';
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	//load the user id and class from session
	$userid = $_SESSION['user_id'];
	$klass = $_POST['class'];
	//query to fetch user data
	$query1 = mysql_query("SELECT * FROM tb_user WHERE id_user = '$userid'")or die();

	//get the data of class from database
		while($row = mysql_fetch_array($query1)) {
			$class = $row['class'];
		}
	//check the eligibility of user question level
		if ($klass > 0){
			if ($klass > $class){
			echo '<div class="alert-box alert">You need to unlock this class in store.</div>';	
			}else{
			header("location:index.php?act=classfirst&msg=$klass");
			}
		}else{
		
		
		}
	mysql_close($conn);
?>

<table align="center" width="100%">
	<tr>
		<td>
			<center><img src="img/classimg.png" alt="Logo" style="width:100px;height:100px;"></center>
		</td>
		<td>
			<center><img src="img/classimg.png" alt="Logo" style="width:100px;height:100px;"></center>
		</td>
		<td>
			<center><img src="img/classimg.png" alt="Logo" style="width:100px;height:100px;"></center>
		</td>
		<td>
			<center><img src="img/classimg.png" alt="Logo" style="width:100px;height:100px;"></center>
		</td>
	</tr>
	<tr>
		<td>
			<form action="index.php?act=classfirst" method="post" >
			<input type="hidden" name="class" value="1">
			<center><input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="button small" type="submit" name="Submit" value="Class 1"></center>
		
			</form>
		</td>
		<td>
			<form action="index.php?act=class" method="post" >
			<input type="hidden" name="class" value="2">
			<center><input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="button small" type="submit" name="Submit" value="Class 2"></center>
		
			</form>
		</td>
		<td>
			<form action="index.php?act=class" method="post" >
			<input type="hidden" name="class" value="3">
			<center><input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="button small" type="submit" name="Submit" value="Class 3"></center>
		
			</form>
		</td>
		<td>
			<form action="index.php?act=class" method="post" >
			<input type="hidden" name="class" value="4">
			<center><input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="button small" type="submit" name="Submit" value="Class 4"></center>
		
			</form>
		</td>
	</tr>
	
</table>