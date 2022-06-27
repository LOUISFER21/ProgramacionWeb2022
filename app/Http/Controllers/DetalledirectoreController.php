<?php

namespace App\Http\Controllers;

use App\Models\Detalledirectore;
use App\Models\Directore;
use App\Models\Pelicula;
use Illuminate\Http\Request;

/**
 * Class DetalledirectoreController
 * @package App\Http\Controllers
 */
class DetalledirectoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalledirectores = Detalledirectore::paginate();

        return view('detalledirectore.index', compact('detalledirectores'))
            ->with('i', (request()->input('page', 1) - 1) * $detalledirectores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalledirectore = new Detalledirectore();
        $directores = Directore::pluck('nombreartistico','id');
        $peliculas =Pelicula::pluck('titulo','id');
        return view('detalledirectore.create', compact('detalledirectore','directores','peliculas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Detalledirectore::$rules);

        $detalledirectore = Detalledirectore::create($request->all());

        return redirect()->route('detalledirectores.index')
            ->with('success', 'Detalledirectore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalledirectore = Detalledirectore::find($id);

        return view('detalledirectore.show', compact('detalledirectore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalledirectore = Detalledirectore::find($id);

        return view('detalledirectore.edit', compact('detalledirectore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Detalledirectore $detalledirectore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalledirectore $detalledirectore)
    {
        request()->validate(Detalledirectore::$rules);

        $detalledirectore->update($request->all());

        return redirect()->route('detalledirectores.index')
            ->with('success', 'Detalledirectore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalledirectore = Detalledirectore::find($id)->delete();

        return redirect()->route('detalledirectores.index')
            ->with('success', 'Detalledirectore deleted successfully');
    }
}
