<?php

namespace App\Http\Controllers\Api;
use App\Models\Obats;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class ObatsController extends Controller
{


    public function index()
    {
        $obats = Obats::all();
        
        if (!$obats) {
            return response()->json(['message' => 'Errors, data not found', 404]);
        }
        
        return response()->json(
            [ 'message' => 'Data successfully found', 
            'data' => $obats,
            201
        ]);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_obat' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'keterangan_obat' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                [ 'message' => 'Errors, cannot be created', 
                  'data' => $validator->errors(),
                  422
            ]);
        }

        $obats = Obats::create($request->all());        
        return response()->json(
            [ 'message' => 'Created data successfully', 
            'data' => $obats,
            201
        ]);

    }


    public function show(string $id)
    {
        $obats = Obats::find($id);
        
        if (!$obats) {
            return response()->json(['message' => 'Errors, cannot be show'], 404);
        }
        
        return response()->json(
            [ 'message' => 'Show Obats', 
            'data' => $obats,
            201
        ]);
    }

    
    public function update(Request $request, string $id)
    {
        $obats = Obats::find($id);
        if (!$obats) {
            return response()->json(['message' => 'Errors, updated not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'nama_obat' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'keterangan' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                [ 'message' => 'Errors, cannot be updated', 
                'data' => $validator->errors(), 
                422
            ]);

        }

        $user->update($request->all());
        return response()->json(
            [ 'message' => 'successfully updated', 
            'data' => $obats,
            201
        ]);

    }


    public function destroy(string $id)
    {
        $obats = Obats::find($id);
        
        if (!$obats) {
            return response()->json(['message' => 'Errors, cannot be deleted'], 404);
        }

        $obats->delete();
        return response()->json(
            [ 'message' => 'Successfully deleted', 
            'data' => $obats,
            201
        ]);
    }



}
