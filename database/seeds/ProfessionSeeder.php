<?php

use Illuminate\Database\Seeder;
//se agrego esta clase
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('professions')->insert(
            [
                'name'=>'Back-end Developer',
            ]
        )
    }
}
