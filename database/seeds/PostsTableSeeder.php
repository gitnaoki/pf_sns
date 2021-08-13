<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'body'=>'sample text',
            ];
        DB::table('posts')->insert($param);
        
        $param=[
            'body'=>'sample text2',
            ];
        DB::table('posts')->insert($param);
    }
}
