<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UserImport;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = storage_path('app/seeds/user.txt');

        Excel::import(new UserImport, $file);

        $users = User::all();
        foreach ($users as $user) {
            $user->password = Hash::make($user->phone);
            $user->save();
        }
    }
}
