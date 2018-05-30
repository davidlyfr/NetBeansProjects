<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$var1 = (6 < 7);
$var2 = (8 == 8);

var_dump($var1);
var_dump($var2);

//var_dump($var1 and $var2);

//echo ($var1 and $var2);

var_dump($var1 && $var2);

var_dump($var1 || $var2);

var_dump(!$var2); // change value to false if true