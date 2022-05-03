<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerformanceComercial extends Controller
{
    public function index() {
        $consultores = DB::table('cao_usuario')
        ->join('permissao_sistema', 'cao_usuario.co_usuario', '=', 'permissao_sistema.co_usuario' )
        ->where('permissao_sistema.co_sistema', '=', '1')
        ->where('permissao_sistema.in_ativo', '=', 'S')
        ->where('permissao_sistema.co_tipo_usuario', '=', '0')
        ->orWhere('permissao_sistema.co_tipo_usuario', '=', '1')
        ->orWhere('permissao_sistema.co_tipo_usuario', '=', '2')
        ->orderBy('cao_usuario.no_usuario', 'ASC')
        ->get();
        return view('performancecomercial.index', compact('consultores'));
    }
}
