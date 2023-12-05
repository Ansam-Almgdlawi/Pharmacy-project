<?php

namespace Database\Seeders;

use App\Models\Classification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class classificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //سعال
        Classification::create([
            'classN'=>'Antitussive'
        ]);
        //اقياء
        Classification::create([
            'classN'=>'Antiemetics'
        ]);
        //حساسية
        Classification::create([
            'classN'=>'Anti-allergy'
        ]);
        //مضاد حيوي
        Classification::create([
            'classN'=>'Antibiotic'
        ]);
        //اكتئاب
        Classification::create([
            'classN'=>'Antidepressant'
        ]);
        //فقر دم
        Classification::create([
            'classN'=>'Anemia Drugs'
        ]);
        //فيتامينات
        Classification::create([
            'classN'=>'Vitamins'
        ]);
        //سكري
        Classification::create([
            'classN'=>'Antidiabetic'
        ]);
    }
}
