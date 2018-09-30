<?php 
include 'session.php';
if(!isset($_SESSION['login'])) {
    header('location: main.php');
}
?>

<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
    <div id="sapa">
        <?php
        date_default_timezone_set('Asia/Jakarta');

        $get=getdate();
        $jam=$get['hours'];
        if($jam >= 3 && $jam < 11 ) {
            $sapa='Pagi';
        }
        else if($jam >= 11 && $jam < 15) {
            $sapa='Siang';
        }
        else if($jam >= 15 && $jam < 18) {
            $sapa='Sore';
        }
        else {
            $sapa='Malam';
        }


        echo "Selamat $sapa $user_login";
        ?>

    </div>

    <form action="logout.php">
        <button class="button" type="submit" name="out" value="Logout">
                Logout
        </button>
    </form>
    
</body>
</html>