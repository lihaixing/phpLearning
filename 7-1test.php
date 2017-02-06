<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<?php
//	echo $_POST['username'];
//	echo '<hr>',$_GET['username'];
//	echo '<hr>',$_GET['phone'];
	echo '<hr>',$_REQUEST['phone'];
	echo '<hr>',$_REQUEST['username'];
	
	echo '<hr>',$_ENV;
	print_r($_ENV);
	echo '<hr>',$_SERVER;
	print_r($_SERVER);
	?>
    </body>
</html>
