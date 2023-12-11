<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\users;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswa = [
            [
                'name' => 'Ahmad',
                'nim' => '1',
                'jurusan' => 'Teknik Informatika',
                'type'=>1,
                'password' =>  bcrypt('admin123'),
                'email'=>'ahmad@gmail.com',
            ],
            [
                'name' => 'Budi',
                'nim' => '1231',
                'jurusan' => 'Teknik Informatika',
                'type'=>2,
                'password' =>  bcrypt('user123'),
                'email'=>'budi@gmail.com',
            ]
        ];
    
        foreach ($mahasiswa as $key => $user) {

            User::create($user);

        }
    }

}
