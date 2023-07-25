<?php

namespace App\Http\Controllers;

use App\Models\Empleca;
use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Periodo;
use App\Models\Carrera;
/**
 * Class EmplecaController
 * @package App\Http\Controllers
 */
class EmplecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emplecas = Empleca::paginate();

        return view('empleca.index', compact('emplecas'))
            ->with('i', (request()->input('page', 1) - 1) * $emplecas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleca = new Empleca();
        $empleados= Empleado::pluck('Apellido','id');
        $carreras= Carrera::pluck('nombre','id');
        $periodos= Periodo::pluck('nombre','id');
        return view('empleca.create', compact('empleca','empleados','carreras','periodos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Empleca::$rules);

        $empleca = Empleca::create($request->all());

        return redirect()->route('emplecas.index')
            ->with('success', 'Empleca created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleca = Empleca::find($id);

        return view('empleca.show', compact('empleca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleca = Empleca::find($id);
        $empleados= Empleado::pluck('Apellido','id');
        $carreras= Carrera::pluck('nombre','id');
        $periodos= Periodo::pluck('nombre','id');
        return view('empleca.edit', compact('empleca','empleados','carreras','periodos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empleca $empleca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleca $empleca)
    {
        request()->validate(Empleca::$rules);

        $empleca->update($request->all());

        return redirect()->route('emplecas.index')
            ->with('success', 'Empleca updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empleca = Empleca::find($id)->delete();

        return redirect()->route('emplecas.index')
            ->with('success', 'Empleca deleted successfully');
    }
}
