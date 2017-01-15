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
	header('content-type:text/html;charset=utf-8');
	//算术运算符
	echo '<hr>', 3 % 8; //3
	echo '<hr>', 3 % -8; //3
	echo '<hr>', -3 % 8; //-3
	echo '<hr>', -3 % -8; //-3
	$var = 3;
	echo '<hr>', ++$var; //4
	echo '<hr>', $var++; //4
	echo '<hr>', $var; //5
	//布尔类型不支持自增自减
	$var = true;
	echo '<hr>', ++$var; //1
	//null支持自增,但不支持自减
	$var = null;
	echo "<hr color='red'>", ++$var;
	$var = null;
	echo "<hr color='red'>", --$var;
	//字符串支持自增,但不支持自减
	$var = 'b';
	echo "<hr color='green'>", --$var; //b
	$var = 'b';
	echo "<hr color='green'>", ++$var; //c
	$var = 'z';
	echo "<hr color='green'>", ++$var; //aa
	$var = 'Z';
	echo "<hr color='green'>", ++$var; //AA
	$var = 'a1';
	echo "<hr color='green'>", ++$var; //a2
	$var = '1a';
	echo "<hr color='green'>", ++$var; //1b
	$var = 'a9';
	echo "<hr color='green'>", ++$var; //b0
	$var = '1z';
	echo "<hr color='green'>", ++$var; //2a
	$var = '9z';
	echo "<hr color='green'>", ++$var; //10a
	//字符串连接符
	echo 'hello', 'world';
	echo '<hr>';
	$str = 'hello' . 'world'; //字符连接符 .
	echo '<hr>', $str;
	echo '<hr>', $str . '<br>' . 'hello';
	//验证码
	echo '<hr>' . mt_rand(1000, 9999);
	echo '<hr>';
	$table = '<span style="color:rgb(' . mt_rand(0, 255) . "," . mt_rand(0, 255) . "," . mt_rand(0, 255) . ')">' . mt_rand(1, 9) . '</span>';
	$table.= '<span style="color:rgb(' . mt_rand(0, 255) . "," . mt_rand(0, 255) . "," . mt_rand(0, 255) . ')">' . mt_rand(1, 9) . '</span>';
	$table.= '<span style="color:rgb(' . mt_rand(0, 255) . "," . mt_rand(0, 255) . "," . mt_rand(0, 255) . ')">' . mt_rand(1, 9) . '</span>';
	$table.= '<span style="color:rgb(' . mt_rand(0, 255) . "," . mt_rand(0, 255) . "," . mt_rand(0, 255) . ')">' . mt_rand(1, 9) . '</span>';
	echo $table;

	echo "<hr>";
	//赋值运算符
	$a = 1;
//	$a+=1;
//	$a-=1;
//	$a*=1;
//	$a/=1;
//	$a%=1;
	$a.=1; //11
	echo $a, '<hr>';

	$string = "abcdefghigklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
	echo $string{mt_rand(0, strlen($string) - 1)}, '<hr>'; //strlen(str)字符串长度函数
	$verify = $string{mt_rand(0, strlen($string) - 1)};
	$verify.=$string{mt_rand(0, strlen($string) - 1)};
	$verify.=$string{mt_rand(0, strlen($string) - 1)};
	$verify.=$string{mt_rand(0, strlen($string) - 1)};
	echo $verify, '<hr>';
	//每一位颜色不一样
	$table = '<span style="color:rgb(' . mt_rand(0, 255) . "," . mt_rand(0, 255) . "," . mt_rand(0, 255) . ')">' . $string{mt_rand(0, strlen($string) - 1)} . '</span>';
	$table.= '<span style="color:rgb(' . mt_rand(0, 255) . "," . mt_rand(0, 255) . "," . mt_rand(0, 255) . ')">' . $string{mt_rand(0, strlen($string) - 1)} . '</span>';
	$table.= '<span style="color:rgb(' . mt_rand(0, 255) . "," . mt_rand(0, 255) . "," . mt_rand(0, 255) . ')">' . $string{mt_rand(0, strlen($string) - 1)} . '</span>';
	$table.= '<span style="color:rgb(' . mt_rand(0, 255) . "," . mt_rand(0, 255) . "," . mt_rand(0, 255) . ')">' . $string{mt_rand(0, strlen($string) - 1)} . '</span>';
	echo $table, '<hr>';

	//比较运算符
	var_dump(3 > 1, 3 < 1, 3 >= 1, 3 <= 1);
	//== != <>,只比较值是否相同
	//=== !==，值和类型都要相同
	echo '<hr>';
	var_dump(1 == 1, 1 == '1', 1 == true); //bool(true) bool(true) bool(true) 
	echo '<hr>';
	var_dump(1 === 1, 1 === '1', 1 === true); //bool(true) bool(false) bool(false) 
	echo '<hr>';
	var_dump(1 != 1, 1 != 0, 1 <> true); //bool(false) bool(true) bool(false) 
	echo '<hr>';
	var_dump(1 !== '1', 1 !== 0, 1 !== true); //bool(true) bool(true) bool(true) 
	echo '<hr>';
	//strpos(str,search[,offset])在一个字符串中查找某字符串第一次出现的位置
	//
	$str = 'MAIZIXUEYUAN';
	echo strpos($str, 'ZI'), '<hr>'; //3 
	if (strpos($str, 'T') !== false) {
	    echo '找到了';
	} else {
	    echo '没找到';
	}

	//逻辑运算符 注意短路现象
	//与 &&
	//或 || or
	//!
	//亦或 xor 相同就是假，不相同就是真
	//bool(true) bool(false) bool(false) bool(false) 
	var_dump(true && true, true && false, false && true, false && false);
	echo '<hr>';
	var_dump(true xor true, true xor false, false xor true, false xor false);
	echo '<hr>';
	//三元运算符
	//执行运算符 注意用反引号
	echo `ipconfig`;
	echo '<hr>';
	echo shell_exec(`ipconfig`);
	echo '<hr>';
	//错误抑制符 前面加@ 不会出现错误和警告
	settype($var, 'king');
	echo '<hr>';
	@settype($var, 'king');
	echo '<hr>';
	//三元运算符
	echo 3 > 1 ? 6 : 8;
	echo '<hr>';
	echo 3 > 1? : 8; //?号后的内容省略时，表示为真就显示本身 1
	echo '<hr>';
	$i = 1;
//	echo 1 + ++$i + $i++;//5
//	echo $i + $i++; //3 why
//	echo 1 + $i + $i++; //3
	echo $i + ++$i + 1; //5
	echo '<hr>';
	$i = 3;
	$j = 5;
	echo $i . '+' . $j . '=' . $i + $j; //8
	echo '<hr>';
	echo $i . '+' . $j . '=' . ($i + $j); //3+5=8
	?>	
    </body>
</html>
