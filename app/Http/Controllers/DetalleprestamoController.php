<?php

namespace App\Http\Controllers;

use App\Models\Detalleprestamo;
use Illuminate\Http\Request;
use App\Models\Socio;
use App\Models\Prestamo;
use App\Models\Cinta;



/**
 * Class DetalleprestamoController
 * @package App\Http\Controllers
 */
class DetalleprestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleprestamos = Detalleprestamo::paginate();

        return view('detalleprestamo.index', compact('detalleprestamos'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleprestamos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalleprestamo = new Detalleprestamo();
        $socios = Socio::pluck('persona_id','id');
        $prestamos = Prestamo::pluck('fechaprestamo','id');
        $cintas = Cinta::pluck('codigo','id');
        return view('detalleprestamo.create', compact('detalleprestamo','socios','prestamos','cintas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Detalleprestamo::$rules);

        $detalleprestamo = Detalleprestamo::create($request->all());

        return redirect()->route('detalleprestamos.index')
            ->with('success', 'Detalleprestamo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleprestamo = Detalleprestamo::find($id);

        return view('detalleprestamo.show', compact('detalleprestamo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleprestamo = Detalleprestamo::find($id);

        return view('detalleprestamo.edit', compact('detalleprestamo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Detalleprestamo $detalleprestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalleprestamo $detalleprestamo)
    {
        request()->validate(Detalleprestamo::$rules);

        $detalleprestamo->update($request->all());

        return redirect()->route('detalleprestamos.index')
            ->with('success', 'Detalleprestamo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalleprestamo = Detalleprestamo::find($id)->delete();

        return redirect()->route('detalleprestamos.index')
            ->with('success', 'Detalleprestamo deleted successfully');
    }
}
