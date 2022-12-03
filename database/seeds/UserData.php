<?php

use Illuminate\Database\Seeder;
use App\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
