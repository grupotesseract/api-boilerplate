<?php namespace Tests\Repositories;

use App\Models\Usuario;
use App\Repositories\UsuarioRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class UsuarioRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var UsuarioRepository
     */
    protected $usuarioRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->usuarioRepo = \App::make(UsuarioRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_usuario()
    {
        $usuario = factory(Usuario::class)->make()->toArray();

        $createdUsuario = $this->usuarioRepo->create($usuario);

        $createdUsuario = $createdUsuario->toArray();
        $this->assertArrayHasKey('id', $createdUsuario);
        $this->assertNotNull($createdUsuario['id'], 'Created Usuario must have id specified');
        $this->assertNotNull(Usuario::find($createdUsuario['id']), 'Usuario with given id must be in DB');
        $this->assertModelData($usuario, $createdUsuario);
    }

    /**
     * @test read
     */
    public function test_read_usuario()
    {
        $usuario = factory(Usuario::class)->create();

        $dbUsuario = $this->usuarioRepo->find($usuario->id);

        $dbUsuario = $dbUsuario->toArray();
        $this->assertModelData($usuario->toArray(), $dbUsuario);
    }

    /**
     * @test update
     */
    public function test_update_usuario()
    {
        $usuario = factory(Usuario::class)->create();
        $fakeUsuario = factory(Usuario::class)->make()->toArray();

        $updatedUsuario = $this->usuarioRepo->update($fakeUsuario, $usuario->id);

        $this->assertModelData($fakeUsuario, $updatedUsuario->toArray());
        $dbUsuario = $this->usuarioRepo->find($usuario->id);
        $this->assertModelData($fakeUsuario, $dbUsuario->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_usuario()
    {
        $usuario = factory(Usuario::class)->create();

        $resp = $this->usuarioRepo->delete($usuario->id);

        $this->assertTrue($resp);
        $this->assertNull(Usuario::find($usuario->id), 'Usuario should not exist in DB');
    }
}
