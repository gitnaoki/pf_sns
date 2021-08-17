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
            'title'=>'sample title',
            'body'=>'sample body',
            ];
        DB::table('posts')->insert($param);
        
        $param=[
            'title'=>'sample title2',
            'body'=>'sample body2',
            ];
        DB::table('posts')->insert($param);
    }
}
