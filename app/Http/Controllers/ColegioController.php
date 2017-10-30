<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Colegio;
use App\Http\Requests\ColegioRequest;
use DB;

class ColegioController extends Controller
{
    public function index()
	{
		
		$colegios = Colegio::orderBy('idColegio', 'DESD')->paginate();

		//carpeta y archivo
		return view('colegios.index', compact('colegios'));
	}

	public function create()
	{
		return view('colegios.create');
	}

	public function store(ColegioRequest $request)
	{
		$colegio = new Colegio;

		$colegio->nombreColegio = $request->nombreColegio;
		$colegio->mision = $request->mision;
		$colegio->departamento = $request->departamento;
		

		$colegio->save();
		return redirect()->route('colegio.index')->with('info', 'El dato fue guardado');
	}

	public function update(ColegioRequest $request, $idColegio)
	{
		$colegio = Colegio::find($idColegio);

		$colegio->nombreColegio = $request->nombreColegio;
		$colegio->mision = $request->mision;
		$colegio->departamento = $request->departamento;
		

		$colegio->save();
		return redirect()->route('colegio.index')->with('info', 'El dato fue actualizado');
	}

	public function show($idColegio)
	{
		$colegio = Colegio::find($idColegio);
		return view('colegios.show', compact('colegio'));
	}

	public function destroy($idColegio)
	{
		$colegio = Colegio::find($idColegio);
		$colegio->delete();

		return back()->with('info', 'El dato fue eliminado');
	}

	public function edit($idColegio)
	{
		$colegio = Colegio::find($idColegio);
		return view('colegios.edit', compact('colegio'));
	}
}
