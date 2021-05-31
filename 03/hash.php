<?php

$string = '123';
$string2 = '234';

echo md5($string) . "<br>";
echo md5($string2) . "<br>"; //nenaudoti

echo sha1($string2) . "<br>"; //nenaudoti

echo password_hash($string2, CRYPT_BLOWFISH) . "<br>"; //naudoti toki!!!
var_dump(password_verify ($string2, '$2y$10$fIJMvwQZ7qq4F7j6vnjUnOrxVwPxDa0Kr04h4CgeICo86zzvk42RW'));