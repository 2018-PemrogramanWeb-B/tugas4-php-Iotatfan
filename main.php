<?php
include 'login.php';

if(isset($_SESSION['login'])) {
    header("location: welcome.php");
}
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
	<link rel="stylesheet" href="awal.css" type="text/css"/>
</head>
<body>
    <div id="login">
        <form action="" method="POST">
		    <label>Name</label>
		    <input id="nama" name="name" type="text"/>
		    <label id="key1">Password</label> 
    		<input id="key2" name="key" type="password"/>
            <button class="button" name="submit" type="submit" value="login">Login</button>
            <p id="error">
                <?php echo $error; ?>
            </p>
	    </form>
    </div>


</body>
</html>