<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsontypes = File::get('database/skills.json');
        $data = json_decode($jsontypes);
        foreach ($data as $skill) {
            Skill::create(array(
                'skill_name' => $skill->nombre,
                'skill_description' => $skill->descripcion
            ));
        }
    }
}
