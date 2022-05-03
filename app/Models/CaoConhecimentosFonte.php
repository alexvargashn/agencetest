<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoConhecimentosFonte
 *
 * @property $idfonte
 * @property $idconhecimento
 * @property $datahora
 * @property $arquivo
 * @property $caminho
 *
 * @property CaoConhecimento $caoConhecimento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoConhecimentosFonte extends Model
{
    
    static $rules = [
		'idfonte' => 'required',
		'idconhecimento' => 'required',
		'datahora' => 'required',
		'arquivo' => 'required',
		'caminho' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idfonte','idconhecimento','datahora','arquivo','caminho'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caoConhecimento()
    {
        return $this->hasOne('App\Models\CaoConhecimento', 'idconhecimento', 'idconhecimento');
    }
    

}
