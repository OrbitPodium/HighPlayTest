<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipa;
use App\User;

class HomeController extends Controller
{
    public function index() {
      $active='home';
      return view('home', compact('active'));
    }

    public function about() {
      $active='about';
      return view('about', compact('active'));
    }

    public function team() {
      $active='team';
      $equipa=Equipa::all();
      return view('team', compact('active', 'equipa'));
    }

    public function contact() {
      $active='contact';
      return view('contact', compact('active'));
    }

    public function register() {
      return view('register');
    }

    public function addUser(Request $req) {
      User::create([
          'name'           => $req->name,
          'email'          => $req->email,
          'avatar'         =>'users/default.png',
          'password'       => bcrypt($req->password),
          'remember_token' => str_random(60),
          'role_id'        => 2,
      ]);

      return redirect()->route('voyager.login');
    }

}
