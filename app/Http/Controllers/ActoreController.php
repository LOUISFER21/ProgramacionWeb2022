<?php

namespace App\Http\Controllers;

use App\Models\Actore;
use Illuminate\Http\Request;
use App\Models\Persona;

/**
 * Class ActoreController
 * @package App\Http\Controllers
 */
class ActoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actores = Actore::paginate();

        return view('actore.index', compact('actores'))
            ->with('i', (request()->input('page', 1) - 1) * $actores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actore = new Actore();
        $personas = Persona::pluck('nombre','id');
        return view('actore.create', compact('actore','personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Actore::$rules);

        $actore = Actore::create($request->all());

        return redirect()->route('actores.index')
            ->with('success', 'Actore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actore = Actore::find($id);

        return view('actore.show', compact('actore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actore = Actore::find($id);

        return view('actore.edit', compact('actore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Actore $actore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actore $actore)
    {
        request()->validate(Actore::$rules);

        $actore->update($request->all());

        return redirect()->route('actores.index')
            ->with('success', 'Actore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $actore = Actore::find($id)->delete();

        return redirect()->route('actores.index')
            ->with('success', 'Actore deleted successfully');
    }
}
