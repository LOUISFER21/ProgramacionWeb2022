<?php

namespace App\Http\Controllers;

use App\Models\Directore;
use Illuminate\Http\Request;
use App\Models\Persona;
/**
 * Class DirectoreController
 * @package App\Http\Controllers
 */
class DirectoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directores = Directore::paginate();

        return view('directore.index', compact('directores'))
            ->with('i', (request()->input('page', 1) - 1) * $directores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directore = new Directore();
        $personas = Persona::pluck('nombre','id');
        return view('directore.create', compact('directore','personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Directore::$rules);

        $directore = Directore::create($request->all());

        return redirect()->route('directores.index')
            ->with('success', 'Directore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $directore = Directore::find($id);

        return view('directore.show', compact('directore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $directore = Directore::find($id);

        return view('directore.edit', compact('directore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Directore $directore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directore $directore)
    {
        request()->validate(Directore::$rules);

        $directore->update($request->all());

        return redirect()->route('directores.index')
            ->with('success', 'Directore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $directore = Directore::find($id)->delete();

        return redirect()->route('directores.index')
            ->with('success', 'Directore deleted successfully');
    }
}
