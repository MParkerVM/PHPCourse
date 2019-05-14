<?php

include 'Reports.php';

class DailyReport extends Reports
{
    public function __construct($dept, $productClass){
	$startDate = date('Ymd');
	parent::__construct($startDate, $dept, $productClass);
    }
    public function getVars()
    {
        return get_object_vars($this);
    }
    public function getAnything($name)
    {
        if (isset($this->$name)) {
            $val = $this->$name;
        } else {
            $val = NULL;
        }
        return $val;
    }
}
