<?php

use Illuminate\Database\Seeder;
use App/Email;

class EmailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Email::create([
            'name' => 'Indransyah',
            'email' => 'indransyah@gmail.com'
        ]);

        Email::create([
            'name' => 'Indra',
            'email' => 'indra@entersocio.com'
        ]);
    }
}
