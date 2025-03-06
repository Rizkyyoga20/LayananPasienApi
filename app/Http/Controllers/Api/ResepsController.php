<?php

namespace App\Http\Controllers\Api;
use App\Models\Reseps;
use App\Models\Obats;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;
use Validator;

class ResepsController extends Controller
{

    public function index()
    {

        $joinReseps = DB::table('reseps')
        ->join('obats', 'reseps.obat_id', '=', 'obats.id')
        ->select('reseps.*', 
                 'obats.nama_obat as nama_obat_resep',
                 'obats.stok as stok_obat_resep',
                 'obats.harga as harga_obat_resep',
                 'obats.keterangan_obat as keterangan_obat_resep',
                )
        ->get();


        if (!$joinReseps) {
            return response()->json(['message' => 'Errors, data not found', 404]);
        }
        
        return response()->json(
            [ 'message' => 'Data successfully found', 
            'data' => $joinReseps,
        ]);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'obat_id' => 'required',
            'keterangan_resep' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                [ 'message' => 'Errors, cannot be created', 
                  'data' => $validator->errors(),
                  422
            ]);
        }

        $reseps = Reseps::create($request->all());        
        return response()->json(
            [ 'message' => 'Created data successfully', 
            'data' => $reseps,
            201
        ]);

    }


    public function show(string $id)
    {
        $reseps = Reseps::find($id);
        
        if (!$reseps) {
            return response()->json(['message' => 'Errors, show not found'], 404);
        }
        
        return response()->json(
            [ 'message' => 'Show Obats', 
            'data' => $reseps,
            201
        ]);
    }

    
    public function update(Request $request, string $id)
    {
        $reseps = Reseps::find($id);
        if (!$reseps) {
            return response()->json(['message' => 'Errors, updated not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'obat_id' => 'required',
            'keterangan_resep' => 'required',
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
            'data' => $reseps,
            201
        ]);

    }


    public function destroy(string $id)
    {
        $reseps = Reseps::find($id);
        
        if (!$reseps) {
            return response()->json(['message' => 'Errors, cannot be updated'], 404);
        }

        $reseps->delete();
        return response()->json(
            [ 'message' => 'Successfully deleted', 
            'data' => $reseps,
            201
        ]);
    }



}
