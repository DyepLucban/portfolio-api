<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TestRepository;

class TestController extends Controller
{
    private $testRepository;

    public function __construct(TestRepository $testRepository)
    {
        $this->testRepository = $testRepository;
    }

    public function index()
    {
        return $this->testRepository->initial();
    }
}
