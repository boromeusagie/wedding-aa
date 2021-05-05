<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        $user = new User();
        $user->name = $row[0];
        $user->username = str_slug($row[0], '-');
        $user->phone = $row[1];
        $user->password = isset($row[1]) ? Hash::make($row[1]) : Hash::make('123456');
        $user->villa = $row[2];
        $user->is_order = $row[3];
        $user->no_table = $row[4];
        // $user->save();

        return $user;

        // return new User([
        //     'name' => $row['name'],
        //     'username' => str_slug($row['name'], '-'),
        //     'phone' => $row['phone'],
        //     'password' => isset($row['phone']) ? Hash::make($row['phone']) : Hash::make('123456'),
        //     'villa' => $row['villa'],
        //     'no_table' => $row['table']
        // ]);
    }
}
