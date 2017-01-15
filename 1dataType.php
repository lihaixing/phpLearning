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
	
	$sex = '男';
	$name = 'haixing';
	echo $sex;
	echo 'king';
	echo '<hr/>';
//	一次性输出
	echo $sex, $name;
	$i = 5;
	//将地址赋给，和js中的对象很像
	$j = &$i;
	echo $i, $j;
	$i = 6;
	echo $j, '<hr/>';

	$j = 7;
	echo $i;
	//注销变量,指不指向任何地址
	unset($i);
	echo '<hr>', $i;
	echo '<hr>', $j;

	//数据类型8种
	$i = -4;
	//输出变量的详细信息，包括数据类型
	var_dump($i); //int(0)
	$i = 4.56;
	var_dump($i);
	$i = true;
	var_dump($i);
	$i = 'hello world';
	var_dump($i); //string(11) "hello world"
	$i = "hello world";
	$i = 李海兴;
	$j = '李海兴';
	$k = "李海兴";
	var_dump($i, $j, $k);

	var_dump($i);
	echo '<hr>';
	$i = 2e3; //这也是浮点类型
	$j = 2e-3;
	var_dump($i, $j);
	//数组，对象，资源
	$arr = array(4, 5);
	var_dump($arr);

	$obj = new stdClass();
	var_dump($obj);

	$handle = fopen('test1.html', 'r'); //用只读方式打开一个文件
	var_dump($handle);

	//null类型 1没有声明的变量，赋值为null的变量，注销的变量
	$i = 4;
	var_dump($n);
	echo "<hr style='color:red'>";

	//字符串类型
	$username = 'king';
	echo $username, '<hr>';
	echo '$username', '<hr>';
	echo "$username", '<hr>'; //单引号原样输出，双引号解析变量，和不加引号一样
	//单引号比双引号执行效率快
	//转义符 \' \" \$ \n(换行） \r(回车） 
	$string = 'A>B,king&queen,c<d,he said "I\'m fine"';
	//>用&gt; <用&lt; &用&amp;
//	echo $string;S
	$string = 'A&gt;B,king&amp;queen,c&lt;d,he said "I\'m fine"';
	echo $string;

	//双引号 转义所有转义字符，单引号只转义两个字符，就是\\和\'
	echo '<hr>';
	$str = 'a\nb\rc&amp;d&lt;e';
	echo $str;
	echo '<hr>';
	$str = "a\nb\rc&amp;d&lt;e";
	echo $str;

	echo '<hr>';
	$str = 'king';
	echo '"$str"'; //不解析
	echo '<hr>';
	echo "'$str'"; //解析

	echo "<hr>";
//{}表示变量整体,有以下两种用法，含义一样，花括号还能做增删改查
	echo "{$str}c", "${str}c";
	echo "<hr>";
	echo "{ $str}s", "{$str }s", "{ $str }s"; //不要这样写 在变量名称与花括号之间不要有空格
	echo "<hr>";
	$str = 'abcdef';
	echo $str{0}, $str{5};
	echo "<hr>";
	$str{0} = 6;
	$str{1} = 'hi'; //只能替换一个字符，只取第一个字符
	$str{2} = '我';
	$str{5} = 'g';
	$str{6} = 'h'; //没有6，所以相当于增加
	$str{10} = 'i'; //中间用空格代替，但只会显示一个空格，因为html就是这么定义的
	echo $str;

	echo "<hr>";
	$str = 'abcdef';
	$str{0} = '';
	echo $str, '<hr>', $str{0}; //注意{}可用换成[]

	echo "<hr>";
	
	//hereDOC 在变量为一大段代码时使用，而且不用担心转义字符 相当于定界符中的双引号
$content="hello,kanwo";
$title="学习PHP";
    //TABEL可以用双引号括起来
	$table = <<<TABLE
    <table bgcolor="red">
	<tr>
	    <td>编号</td>
	    <td>内容</td>
	    <td>hello</td>
	</tr>
	<tr>
	    <td>hello</td>
	    <td>$content</td>
	    <td>{$title}c</td>
	</tr>
	<tr>
	    <td>hello</td>
	    <td>hello</td>
	    <td>hello</td>
	</tr>   
    </table>
TABLE;
	echo $table;
	
	//nowdoc 相当于定界符中的单引号 名称需要用单引号括起来
	$table=<<<'TABLE'
   <table bgcolor="red">
	<tr>
	    <td>编号</td>
	    <td>内容</td>
	    <td>hello</td>
	</tr>
	<tr>
	    <td>hello</td>
	    <td>$content</td>
	    <td>{$title}c</td>
	</tr>
	<tr>
	    <td>hello</td>
	    <td>hello</td>
	    <td>hello</td>
	</tr>   
    </table>
TABLE;
	
	echo $table;
	
	?>
    </body>
</html>