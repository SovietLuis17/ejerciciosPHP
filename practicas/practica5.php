<?php

$str = "Maduro fue secuestrado  y ademas fue traicionado"; 

print_r(str_word_count($str,0));
print_r(str_word_count($str,1));

$numeroPalabras = str_word_count($str,0);
echo "TIENE :".$numeroPalabras;

?>