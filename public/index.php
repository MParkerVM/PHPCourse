<?php

spl_autoload_register(
	function ($class)
	{
		$base = realpath(__DIR__);
		include_once $base . '/' . str_replace('\\', '/', $class) . '.php';
	}
);

$reports[] = new DailyReport (272, 815);
//$reports[] = new Reports (21090501, 271, 812);
//$reports[] = new Reports (21090401, 271, 812);
//$reports[] = new Reports (21090501, 272, 357);

if ($reports[0] instanceof ReportsInterface) {
    echo 'Congratulations!';
}

//foreach ($reports as $repObj) {
    //echo 'The start date is: ' . $repObj->getAnything('startDate') . PHP_EOL;
    // this works only if properties are public:
    //foreach (get_object_vars($repObj) as $varName => $repdata) {
        //echo $repObj . " is " . $repdata;
        //echo get_class($repObj) . ' variable ' . $varName . ' contains ' . $repdata . PHP_EOL;
    //}
    // this works any time:
    //foreach ($repObj->getVars() as $varName => $repdata) {
        //echo $repObj . " is " . $repdata;
        //echo get_class($repObj) . ' variable ' . $varName . ' contains ' . $repdata . PHP_EOL;
    //}
//}


