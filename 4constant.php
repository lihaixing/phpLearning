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
	// 常量不能改变
	//系统常量 直接拿来用的
	echo PHP_VERSION, '<hr>'; //5.6.21
	echo PHP_OS, '<hr>'; //WINNT
	echo M_PI, '<hr>'; //3.1415926535898
	//自定义常量 常量尽量大写
	define('MAIZI', '最大的IT在线教育平台');
	define('_TEST_', 'THIS IS A TEST');
	define('MARRIED', true); //define定义常量默认是区分大小写的，若不想区分大小写，则设置第三个参数为true
	echo MAIZI, '<hr>';
	echo _TEST_, '<hr>';
	echo MARRIED, '<hr>';
	echo married, '<hr>'; //married
	define('MAIZI', 'IT教育平台');
	echo MAIZI, '<hr>'; //值并没有改变
	//利用canstant()函数获得常量的值
	echo constant("_TEST_"), '<hr>'; //是不是多余？NO,看下面
	//通过defined函数检测常量是否已经被定义
	echo defined('MARRIED'); //1

	echo '<hr>';
	$name = "AAA";
	$value = '1233454';
	if (!defined($name)) {
	    define($name, $value);
	    echo $name; //此时这个方法不可以 因为加了引号
	    echo constant($name);
	    echo AAA;
	} else {
	    echo constant($name);
	}

	//5.3之后 通过const定义常量
	echo '<hr>';
		const ROOT = 'THIS IS A ROOT';
	echo ROOT;
//	echo constant(ROOT);//这样不可以，会转化为constant('THIS IS A ROOT');
	echo constant('ROOT');
	echo root; //root 区分大小写	

	$arr = array(1, 3);
	echo $arr; //输不出来
	//得到所有已定义的常量
//	print_r(get_defined_constants());
	
	echo '<hr>';
	//魔术常量 还有一些等到后面再提
	echo __LINE__;//当前行号
	echo '<hr>';
	echo __FILE__;//当前文件绝对路径
	echo '<hr>';
	echo __DIR__;//当前文件所在目录
	
	echo '<hr>';
	define('FILE', __FILE__);//相当于替换
	echo FILE;
	?>
    </body>
</html>
