<?php

/**
 * @Author: tianwangchong
 * @Date:   2018-05-07 18:47:01
 * @Last Modified by:   tianwangchong
 * @Last Modified time: 2018-05-07 18:47:56
 */

use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(App\Models\User::class)->create([
            'name' => 'tian',
            'email' => 'tian@tian.com',
            'phone' => '18868196840',
            'password' => bcrypt('123456')
        ]);
    }
}