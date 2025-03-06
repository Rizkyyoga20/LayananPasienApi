<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        if (!$users) {
            return response()->json(['message' => 'Errors, data not found'], 404);
        }
        
        return response()->json(
            [ 'message' => 'Data successfully found', 
            'data' => $users,
            201
        ]);


    }



    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::User(); 
            $success['token'] =  $user->createToken('MyApp')->plainTextToken; 
            $success['name'] =  $user->name;
            return response()->json(
                [ 'message' => 'Login successfully', 
                  'data' => $success
                ]);
        }else{ 
            return response()->json(['message' => 'Errors, cannot be login'], 404);
        } 
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'status_login' => 'required',
            'password' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                [ 'message' => 'Errors, cannot be created', 
                  'data' => $validator->errors(),
                  422
            ]);
        }

        $user = User::create($request->all());
        return response()->json(
            [ 'message' => 'Created data successfully', 
              'data' => $user,
              201
            ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'Errors, cannot be show'], 404);
        }
            return response()->json(
                [ 'message' => 'Detail User', 
                'data' => $user
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'Errors, data not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'status_login' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {       
            return response()->json(
                [ 'message' => 'Errors, cannot be updated', 
                'data' => $validator->errors(), 
                422
            ]);
        }

        $user->update($request->all());
        return response()->json(['message' => 'Updated successfully']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'Errors, data not found'], 404);
        }
        $user->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }

}
