<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Insert::class);
    }
}
class Insert extends Seeder
{
  
      /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            ['id'=>'TD1','name'=>'TD1','description'=>'Kem Trắng da 01','image'=>'TD1.jpg','id_category'=>1,'active'=>1,'price'=>500000]
        ,
        ]
          );
    }
}
