<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoBancoHora
 *
 * @property $co_banc_horas
 * @property $co_usuario
 * @property $periodo
 * @property $min_mes
 * @property $min_ferias
 * @property $min_pago
 * @property $min_total
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoBancoHora extends Model
{
    
    static $rules = [
		'co_banc_horas' => 'required',
		'co_usuario' => 'required',
		'periodo' => 'required',
		'min_mes' => 'required',
		'min_ferias' => 'required',
		'min_pago' => 'required',
		'min_total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_banc_horas','co_usuario','periodo','min_mes','min_ferias','min_pago','min_total'];



}
