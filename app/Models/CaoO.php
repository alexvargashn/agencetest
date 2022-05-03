<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoO
 *
 * @property $co_os
 * @property $nu_os
 * @property $co_sistema
 * @property $co_usuario
 * @property $co_arquitetura
 * @property $ds_os
 * @property $ds_caracteristica
 * @property $ds_requisito
 * @property $dt_inicio
 * @property $dt_fim
 * @property $co_status
 * @property $diretoria_sol
 * @property $dt_sol
 * @property $nu_tel_sol
 * @property $ddd_tel_sol
 * @property $nu_tel_sol2
 * @property $ddd_tel_sol2
 * @property $usuario_sol
 * @property $dt_imp
 * @property $dt_garantia
 * @property $co_email
 * @property $co_os_prospect_rel
 *
 * @property CaoHistOcorrenciasO[] $caoHistOcorrenciasOs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoO extends Model
{
    
    static $rules = [
		'co_os' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_os','nu_os','co_sistema','co_usuario','co_arquitetura','ds_os','ds_caracteristica','ds_requisito','dt_inicio','dt_fim','co_status','diretoria_sol','dt_sol','nu_tel_sol','ddd_tel_sol','nu_tel_sol2','ddd_tel_sol2','usuario_sol','dt_imp','dt_garantia','co_email','co_os_prospect_rel'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caoHistOcorrenciasOs()
    {
        return $this->hasMany('App\Models\CaoHistOcorrenciasO', 'co_os', 'co_os');
    }
    

}
