<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\PuntajeExtra;
use App\Http\Requests\PuntajeExtraRequest;
use DB;

class PuntajeExtraController extends Controller
{
  public function index()
{

  $puntajeExtras = PuntajeExtra::orderBy('idPuntajeExtra', 'DESD')->paginate();

  //carpeta y archivo
  return view('puntajeExtras.index', compact('puntajeExtras'));
}

public function create()
{
  return view('puntajeExtras.create');
}

public function store(PuntajeExtraRequest $request)
{
  $puntajeExtra = new PuntajeExtra;

  $puntajeExtra->puntajeExtra = $request->puntajeExtra;
  $puntajeExtra->descripcionPuntaje = $request->descripcionPuntaje;
  $puntajeExtra->id_Colegio = $request->id_Colegio;

  $puntajeExtra->save();
  return redirect()->route('puntajeextra.index')->with('info', 'El dato fue guardado');
}

public function update(PuntajeExtraRequest $request, $idPuntajeExtra)
{
  $puntajeExtra = PuntajeExtra::find($idPuntajeExtra);

  $puntajeExtra->puntajeExtra = $request->puntajeExtra;
  $puntajeExtra->descripcionPuntaje = $request->descripcionPuntaje;
  $puntajeExtra->id_Colegio = $request->id_Colegio;

  $puntajeExtra->save();

  return redirect()->route('puntajeextra.index')->with('info', 'El dato fue actualizado');
}

public function show($idPuntajeExtra)
{
  $puntajeExtra = PuntajeExtra::find($idPuntajeExtra);
  return view('puntajeExtras.show', compact('puntajeExtra'));
}

public function destroy($idPuntajeExtra)
{
  $puntajeExtra = PuntajeExtra::find($idPuntajeExtra);
  $puntajeExtra->delete();

  return back()->with('info', 'El dato fue eliminado');
}

public function edit($idPuntajeExtra)
{
  $puntajeExtra = PuntajeExtra::find($idPuntajeExtra);
  return view('puntajeExtras.edit', compact('puntajeExtra'));
}
}
