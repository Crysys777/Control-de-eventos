<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Actividad;
use App\Http\Requests\ActividadRequest;
use DB;

class ActividadController extends Controller
{
    public function index()
	{
		
		$actividads = Actividad::orderBy('idActividad', 'DESD')->paginate();

		//carpeta y archivo
		return view('actividads.index', compact('actividads'));
	}

	public function create()
	{
		return view('actividads.create');
	}

	public function store(ActividadRequest $request)
	{
		$actividad = new Actividad;

		$actividad->nombreActividad = $request->nombreActividad;
		$actividad->categoria = $request->categoria;
		$actividad->id_Area = $request->id_Area;
		

		$actividad->save();
		return redirect()->route('actividad.index')->with('info', 'El dato fue guardado');
	}

	public function update(ActividadRequest $request, $idActividad)
	{
		$actividad = Actividad::find($idActividad);

		$actividad->nombreActividad = $request->nombreActividad;
		$actividad->categoria = $request->categoria;
		$actividad->id_Area = $request->id_Area;
		

		$actividad->save();
		return redirect()->route('actividad.index')->with('info', 'El dato fue actualizado');
	}

	public function show($idActividad)
	{
		$actividad = Actividad::find($idActividad);
		return view('actividads.show', compact('actividad'));
	}

	public function destroy($idActividad)
	{
		$actividad = Actividad::find($idActividad);
		$actividad->delete();

		return back()->with('info', 'El dato fue eliminado');
	}

	public function edit($idActividad)
	{
		$actividad = Actividad::find($idActividad);
		return view('actividads.edit', compact('actividad'));
	}
}
