<?php
/**
 * Created by PhpStorm.
 * User: jieaido
 * Date: 2016/12/26
 * Time: 16:08
 */

date_default_timezone_set("asia/shanghai");
$num=0;
$dirname=".idea";
$dir_handle=opendir($dirname);
while($file=readdir($dir_handle)){
	$dirfile=$dirname."/".$file;
	echo $dirfile."<br>";
	echo filesize($dirfile)."<br>";
	echo filetype($dirfile)."<br>";
	echo date("Y M D h:M",filemtime($dirfile)).'<br>';
	echo "--------------------------------------".'<br>';
}
