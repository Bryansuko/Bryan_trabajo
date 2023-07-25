<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EmpleadoActividadController extends Controller
{
    public function index()
    {
        $client = new Client([
            'base_uri' => 'https://localhost:44378/api/',
            'verify' => false, // Ignora la verificación del certificado SSL
        ]);

        $response = $client->get('empleadoes');
        $data = json_decode($response->getBody(), true);

        return view('empleadoactividad.index', compact('data'));
    }

    public function show($id)
    {
        $client = new Client([
            'base_uri' => 'https://localhost:44378/api/',
            'verify' => false, // Ignora la verificación del certificado SSL
        ]);

        $response = $client->get("empleadoes/{$id}");
        $data = json_decode($response->getBody(), true);

        return view('empleadoactividad.show', compact('data'));
    }

    public function create()
    {
        return view('empleadoactividad.create');
    }

    public function store(Request $request)
    {
        $client = new Client([
            'base_uri' => 'https://localhost:44378/api/',
            'verify' => false, // Ignora la verificación del certificado SSL
        ]);

        $response = $client->post('empleadoes', ['json' => $request->all()]);
        // Puedes agregar aquí lógica para manejar la respuesta de la API, si lo deseas.
        return redirect('/empleadoactividad');
    }

    public function update(Request $request, $id)
    {
        $client = new Client([
            'base_uri' => 'https://localhost:44378/api/',
            'verify' => false, // Ignora la verificación del certificado SSL
        ]);

        $response = $client->put("empleadoes/{$id}", ['json' => $request->all()]);
        // Puedes agregar aquí lógica para manejar la respuesta de la API, si lo deseas.
        return redirect("/empleadoactividad/{$id}");
    }

    public function destroy($id)
    {
        $client = new Client([
            'base_uri' => 'https://localhost:44378/api/',
            'verify' => false, // Ignora la verificación del certificado SSL
        ]);

        $response = $client->delete("empleadoes/{$id}");
        // Puedes agregar aquí lógica para manejar la respuesta de la API, si lo deseas.
        return redirect('/empleadoactividad');
    }
    public function edit($id)
    {
        $client = new Client([
            'base_uri' => 'https://localhost:44378/api/',
            'verify' => false, // Ignora la verificación del certificado SSL
        ]);

        $response = $client->get("empleadoes/{$id}");
        $data = json_decode($response->getBody(), true);

        return view('empleadoactividad.edit', compact('data'));
    }

}
