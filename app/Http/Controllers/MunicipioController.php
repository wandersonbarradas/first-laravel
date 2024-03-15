<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;

class MunicipioController extends Controller
{

    public function index(Request $request)
    {
        return datatables()->of(Municipio::select('id', 'razao_social', 'nome_fantasia', 'cnpj', "active"))
            ->addColumn('ações', 'components/municipioAction')
            ->rawColumns(['ações'])
            ->addIndexColumn()
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cnpj' => 'required',
            'razao_social' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => "required",
            'estado' => "required"
            // Adicione mais regras de validação conforme necessário
        ]);
        $new_municipio = [
            "razao_social" => $request->razao_social,
            "nome_fantasia" => $request->nome_fantasia,
            "cnpj" => $request->cnpj,
            "logradouro" => $request->logradouro,
            "numero" => $request->numero,
            "bairro" => $request->bairro,
            "complemento" => $request->complemento,
            "cidade" => $request->cidade,
            "estado" => $request->estado,
            "active" => $request->active ? "1" : "0",
            "obs" => $request->obs
        ];
        $muncipio = new Municipio($new_municipio);
        $muncipio->save();
        return Response()->json([
            'id' => $muncipio->id,
            'razao_social' => $muncipio->razao_social,
            'nome_fantasia' => $muncipio->nome_fantasia,
            'cnpj' => $muncipio->cnpj,
            'active' => $muncipio->active,
            'ações' => view('components/municipioAction', ["id" => $muncipio->id])->render(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $response = [
            'status' => false,
            'data' => "Usuario não encontrado!"
        ];
        if ($request->id) {
            $result = Municipio::find($request->id);
            if ($result) {
                $response["data"] = $result;
                $response["status"] = true;
            }
        }
        return Response()->json($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:municipios,id',
            'cnpj' => 'required',
            'razao_social' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => "required",
            'estado' => "required"
            // Adicione mais regras de validação conforme necessário
        ]);
        $municipio = Municipio::find($request->id);
        if (!$municipio) {
            return response()->json(['error' => 'Município não encontrado'], 404);
        }
        $municipio->razao_social = $request->razao_social;
        $municipio->nome_fantasia = $request->nome_fantasia;
        $municipio->cnpj = $request->cnpj;
        $municipio->logradouro = $request->logradouro;
        $municipio->numero = $request->numero;
        $municipio->bairro = $request->bairro;
        $municipio->complemento = $request->complemento;
        $municipio->cidade = $request->cidade;
        $municipio->estado = $request->estado;
        $municipio->active = $request->active ? "1" : "0";
        $municipio->obs = $request->obs;

        $municipio->save();
        return response()->json([
            'id' => $municipio->id,
            'razao_social' => $municipio->razao_social,
            'nome_fantasia' => $municipio->nome_fantasia,
            'cnpj' => $municipio->cnpj,
            'active' => $municipio->active,
            'ações' => view('components/municipioAction', ["id" => $municipio->id])->render(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // Encontre o município pelo ID
        $municipio = Municipio::find($request->id);

        // Verifique se o município foi encontrado
        if (!$municipio) {
            // Se não encontrado, retorne uma resposta de erro
            return response()->json(['error' => 'Município não encontrado'], 404);
        }

        // Se encontrado, delete o município
        $municipio->delete();

        // Retorne uma resposta de sucesso
        return response()->json(['success' => true, 'id' => $request->id]);
    }
}
