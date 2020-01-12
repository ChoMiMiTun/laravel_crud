<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $people = [
            [
                'name' => 'Mg Mg',
                'email' => 'mgmg@gmail.com'
            ],
            [
                'name' => 'Ag Ag',
                'email' => 'agag@gmail.com'
            ],
            [
                'name' => 'Su Su',
                'email' => 'susu@gmail.com'
            ]
        ];

        foreach($people as $per){
        $user = new User();
        $user->name = $per['name'];
        $user->email = $per['email'];
        $user->password = bcrypt ('12345');
        $user->save();
        }
    }
}
