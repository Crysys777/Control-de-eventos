<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Area;
use App\Http\Requests\AreaRequest;
use DB;

class AreaController extends Controller
{
    public function index()
	{

		$areas = Area::orderBy('idArea', 'DESD')->paginate();

		//carpeta y archivo
		return view('areas.index', compact('areas'));
	}

	public function create()
	{
		return view('areas.create');
	}

	public function store(AreaRequest $request)
	{
		$area = new Area;

		$area->nombreArea = $request->nombreArea;
		$area->id_Evento = $request->id_Evento;
		$area->save();
		return redirect()->route('area.index')->with('info', 'El dato fue guardado');
	}

	public function update(AreaRequest $request, $idArea)
	{
		$area = Area::find($idArea);

		$area->nombreArea = $request->nombreArea;
		$area->id_Evento = $request->id_Evento;


		$area->save();
		return redirect()->route('area.index')->with('info', 'El dato fue actualizado');
	}

	public function show($idArea)
	{
		$area = Area::find($idArea);
		return view('areas.show', compact('area'));
	}

	public function destroy($idArea)
	{
		$area = Area::find($idArea);
		$area->delete();

		return back()->with('info', 'El dato fue eliminado');
	}

	public function edit($idArea)
	{
		$area = Area::find($idArea);
		return view('areas.edit', compact('area'));
	}
}
