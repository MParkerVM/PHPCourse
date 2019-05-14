<?php

$astronaut = ['firstName' => 'Mark', 'lastName' => 'Watney',
'specialty' => 'Botanist'];
foreach ($astronaut as $value) {
echo $value . '<br/>';
}
// Construction syntax using key and value
foreach ($astronaut as $key => $value) {
echo "The $key is $value" . '<br/>';
}

echo PHP_EOL;
$a = array(1,2,3);
echo implode($a, '|');
echo PHP_EOL;
$startDate = date('Ymd');
echo $startDate;
