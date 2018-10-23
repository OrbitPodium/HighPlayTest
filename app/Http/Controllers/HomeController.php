<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipa;

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
}
