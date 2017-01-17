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
	//去掉{}的形式,没什么乱用
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
	
	//date($format[,$time=time()]);得到服务器的时间
//	Y年m月d日H小时i分钟s秒w一周内的第多少天(0~6),0代表星期日
	echo date('Y年m月d日 H:i:s 星期w');
//	date_default_timezone_get():得到时区
//	date_date_set($object, $year, $month, $day) 设置时区，还可以通过设置文件来设置时区
	ini_get('date.timezone');
	ini_set('date.timezone','Asia/Chongqing');
	echo '<hr>',date_default_timezone_get();//Europe/Berlin 
	date_default_timezone_set('PRC');//若设置成功，返回失去，否则返回false
	//PRC中国时区
	echo '<hr>',date_default_timezone_get();
	echo '<hr>',date('Y年m月d日 H:i:s 星期w');
	//通过time()函数得到当前时间截 秒数
	echo '<hr>',time();
	echo '<hr>',date("Y/m/d H:i:s",time()+24*3600);//意思是多一天
	
	?>
    </body>
</html>
