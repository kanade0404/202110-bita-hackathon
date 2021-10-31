<?php

namespace Database\Seeders;

use Carbon\Traits\Date;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table("users")->insert(["name" => "坂田誠也", "email" => "seiya_sakata@bita.jp", "password" => Hash::make("seiya_sakata"), "thumbnail_path" => "sakata_mikan.jpg"]);
        DB::table("users")->insert(["name" => "星佳杏", "email" => "kana_hoshi@bita.jp", "password" => Hash::make("kana_hoshi"), "thumbnail_path" => "kana_hoshi_mikan.jpg"]);
    }
}
