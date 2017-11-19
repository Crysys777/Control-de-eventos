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

	public function import()
    {
    	$path = public_path('Libro1.csv');
    	//$content = utf8_encode(file_get_contents($path));
    	$lines = file($path);
    	$utf8_lines = array_map('utf8_encode', $lines);
    	//return str_getcsv($content);
    	return array_map('str_getcsv', $utf8_lines);


    	for ($i=1; $i<sizeof($array); ++$i)
    	{
    		$participantes = new Participantes;
    		$participantes -> primerNombre = $array[$i][0];
    		$participantes -> segundoNombre = $array[$i][1];
    		$participantes -> primerApellido = $array[$i][2];
    		$participantes -> segundoApellido = $array[$i][3];
    		$participantes -> sexo = $array[$i][4];
    		$participantes -> correoElectronico = $array[$i][5];
    		$participantes -> ciParticipante = $array[$i][6];
    		$participantes -> tallaPolera = $array[$i][7];
    		$participantes -> tipoParticipante = $array[$i][8];
    		$participantes -> id_Colegio = $array[$i][9];
    		$participantes -> save();
    	}
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
