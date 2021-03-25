<?php

namespace App\Repositories;

class ProjectRepository
{
    public function __construct($project)
    {
        $this->project = $project;
    }

    public function initial()
    {
        return 'This is Project Repository!';
    }

}
