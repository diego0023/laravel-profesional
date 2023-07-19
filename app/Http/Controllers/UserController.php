<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function index()
   {
      //$users = User::where('age', '<', '18')->orwhere('zip_code', 20942115)->orderBy('age', 'asc')->get();
      //$users = DB::select(DB::raw("SELECT * FROM users WHERE age<18 "));
      $users = User::all();
      return view('user.index', compact('users'));
   }

   public function create(){
    $user = new User;
    $user->name = "Diego";
    $user->email = "diego@example.com";
    $user->password = Hash::make('123456');
    $user->age = "22";
    $user->address = "Calle 10";
    $user->zip_code = 901454545;
    $user->save();

    User::create([
        "name" => "Rene",
        "email" => "rene@example.com",
        "password" => Hash::make('4567'),
        "age" => "23",
        "address" => "calle 9",
        "zip_code" => 80112121
    ]);

    User::create([
        "name" => "Alejando",
        "email" => "Alejandor@example.com",
        "password" => Hash::make('6987'),
        "age" => "32",
        "address" => "calle 5",
        "zip_code" => 07011213
    ]);
        return redirect()->route('user.index');
   }
}
