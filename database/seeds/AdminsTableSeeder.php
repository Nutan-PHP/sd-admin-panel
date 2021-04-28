<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            ['name' => 'Super Admin', 'type' => 'SA', 'email' => 'superadmin@admin.com', 'password' => '$2y$10$ar36kH3Rl3U2kGQc2L7BJ.arCsj1Jy8JMA00dNO7th8vg/vjSMCyq', 'status' => 1],
            ['name' => 'Admin', 'type' => 'A', 'email' => 'admin@admin.com', 'password' => '$2y$10$ar36kH3Rl3U2kGQc2L7BJ.arCsj1Jy8JMA00dNO7th8vg/vjSMCyq', 'status' => 1]
        ];
        DB::table('admins')->insert($adminRecords);
    }
}
