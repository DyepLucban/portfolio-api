<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SkillRepository;

class SkillController extends Controller
{
    private $skillRepository;

    public function __construct (SkillRepository $skillRepository)
    {
        $this->skillRepository = $skillRepository;
    }

    public function index ()
    {
        return $this->skillRepository->getSkills();
    }

    public function browseSkillById($id)
    {
        return $this->skillRepository->browseSkillById($id);
    }    

    public function createSkill(Request $request)
    {   
        return $this->skillRepository->createSkill($request);
    }

    public function updateSkill(Request $request, $id)
    {
        return $this->skillRepository->updateSkill($request, $id);
    }

    public function deleteSkill($id)
    {
        return $this->skillRepository->deleteSkill($id);
    }


}
