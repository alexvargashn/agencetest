<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoHistOcorrenciasO
 *
 * @property $idocorrencia
 * @property $co_os
 * @property $co_usuario
 * @property $data
 * @property $tipo
 * @property $descricao
 * @property $responsavel
 * @property $data_fechamento
 *
 * @property CaoO $caoO
 * @property CaoUsuario $caoUsuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoHistOcorrenciasO extends Model
{
    
    static $rules = [
		'idocorrencia' => 'required',
		'tipo' => 'required',
		'descricao' => 'required',
		'responsavel' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idocorrencia','co_os','co_usuario','data','tipo','descricao','responsavel','data_fechamento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caoO()
    {
        return $this->hasOne('App\Models\CaoO', 'co_os', 'co_os');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caoUsuario()
    {
        return $this->hasOne('App\Models\CaoUsuario', 'co_usuario', 'co_usuario');
    }
    

}
