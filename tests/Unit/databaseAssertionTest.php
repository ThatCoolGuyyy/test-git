<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class databaseAssertionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $email = 'johndoe@example.com';

        // Assert that a user with the specified email exists in the database
        $this->assertDatabaseHas('users', [
            'email' => $email,
        ]);
    }
}
