<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Cidade.
 * @version August 30, 2019, 7:50 pm -03
 *
 * @property \App\Models\Estado estado
 * @property string nome
 * @property string nome_sanitized
 * @property string ibge_code
 * @property int estado_id
 */
class Cidade extends Model
{
    public $table = 'cidades';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'nome',
        'nome_sanitized',
        'ibge_code',
        'estado_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'nome_sanitized' => 'string',
        'ibge_code' => 'string',
        'estado_id' => 'integer',
    ];

    /**
     * Validation rules.
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'estado_id' => 'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function estado()
    {
        return $this->belongsTo(\App\Models\Estado::class, 'estado_id');
    }
}
