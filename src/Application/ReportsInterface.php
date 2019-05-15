<?php
namespace Application;

interface ReportsInterface
{
    public const REPORT_LENGTH = 7;
    public function getVars();
    public function getAnything($name);
}
