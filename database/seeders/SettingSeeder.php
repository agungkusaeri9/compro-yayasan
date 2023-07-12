<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = Setting::first();
        if (!$setting) {
            Setting::create([
                'site_name' => '-',
                'email' => '-',
                'address' => '-',
                'phone' => '-',
                'favicon' => NULL,
                'image' => NULL,
                'visi_misi' => '-',
                'description' => '-',
                'author' => '-'
            ]);
        }
    }
}
