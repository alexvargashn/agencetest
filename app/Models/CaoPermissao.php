<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoPermissao
 *
 * @property $co_usuario
 * @property $permissao_intervalo
 * @property $permissao_hora_extra
 *
 * @property CaoUsuario $caoUsuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoPermissao extends Model
{
    
    static $rules = [
		'co_usuario' => 'required',
		'permissao_intervalo' => 'required',
		'permissao_hora_extra' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_usuario','permissao_intervalo','permissao_hora_extra'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caoUsuario()
    {
        return $this->hasOne('App\Models\CaoUsuario', 'co_usuario', 'co_usuario');
    }
    

}
