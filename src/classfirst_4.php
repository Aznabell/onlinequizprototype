<!--
same like classfirst.php this page also used to fetch the question and answer from database
and save previous answer to be used for the result
 -->
<?
ini_set('session.bug_compat_warn',0);
ini_set('session.bug_compat_42',0);

session_start();
include 'include/mysql.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
//fetch the classid
$classid = $_POST['class'];
//query to fetch the data inside database
$query1 = mysql_query("SELECT * FROM tb_class WHERE class_level = '$classid' AND class_level_id = '4'")or die();

// output data of question and answer from database
    while($row = mysql_fetch_array($query1)) {
		$soal = $row['soal'];
        $jawaban = $row['kunci_jawaban'];
	}
//saving previous answer for later use by result
$k_jawaban1 = $_POST['k_jawaban1'];
$k_jawaban2 = $_POST['k_jawaban2'];
$k_jawaban3 = $_POST['k_jawaban3'];
$jawaban1 =  $_POST['jawaban1'];
$jawaban2 =  $_POST['jawaban2'];
$jawaban3 =  $_POST['jawaban'];


mysql_close($conn);
?>
<center style="font-size:80px;color:808080;"><b>Class 1</b></center><br><br><br><br><br><br>

<table align="center" width="100%">
	<form action="index.php?act=classfirst_5" method="post" >
		<tr>
			<td>Pertanyaan 1:</td>
		</tr>
		<tr>
			<td><?echo $soal;?> --contoh pertanyaan dr database</td>
		</tr>
</table>
<table align="center" width="100%">
		<tr>
			<td>Jawaban: </td>
		</tr>
		<tr>
			<td><input type="radio" name="jawaban" value="A">A</td>
		</tr>
		<tr>
			<td><input type="radio" name="jawaban" value="B">B</td>
		</tr>
		<tr>
			<td><input type="radio" name="jawaban" value="C">C</td>
		</tr>
		<tr>
			<td><input type="radio" name="jawaban" value="D">D</td>
		</tr>
		<input type="hidden" name="class" value="<?echo $classid;?>">
		<input type="hidden" name="jawaban1" value="<?echo $jawaban1;?>">
		<input type="hidden" name="jawaban2" value="<?echo $jawaban2;?>">
		<input type="hidden" name="jawaban3" value="<?echo $jawaban3;?>">
		<input type="hidden" name="k_jawaban1" value="<?echo $k_jawaban1;?>">
		<input type="hidden" name="k_jawaban2" value="<?echo $k_jawaban2;?>">
		<input type="hidden" name="k_jawaban3" value="<?echo $k_jawaban3;?>">
		<input type="hidden" name="k_jawaban4" value="<?echo $jawaban;?>">
		<tr>
			<td><input style="margin-bottom:10px;margin:1px 1px 1px 1px" class="right button small" type="submit" name="Submit" value="Submit"></td>
		</tr>
	</form>	
</table>