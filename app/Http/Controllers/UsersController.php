<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
  public function index(User $user)
  {
    $users = User::all();

    return view('admin.user', compact('users'));
  }
}
