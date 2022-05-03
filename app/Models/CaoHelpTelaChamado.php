<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoHelpTelaChamado
 *
 * @property $co_tela
 * @property $co_cliente
 * @property $co_sistema
 * @property $ds_tela
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoHelpTelaChamado extends Model
{
    
    static $rules = [
		'co_tela' => 'required',
		'co_cliente' => 'required',
		'co_sistema' => 'required',
		'ds_tela' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_tela','co_cliente','co_sistema','ds_tela'];



}
