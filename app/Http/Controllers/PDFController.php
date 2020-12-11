<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;


class PDFController extends Controller
{
    public function pdf(){
        $empleados=Empleados::all();
        $date = date("Y-m-d h:i:s",time()-21600);
        $pdf = \PDF::loadView('empleados/empleadospdf',compact('empleados','date'));
        return $pdf->stream('imprimiremp.pdf');

        //$empleados=Empleados::all();
        //return view('empleados/empleadospdf',compact('empleados'));
    }
}
