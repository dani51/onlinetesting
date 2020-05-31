<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\options;

class optionsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_options()
    {
        $options = factory(options::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/options', $options
        );

        $this->assertApiResponse($options);
    }

    /**
     * @test
     */
    public function test_read_options()
    {
        $options = factory(options::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/options/'.$options->id
        );

        $this->assertApiResponse($options->toArray());
    }

    /**
     * @test
     */
    public function test_update_options()
    {
        $options = factory(options::class)->create();
        $editedoptions = factory(options::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/options/'.$options->id,
            $editedoptions
        );

        $this->assertApiResponse($editedoptions);
    }

    /**
     * @test
     */
    public function test_delete_options()
    {
        $options = factory(options::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/options/'.$options->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/options/'.$options->id
        );

        $this->response->assertStatus(404);
    }
}
