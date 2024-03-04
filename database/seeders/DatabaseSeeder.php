<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        // ゲストユーザー
        \App\Models\User::create([
            'name' => 'ゲストユーザー1',
            'email' => config('const.guest.mail'),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'desc' => 'ゲストユーザー1のプロフィールです',
        ]);

        // 個別ユーザー
        \App\Models\User::create([
            'name' => 'ほげ太郎',
            'email' => 'hoge@hoge.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'desc' => 'ほげ太郎のプロフィールです',
        ]);
    }
}
