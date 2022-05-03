<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoUsuario
 *
 * @property $co_usuario
 * @property $no_usuario
 * @property $ds_senha
 * @property $co_usuario_autorizacao
 * @property $nu_matricula
 * @property $dt_nascimento
 * @property $dt_admissao_empresa
 * @property $dt_desligamento
 * @property $dt_inclusao
 * @property $dt_expiracao
 * @property $nu_cpf
 * @property $nu_rg
 * @property $no_orgao_emissor
 * @property $uf_orgao_emissor
 * @property $ds_endereco
 * @property $no_email
 * @property $no_email_pessoal
 * @property $nu_telefone
 * @property $dt_alteracao
 * @property $url_foto
 * @property $instant_messenger
 * @property $icq
 * @property $msn
 * @property $yms
 * @property $ds_comp_end
 * @property $ds_bairro
 * @property $nu_cep
 * @property $no_cidade
 * @property $uf_cidade
 * @property $dt_expedicao
 *
 * @property CaoConhecimento[] $caoConhecimentos
 * @property CaoHistOcorrenciasO[] $caoHistOcorrenciasOs
 * @property CaoPermissao[] $caoPermissaos
 * @property CaoPontosConhecimento[] $caoPontosConhecimentos
 * @property CaoSalarioPag $caoSalarioPag
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoUsuario extends Model
{
    
    static $rules = [
		'co_usuario' => 'required',
		'no_usuario' => 'required',
		'ds_senha' => 'required',
		'dt_alteracao' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_usuario','no_usuario','ds_senha','co_usuario_autorizacao','nu_matricula','dt_nascimento','dt_admissao_empresa','dt_desligamento','dt_inclusao','dt_expiracao','nu_cpf','nu_rg','no_orgao_emissor','uf_orgao_emissor','ds_endereco','no_email','no_email_pessoal','nu_telefone','dt_alteracao','url_foto','instant_messenger','icq','msn','yms','ds_comp_end','ds_bairro','nu_cep','no_cidade','uf_cidade','dt_expedicao'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caoConhecimentos()
    {
        return $this->hasMany('App\Models\CaoConhecimento', 'usuario', 'co_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caoHistOcorrenciasOs()
    {
        return $this->hasMany('App\Models\CaoHistOcorrenciasO', 'co_usuario', 'co_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caoPermissaos()
    {
        return $this->hasMany('App\Models\CaoPermissao', 'co_usuario', 'co_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caoPontosConhecimentos()
    {
        return $this->hasMany('App\Models\CaoPontosConhecimento', 'co_coordenador', 'co_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caoSalarioPag()
    {
        return $this->hasOne('App\Models\CaoSalarioPag', 'co_usuario', 'co_usuario');
    }
    

}
