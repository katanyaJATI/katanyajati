<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Role;

class RolesController extends Controller
{
  public function index()
  {
    $roles = Role::all();

    return response($roles, 200);
  }
}
