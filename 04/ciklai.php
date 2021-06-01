<?php

$sk = rand(0, 10); 

while ($sk < 9) {
echo $sk . '<br>';
$sk = rand(0, 10); 
}

do {
$sk = rand(0, 10);
echo $sk . '<br>'; } 
while ($sk < 9);