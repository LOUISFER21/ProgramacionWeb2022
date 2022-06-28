<?php

namespace App\Http\Controllers;

use App\Models\Directorfavorito;


use App\Models\Socio;
use App\Models\Directore;
use Illuminate\Http\Request;

/**
 * Class DirectorfavoritoController
 * @package App\Http\Controllers
 */
class DirectorfavoritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directorfavoritos = Directorfavorito::paginate();

        return view('directorfavorito.index', compact('directorfavoritos'))
            ->with('i', (request()->input('page', 1) - 1) * $directorfavoritos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directorfavorito = new Directorfavorito();
        $directores = Directore::pluck('nombreartistico','id');
        $socios = Socio::pluck('persona_id','id');
        return view('directorfavorito.create', compact('directorfavorito', 'directores','socios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Directorfavorito::$rules);

        $directorfavorito = Directorfavorito::create($request->all());

        return redirect()->route('directorfavoritos.index')
            ->with('success', 'Directorfavorito created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $directorfavorito = Directorfavorito::find($id);

        return view('directorfavorito.show', compact('directorfavorito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $directorfavorito = Directorfavorito::find($id);

        return view('directorfavorito.edit', compact('directorfavorito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Directorfavorito $directorfavorito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directorfavorito $directorfavorito)
    {
        request()->validate(Directorfavorito::$rules);

        $directorfavorito->update($request->all());

        return redirect()->route('directorfavoritos.index')
            ->with('success', 'Directorfavorito updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $directorfavorito = Directorfavorito::find($id)->delete();

        return redirect()->route('directorfavoritos.index')
            ->with('success', 'Directorfavorito deleted successfully');
    }
}
