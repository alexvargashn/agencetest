<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoBoleto
 *
 * @property $co_boleto
 * @property $co_cliente
 * @property $co_sistema
 * @property $co_os
 * @property $valor
 * @property $vencimento
 * @property $status
 * @property $boleto
 * @property $linha_dig
 * @property $parcela
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoBoleto extends Model
{
    
    static $rules = [
		'co_boleto' => 'required',
		'co_cliente' => 'required',
		'co_sistema' => 'required',
		'co_os' => 'required',
		'valor' => 'required',
		'vencimento' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_boleto','co_cliente','co_sistema','co_os','valor','vencimento','status','boleto','linha_dig','parcela'];



}
