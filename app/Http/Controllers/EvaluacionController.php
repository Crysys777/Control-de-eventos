<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Yajra\DataTables\DataTables;
use App\Evaluacion;
use App\Http\Requests\EvaluacionRequest;
use DB;

class EvaluacionController extends Controller
{
  public function index()
{

  $evaluacions = Evaluacion::orderBy('idEvaluacion', 'DESD')->paginate();

  //carpeta y archivo
  return view('evaluacions.index', compact('evaluacions'));
}

public function create()
{
  return view('evaluacions.create');
}

public function store(EvaluacionRequest $request)
{
  $evaluacion = new Evaluacion;

  $evaluacion->id_Actividad = $request->id_Actividad;
  $evaluacion->puntajeParcial = $request->puntajeParcial;
  $evaluacion->id_Colegio = $request->id_Colegio;

  $evaluacion->save();
  return redirect()->route('evaluacion.index')->with('info', 'El dato fue guardado');
}

public function update(EvaluacionRequest $request, $idEvaluacion)
{
  $evaluacion = Evaluacion::find($idEvaluacion);

  $evaluacion->id_Actividad = $request->id_Actividad;
  $evaluacion->puntajeParcial = $request->puntajeParcial;
  $evaluacion->id_Colegio = $request->id_Colegio;

  $evaluacion->save();
  return redirect()->route('evaluacion.index')->with('info', 'El dato fue actualizado');
}

public function show($idEvaluacion)
{
  $evaluacion = Evaluacion::find($idEvaluacion);
  return view('evaluacions.show', compact('evaluacion'));
}

public function destroy($idEvaluacion)
{
  $evaluacion = Evaluacion::find($idEvaluacion);
  $evaluacion->delete();

  return back()->with('info', 'El dato fue eliminado');
}

public function edit($idEvaluacion)
{
  $evaluacion = Evaluacion::find($idEvaluacion);
  return view('evaluacions.edit', compact('evaluacion'));
}
}
