<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProjectRepository;

class ProjectController extends Controller
{
    private $projectRepository;

    public function __construct (ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function index()
    {
        return $this->projectRepository->initial();
    }
}
