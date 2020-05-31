<?php namespace Tests\Repositories;

use App\Models\options;
use App\Repositories\optionsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class optionsRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var optionsRepository
     */
    protected $optionsRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->optionsRepo = \App::make(optionsRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_options()
    {
        $options = factory(options::class)->make()->toArray();

        $createdoptions = $this->optionsRepo->create($options);

        $createdoptions = $createdoptions->toArray();
        $this->assertArrayHasKey('id', $createdoptions);
        $this->assertNotNull($createdoptions['id'], 'Created options must have id specified');
        $this->assertNotNull(options::find($createdoptions['id']), 'options with given id must be in DB');
        $this->assertModelData($options, $createdoptions);
    }

    /**
     * @test read
     */
    public function test_read_options()
    {
        $options = factory(options::class)->create();

        $dboptions = $this->optionsRepo->find($options->id);

        $dboptions = $dboptions->toArray();
        $this->assertModelData($options->toArray(), $dboptions);
    }

    /**
     * @test update
     */
    public function test_update_options()
    {
        $options = factory(options::class)->create();
        $fakeoptions = factory(options::class)->make()->toArray();

        $updatedoptions = $this->optionsRepo->update($fakeoptions, $options->id);

        $this->assertModelData($fakeoptions, $updatedoptions->toArray());
        $dboptions = $this->optionsRepo->find($options->id);
        $this->assertModelData($fakeoptions, $dboptions->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_options()
    {
        $options = factory(options::class)->create();

        $resp = $this->optionsRepo->delete($options->id);

        $this->assertTrue($resp);
        $this->assertNull(options::find($options->id), 'options should not exist in DB');
    }
}
