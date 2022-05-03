<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoSistema
 *
 * @property $co_sistema
 * @property $co_cliente
 * @property $co_usuario
 * @property $co_arquitetura
 * @property $no_sistema
 * @property $ds_sistema_resumo
 * @property $ds_caracteristica
 * @property $ds_requisito
 * @property $no_diretoria_solic
 * @property $ddd_telefone_solic
 * @property $nu_telefone_solic
 * @property $no_usuario_solic
 * @property $dt_solicitacao
 * @property $dt_entrega
 * @property $co_email
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoSistema extends Model
{
    
    static $rules = [
		'co_sistema' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_sistema','co_cliente','co_usuario','co_arquitetura','no_sistema','ds_sistema_resumo','ds_caracteristica','ds_requisito','no_diretoria_solic','ddd_telefone_solic','nu_telefone_solic','no_usuario_solic','dt_solicitacao','dt_entrega','co_email'];



}
