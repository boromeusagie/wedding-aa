<?php

namespace App\Imports;

use App\Villa;
use Maatwebsite\Excel\Concerns\ToModel;

class VillaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $villa = new Villa();
        $villa->villa_name = $row[0];
        $villa->location = $row[1];

        return $villa;
    }
}
