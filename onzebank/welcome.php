<meta http-equiv="refresh" content="300;url=logout.php" />


<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1><B>Hallo, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
		</b> welkom bij onze bank internetbankieren.</h1>
		<a href="logout.php" class="btn btn-danger">Uitloggen</a>
		<?php if($_SESSION['username'] == 'admin') {
		echo "<a href='register.php' class='btn btn-danger'>Nieuwe gebruiker registeren</a></h1>";}?>
    </div>
	<img src="bankieren.jpg" align="center">
</body>
</html>