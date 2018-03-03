<?php
//HTML htmlentities()
echo "<br>"; 
$check = "Test";
echo(htmlentities($check));//Test

echo "<br>"; 
$check ='<script>window.location.href="http://google.com";</script>';
echo(htmlentities($check));
//echo($check);  //将会直接跳转到google，而htmlentities转义后就不会
//<script>windon.location.href='http://example.com';</script>

echo "<br>"; 
$check ="<? W3S?h????>";
echo(htmlentities($check,ENT_QUOTES,'UTF-8'));//这个函数的一般标准用法

$str = "Bill & \"\"'Steve'"; 
echo "<br>"; 
echo htmlentities($str, ENT_COMPAT); // 只转换双引号 
echo "<br>"; 
echo htmlentities($str, ENT_QUOTES); // 转换双引号和单引号 
echo "<br>"; 
echo htmlentities($str, ENT_NOQUOTES); // 不转换任何引号 

var_dump(get_html_translation_table(HTML_ENTITIES));

var_dump(get_html_translation_table(HTML_SPECIALCHARS));
