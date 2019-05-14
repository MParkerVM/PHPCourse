<?php

Include 'ReportsInterface.php';

abstract class Reports implements ReportsInterface
{
    protected $startDate;
    protected $endDate;
    protected $dept;
    protected $productClass;

    public function __construct(int $startDate, int $dept, int $productClass)
    {
        $this->startDate = $startDate;
        $this->endDate   = ($startDate + ReportsInterface::ReportLength);
        $this->dept      = $dept;
        $this->productClass = $productClass;
    }
}
