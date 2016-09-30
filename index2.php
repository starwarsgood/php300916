<?php  
$st = '<Ь>жирный текст</Ь>'; 
$ге = '|<(\w+).*?>(.*?}</\l>|s'; 
preg_match($re, $st, $p, PREG_OFFSET_CAPTURE); 
echo "<pre>"; print_r($p); echo "</pre>"; 
///////////////////////////////
## Различные флаги preg_match_all(). 
Header ("Content-type: text/plain'*) ; 
$flags = array( 
"PREG_PATTERN_ORDER", 
"PREG_SET_ORDER", 
"PREG_SET_ORDER|PREG_OFFSET_CAPTURE", 
); 
$re = '|<(\w+).*?>(.*?)</\l>|s'; 
$text = "<Ь>текст</Ь> и еще <1>другой текст</1>"; 
echo "Строка: $text\n"; 
echo "Выражение: $re\n\n"; 
foreach ($flags as $name) { 
preg_match_all($re, $text, $pockets, eval("return $name;")); 
echo "Флаг $name:\n"; 
429 
print_r($pockets); 
echo "\n";
?> 
