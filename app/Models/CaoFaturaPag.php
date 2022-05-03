<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoFaturaPag
 *
 * @property $id_fatura_pag
 * @property $co_fatura
 * @property $dt_efetuado
 * @property $valor_pago
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoFaturaPag extends Model
{
    
    static $rules = [
		'id_fatura_pag' => 'required',
		'co_fatura' => 'required',
		'dt_efetuado' => 'required',
		'valor_pago' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_fatura_pag','co_fatura','dt_efetuado','valor_pago'];



}
