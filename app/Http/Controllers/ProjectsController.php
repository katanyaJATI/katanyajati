<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
  public function index(Project $project)
  {
    $projects = $project->get()->all();
    dd($projects);
    return view('admin.projects');
  }
}
