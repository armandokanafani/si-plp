<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(SekolahSeeder::class);
        DB::table('sekolahs')->insert([
            'nama_sekolah' => 'SMK N 1 '.Str::random(5),
            'alamat_sekolah' => Str::random(15),
            'kepala' => Str::random(15),
            'guru_pamong' => Str::random(15),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
