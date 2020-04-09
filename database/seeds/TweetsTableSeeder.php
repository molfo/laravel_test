<?php

use Illuminate\Database\Seeder;
use App\Models\Tweet;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 0; $i++) {
            Tweet::create([
                          'user_id'   =>  $i,
                          'text'    =>  'test投稿' .$i,
                          'create_at'   =>  now(),
                          'updated_at'  =>  now()
                          ]);
        }
    }
}
