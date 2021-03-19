<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Serologia;
use App\Hemograma;

class PDFController extends Controller
{
    //
    public function PDF(){
        $pdf =\PDF::loadview('test');
        return $pdf->stream('test.pdf');
    }
    public function PDFResults(Request $request, $id){
        $patients = Patient::all();
    	$pdf = \PDF::loadView('results', compact('patients'));
    	return $pdf->stream('results.pdf');
    }
     public function hemograma (Request $request, $id){
        $patients = Patient::where('id', $id)->get();

        $hemograma = Hemograma::where('idpaciente', $id)->get();
        $serologia = Serologia::where('idpaciente', $id)->get();
    	$pdf = \PDF::loadView('results', compact('patients', 'hemograma', 'serologia'));

    	return $pdf->stream('results.pdf');
      }
}
