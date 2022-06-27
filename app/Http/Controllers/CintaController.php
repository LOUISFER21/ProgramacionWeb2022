<?php

namespace App\Http\Controllers;

use App\Models\Cinta;
use Illuminate\Http\Request;
use App\Models\Pelicula;
/**
 * Class CintaController
 * @package App\Http\Controllers
 */
class CintaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cintas = Cinta::paginate();

        return view('cinta.index', compact('cintas'))
            ->with('i', (request()->input('page', 1) - 1) * $cintas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cinta = new Cinta(); 
        $peliculas=Pelicula::pluck('titulo','id');
        return view('cinta.create', compact('cinta','peliculas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cinta::$rules);

        $cinta = Cinta::create($request->all());

        return redirect()->route('cintas.index')
            ->with('success', 'Cinta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cinta = Cinta::find($id);

        return view('cinta.show', compact('cinta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cinta = Cinta::find($id);

        return view('cinta.edit', compact('cinta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cinta $cinta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cinta $cinta)
    {
        request()->validate(Cinta::$rules);

        $cinta->update($request->all());

        return redirect()->route('cintas.index')
            ->with('success', 'Cinta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cinta = Cinta::find($id)->delete();

        return redirect()->route('cintas.index')
            ->with('success', 'Cinta deleted successfully');
    }
}
