<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TimKerjaMenuSeeder extends Seeder
{
    public function run(): void
    {
        $menu = Menu::updateOrCreate(
            ['slug' => 'tim-kerja'],
            [
                'name' => 'Tim Kerja',
                'type' => 'dropdown',
                'url' => null,
                'new_tab' => false,
                'order_no' => 0,
                'is_visible' => true,
            ]
        );

        $submenus = [
            'Kepala',
            'Umum',
            'IPDS',
            'Nerwilis',
            'Distribusi & Harga',
            'KTI & PariwiQsata',
            'Kesra & Naker',
            'Hansos',
            'Pertanian',
            'Industri & Pek',
        ];

        foreach ($submenus as $name) {
            Submenu::updateOrCreate(
                [
                    'menu_id' => $menu->id,
                    'slug' => Str::slug($name),
                ],
                ['name' => $name]
            );
        }
    }
}
