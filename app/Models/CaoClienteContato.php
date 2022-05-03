<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoClienteContato
 *
 * @property $co_cliente
 * @property $dt_contato
 * @property $fg_agendado
 * @property $hr_ini
 * @property $hr_end
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoClienteContato extends Model
{
    
    static $rules = [
		'co_cliente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_cliente','dt_contato','fg_agendado','hr_ini','hr_end'];



}
