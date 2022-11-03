<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class company_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert(array(
            'nameCompany' => 'Mercadona',
            'companyPhoto' => '../assets/img/logoMercadona.jpg'
        ));

        DB::table('companies')->insert(array(
            'nameCompany' => 'Intel',
            'companyPhoto' => '../assets/img/logoIntel.jpg'
        ));
    }
}
