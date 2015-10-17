<!-- 
this page used to check the answer from user
whether correct or not and will return the amount of
gold/exp for each correct answer
-->
<?
ini_set('session.bug_compat_warn',0);
ini_set('session.bug_compat_42',0);

session_start();
include 'include/mysql.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
//load the class id,user id and username
$classid = $_POST['class'];
$userid = $_SESSION['user_id'];
$username = $_SESSION['user'];
//select user data from database
$query1 = mysql_query("SELECT * FROM tb_user WHERE id_user = '$userid'")or die();

// get data of scor,exp and gold from db
	while($row = mysql_fetch_array($query1)) {
		$skor = $row['skor'];
		$exp1 = $row['experience'];
		$gold1 = $row['gold'];
	} 
//fetch the previous answer
$k_jawaban1 = $_POST['k_jawaban1'];
$k_jawaban2 = $_POST['k_jawaban2'];
$k_jawaban3 = $_POST['k_jawaban3'];
$k_jawaban4 = $_POST['k_jawaban4'];
$k_jawaban5 = $_POST['k_jawaban5'];
$k_jawaban6 = $_POST['k_jawaban6'];
$jawaban1 =  $_POST['jawaban1'];
$jawaban2 =  $_POST['jawaban2'];
$jawaban3 =  $_POST['jawaban3'];
$jawaban4 =  $_POST['jawaban4'];
$jawaban5 =  $_POST['jawaban5'];
$jawaban6 =  $_POST['jawaban'];


?>
<b>Hasil</b>
<form action="index.php?act=class">
<input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="right button small" type="submit" value="Back">
</form>
<table align="center" width="100%">
		<table align="center" width="100%">
		<tr>
			<td>Jawaban Pertanyaan : --contoh jawaban dr database</td>
		</tr>
		</table>
		<table align="center" width="100%">
		<tr>
			<td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td>
		</tr>
		</table>
		<table align="center" width="100%">
		<tr>
			<td><?echo $k_jawaban1;?></td><td><?echo $k_jawaban2;?></td><td><?echo $k_jawaban3;?></td><td><?echo $k_jawaban4;?></td><td><?echo $k_jawaban5;?></td><td><?echo $k_jawaban6;?></td>
		</tr>
		</table>
		<table align="center" width="100%">
		<tr>
			<td>Jawaban anda: --contoh jawaban anda</td>
		</tr>
		</table>
		<table align="center" width="100%">
		<tr>
			<td><?echo $jawaban1;?></td><td><?echo $jawaban2;?></td><td><?echo $jawaban3;?></td><td><?echo $jawaban4;?></td><td><?echo $jawaban5;?></td><td><?echo $jawaban6;?></td>
		</tr>
		</table>
</table>
<table align="center" width="100%">
<!-- showing the result of each answer whether corect or false and return the amount of score for each question-->
		<tr>
			<td>Hasil :</td>
		</tr>
		<?
		if ($k_jawaban1 == $jawaban1){
			$hasil1 = "Benar";
			$total = 17;
		}else{$hasil1 = "salah"; $total = 0;}
		?>
		<tr>
			<td>Pertanyaan 1 : <?echo $hasil1;?></td>
		
		<?
		if ($k_jawaban2 == $jawaban2){
			$hasil2 = "Benar";
			$total = $total + 17;
		}else{$hasil2= "salah"; $total = $total + 0;}
		?>
		
			<td>Pertanyaan 2 : <?echo $hasil2;?></td>
		
		<?
		if ($k_jawaban3 == $jawaban3){
			$hasil3 = "Benar";
			$total = $total + 17;
		}else{$hasil3= "salah"; $total = $total + 0;}
		?>
		
			<td>Pertanyaan 3 : <?echo $hasil3;?></td>
		</tr>
		<?
		if ($k_jawaban4 == $jawaban4){
			$hasil4 = "Benar";
			$total = $total + 17;
		}else{$hasil4= "salah"; $total = $total + 0;}
		?>
		<tr>
			<td>Pertanyaan 4 : <?echo $hasil4;?></td>
		
		<?
		if ($k_jawaban5 == $jawaban5){
			$hasil5 = "Benar";
			$total = $total + 17;
		}else{$hasil5= "salah"; $total = $total + 0;}
		?>
		
			<td>Pertanyaan 5 : <?echo $hasil5;?></td>
		
		<?
		if ($k_jawaban6 == $jawaban6){
			$hasil6 = "Benar";
			$total = $total + 17;
		}else{$hasil6= "salah"; $total = $total + 0;}
		?>
		
			<td>Pertanyaan 6 : <?echo $hasil6;?></td>
		</tr>
		<?
		//calculate the total of the correct answer and generate exp/gold gained
		if (($total >= 100) || ($total >= 85)){
			$result = "awesome";
			$gold = $gold1 + 50;
			$exp = $exp1 + 15;
			$skor = $skor + ($classid * 4);
			$query2 = mysql_query("INSERT INTO  user_activity (id ,user_id, user_name,activity) VALUES (NULL ,  '$userid', '$username', 'Cleared class $classid')")or die();
		} else if ((84 >= $total) || ($total >= 75)){
			$result = "bold";
			$gold = $gold1 + 40;
			$exp = $exp1 + 14;
			$skor = $skor + ($classid * 3);
		}else if ((74 >= $total) || ($total >= 65)){
			$result = "C....";
			$gold = $gold1 + 30;
			$exp = $exp1 + 12;
			$skor = $skor + ($classid * 2);
		}else if ((64 >= $total) || ($total >= 50)){
			$result = "doomed";
			$gold = $gold1 + 20;
			$exp = $exp1 + 10;
			$skor = $skor + ($classid * 1);
		}else{
		$result = "fail$total";
		}
		//save the exp,gold and scor to database
	$query3 = mysql_query("UPDATE  tb_user SET  experience =  '$exp',gold =  '$gold',skor = '$skor' WHERE  id_user = '$userid'")or die();	
			
		mysql_close($conn);
		?>
		<tr>
			<td>anda : <?echo $result;?></td>
		</tr>	
</table>

<br><br><br><br><br><br>