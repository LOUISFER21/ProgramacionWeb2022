<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datos=Empleados::all();
        return view("empleados.index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("empleados.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo_empleado'=>'required|max:10|min:2|unique:empleados',
            'nombre'=>'required|string|max:25|min:2',
            'apellido_paterno'=>'required|String|max:25|min:2',
            'apellido_materno'=>'required|string|max:25|min:2',
            'area_trabajo'=>'required|string|max:25|min:2',
            'sueldo_dia'=>'required',
            'dias_trabajados'=>'required|Integer|max:15|min:1',
            'total_neto'=>'required',
            'total_bruto'=>'required',
            ],
            [],[]);

        Empleados::create([
            "codigo_empleado"=>$request->codigo_empleado,
            "nombre"=>$request->nombre,
            "apellido_paterno"=>$request->apellido_paterno,
            "apellido_materno"=>$request->apellido_materno,
            "area_trabajo"=>$request->area_trabajo,
            "sueldo_dia"=>$request->sueldo_dia,
            "dias_trabajados"=>$request->dias_trabajados,
            "total_neto"=>$request->total_neto,
            "total_bruto"=>$request->total_bruto
            ]);

        return redirect()->route("empleados.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleados $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleados $empleado)
    {
        $empleado->update(['codigo_empleado'=>$request->codigo_empleado]);
        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleados $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index');
    }
}
