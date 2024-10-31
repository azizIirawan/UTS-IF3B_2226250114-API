<?php

namespace App\Http\Controllers;

use app\Models\penggunaAplikasi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class penggunaController extends Controller
{
    public function index(){
        $user = penggunaController::all();
        $data['succes'] = true ;
        $data['result'] = $user;
        return response()->json ($data, Response::HTTP_OK) ;
    }


public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|unique:user'
        ]);

        $result = penggunaController::create($validate);// Simpan ke Table
        if($result){
            $data['success'] = true;
            $data['message'] = 'Data user berhasil disimpan';
            $data['result'] = $result;
            return response()->json(data: $data, status:Response::HTTP_CREATED);
        }

    }
}