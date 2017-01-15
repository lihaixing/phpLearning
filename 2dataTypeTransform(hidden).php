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
	//其他类型》数字
	//ture>1 false>0 null>0 以非数字开始的字符串>0
	echo 1+true;
	echo "<hr>",true+1;
	echo "<hr>",'a'+1;//1
	echo "<hr>",1+'2bd';//3
	echo "<hr>",'2bd'+1;//3
	echo "<hr>",'2b3d5'+1;//3
	echo "<hr>",'2e3d5'+1;//2001 科学技术法
	echo "<hr>",'-2e3d5'+1;//-1999
	
	//其他类型》字符串
	echo '<hr>',123;
	echo '<hr>',true;//1
	echo '<hr>',false;//''
	echo '<hr>',null;//''
	$arr=array();
	echo '<hr style=\'color:red\'>',$arr;//Array
	$source=  fopen('dataType.php', 'r');
	echo '<hr style=\'color:red\'>',$source;//Resource id #3 
	$obj=new stdClass();//对象不能直接转换成字符串
//	echo '<hr style=\'color:red\'>',$obj;
	
	//其他类型转换成布尔类型
//	$var=1;//true
//	$var=0;//false
//	$var=0.0;//false
//	$var='';//false
//	$var="";//false
//	$var=' ';//true #
//	$var='0';//false #
//	$var='0.0';//true #
//	$var='false';//true
//	$var=null;//false
	$var=array();//false 空数组
	$var=array(1,'');//true 空数组
//	$var=  fopen("dataType.php", "r");//true
//	$var=  new stdClass();//true 空对象也为true
	if($var){
	    echo '<hr>','true';
	}else{
	    echo '<hr>','false';
	}
	?>
    </body>
</html>
