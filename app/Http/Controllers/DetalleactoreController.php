<?php

namespace App\Http\Controllers;

use App\Models\Detalleactore;
use App\Models\Actore;
use App\Models\Pelicula;
use Illuminate\Http\Request;

/**
 * Class DetalleactoreController
 * @package App\Http\Controllers
 */
class DetalleactoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleactores = Detalleactore::paginate();

        return view('detalleactore.index', compact('detalleactores'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleactores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalleactore = new Detalleactore();
        $actores = Actore::pluck('nombreartistico','id');
        $peliculas =Pelicula::pluck('titulo','id');
        return view('detalleactore.create', compact('detalleactore','actores','peliculas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Detalleactore::$rules);

        $detalleactore = Detalleactore::create($request->all());

        return redirect()->route('detalleactores.index')
            ->with('success', 'Detalleactore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleactore = Detalleactore::find($id);

        return view('detalleactore.show', compact('detalleactore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleactore = Detalleactore::find($id);

        return view('detalleactore.edit', compact('detalleactore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Detalleactore $detalleactore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalleactore $detalleactore)
    {
        request()->validate(Detalleactore::$rules);

        $detalleactore->update($request->all());

        return redirect()->route('detalleactores.index')
            ->with('success', 'Detalleactore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalleactore = Detalleactore::find($id)->delete();

        return redirect()->route('detalleactores.index')
            ->with('success', 'Detalleactore deleted successfully');
    }
}
