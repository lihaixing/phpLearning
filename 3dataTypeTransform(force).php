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
	// 临时转换，()方式
	$var=12;
	//int(12) float(12) float(12) float(12) string(2) "12" bool(true) bool(true) 
	var_dump($var,(float)$var,(double)$var,(real)$var,(string)$var,(boolean)$var,(bool)$var);
	echo "<hr>";
	//NULL array(1) { [0]=> int(12) } object(stdClass)#1 (1) { ["scalar"]=> int(12) } 
	var_dump((unset)$var,(array)$var,(object)$var);
	echo "<hr>";
	$var='3king';
	//int(3) int(3) 
	var_dump((int)$var,(integer)$var);
	echo "<hr>";
	// 临时转换，函数方式
	$var =true;
	echo intval($var);
	echo floatval($var);
	echo doubleval($var);
	echo strval($var);
	
	$var="false";
	echo boolval($var);
	
	echo "<hr>";
	//永久转换
/*type 的可能值为： 
1. “boolean” （或为“bool”，从 PHP 4.2.0 起）  
2. “integer” （或为“int”，从 PHP 4.2.0 起）  
3. “float” （只在 PHP 4.2.0 之后可以使用，对于旧版本中使用的“double”现已停用）  
4. "string"  
5.  "array"  
6.  "object"  
7. “null” （从 PHP 4.2.0 起） 
*/
	$var=123;
	var_dump($var);//int(123)  
	echo '<hr>',gettype($var);//integer 得到变量类型
	$var='string';
	settype($var,'float');//设置变量类型，若成功返回1
	echo '<hr>',$var;//0
	settype($var,'boolean');//设置变量类型，若成功返回1
	echo '<hr>',$var;//''
	//检测变量类型
	echo '<hr>',is_int($var);//别名is_integer,is_long
	echo '<hr>',is_string($var);
	echo '<hr>',is_bool($var);
	//is_float() is_real is_double检测是否是浮点型
	//is_array()
	//is_resource()
	//is_object();
	//is_null();
	//is_scalar();//标量
	$var=1.1;//true
	$var='1.1';//true
	var_dump(is_numeric($var));//是否是字符串的数值 true
	var_dump(is_scalar($var));//true 字符串也是true
	?>
    </body>
</html>
