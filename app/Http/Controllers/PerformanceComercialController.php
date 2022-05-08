<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerformanceComercialController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
        return view('performance-comercial.index', compact('consultores'));
    }

    public function hola() {
        $consultores = DB::table('cao_usuario')
        ->join('permissao_sistema', 'cao_usuario.co_usuario', '=', 'permissao_sistema.co_usuario' )
        ->where('permissao_sistema.co_sistema', '=', '1')
        ->where('permissao_sistema.in_ativo', '=', 'S')
        ->where('permissao_sistema.co_tipo_usuario', '=', '0')
        ->orWhere('permissao_sistema.co_tipo_usuario', '=', '1')
        ->orWhere('permissao_sistema.co_tipo_usuario', '=', '2')
        ->orderBy('cao_usuario.no_usuario', 'ASC')
        ->get();
        return view('performance-comercial.index', compact('consultores'));
    }

    public function Relatorico(Request $request)
    {
       // $viewRender = view('performancecomercial.index')->render();
       $res = $this->getCalculoRelatorico($request->consultores);
        return response()->json(array("success" => true, $res));
        // $viewRender = view('performance-comercial.index')->render();
        // //echo $algo;

        // return response()->json(array('success' => true, 'html'=>$viewRender));
    }

    private function getCalculoRelatorico($consultores) {
        $f = 'cao_fatura';
        $c = 'cao_cliente';
        $s = 'cao_sistema';
        $u = 'cao_usuario'; 
        $sa = 'cao_salario';
        $o = 'cao_os';
        $resultado = null;
        try {
            $resultado = DB::table($f)
            ->select(
                $u.'.co_usuario as codigousuario', 
                $u.'.no_usuario as nombreusuario',
                DB::raw('SUM('.$f.'.valor - (('.$f.'.valor*'.$f.'.total_imp_inc)/100)) as ganancia'), 
                $sa.'.brut_salario as costofijo',
                DB::raw('SUM(('.$f.'.valor - ('.$f.'.valor*('.$f.'.total_imp_inc/100)))*('.$f.'.comissao_cn/100)) as comision'),
                DB::raw('SUM('.$f.'.valor - (('.$f.'.valor*'.$f.'.total_imp_inc)/100))-('.$sa.'.brut_salario + SUM(('.$f.'.valor - ('.$f.'.valor*('.$f.'.total_imp_inc/100)))*('.$f.'.comissao_cn/100))) as lucro'),
                DB::raw('MONTH('.$f.'.data_emissao) AS mes'),
                $f.'.total_imp_inc'
            )
            ->join($c, $f.'.co_cliente', '=', $c.'.co_cliente')
            ->join($s, $f.'.co_sistema', '=', $s.'.co_sistema')
            ->join($u, $s.'.co_usuario', '=', $u.'.co_usuario')
            ->join($sa, $sa.'.co_usuario', '=', $u.'.co_usuario')
            ->join($o, $f.'.co_os', '=', $o.'.co_os')
            ->groupBy($s.'.co_usuario')
            ->groupBy('mes')
            ->orderBy($u.'.co_usuario')
            ->orderBy('mes')
            ->whereBetween($f.'.data_emissao', array('2007-01-02' , '2022-05-03'))
            ->whereIn($u.'.co_usuario', $consultores)
            ->get();
        } catch(Exception $e) {
            $resultado = [$e, '('.DB::raw('SUM('.$f.'.valor - (('.$f.'.valor*'.$f.'.total_imp_inc)/100))').' - ('.$sa.'.brut_salario + '.DB::raw('SUM(('.$f.'.valor - ('.$f.'.valor*('.$f.'.total_imp_inc/100)))*('.$f.'.comissao_cn/100))').')) as lucro', 'SUM(('.$f.'.valor - ('.$f.'.valor*('.$f.'.total_imp_inc/100)))*('.$f.'.comissao_cn/100)) as comision'];
        }
        
        return $resultado;
    }
}
