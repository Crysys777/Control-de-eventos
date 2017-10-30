<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Inscripcion;
use App\Http\Requests\InscripcionRequest;
use DB;

class InscripcionController extends Controller
{	
	public function index()
	{
		
		$inscripcions = Inscripcion::orderBy('idInscripcion', 'DESD')->paginate();

		//carpeta y archivo
		return view('inscripcions.index', compact('inscripcions'));
	}

	public function create()
	{
		return view('inscripcions.create');
	}

	public function store(InscripcionRequest $request)
	{
		$inscripcion = new Inscripcion;

		$inscripcion->id_Colegio = $request->id_Colegio;
		$inscripcion->colegioComprobante = $request->colegioComprobante;
		$inscripcion->participanteComprobante = $request->participanteComprobante;
		$inscripcion->montoParticipante = $request->montoParticipante;
		$inscripcion->montoColegio = $request->montoColegio;
		$inscripcion->cantidadParticipante = $request->cantidadParticipante;
		$inscripcion->fechaInscripcion = $request->fechaInscripcion;

		$inscripcion->save();
		return redirect()->route('inscripcion.index')->with('info', 'El dato fue guardado');
	}

	public function update(InscripcionRequest $request, $idInscripcion)
	{
		$inscripcion = Inscripcion::find($idInscripcion);

		$inscripcion->id_Colegio = $request->id_Colegio;
		$inscripcion->colegioComprobante = $request->colegioComprobante;
		$inscripcion->participanteComprobante = $request->participanteComprobante;
		$inscripcion->montoParticipante = $request->montoParticipante;
		$inscripcion->montoColegio = $request->montoColegio;
		$inscripcion->cantidadParticipante = $request->cantidadParticipante;
		$inscripcion->fechaInscripcion = $request->fechaInscripcion;

		$inscripcion->save();
		
		return redirect()->route('inscripcion.index')->with('info', 'El dato fue actualizado');
	}

	public function show($idInscripcion)
	{
		$inscripcion = Inscripcion::find($idInscripcion);
		return view('inscripcions.show', compact('inscripcion'));
	}

	public function destroy($idInscripcion)
	{
		$inscripcion = Inscripcion::find($idInscripcion);
		$inscripcion->delete();

		return back()->with('info', 'El dato fue eliminado');
	}

	public function edit($idInscripcion)
	{
		$inscripcion = Inscripcion::find($idInscripcion);
		return view('inscripcions.edit', compact('inscripcion'));
	}

	
    
}
