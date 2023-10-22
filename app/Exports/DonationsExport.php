<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class DonationsExport implements WithMultipleSheets
{
    protected $organizations;

    public function __construct($organizations)
    {
        $this->organizations = $organizations;
    }

    public function sheets(): array
    {
        $sheets = [];

        foreach ($this->organizations as $organization) {
            $sheets[] = new DonationSheet($organization);
        }

        return $sheets;
    }
}
