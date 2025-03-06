<?php

namespace App\Http\Controllers\Api;
use App\Models\Reseps;
use App\Models\Obats;
use App\Models\konsuls;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class KonsulsController extends Controller
{


    public function index()
    {
        

        /*

        $joinKonsul = DB::table('konsuls')
        ->join('users', 'konsuls.pasien_id', '=', 'users.id')
        ->select('konsuls.*', 
                 'users.name as nama_pasien',
                 'users.email as email_pasien',
                 'users.alamat as alamat_pasien',
                 'users.telepon as telepon_pasien',
                )
        ->get();    
        

        $Reseps = DB::table('reseps')
        ->join('obats', 'reseps.obat_id', '=', 'obats.id')
        ->select('reseps.*', 
                 'obats.nama_obat as nama_obat_resep',
                 'obats.stok as stok_obat_resep',
                 'obats.harga as harga_obat_resep',
                 'obats.keterangan_obat as keterangan_obat_resep',
                )
        ->get();


        $data = array_merge($joinKonsul, $Reseps);

        foreach ($data as $key => $value) {
            echo $key . ': ' . $value . '<br>';
        }

        */
         

        $joinKonsul = Konsuls::with('reseps')
        ->join('users', 'konsuls.pasien_id', '=', 'users.id')
        ->select('konsuls.*', 
                 'users.name as nama_pasien',
                 'users.email as email_pasien',
                 'users.alamat as alamat_pasien',
                 'users.telepon as telepon_pasien',
                )
        ->join('reseps','obats.id','reseps.obat_id')
        ->select('reseps.*',
                  'nama'
                )
        ->get();

        $joinKonsul->each(function ($r) {
            $r->reseps = $r->reseps;
        });







    
        if (!$data) {
            return response()->json(['message' => 'Errors, data not found', 404]);
        }
        
        return response()->json(
            [ 'message' => 'Data successfully found', 
            'data' => $data,
            201
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'resep_id' => 'required',
            'pasien_id' => 'required',
            'nomor_antrian' => 'required',
            'keterangan_konsul' => 'required',
            'saran' => 'required',
            'informasi' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                [ 'message' => 'Errors, cannot be created', 
                  'data' => $validator->errors(),
                  422
            ]);
        }

        $konsuls = Konsuls::create($request->all());        
        return response()->json(
            [ 'message' => 'Created data successfully', 
            'data' => $konsuls,
            201
        ]);

    }


    public function show(string $id)
    {
        $konsuls = Konsuls::find($id);
        
        if (!$konsuls) {
            return response()->json(['message' => 'Errors, show not found'], 404);
        }
        
        return response()->json(
            [ 'message' => 'Show Obats', 
            'data' => $konsuls,
            201
        ]);
    }


    public function showReseps()
    {

        $konsuls = DB::table('konsuls')
        ->join('reseps', 'konsuls.resep_id', '=', 'reseps.id')
        ->join('obats', 'reseps.obat_id', '=', 'obats.id')
        ->get();
    
        if (!$konsuls) {
            return response()->json(['message' => 'Errors, data not found', 404]);
        }
        
        return response()->json(
            [ 'message' => 'Data successfully found', 
            'data' => $konsuls,
        ]);
    }


    
    public function update(Request $request, string $id)
    {
        $konsuls = Konsuls::find($id);
        if (!$konsuls) {
            return response()->json(['message' => 'Errors, updated not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'resep_id' => 'required',
            'pasien_id' => 'required',
            'nomor_antrian' => 'required',
            'keterangan_konsul' => 'required',
            'saran' => 'required',
            'informasi' => 'required',
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
            'data' => $konsuls,
            201
        ]);

    }


    public function destroy(string $id)
    {
        $konsuls = Konsuls::find($id);
        
        if (!$konsuls) {
            return response()->json(['message' => 'Errors, cannot be deleted'], 404);
        }

        $konsuls->delete();
        return response()->json(
            [ 'message' => 'Successfully deleted', 
            'data' => $konsuls,
            201
        ]);
    }


}
