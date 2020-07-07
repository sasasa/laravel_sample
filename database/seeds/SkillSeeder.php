<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 0 Program 1 design 2 office
        Skill::create(['name' => 'Ruby', 'type'=> 0]);
        Skill::create(['name' => 'PHP', 'type'=> 0]);
        Skill::create(['name' => 'Python', 'type'=> 0]);
        Skill::create(['name' => 'Java', 'type'=> 0]);

        Skill::create(['name' => 'XD', 'type'=> 1]);
        Skill::create(['name' => 'フォトショップ', 'type'=> 1]);
        Skill::create(['name' => 'イラストレーター', 'type'=> 1]);

        Skill::create(['name' => 'Word', 'type'=> 2]);
        Skill::create(['name' => 'Excel', 'type'=> 2]);
        Skill::create(['name' => 'PorwerPoint', 'type'=> 2]);
    }
}
