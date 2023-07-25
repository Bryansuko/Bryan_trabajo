<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Rol;
use App\Models\Asignacion;
use Illuminate\Http\Request;

/**
 * Class AsignacionController
 * @package App\Http\Controllers
 */
class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignacions = Asignacion::paginate();

        return view('asignacion.index', compact('asignacions'))
            ->with('i', (request()->input('page', 1) - 1) * $asignacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignacion = new Asignacion();
        $usuarios= Usuario::pluck('Nombre','id');
        $roles= Rol::pluck('rol','id');
        return view('asignacion.create', compact('asignacion','usuarios','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Asignacion::$rules);

        $asignacion = Asignacion::create($request->all());

        return redirect()->route('asignacions.index')
            ->with('success', 'Asignacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignacion = Asignacion::find($id);

        return view('asignacion.show', compact('asignacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignacion = Asignacion::find($id);
        $usuarios= Usuario::pluck('Nombre','id');
        $roles= Rol::pluck('rol','id');

        return view('asignacion.edit', compact('asignacion','usuarios','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Asignacion $asignacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignacion $asignacion)
    {
        request()->validate(Asignacion::$rules);

        $asignacion->update($request->all());

        return redirect()->route('asignacions.index')
            ->with('success', 'Asignacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asignacion = Asignacion::find($id)->delete();

        return redirect()->route('asignacions.index')
            ->with('success', 'Asignacion deleted successfully');
    }
}
