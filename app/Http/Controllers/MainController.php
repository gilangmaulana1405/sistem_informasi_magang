<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $magangs = Magang::get();
        return view('main', compact('magangs'));
    }

    public function detail($id){
        $detailmagang = Magang::find($id);
        return view('detailmagang', [
            'detailmagang' => $detailmagang
        ]);
    }
}
