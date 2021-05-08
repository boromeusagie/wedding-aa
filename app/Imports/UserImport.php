<?php

namespace App\Imports;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;

class UserImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            User::updateOrCreate(
                ['phone' => $row[1]],
                [
                    'name' => $row[0],
                    'username' => $row[5],
                    'phone' => $row[1],
                    'password' => Hash::make($row[1]),
                    'villa' => $row[2],
                    'no_table' => $row[4],
                    'is_order' => $row[3]
                ]
            );
        }
    }
}
