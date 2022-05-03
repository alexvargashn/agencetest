<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoBonu
 *
 * @property $bon_categoria
 * @property $bon_inicio
 * @property $bon_fim
 * @property $bon_valor_sem
 * @property $bon_valor_fimsem
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoBonu extends Model
{
    
    static $rules = [
		'bon_categoria' => 'required',
		'bon_inicio' => 'required',
		'bon_fim' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['bon_categoria','bon_inicio','bon_fim','bon_valor_sem','bon_valor_fimsem'];



}
