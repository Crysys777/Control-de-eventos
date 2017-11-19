<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Yajra\DataTables\DataTables;
use App\Evento;
use App\Http\Requests\EventoRequest;
use DB;

class EventoController extends Controller
{

	/*public function apiEvento()
	{
		$evento = Evento::all();

		return DataTables::of($evento)->addColumn('action', function($evento)
		{
			return '<a href="#" class="btn btn-info btn-xs"><i class="glyphicon-eye-open">Ver</i></a>'.
					'<a onclick="editForm('. $evento->idEvento .')" class="btn btn-info btn-xs"><i class="glyphicon-edit"></i>Editar</a>'.
					'<a onclick="deleteData('. $evento->idEvento .')" class="btn btn-info btn-xs"><i class="glyphicon-trash"></i>Eliminar</a>';
		})->make(true);

	}*/
    public function index()
	{

		$eventos = Evento::orderBy('idEvento', 'DESD')->paginate();

		//carpeta y archivo
		return view('eventos.index', compact('eventos'));
	}

	public function create()
	{
		return view('eventos.create');
	}

	public function store(EventoRequest $request)
	{
		$evento = new Evento;

		$evento->nombreEvento = $request->nombreEvento;



		$evento->save();
		return redirect()->route('evento.index')->with('info', 'El dato fue guardado');
	}

	public function update(EventoRequest $request, $idEvento)
	{
		$evento = Evento::find($idEvento);

		$evento->nombreEvento = $request->nombreEvento;



		$evento->save();
		return redirect()->route('evento.index')->with('info', 'El dato fue actualizado');
	}

	public function show($idEvento)
	{
		$evento = Evento::find($idEvento);
		return view('eventos.show', compact('evento'));
	}

	public function destroy($idEvento)
	{
		$evento = Evento::find($idEvento);
		$evento->delete();

		return back()->with('info', 'El dato fue eliminado');
	}

	public function edit($idEvento)
	{
		$evento = Evento::find($idEvento);
		return view('eventos.edit', compact('evento'));
	}



}
