<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoDrAtivComp
 *
 * @property $id_ativ_comp
 * @property $co_usuario
 * @property $data
 * @property $assunto
 * @property $tempo_gasto
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoDrAtivComp extends Model
{
    
    static $rules = [
		'id_ativ_comp' => 'required',
		'co_usuario' => 'required',
		'data' => 'required',
		'assunto' => 'required',
		'tempo_gasto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_ativ_comp','co_usuario','data','assunto','tempo_gasto'];



}
