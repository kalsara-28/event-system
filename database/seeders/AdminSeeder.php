<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'name' => 'Shan Fernando',
            'email' => 'evenramagicalevents@gmail.com',
            'password' => Hash::make('event123'),
        ]);
    }
}
?>
