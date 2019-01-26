<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function mainMenu()
    {
      return view('layouts.welcome');
    }

    public function alumnosTable()
    {
      return view('tables.alumnos');
    }

    public function profesoresTable()
    {
      return view('tables.profesor');
    }

    public function gradoTable()
    {
      return view('tables.grado');
    }

    public function seccionTable()
    {
      return view('tables.seccion');
    }
}
