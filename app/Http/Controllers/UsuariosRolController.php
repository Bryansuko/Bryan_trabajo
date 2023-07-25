<?php

namespace App\Http\Controllers;

use App\Models\UsuariosRol;
use Illuminate\Http\Request;

/**
 * Class UsuariosRolController
 * @package App\Http\Controllers
 */
class UsuariosRolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuariosRols = UsuariosRol::paginate();

        return view('usuarios-rol.index', compact('usuariosRols'))
            ->with('i', (request()->input('page', 1) - 1) * $usuariosRols->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuariosRol = new UsuariosRol();
        return view('usuarios-rol.create', compact('usuariosRol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UsuariosRol::$rules);

        $usuariosRol = UsuariosRol::create($request->all());

        return redirect()->route('usuarios-rols.index')
            ->with('success', 'UsuariosRol created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuariosRol = UsuariosRol::find($id);

        return view('usuarios-rol.show', compact('usuariosRol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuariosRol = UsuariosRol::find($id);

        return view('usuarios-rol.edit', compact('usuariosRol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UsuariosRol $usuariosRol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsuariosRol $usuariosRol)
    {
        request()->validate(UsuariosRol::$rules);

        $usuariosRol->update($request->all());

        return redirect()->route('usuarios-rols.index')
            ->with('success', 'UsuariosRol updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usuariosRol = UsuariosRol::find($id)->delete();

        return redirect()->route('usuarios-rols.index')
            ->with('success', 'UsuariosRol deleted successfully');
    }
}
