<?php
require "index.php";

use jixiang\phplearning\AClass;
use jixiang\phplearning\com\BClass;

$a = new AClass();
$b = new BClass();

$a->use();
echo "<br/>";
$b->use();