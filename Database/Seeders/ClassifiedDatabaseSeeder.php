<?php

namespace Modules\Classified\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ClassifiedDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(MenusTableSeeder::class);
        $this->call(FieldsTableSeeder::class);
    }
}
