<?php

namespace App\Exports;

use App\Menu;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $user = Menu::all();

        return $user->map(function($i) {
            return [
                'name' => $i->user->name,
                'phone' => $i->user->phone,
                'appertizer' => $i->appertizer,
                'main_course' => $i->main_course,
                'dessert' => $i->dessert,
                'hot_drink' => $i->hot_drink,
                'cold_drink' => $i->cold_drink
            ];
        });
    }
}
