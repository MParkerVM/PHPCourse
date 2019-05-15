<?php

spl_autoload_register(
	function ($class)
	{
		$base = realpath(__DIR__ . '/../src');
		include_once $base . '/' . str_replace('\\', '/', $class) . '.php';
	}
);

use Application\ {DailyReport, ReportsInterface};

$reports[] = new DailyReport (272, 815);

if ($reports[0] instanceof ReportsInterface) {
    echo 'Congratulations!';
    var_dump($reports[0]->getVars());
}
