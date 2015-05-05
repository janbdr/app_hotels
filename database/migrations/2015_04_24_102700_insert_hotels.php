<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertHotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('hotels')->insert(
		[
			['name' => 'Hotel 1', 'address' => 'address 1','location' => 'location 1'],
			['name' => 'Hotel 2', 'address' => 'address 2','location' => 'location 2'],
			['name' => 'Hotel 3', 'address' => 'address 3','location' => 'location 3'],
			['name' => 'Hotel 4', 'address' => 'address 4','location' => 'location 4'],
			['name' => 'Hotel 5', 'address' => 'address 5','location' => 'location 5'],
			['name' => 'Hotel 6', 'address' => 'address 6','location' => 'location 6'],
			['name' => 'Hotel 7', 'address' => 'address 7','location' => 'location 7'],
			['name' => 'Hotel 8', 'address' => 'address 8','location' => 'location 8'],
			['name' => 'Hotel 9', 'address' => 'address 9','location' => 'location 9'],
			['name' => 'Hotel 10', 'address' => 'address 10','location' => 'location 10'],
			['name' => 'Hotel 11', 'address' => 'address 11','location' => 'location 11'],
			['name' => 'Hotel 12', 'address' => 'address 12','location' => 'location 12']
			
		]
            
			
			
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
