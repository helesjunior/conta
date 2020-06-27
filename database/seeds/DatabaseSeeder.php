<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $sql = file_get_contents(database_path() . '/seeds/sql/estados.sql');
        DB::unprepared($sql);
        $sql = file_get_contents(database_path() . '/seeds/sql/municipios.sql');
        DB::unprepared($sql);

    }
}
