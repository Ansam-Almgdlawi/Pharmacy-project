<?php

namespace Database\Seeders;

use App\Models\StoreHouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StoreHouse::create([
            'name'=>'Lava',
            'email'=>'lava@gmail.com',
            'mobile'=>'0987654321',
            'password'=>'123456',
            ]);
            StoreHouse::create([
                'name'=>'Hayat',
             'email'=>'hayat@gmail.com',
             'mobile'=>'0987654322',
             'password'=>Hash::make('123457'),
            ]);
            StoreHouse::create([
                'name'=>'Shefaa',
              'email'=>'shefaa@gmail.com',
              'mobile'=>'0987654323',
              'password'=>Hash::make('123458'),
            ]);
            StoreHouse::create([
                'name'=>'Medhelp',
                'email'=>'medhelp@gmail.com',
                 'mobile'=>'0987654324',
                 'password'=>Hash::make('123459'),
            ]);
            StoreHouse::create([
                'name'=>'Rbcs',
                'email'=>'rbcs@gmail.com',
                'mobile'=>'0987654325',
                'password'=>Hash::make('123455'),
            ]);
            StoreHouse::create([
                'name'=>'.',
                'email'=>'.@gmail.com',
                'mobile'=>'0982928397',
                'password'=>Hash::make('123455'),
            ]);
    }
}
