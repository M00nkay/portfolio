<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use App\Models\WriterProjectModel;
use App\Models\ProgrammerProjectModel;

class Projects extends BaseController
{
    protected $writerprojectModel;
    protected $programmerprojectModel;

    public function __construct()
    {
        $this->writerprojectModel = new WriterProjectModel();
        $this->programmerprojectModel = new ProgrammerProjectModel();
    }
    public function index()
    {
        $writing_projects = $this->writerprojectModel->findAll();
        $programming_projects = $this->programmerprojectModel->findAll();



        $data = [
            'title' => 'My Projects',
            'programming_projects' => $programming_projects,
            'writing_projects' => $writing_projects,

        ];

        return view('projects/index', $data);
    }
}
