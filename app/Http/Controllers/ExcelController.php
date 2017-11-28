<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ExcelController extends Controller
{
    public function ExportParticipantes()
    {
    	Excel::create('participantes', function($excel)
    	{
    		$excel->sheet('participantes', function($sheet)
    		{
    			$sheet->loadView('ExportParticipantes');
    		});
    	})->export('xlsx');
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
}
