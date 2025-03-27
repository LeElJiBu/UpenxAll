<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller{
    
    public function mostrarInicio(){
        return view('inicio');
    }

    public function mostrarIndex(){
        return view('index');
    }

    public function mostrarSchedule(){
        return view('schedule');
    }

    public function mostrarScheduleLog(){
        return view('schedule-log');
    }

    public function mostrarInicioCopy(){
        return view('inicio-copy');
    }

    public function mostrarScheduleCopy(){
        return view('schedule-copy');
    }

}

