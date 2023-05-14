<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('devices')->insert([
            'type_name' => 'EUC',
            'class_name' => '',
            'brand_name' => 'Begode',
            'model_name' => 'MCM5',
            'wh_value' => '280',
            'volt_value' => '67',
            'version_name' => 'V2',
            'color_name' => 'Black',
            'addition_1' => '',
            'addition_2' => '',
            'addition_3' => '',
            'remark' => '',
            'visible' => true,
        ],[
            'type_name' => 'EUC',
            'class_name' => '',
            'brand_name' => 'Begode',
            'model_name' => 'MCM5',
            'wh_value' => '460',
            'volt_value' => '84',
            'version_name' => 'V2',
            'color_name' => 'Black',
            'addition_1' => '',
            'addition_2' => '',
            'addition_3' => '',
            'remark' => '',
            'visible' => true,
        ],[
            'type_name' => 'EUC',
            'class_name' => '',
            'brand_name' => 'Begode',
            'model_name' => 'MCM5',
            'wh_value' => '800',
            'volt_value' => '84',
            'version_name' => 'V1',
            'color_name' => 'Black',
            'addition_1' => '',
            'addition_2' => '',
            'addition_3' => '',
            'remark' => '',
            'visible' => true,
        ],[
            'type_name' => 'EUC',
            'class_name' => '',
            'brand_name' => 'Inmotion',
            'model_name' => 'V12',
            'wh_value' => '1750',
            'volt_value' => '100',
            'version_name' => '',
            'color_name' => '',
            'addition_1' => 'HS',
            'addition_2' => '',
            'addition_3' => '',
            'remark' => '',
            'visible' => true,
        ]
            );
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    }
}
