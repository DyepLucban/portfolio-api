<?php

namespace App\Repositories;

class SkillRepository
{
    public function __construct($skill)
    {
        $this->skill = $skill;
    }

    public function getSkills()
    {
        $skills = $this->skill->all();

        return response()->json($skills, 200);
    }

    public function browseSkillById($id)
    {
        $skill = $this->skill->find($id);

        return response()->json($skill, 200);
    }

    public function createSkill($data)
    {
        $res = $this->skill->create([
            'name' => $data->name,
        ]);

        return response()->json(['data' => $res], 200);
    }

    public function updateSkill($data, $id)
    {
        $skill = $this->skill
                ->where('id', $id)
                ->update(['name' => $data->name]);

        return response()->json(['message' => 'Skill successfully updated'], 200);
    }

    public function deleteSkill($id)
    {
        $response = $this->skill->find($id)->delete();
        return response()->json(['message' => 'Skill successfully deleted'], 200);
    }
}
