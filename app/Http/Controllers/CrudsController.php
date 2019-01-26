<?php

namespace App\Http\Controllers;

use App\alumno;
use App\grado;
use App\profesor;
use App\alumno_grado;
use Illuminate\Http\Request;

class CrudsController extends Controller
{
    public function create($type, $data) {
      if ($type=='alumno') {
        // We expect data to contain:
        // name, last name, gender and date.
        $newStudent = new alumno;
        $newStudent->Nombre = $data['name'];
        $newStudent->Apellidos = $data['lname'];
        $newStudent->Genero = $data['gender'];
        $newStudent->Fecha_nacimiento = $data['date'];
        $newStudent->save();
      }

      if ($type=='profesor') {
        // We expect data to contain:
        // name, last name, gender.
        $newTeacher = new profesor;
        $newTeacher->Nombre = $data['name'];
        $newTeacher->Apellidos = $data['lname'];
        $newTeacher->Genero = $data['gender'];
        $newTeacher->save();
      }

      if ($type=='grado') {
        // We expect data to contain:
        // name, ProfesorID
        $newYear = new grado;
        $newYear->Nombre = $data['name'];
        $newYear->ProfesorID = $data['PID'];
        $newYear->save();
      }

      if ($type=='seccion') {
        // We expect data to contain:
        // AlumnoID, GradoID and Seccion
        $newClass = new alumno_grado;
        $newClass->AlumnoID = $data['AID'];
        $newClass->ProfesorID = $data['PID'];
        $newClass->Seccion = $data['class'];
        $newClass->save();
      }

      return true;
    }

    public function read(Request $request) {
      $type = $request->type;
      if ($type == "alumno") {
        return response()->json(alumno::all()->toArray());
      }
      if ($type == "profesor") {
        return response()->json(profesor::all()->toArray());
      }
      if ($type == "grado") {
        return response()->json(grado::all()->toArray());
      }
      if ($type == "seccion") {
        return response()->json(seccion::all()->toArray());
      }
    }
}
