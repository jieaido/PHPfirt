<?php
/**
 * Created by PhpStorm.
 * User: jieaido
 * Date: 2016/12/26
 * Time: 14:28
 */
function test1()
{
	$hostname = "localhost";
	$user = 'root';
	$pwd = "root";
	$link = mysqli_connect($hostname, $user, $pwd, 'testdb') or die("数据库链接失败");
//mysqli_query($link,"SET NAMES UTF8");
	$sqlstr = "select * from user";
	$result = mysqli_query($link, $sqlstr) or die("语句执行失败");
	while ($row = mysqli_fetch_row($result)) {
		echo $row[0] . '>';
		echo $row[1] . '>';
		echo $row[2] . '>';
		echo $row[3] . '>' . "<br>";
	}
	mysqli_free_result($result);
	mysqli_close($link);
}

//test1();
$link=mysqli_connect('localhost','root1','root');
if (!$link) {
	die("连接失败" . mysqli_error($link));
}
echo '连接建立成功！';
echo mysqli_get_client_info().'<br>';
echo mysqli_get_host_info($link).'<br>';
echo mysqli_get_proto_info($link).'<br>';
echo mysqli_get_server_info($link).'<br>';
echo mysqli_character_set_name($link).'<br>';
echo mysqli_sqlstate($link).'<br>';
