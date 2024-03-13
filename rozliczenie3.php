<?php
$zakupy = [];
$wyjscia = [];

$d = explode("", $dane);
print_r($d);

$dd=explode("", $d[0]);
print_r($dd);

$n=$dd[0];
$m=$dd[1];

for($i=0; $i<$n; $i++){
    $zakupy[$i] = 0;
    $wyjscia[$i] = 1;
}

print_r($zakupy);

?>