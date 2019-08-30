<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Estado.
 * @version August 30, 2019, 7:44 pm -03
 *
 * @property \Illuminate\Database\Eloquent\Collection estados
 * @property string nome
 * @property string sigla
 */
class Estado extends Model
{
    public $table = 'estados';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'nome',
        'sigla',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'sigla' => 'string',
    ];

    /**
     * Validation rules.
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'sigla' => 'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cidades()
    {
        return $this->hasMany(\App\Models\Cidade::class, 'estado_id');
    }
}
