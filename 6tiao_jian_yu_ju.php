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
	if(false)
	    echo 'this is a test';
	echo 'continue...';
	if(1=='1'){
	    echo 'true';
	}else if(2=='1'){
	    echo '2true';
	}elseif(3==='3'){
	    echo '3ture';
	}
	//if嵌套语句，不说了，和js一样
	//去掉{}的形式
	echo '<hr>';
	$i='hello';
	if($i=='hi'):
	    echo 'hello';
	    echo 'world';
	elseif($i=='hello'):
	    echo 'hi';
	    echo 'hi';
	else:
	    echo 'NO';
	endif;
	?>
    </body>
</html>
