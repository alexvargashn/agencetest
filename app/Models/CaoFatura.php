<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoFatura
 *
 * @property $co_fatura
 * @property $co_cliente
 * @property $co_sistema
 * @property $co_os
 * @property $num_nf
 * @property $total
 * @property $valor
 * @property $data_emissao
 * @property $corpo_nf
 * @property $comissao_cn
 * @property $total_imp_inc
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoFatura extends Model
{
    
    static $rules = [
		'co_fatura' => 'required',
		'co_cliente' => 'required',
		'co_sistema' => 'required',
		'co_os' => 'required',
		'num_nf' => 'required',
		'total' => 'required',
		'valor' => 'required',
		'data_emissao' => 'required',
		'corpo_nf' => 'required',
		'comissao_cn' => 'required',
		'total_imp_inc' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_fatura','co_cliente','co_sistema','co_os','num_nf','total','valor','data_emissao','corpo_nf','comissao_cn','total_imp_inc'];



}
