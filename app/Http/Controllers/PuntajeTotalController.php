<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\PuntajeTotal;
use App\Http\Requests\PuntajeTotalRequest;
use DB;

class PuntajeTotalController extends Controller
{
  public function index()
{

  $puntajeTotals = PuntajeTotal::orderBy('idPuntajeTotal', 'DESD')->paginate();

  //carpeta y archivo
  return view('puntajeTotals.index', compact('puntajeTotals'));
}

public function create()
{
  return view('puntajeTotals.create');
}

public function store(PuntajeTotalRequest $request)
{
  $puntajeTotal = new PuntajeTotal;

  $puntajeTotal->puntajeTotal = $request->puntajeTotal;
  $puntajeTotal->id_PuntajeExtra = $request->id_PuntajeExtra;
  $puntajeTotal->id_Evaluacion = $request->id_Evaluacion;

  $puntajeTotal->save();
  return redirect()->route('puntajetotal.index')->with('info', 'El dato fue guardado');
}

public function update(PuntajeTotalRequest $request, $idPuntajeTotal)
{
  $puntajeTotal = PuntajeTotal::find($idPuntajeTotal);

  $puntajeTotal->puntajeTotal = $request->puntajeTotal;
  $puntajeTotal->id_PuntajeExtra = $request->id_PuntajeExtra;
  $puntajeTotal->id_Evaluacion = $request->id_Evaluacion;

  $puntajeTotal->save();

  return redirect()->route('puntajetotal.index')->with('info', 'El dato fue actualizado');
}

public function show($idPuntajeTotal)
{
  $puntajeTotal = PuntajeTotal::find($idPuntajeTotal);
  return view('puntajeTotals.show', compact('puntajeTotal'));
}

public function destroy($idPuntajeTotal)
{
  $puntajeTotal = PuntajeTotal::find($idPuntajeTotal);
  $puntajeTotal->delete();

  return back()->with('info', 'El dato fue eliminado');
}

public function edit($idPuntajeTotal)
{
  $puntajeTotal = PuntajeTotal::find($idPuntajeTotal);
  return view('puntajeTotals.edit', compact('puntajeTotal'));
}
}
