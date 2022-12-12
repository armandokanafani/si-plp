<?php

use App\User;
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
        DB::table('sekolah')->insert([
            'nama_sekolah' => 'SMK N 1 ' . Str::random(5),
            'alamat_sekolah' => Str::random(15),
            'kepala_sekolah' => Str::random(15),
            'guru_pamong' => Str::random(15),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $user = [
            [
                'nama' => 'Administrator I',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1234'),
                'level' => '1',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'nama' => 'Kepala Prodi I',
                'username' => 'kaprodi',
                'email' => 'kaprodi@gmail.com',
                'password' => bcrypt('12345'),
                'level' => '2',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'nama' => 'Kepala Sekolah I',
                'username' => 'kepsek',
                'email' => 'kepsek@gmail.com',
                'password' => bcrypt('123456'),
                'level' => '3',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'nama' => 'Dosen Pembimbing I',
                'username' => 'dospem',
                'email' => 'dospem@gmail.com',
                'password' => bcrypt('1234567'),
                'level' => '4'
            ],
            [
                'nama' => 'Guru Pamong I',
                'username' => 'pamong',
                'email' => 'pamong@gmail.com',
                'password' => bcrypt('12345678'),
                'level' => '5',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'nama' => 'Mahasiswa I',
                'username' => 'mahasiswa',
                'email' => 'mahasiswa@gmail.com',
                'password' => bcrypt('123456789'),
                'level' => '6',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
