<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoCliente
 *
 * @property $co_cliente
 * @property $no_razao
 * @property $no_fantasia
 * @property $no_contato
 * @property $nu_telefone
 * @property $nu_ramal
 * @property $nu_cnpj
 * @property $ds_endereco
 * @property $nu_numero
 * @property $ds_complemento
 * @property $no_bairro
 * @property $nu_cep
 * @property $no_pais
 * @property $co_ramo
 * @property $co_cidade
 * @property $co_status
 * @property $ds_site
 * @property $ds_email
 * @property $ds_cargo_contato
 * @property $tp_cliente
 * @property $ds_referencia
 * @property $co_complemento_status
 * @property $nu_fax
 * @property $ddd2
 * @property $telefone2
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoCliente extends Model
{
    
    static $rules = [
		'co_cliente' => 'required',
		'no_bairro' => 'required',
		'co_cidade' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_cliente','no_razao','no_fantasia','no_contato','nu_telefone','nu_ramal','nu_cnpj','ds_endereco','nu_numero','ds_complemento','no_bairro','nu_cep','no_pais','co_ramo','co_cidade','co_status','ds_site','ds_email','ds_cargo_contato','tp_cliente','ds_referencia','co_complemento_status','nu_fax','ddd2','telefone2'];



}
