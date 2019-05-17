<?php
namespace Application;

use DateTimeImmutable;
class DailyReport extends Reports
{
    public function __construct($dept, $productClass){
		$startDate = new DateTimeImmutable();
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
