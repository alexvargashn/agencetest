<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoBonusStatus
 *
 * @property $id
 * @property $co_usuario
 * @property $data_solic
 * @property $mes
 * @property $valor
 * @property $is_solic
 * @property $is_pg
 * @property $is_horas
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoBonusStatus extends Model
{
    
    static $rules = [
		'co_usuario' => 'required',
		'data_solic' => 'required',
		'mes' => 'required',
		'valor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_usuario','data_solic','mes','valor','is_solic','is_pg','is_horas'];



}
