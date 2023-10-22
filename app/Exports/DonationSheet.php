<?php

namespace App\Exports;

use App\Models\Donation;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DonationSheet implements FromQuery, WithTitle, WithHeadings
{
    protected $organization;

    public function __construct($organization)
    {
        $this->organization = $organization;
    }

    public function title(): string
    {
        return $this->organization->name;
    }

    public function query()
    {
        return Donation::query()->where('organization_id', $this->organization->id);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["ID", "User ID", "Category", "Timestamp", "Organization ID", "Amount", "Item ID", "Created At", "Updated At"];
    }
}
