<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = new User();
        $data->name = 'admin';
        $data->email = 'admin@gmail.com';
        $data->password = 'admin';
        $data->save();
    }
}
