<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flag;

class FlagSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Flag::create(['flags' => 'OBR{1FA528F41E8945C}']);
		Flag::create(['flags' => 'OBR{5D52EC3938749CC}']);
	}
}
