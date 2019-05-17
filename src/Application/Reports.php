<?php
namespace Application;

use DateTimeImmutable;
use DateInterval;
abstract class Reports implements ReportsInterface
{
    protected $startDate;
    protected $endDate;
    protected $dept;
    protected $productClass;

    public function __construct(DateTimeImmutable $startDate, int $dept, int $productClass)
    {
        $this->startDate = $startDate;
        $this->endDate   = $startDate->add(new DateInterval('P' . ReportsInterface::REPORT_LENGTH . 'D'));
        $this->dept      = $dept;
        $this->productClass = $productClass;
    }
}
