<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class users_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  	idUser 	name 	lastName 	email 	group 	
        //phone 	password 	remember_token 	created_at 	updated_at 	userImg 	
        DB::table('users')->insert(array(
            'name' => 'Javier',
            'lastName' => 'Jimenez',
            'email' => 'javi@javi.es',
            'group' => '2HIAW',
            'phone' => '658965477',
            'password' => 'holaquetal',
            'userImg' => ''
        ));
    }
}
