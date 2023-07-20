<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function index()
   {
      $user = User::find(1);
      return view('index', compact('user'));
   }

   public function create(){

   }
}
