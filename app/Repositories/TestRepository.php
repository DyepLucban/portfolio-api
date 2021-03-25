<?php

namespace App\Repositories;

class TestRepository
{
    public function __construct($user)
    {
        $this->user = $user;
    }

    public function initial()
    {
        return 'Repository Works!!!!';
    }

}