<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'name' => 'yun',
          'mail' => 'yun@yun.jp',
          'age' => 24,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'miu',
          'mail' => 'miu@miu.jp',
          'age' => 28,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'jun',
          'mail' => 'jun@jun.jp',
          'age' => 57,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'kei',
          'mail' => 'kei@kei.jp',
          'age' => 60,
        ];
        DB::table('people')->insert($param);
    }
}
