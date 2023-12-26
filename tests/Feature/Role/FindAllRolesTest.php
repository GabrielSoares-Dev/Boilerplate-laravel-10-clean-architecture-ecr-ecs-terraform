<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class FindAllRolesTest extends TestCase
{
    use RefreshDatabase;

    public function test_found(): void
    {
        Role::create(['name' => 'test', 'guard_name' => 'api', 'created_at' => '2023-12-23 20:23:11', 'updated_at' => '2023-12-23 20:23:11']);

        $output = $this->get('/v1/role');

        $expectedOutput = [
            'statusCode' => 200,
            'message' => 'Found roles',
            'content' => [
                [
                    'id' => 1,
                    'name' => 'test',
                    'guard_name' => 'api',
                    'created_at' => '2023-12-23T20:23:11.000000Z',
                    'updated_at' => '2023-12-23T20:23:11.000000Z',
                ],
            ],
        ];

        $output->assertStatus(200);
        $output->assertJson($expectedOutput);
    }
}