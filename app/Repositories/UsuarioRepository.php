<?php

namespace App\Repositories;

use App\Models\Usuario;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Hash;

/**
 * Class UsuarioRepository.
 * @version August 30, 2019, 9:38 pm -03
 */
class UsuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'email',
        'email_verified_at',
        'password',
        'telefone',
        'endereco',
        'cidade_id',
        'remember_token',
    ];

    /**
     * Return searchable fields.
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model.
     **/
    public function model()
    {
        return Usuario::class;
    }

    /**
     * Autenticação via API.
     *
     * @return \Illuminate\Http\Response
     * @return Response
     */
    public function login($usuario, $request)
    {
        if (Hash::check($request->password, $usuario->password)) {
            $token = $usuario->createToken(env('PASSPORT_CLIENT', 'Laravel Password Grant Client'))->accessToken;
            $response = ['token' => $token];

            return $response;
        } else {
            return false;
        }
    }
}
