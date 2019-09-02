<?php

namespace App\Http\Controllers\API;

use Response;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Repositories\UsuarioRepository;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\API\CreateUsuarioAPIRequest;
use App\Http\Requests\API\UpdateUsuarioAPIRequest;

/**
 * Class UsuarioController.
 */
class UsuarioAPIController extends AppBaseController
{
    /** @var UsuarioRepository */
    private $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepo)
    {
        $this->usuarioRepository = $usuarioRepo;
    }

    /**
     * Display a listing of the Usuario.
     * GET|HEAD /usuarios.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $usuarios = $this->usuarioRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($usuarios->toArray(), 'Usuarios retrieved successfully');
    }

    /**
     * Store a newly created Usuario in storage.
     * POST /usuarios.
     *
     * @param CreateUsuarioAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateUsuarioAPIRequest $request)
    {
        $input = $request->all();

        $usuario = $this->usuarioRepository->create($input);

        return $this->sendResponse($usuario->toArray(), 'Usuario saved successfully');
    }

    /**
     * Display the specified Usuario.
     * GET|HEAD /usuarios/{id}.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Usuario $usuario */
        $usuario = $this->usuarioRepository->find($id);

        if (empty($usuario)) {
            return $this->sendError('Usuario not found');
        }

        return $this->sendResponse($usuario->toArray(), 'Usuario retrieved successfully');
    }

    /**
     * Update the specified Usuario in storage.
     * PUT/PATCH /usuarios/{id}.
     *
     * @param int $id
     * @param UpdateUsuarioAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsuarioAPIRequest $request)
    {
        $input = $request->all();

        /** @var Usuario $usuario */
        $usuario = $this->usuarioRepository->find($id);

        if (empty($usuario)) {
            return $this->sendError('Usuario not found');
        }

        $usuario = $this->usuarioRepository->update($input, $id);

        return $this->sendResponse($usuario->toArray(), 'Usuario updated successfully');
    }

    /**
     * Remove the specified Usuario from storage.
     * DELETE /usuarios/{id}.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Usuario $usuario */
        $usuario = $this->usuarioRepository->find($id);

        if (empty($usuario)) {
            return $this->sendError('Usuario not found');
        }

        $usuario->delete();

        return $this->sendResponse($id, 'Usuario deleted successfully');
    }

    /**
     * Autenticação via API.
     *
     * @return \Illuminate\Http\Response
     * @return Response
     */
    public function login(Request $request)
    {
        $usuario = $this->usuarioRepository->findByField('email', $request->email)->first();

        if ($usuario) {
            $token = $this->usuarioRepository->login($usuario, $request);
            if ($token) {
                return $this->sendResponse(
                    [
                        'usuario' => $usuario->toArray(),
                        'token' => $token,
                    ],
                    'Usuário autenticou via API com Sucesso'
                );
            } else {
                return $this->sendError('A senha digitada está incorreta');
            }
        } else {
            return $this->sendError('Usuário inexistente');
        }
    }

    /**
     * Metodo para retornar o usuário logado a partir do token.
     *
     * @return JSON
     */
    public function showAuthenticated()
    {
        /** @var Usuario $usuario */
        $usuario = \Auth::user();

        if (empty($usuario)) {
            return $this->sendError('Usuario not found');
        }

        return $this->sendResponse($usuario->toArray(), 'Usuario retrieved successfully');
    }
}
