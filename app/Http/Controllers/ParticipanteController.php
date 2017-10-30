<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Participante;
use App\Http\Requests\ParticipanteRequest;
use DB;

class ParticipanteController extends Controller
{
    public function index()
	{
		
		$participantes = Participante::orderBy('idParticipante', 'DESD')->paginate();

		//carpeta y archivo
		return view('participantes.index', compact('participantes'));
	}

	public function create()
	{
		return view('participantes.create');
	}

	public function store(ParticipanteRequest $request)
	{
		$participante = new Participante;

		$participante->primerNombre = $request->primerNombre;
		$participante->segundoNombre = $request->segundoNombre;
		$participante->primerApellido = $request->primerApellido;
		$participante->segundoApellido = $request->segundoApellido;
		$participante->sexo = $request->sexo;
		$participante->correoElectronico = $request->correoElectronico;
		$participante->ciParticipante = $request->ciParticipante;
		$participante->tallaPolera = $request->tallaPolera;
		$participante->tipoParticipante = $request->tipoParticipante;
		$participante->id_Colegio = $request->id_Colegio;

		$participante->save();
		return redirect()->route('participante.index')->with('info', 'El dato fue guardado');
	}

	public function update(ParticipanteRequest $request, $idParticipante)
	{
		$participante = Participante::find($idParticipante);

		$participante->primerNombre = $request->primerNombre;
		$participante->segundoNombre = $request->segundoNombre;
		$participante->primerApellido = $request->primerApellido;
		$participante->segundoApellido = $request->segundoApellido;
		$participante->sexo = $request->sexo;
		$participante->correoElectronico = $request->correoElectronico;
		$participante->ciParticipante = $request->ciParticipante;
		$participante->tallaPolera = $request->tallaPolera;
		$participante->tipoParticipante = $request->tipoParticipante;
		$participante->id_Colegio = $request->id_Colegio;

		$participante->save();
		
		return redirect()->route('participante.index')->with('info', 'El dato fue actualizado');
	}

	public function show($idParticipante)
	{
		$participante = Participante::find($idParticipante);
		return view('participantes.show', compact('participante'));
	}

	public function destroy($idParticipante)
	{
		$participante = Participante::find($idParticipante);
		$participante->delete();

		return back()->with('info', 'El dato fue eliminado');
	}

	public function edit($idParticipante)
	{
		$participante = Participante::find($idParticipante);
		return view('participantes.edit', compact('participante'));
	}
}
