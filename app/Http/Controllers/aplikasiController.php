<?php

namespace App\Http\Controllers;

use App\Models\penggunaAplikasi;
use Iluminate\Http\Response;
use Illuminate\Http\aplikasi;
use Illuminate\Http\Request;

class aplikasiController extends Controller
{
    public function index(){
         $aplikasi = penggunaAplikasi::with('user')->get();
        $data['success'] = true;
        $data['result'] = $aplikasi;
        return response()->json($data,Response::HTTP_OK);
    }
}
