<?php
/*require "test.php";
header('Location: http://segmentfault.com/');*/


ob_start(); //打开缓冲区
echo "Hello"; //输出
header("location:  http://www.google.com"); //把浏览器重定向到index.php
ob_end_flush();//输出全部内容到浏览器
?>