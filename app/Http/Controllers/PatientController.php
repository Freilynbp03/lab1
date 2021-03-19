<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Serologia;
use App\Hematologia;
use App\Especial;
use App\Materia;
use App\Quimica;
use App\Hemograma;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patients = Patient::all();
        return view('dashboard', compact("patients"));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('digitar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $patient = new Patient;
        $patient->name = $request->name;
        $patient->lastname = $request->lastname;
        $patient->nss = $request->nss;
        $patient->doctor = $request->doctor;
        $patient->gender = $request->gender;
        $patient->age = $request->age;
        $patient->phone = $request->phone;
        $patient->unidad = $request->unidad;
        

        $patient->save();

        
        if(!empty($request->input('vdrl'))) {
        $serologia = new Serologia;
        $serologia->vdrl = $request->vdrl;
        $serologia->aso = $request->aso;
        $serologia->pcr = $request->pcr;
        $serologia->factor = $request->factor;
        $serologia->gestatest = $request->gestatest;
        $serologia->covid = $request->covid;
        $serologia->fotoplasmosis = $request->fotoplasmosis;
        $serologia->idpaciente = $patient->id;

        $serologia->save();
        } else{
            
        }


        
        if(!empty($request->input('tip'))) {
         $hematologia = new Hematologia;
         $hematologia->tip = $request->tip;
         $hematologia->eritro = $request->eritro;
         $hematologia->sangria = $request->sangria;
         $hematologia->cuagulacion = $request->cuagulacion;
         $hematologia->falcemia = $request->falcemia;
         $hematologia->idpaciente = $patient->id;

         $hematologia->save();
        } else{
            
        }

        if(!empty($request->input('hvi'))) {
         $especial = new Especial;
         $especial->hvi = $request->hvi;
         $especial->hvc = $request->hvc;
         $especial->hbsag = $request->hbsag;
         $especial->idpaciente = $patient->id;

         $especial->save();
        } else{
            
        }


        if(!empty($request->input('color'))) {       
         $material = new Materia;
         $material->color = $request->color;
         $material->consistencia = $request->consistencia;
         $material->quistes = $request->quistes;
         $material->larvas = $request->larvas;
         $material->sangre = $request->sangre;
         $material->gblancos = $request->gblancos;
         $material->grojos = $request->grojos;
         $material->otros = $request->otros;
         $material->idpaciente = $patient->id;

         $material->save();
        } else{
            
        }


        if(!empty($request->input('color'))) { 
         $quimica = new Quimica;
         $quimica->acido_urico = $request->acido_urico;
         $quimica->colesterol = $request->colesterol;
         $quimica->colesterol_hdl = $request->colesterol_hdl;
         $quimica->colesterol_ldl = $request->colesterol_ldl;
         $quimica->creatina = $request->creatina;
         $quimica->glicemia = $request->glicemia;
         $quimica->trigliceridos = $request->trigliceridos;
         $quimica->urea = $request->urea;
         $quimica->bilirrubina_t = $request->bilirrubina_t;
         $quimica->bilirrubina_d = $request->bilirrubina_d;
         $quimica->bilirrubina_i = $request->bilirrubina_i;
         $quimica->fosfatasa_alcalina = $request->fosfatasa_alcalina;
         $quimica->fosfatasa_asida = $request->fosfatasa_asida;
         $quimica->lipasa = $request->lipasa;
         $quimica->tgo = $request->tgo;
         $quimica->tgp = $request->tgp;
         $quimica->idpaciente = $patient->id;


         $quimica->save();
        } else{
            
        }


        if(!empty($request->input('wbc'))) {         
         $hemograma = new Hemograma;
         $hemograma->wbc = $request->wbc;
         $hemograma->rbc = $request->rbc;
         $hemograma->hgb = $request->hgb;
         $hemograma->hct = $request->hct;
         $hemograma->mcv = $request->mcv;
         $hemograma->mch = $request->mch;
         $hemograma->mchc = $request->mchc;
         $hemograma->plt = $request->plt;
         $hemograma->idpaciente = $patient->id;

         $hemograma->save();
        } else{
            
        }


        return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
