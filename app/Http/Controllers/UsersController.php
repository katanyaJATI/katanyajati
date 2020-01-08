<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;

class UsersController extends Controller
{
  public function index(User $user)
  {
    $users = User::all();

    return view('admin.users.index', compact('users'));
  }
  
  public function create()
  {
    return view('admin.users.create');
  }
  
  public function json()
  {
    return Datatables::of(User::all())->make(true);
  }
}
