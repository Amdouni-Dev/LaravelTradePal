<?php

namespace App\Imports;

use App\Models\Organization;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Carbon;

class OrganizationsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $foundingDate = '2022-01-01';
        return new Organization([
            'name' => $row[0],
            'email' => $row[1],
            'type' => $row[2],
            'location' => $row[3],
            'phone_number' => $row[4],
            'website' => $row[5],
            'logo' => $row[6],
            'description' => $row[7],
            'founding_date' => $foundingDate
        ]);
    }

    private function transformDate($date)
    {
        $date = str_replace('-', '/', $date);

        $parsedDate = Carbon::createFromFormat('Y-m-d', $date);

        if ($parsedDate !== false) {
            return $parsedDate->toDateString();
        }

        return null;
    }
}
