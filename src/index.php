<!--
This is the main page of the website
where user can login or logout
in this page also stored the list of page that used by this website
when switching between pages
 -->
<?
session_start();
?>
<!DOCTYPE html>

<html class="no-js" lang="en" >

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title>Super-Ultra Quiz</title>
		
		<!-- Header -->
		
		<?include 'include/header.php';?>
		
		<!-- End of Header -->
	</head>
	
	<body>
		<!-- Navigation -->
		
		<?include 'include/navigation.php';?>
		
		<!-- End of Navigation -->
		<div class="container" style="margin-top:70px">
			<div class="row" >
				
						
						<? 
						error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
						if ($_SESSION['user']){
						$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : ""; 
						//case used for switching between page
						switch($act) { 
							
							default: include('dashboard.php');
							break; // close this case
							
							case "profile": include('profile.php');
							break; // close this case
							
							case "logout": include('logout.php'); 
							break; // close this case
							
							case "myprofile": include('myprofile.php'); 
							break; // close this case
							
							case "myactivity": include('myactivity.php'); 
							break; // close this case
							
							case "store": include('store.php'); 
							break; // close this case
							
							case "buycheck2": include('buy_check2.php'); 
							break; // close this case
							
							case "buycheck": include('buy_check.php'); 
							break; // close this case
							
							case "class": include('class.php'); 
							break; // close this case
						
							case "classfirst": include('classfirst.php'); 
							break; // close this case
							
							case "classfirst_2": include('classfirst_2.php'); 
							break; // close this case
							
							case "classfirst_3": include('classfirst_3.php'); 
							break; // close this case
							
							case "classfirst_4": include('classfirst_4.php'); 
							break; // close this case
							
							case "classfirst_5": include('classfirst_5.php'); 
							break; // close this case
							
							case "classfirst_6": include('classfirst_6.php'); 
							break; // close this case
							
							case "answercheck": include('answer_check.php'); 
							break; // close this 
							}
						}
						else {
						?>
						<div class ="large-6 columns"style="position:relative;width:50%;margin-left:-12%;margin-top:10%;">
							<img src="img/example.png" alt="Logo" style="width:500px;height:310px;">
						</div>
						<div class="large-6 columns" style="position:relative;width:50%;margin-top:10%;margin-right:-9%;">
							<div class="panel">
								<?
								$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : ""; 
								switch($act) { 
								
								default: include('login.php');
								break; // close this case

								case "register": include('register.php'); 
								break; // close this case
								
								}
								?>
							</div>
						</div>
						<?
						}
						?>
						
				
				
			</div>
		</div>
		
		<?include 'include/navigationbottom.php';?>
		
		<!-- End of Footer -->
		
	</body>
</html>

