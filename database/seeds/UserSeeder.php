<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UserImport;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = storage_path('app').'\seeds\user.csv';
        \Log::debug($file);

        Excel::import(new UserImport, $file);
    }
}
