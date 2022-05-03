<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoSalarioPag
 *
 * @property $id_pagamento
 * @property $co_usuario
 * @property $dt_efetuado
 * @property $status
 * @property $observacao
 *
 * @property CaoUsuario $caoUsuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoSalarioPag extends Model
{
    
    static $rules = [
		'id_pagamento' => 'required',
		'co_usuario' => 'required',
		'dt_efetuado' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_pagamento','co_usuario','dt_efetuado','status','observacao'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caoUsuario()
    {
        return $this->hasOne('App\Models\CaoUsuario', 'co_usuario', 'co_usuario');
    }
    

}
