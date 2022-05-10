<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerformanceComercialController extends Controller
{
    private $f = 'cao_fatura';
    private $c = 'cao_cliente';
    private $s = 'cao_sistema';
    private $u = 'cao_usuario';
    private $sa = 'cao_salario';
    private $o = 'cao_os';

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
    public function index()
    {
        $consultores = DB::table('cao_usuario')
            ->join('permissao_sistema', 'cao_usuario.co_usuario', '=', 'permissao_sistema.co_usuario')
            ->where('permissao_sistema.co_sistema', '=', '1')
            ->where('permissao_sistema.in_ativo', '=', 'S')
            ->where('permissao_sistema.co_tipo_usuario', '=', '0')
            ->orWhere('permissao_sistema.co_tipo_usuario', '=', '1')
            ->orWhere('permissao_sistema.co_tipo_usuario', '=', '2')
            ->orderBy('cao_usuario.no_usuario', 'ASC')
            ->get();
        return view('performance-comercial.index', compact('consultores'));
    }

    public function hola()
    {
        $consultores = DB::table('cao_usuario')
            ->join('permissao_sistema', 'cao_usuario.co_usuario', '=', 'permissao_sistema.co_usuario')
            ->where('permissao_sistema.co_sistema', '=', '1')
            ->where('permissao_sistema.in_ativo', '=', 'S')
            ->where('permissao_sistema.co_tipo_usuario', '=', '0')
            ->orWhere('permissao_sistema.co_tipo_usuario', '=', '1')
            ->orWhere('permissao_sistema.co_tipo_usuario', '=', '2')
            ->orderBy('cao_usuario.no_usuario', 'ASC')
            ->get();
        return view('performance-comercial.index', compact('consultores'));
    }

    public function Reporte(Request $request)
    {
        // $viewRender = view('performancecomercial.index')->render();
        try {
            $consultores = $this->getCalculoReporte($request->consultores);
            $periodos = $this->getPeriodos($request->consultores);
            return response()->json(array(
                "success" => true,
                "consultores" => $consultores,
                "periodos" => $periodos
            ));
        } catch (Exception $e) {
            return response()->json(array(
                "success" => false,
                "error" => $e->getCode() . " / " . $e->getMessage()
            ));
        }
    }

    private function getCalculoReporte($consultores)
    {
        $resultado = [false, "Error"];
        DB::statement("SET lc_time_names = 'es_ES'");
        $resultado = DB::table($this->f)
            ->select(
                $this->u . '.co_usuario as codigousuario',
                $this->u . '.no_usuario as nombreusuario',
                DB::raw('SUM(' . $this->f . '.valor - ((' . $this->f . '.valor*' . $this->f . '.total_imp_inc)/100)) as ganancia'),
                $this->sa . '.brut_salario as costofijo',
                DB::raw('SUM((' . $this->f . '.valor - (' . $this->f . '.valor*(' . $this->f . '.total_imp_inc/100)))*(' . $this->f . '.comissao_cn/100)) as comision'),
                DB::raw('SUM(' . $this->f . '.valor - ((' . $this->f . '.valor*' . $this->f . '.total_imp_inc)/100))-(' . $this->sa . '.brut_salario + SUM((' . $this->f . '.valor - (' . $this->f . '.valor*(' . $this->f . '.total_imp_inc/100)))*(' . $this->f . '.comissao_cn/100))) as lucro'),
                DB::raw('MONTH(' . $this->f . '.data_emissao) AS mes'),
                DB::raw('YEAR(' . $this->f . '.data_emissao) AS anio'),
                DB::raw('MONTHNAME(' . $this->f . '.data_emissao) AS nombremes'),
                DB::raw('CONCAT(' . DB::raw('MONTHNAME(' . $this->f . '.data_emissao)') . ', " de ",' . DB::raw('YEAR(' . $this->f . '.data_emissao)') . ') AS periodo'),
                $this->f . '.total_imp_inc'
            )
            ->join($this->c, $this->f . '.co_cliente', '=', $this->c . '.co_cliente')
            ->join($this->s, $this->f . '.co_sistema', '=', $this->s . '.co_sistema')
            ->join($this->u, $this->s . '.co_usuario', '=', $this->u . '.co_usuario')
            ->join($this->sa, $this->sa . '.co_usuario', '=', $this->u . '.co_usuario')
            ->join($this->o, $this->f . '.co_os', '=', $this->o . '.co_os')
            ->groupBy($this->s . '.co_usuario')
            ->groupBy('mes')
            ->orderBy($this->u . '.co_usuario')
            ->orderBy('mes')
            ->whereBetween($this->f . '.data_emissao', array('2007-01-02', '2022-05-03'))
            ->whereIn($this->u . '.co_usuario', $consultores)
            ->get();

        return $resultado;
    }

    private function getPeriodos($consultores)
    {
        $resultado = [false, "Error"];;
        DB::statement("SET lc_time_names = 'es_ES'");
        $resultado = DB::table($this->f)
            ->select(
                DB::raw('DISTINCT MONTH(' . $this->f . '.data_emissao) AS mes'),
                DB::raw('MONTHNAME('.$this->f.'.data_emissao) AS nombremes'),
                DB::raw('YEAR('.$this->f.'.data_emissao) AS anio'),
                DB::raw('CONCAT(SUBSTRING(MONTHNAME(' . $this->f . '.data_emissao), 1, 3), "-", YEAR(' . $this->f . '.data_emissao)) AS tag')
            )
            ->join($this->c, $this->f . '.co_cliente', '=', $this->c . '.co_cliente')
            ->join($this->s, $this->f . '.co_sistema', '=', $this->s . '.co_sistema')
            ->join($this->u, $this->s . '.co_usuario', '=', $this->u . '.co_usuario')
            ->join($this->sa, $this->sa . '.co_usuario', '=', $this->u . '.co_usuario')
            ->join($this->o, $this->f . '.co_os', '=', $this->o . '.co_os')
            ->orderBy('mes')
            ->orderBy('anio')
            ->whereBetween($this->f . '.data_emissao', array('2007-01-02', '2022-05-03'))
            ->whereIn($this->u . '.co_usuario', $consultores)
            ->get();
        return $resultado;
    }
}
