<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'administrador',
            'editor',
            'supervisor'
        ];

        foreach($roles as $key => $rol){
            DB::table('rol')->insert([
                'nombre' => $rol,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
