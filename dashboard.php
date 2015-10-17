<!--
main page after user login showing top achiever and recent user activity 
-->
<center style="font-size:80px;color:808080;"><b>Home</b></center><br><br>
<table align="center" width="70%" >
	<tr>
		<td>
			<b>Top Achiever</b>
		</td>
		
	</tr>
</table>
<table align="center" width="70%" >
	
		
			<?
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
				
				$user = $_SESSION['user'];
				$query = mysql_query("SELECT nama, skor FROM tb_user ORDER BY experience DESC LIMIT 5") or die("query eror");
				while($result = mysql_fetch_array ( $query)){
					echo "<tr><td>".$result['nama']."</td><td>".$result['skor']."</td></tr>";
				}
				
			?>
		
		
	
</table>
<table align="center" width="70%" >
	<tr>
		<td>
			<b>Recent User Activity</b>
		</td>
		
	</tr>
</table>
<table align="center" width="70%" >
	
		
			<?

				$query1 = mysql_query("SELECT user_name,activity FROM user_activity ORDER BY id DESC LIMIT 5") or die("query eror");
				while($result = mysql_fetch_array ( $query1)){
					echo "<tr><td>".$result['user_name']."</td><td>".$result['activity']."</td></tr>";
				}
				
				mysql_close($conn);
			?>
		
		
	
</table>
		