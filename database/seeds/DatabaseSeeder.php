<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        \DB::table('categories')->insert([
       ['name' => 'Graffiti'],
       ['name' => 'Stickers'],
       ['name' => 'Cuadros'],
       ['name' => 'Fotografia']
     ]);
    }
}
