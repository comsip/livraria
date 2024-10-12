<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());
        return response()->json($cliente, 201);
    }

    public function show($id)
    {
        $cliente = Cliente::find($id);
        if ($cliente) {
            return response()->json($cliente);
        } else {
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        if ($cliente) {
            $cliente->update($request->all());
            return response()->json($cliente);
        } else {
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        if ($cliente) {
            $cliente->delete();
            return response()->json(['message' => 'Cliente deletado com sucesso']);
        } else {
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }
    }
}
