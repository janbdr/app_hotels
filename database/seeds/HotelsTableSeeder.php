<?php
use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder{
    
    public function run(){
//        Uncomment the below to wipe the table clean before populating 
//        DB::table('hotels')->delete();
        
        $projects = array(
            ['name' => 'hotel 1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'hotel 2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'hotel 3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
        
//        Uncomment the below to run the seeder
        DB::table('hotels')->insert($projects);
        
    }
}

