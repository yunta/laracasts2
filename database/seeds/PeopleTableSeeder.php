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
          'Field4' => 24,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'miu',
          'mail' => 'miu@miu.jp',
          'Field4' => 28,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'jun',
          'mail' => 'jun@jun.jp',
          'Field4' => 57,
        ];
        DB::table('people')->insert($param);

        $param = [
          'name' => 'kei',
          'mail' => 'kei@kei.jp',
          'Field4' => 60,
        ];
        DB::table('people')->insert($param);
    }
}
