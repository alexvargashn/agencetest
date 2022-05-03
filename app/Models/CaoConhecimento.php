<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoConhecimento
 *
 * @property $idconhecimento
 * @property $assunto
 * @property $conhecimento
 * @property $url
 * @property $tags
 * @property $usuario
 * @property $datahora
 *
 * @property CaoConhecimentosFonte[] $caoConhecimentosFontes
 * @property CaoPontosConhecimento[] $caoPontosConhecimentos
 * @property CaoUsuario $caoUsuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoConhecimento extends Model
{
    
    static $rules = [
		'idconhecimento' => 'required',
		'assunto' => 'required',
		'conhecimento' => 'required',
		'url' => 'required',
		'tags' => 'required',
		'usuario' => 'required',
		'datahora' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idconhecimento','assunto','conhecimento','url','tags','usuario','datahora'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caoConhecimentosFontes()
    {
        return $this->hasMany('App\Models\CaoConhecimentosFonte', 'idconhecimento', 'idconhecimento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caoPontosConhecimentos()
    {
        return $this->hasMany('App\Models\CaoPontosConhecimento', 'idconhecimento', 'idconhecimento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caoUsuario()
    {
        return $this->hasOne('App\Models\CaoUsuario', 'co_usuario', 'usuario');
    }
    

}
